<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Payment;
use App\Models\Reservation;
use Carbon\Carbon;

class StripePaymentController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $checkoutSession = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $request->car_name,
                        ],
                        'unit_amount' => $request->amount * 100, // Convert to cents
                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
            'success_url' => route('stripe.success', ['session_id' => '{CHECKOUT_SESSION_ID}']),
            'cancel_url' => route('stripe.cancel'),
            'metadata' => [
                'reservation_id' => $request->reservation_id, // Store reservation ID
            ]
        ]);

        return response()->json(['id' => $checkoutSession->id]);
    }

    public function success(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Retrieve session data from Stripe
        $session = Session::retrieve($request->session_id);

        if (!$session) {
            return redirect()->route('checkout')->with('error', 'Payment failed.');
        }

        // Retrieve metadata
        $reservationId = $session->metadata->reservation_id ?? null;

        // Store payment details in database
        $payment = Payment::create([
            'reservation_id' => $reservationId,
            'payment_method' => 'Stripe',
            'payment_date' => Carbon::now(),
            'status' => 'Paid',
        ]);

        return redirect()->route('payment.success')->with('success', 'Payment successful!');
    }

    public function cancel()
    {
        return redirect()->route('checkout')->with('error', 'Payment was canceled.');
    }
}
