<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Package;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function process(Request $request){
        // Validate the request
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zip' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'payment_method' => 'required|string',
            'card_number' => 'required_if:payment_method,credit_card',
            'expiry_date' => 'required_if:payment_method,credit_card',
            'cvv' => 'required_if:payment_method,credit_card',
            'bank_receipt' => 'required_if:payment_method,bank_transfer',
        ]);


        // $package = session('package');
        $package = json_decode($request->package, true) ?? session('package');

        if (!$package) {
            return response()->json(['error' => 'Package not found'], 400);
        }


        // Create booking
        $bookingDetails = [
            'package_name' => session('package')->name,
            'destination' => session('package')->destination,
            'duration' => session('package')->duration_days,
            'price' => session('package')->price,
            'reference' => Str::upper(Str::random(8)), // Generate random booking reference
            'customer_name' => $request->first_name . ' ' . $request->last_name,
            'customer_email' => $request->email
        ];

        // Clear session
        $request->session()->forget('package');

        // Store booking in session
        session([
            'success' => 'Booking confirmed! Your reference number is: ' . $bookingData['reference_number'],
            'booking' => $bookingData
        ]);

        // Return redirect response
        return redirect()->route('success')
                        ->with('success', 'Your booking has been confirmed!')
                        ->with('booking_details', $bookingDetails);
    }

    public function success()
    {
        if (!session()->has('success')) {
            return redirect()->route('home');
        }

        return view('booking.success', [
            'booking' => (object) session('booking') // Convert back to object for view
        ]);
    }
}
