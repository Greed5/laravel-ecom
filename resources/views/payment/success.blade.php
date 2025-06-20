@extends('layouts.default')

@section('title', 'Payment Successful')

@section('content')
    <main class="container" style="max-width: 600px; margin-top: 100px;">
        <div class="text-center">
            <div class="alert alert-success d-flex align-items-center justify-content-center shadow-sm mb-4" role="alert">
                <i class="fas fa-check-circle fa-2x me-3"></i>
                <div>
                    <h4 class="alert-heading">Payment Successful!</h4>
                    <p class="mb-0">Your payment has been processed successfully.</p>
                    <p>Thank you for your purchase!</p>
                </div>
            </div>

            <h5 class="mb-3">What would you like to do next?</h5>
            <a href="{{ route('order.history') }}" class="btn btn-primary btn-lg me-2">View Order History</a>
            <a href="{{ route('home') }}" class="btn btn-outline-secondary btn-lg">Return to Home</a>

            <div class="mt-5">
                <p class="text-muted">If you have any questions, feel free to <a href="" class="text-primary">contact us</a>.</p>
            </div>
        </div>
    </main>
@endsection
