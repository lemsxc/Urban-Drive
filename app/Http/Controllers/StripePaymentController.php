<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as LaravelSession;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Reservation;
use App\Models\Payment;
use App\Models\Car;
use Flasher\Laravel\Facade\Flasher;

class StripePaymentController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        // Ensure user is authenticated
        if (!auth()->check()) {
            Flasher::addError('You need to be logged in to proceed with the payment.');
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Get current user ID
        $userId = auth()->id();

        // Save car details in session before proceeding to payment
        LaravelSession::put('car_reservation', [
            'user_id' => $userId,
            'car_id' => $request->car_id,  // Store car ID
            'car_name' => $request->car_name,
            'car_image' => $request->car_image,
            'amount' => $request->amount,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'return_date' => $request->return_date,
        ]);

        // Set Stripe API key
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Create checkout session
        $checkoutSession = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $request->car_name,
                            'images' => [$request->car_image],
                        ],
                        'unit_amount' => $request->amount * 100, // Convert to cents
                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
            'success_url' => route('stripe.success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('stripe.cancel'),
        ]);

        return response()->json(['id' => $checkoutSession->id]);
    }

    public function success(Request $request)
    {
        // Retrieve stored car data from session
        $carData = LaravelSession::get('car_reservation');

        if (!$carData) {
            Flasher::addError('No reservation data found.');
            return redirect()->route('cars'); // Redirect to car listing
        }

        // Retrieve the checkout session ID from the query parameters
        $sessionId = $request->get('session_id');

        // Retrieve the session details using the session ID
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $checkoutSession = Session::retrieve($sessionId);

        // Get Payment Intent ID from the Checkout Session
        $paymentIntentId = $checkoutSession->payment_intent;

        // Retrieve the Payment Intent to get the payment method
        $paymentIntent = \Stripe\PaymentIntent::retrieve($paymentIntentId);
        $paymentMethodId = $paymentIntent->payment_method;

        // Retrieve the payment method details
        $paymentMethod = \Stripe\PaymentMethod::retrieve($paymentMethodId);
        $paymentMethodType = $paymentMethod->type; // Example: 'card', 'paypal', etc.

        // Save reservation in database
        $reservation = Reservation::create([
            'users_id' => $carData['user_id'],
            'car_id' => $carData['car_id'],
            'reserve_date' => now(),
            'start_date' => $carData['start_date'],
            'end_date' => $carData['end_date'],
            'return_date' => $carData['return_date'],
            'status' => 'confirmed',
        ]);

        // Save payment record with the payment method details
        Payment::create([
            'reservation_id' => $reservation->id,
            'amount' => $carData['amount'],
            'status' => 'paid',
            'payment_method' => $paymentMethodType, // Store 'card', 'paypal', etc.
            'payment_date' => now(),
        ]);

        // Update the car's status to 'Unavailable' after payment
        Car::where('id', $carData['car_id'])->update([
            'status' => 'Unavailable',
        ]);

        // Clear session data
        LaravelSession::forget('car_reservation');

        // Show success message with Flasher
        Flasher::addSuccess('Payment successful! Your car has been reserved.');

        // Redirect to car listing page
        return redirect()->route('cars');
    }


    public function cancel()
    {
        // Remove stored reservation data if payment was canceled
        LaravelSession::forget('car_reservation');

        // Show cancellation message with Flasher
        Flasher::addWarning('Payment was canceled. Try again if needed.');
        return redirect()->route('cars'); // Redirect to car listing page
    }
}
