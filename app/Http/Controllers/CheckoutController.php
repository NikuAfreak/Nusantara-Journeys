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


        $package = session('package');

        if (!$package) {
            return redirect()->back()->with('error', 'Package not found in session');
        }

        // Create booking
        $booking = Booking::create([
            'user_id' => auth()->id(),
            'package_name' => $package['name'], // Store package name since we don't have ID
            'package_price' => $package['price'],
            'reference_number' => 'BOOK-' . now()->timestamp,
            'amount' => $package['price'],
            'status' => 'confirmed',
            'customer_details' => json_encode($validated) // Store all customer details
        ]);

        // Clear session
        session()->forget('package');

        // Redirect to success page with booking ID
        return redirect()->route('booking.success')->with([
            'success' => 'Booking confirmed! Your reference number is: ' . $booking->reference_number,
            'booking' => $booking->toArray() // Convert to array for session storage
        ]);
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
