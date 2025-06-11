@extends('master.layout')
@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="container-xxl py-5">
    <div class="container" style="margin-top: 80px;">
        <form action="{{ route('success') }}" method="GET">
            @csrf
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="bg-light p-5">
                        <h3 class="mb-4">Billing Details</h3>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                                    <label for="first_name">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                                    <label for="last_name">Last Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                                    <label for="phone">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                                    <label for="address">Address</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                                    <label for="city">City</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="zip" name="zip" placeholder="ZIP Code" required>
                                    <label for="zip">ZIP Code</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" id="country" name="country" required>
                                        <option value="">Select Country</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Thailand">Thailand</option>
                                    </select>
                                    <label for="country">Country</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Special Requests" id="special_requests" name="special_requests" style="height: 100px"></textarea>
                                    <label for="special_requests">Special Requests</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="bg-light p-5">
                        <h3 class="mb-4">Your Order</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Package</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(session('package'))
                                    <tr>
                                        <td>{{ session('package')['name'] }}</td>
                                        <td>RM{{ number_format(session('package')['price'], 2) }}</td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>RM{{ number_format(session('package') ? session('package')['price'] : 0, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tax</th>
                                        <td>RM0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td>RM{{ number_format(session('package') ? session('package')['price'] : 0, 2) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h4 class="my-4">Payment Method</h4>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="payment_method" id="credit_card" value="credit_card" checked>
                            <label class="form-check-label" for="credit_card">
                                Credit Card
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="payment_method" id="bank_transfer" value="bank_transfer">
                            <label class="form-check-label" for="bank_transfer">
                                Bank Transfer
                            </label>
                        </div>

                        <div id="credit_card_details" class="mt-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="card_number" name="card_number" placeholder="Card Number" required>
                                <label for="card_number">Card Number</label>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="month" class="form-control" id="expiry_date" name="expiry_date" min="{{ now()->format('Y-m') }}" required>
                                        <label for="expiry_date">Expiry Date</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cvv" name="cvv" placeholder="CVV" required>
                                        <label for="cvv">CVV</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="bank_transfer_details" class="mt-4" style="display: none;">
                            <div class="alert alert-info">
                                <h5><i class="fas fa-university"></i> Bank Transfer Instructions</h5>
                                <p>Please transfer the payment to the following account:</p>
                                <ul class="mb-0">
                                    <li><strong>Bank Name:</strong> Maybank</li>
                                    <li><strong>Account Name:</strong> Travel Agency Sdn Bhd</li>
                                    <li><strong>Account Number:</strong> 1234-5678-9012</li>
                                    <li><strong>Amount:</strong> RM{{ session('package') ? number_format(session('package')['price'], 2) : '0.00' }}</li>
                                </ul>
                                <p class="mt-2"><small>Your booking will be confirmed after payment is verified.</small></p>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="bank_receipt" name="bank_receipt" placeholder="Transaction Reference" required>
                                <label for="bank_receipt">Transaction Reference/Receipt Number</label>
                            </div>
                        </div>

                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                            <label class="form-check-label" for="terms">
                                I agree to the <a href="#">terms and conditions</a>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-3 mt-4">Complete Booking</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const creditCardRadio = document.getElementById('credit_card');
    const bankTransferRadio = document.getElementById('bank_transfer');
    const creditCardDetails = document.getElementById('credit_card_details');
    const bankTransferDetails = document.getElementById('bank_transfer_details');

    function togglePaymentFields() {
        if (creditCardRadio.checked) {
            creditCardDetails.style.display = 'block';
            bankTransferDetails.style.display = 'none';
            document.getElementById('bank_receipt').required = false;
            document.getElementById('card_number').required = true;
            document.getElementById('expiry_date').required = true;
            document.getElementById('cvv').required = true;
        } else {
            creditCardDetails.style.display = 'none';
            bankTransferDetails.style.display = 'block';
            document.getElementById('card_number').required = false;
            document.getElementById('expiry_date').required = false;
            document.getElementById('cvv').required = false;
            document.getElementById('bank_receipt').required = true;
        }
    }

    togglePaymentFields();

    creditCardRadio.addEventListener('change', togglePaymentFields);
    bankTransferRadio.addEventListener('change', togglePaymentFields);
});
</script>

@endsection
