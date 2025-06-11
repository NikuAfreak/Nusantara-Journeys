@extends('master.layout')
@section('content')

<div class="container py-5">
    <div class="alert alert-success">
        {{ session('success') }}
    </div>

    @if(isset($booking))
    <div class="card">
        <div class="card-body">
            <h5>Booking Details</h5>
            <p>Reference: {{ $booking->reference_number }}</p>
            <p>Package: {{ $booking->package_name }}</p>
            <p>Amount: RM{{ number_format($booking->amount, 2) }}</p>
            <p>Status: {{ ucfirst($booking->status) }}</p>

            <hr>
            <h5>Customer Details</h5>
            @php
                $customerDetails = json_decode($booking->customer_details, true);
            @endphp
            <p>Name: {{ $customerDetails['first_name'] }} {{ $customerDetails['last_name'] }}</p>
            <p>Email: {{ $customerDetails['email'] }}</p>
            <p>Phone: {{ $customerDetails['phone'] }}</p>
        </div>
    </div>
    @endif
</div>
@endsection
