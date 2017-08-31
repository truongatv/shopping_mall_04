@extends('layouts.master')
@section('text-center')
    <section class="site-section site-section-light site-section-top themed-background-dark">
        <div class="container text-center">
            <h1 class="animation-slideDown"><i class="fa fa-shopping-cart"></i> <strong>Shopping Cart</strong></h1>
        </div>
    </section>
    @endsection
@section('content')
    <section class="site-content site-section">
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
            {{$err}} <br>
            @endforeach
        </div>
    @endif
        <div class="container">
            <div class="site-block">
                <form id="payment-form"" action="{{ route('checkout_payment_confirm',['user_id'=>Auth::user()->id,'order_id' => Request::segment(2)]) }}" method="post">
                {{ csrf_field() }}
                    <!-- Third Step -->
                    <div id="checkout-third" class="step">
                        <!-- Step Info -->
                        <ul class="nav nav-pills nav-justified checkout-steps push-bit">
                            <li><a href="javascript:void(0)" data-gotostep="checkout-second"><i class="fa fa-check"></i> <strong>2. ADDRESSES</strong></a></li>
                            <li class="active"><a href="javascript:void(0)" data-gotostep="checkout-third"><strong>3. PAYMENT</strong></a></li>
                            <li><a href="javascript:void(0)" data-gotostep="checkout-fourth"><strong>4. CONFIRM ORDER</strong></a></li>
                        </ul>
                        <!-- END Step Info -->
                        <div class="row">
                          <span class="payment-errors"></span>
                            <div class="col-sm-6">
                                <h4 class="page-header"><i class="fa fa-credit-card"></i> Add Credit Card</h4>
                                <div class="form-row" id="credit_card">
                                    <label>
                                        <label for="checkout-payment-name">Name</label>
                                        <input name="cardholder_name" class="field" placeholder="Jane Doe" />
                                    </label>
                                    <div>
                                        <label for="checkout-payment-name">Credit Card</label>
                                        <div id="card-element">
                                        </div>
                                    </div>
                                    <div id="card-errors" role="alert"></div>
                                  </div>
                                </div>
                            <div class="col-sm-6">
                                <h4 class="page-header address">Other Payment Methods</h4>
                                <div class="form-group">
                                    <label>Choose</label>
                                    <div>
                                        <label class="radio-inline address" for="checkout-payment-prepaid">
                                            <input type="radio" id="checkout-payment-prepaid" name="checkout_payments" value="prepaid"> Direct payment
                                        </label>
                                        <label class="radio-inline address radio2" for="checkout-payment-cash">
                                            <input type="radio" id="checkout-payment-cash" name="checkout_payments" value="cash"> Credit Card
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Third Step -->
                    <!-- Form Buttons -->
                    <br>
                    <br>
                    <div class="form-group text-right">
                        <a href="{{ URL::previous() }}" type="reset" class="btn btn-danger buton2" id="back" value="Previous Step">Previous Step</a>
                        <input type="submit" class="btn btn-primary" id="next" value="Next Step">
                    </div>
                    <!-- END Form Buttons -->
                </form>
                <!-- END Checkout Wizard Content -->
            </div>
        </div>
    </section>
<script src="https://js.stripe.com/v3/"></script>
<script src="https://checkout.stripe.com/checkout.js"></script>
@endsection
