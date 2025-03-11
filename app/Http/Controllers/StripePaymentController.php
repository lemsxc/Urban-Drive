<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

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
            'success_url' => route('stripe.success'),
            'cancel_url' => route('stripe.cancel'),
        ]);

        return response()->json(['id' => $checkoutSession->id]);
    }

    public function success()
    {
        return view('payment.success');
    }

    public function cancel()
    {
        return view('payment.cancel');
    }
}
