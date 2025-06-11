@extends('master.layout')

@section('content')
<div class="container-xxl py-5">
    <div class="container" style="margin-top: 80px;">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow border-0">
                    <div class="card-body p-5 text-center">
                        <div class="mb-4">
                            <i class="fas fa-check-circle text-success fa-5x mb-3"></i>
                            <h2 class="fw-bold">Booking Confirmed!</h2>
                            <p class="lead">Thank you for choosing Nusantara Journeys.</p>
                            <p class="lead">Your receipt will be given through email.</p>

                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                        </div>

                        @if(session('booking_details'))
                        <div class="bg-light p-4 rounded mb-4">
                            <h4 class="mb-3">Your Booking Details</h4>
                            <div class="row text-start">
                                <div class="col-md-6">
                                    <p><strong>Package:</strong> {{ session('booking_details')['package_name'] }}</p>
                                    <p><strong>Destination:</strong> {{ session('booking_details')['destination'] }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Duration:</strong> {{ session('booking_details')['duration'] }} days</p>
                                    <p><strong>Total Price:</strong> RM{{ number_format(session('booking_details')['price'], 2) }}</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p><strong>Booking Reference:</strong> #{{ session('booking_details')['reference'] }}</p>
                            </div>
                        </div>
                        @endif

                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a href="{{ route('packages') }}" class="btn btn-primary px-4">
                                <i class="fas fa-arrow-left me-2"></i> Browse More Packages
                            </a>
                            <a href="{{ route('index') }}" class="btn btn-outline-secondary px-4">
                                <i class="fas fa-home me-2"></i> Back to Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
