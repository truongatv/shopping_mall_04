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
        <div class="container">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}} <br>
                    @endforeach
                </div>
            @endif
            <div class="site-block">
                <form id="checkout-wizard" action="{{ route('checkout_addresses_confirm', ['user_id'=>Auth::user()->id, 'order_id' => Request::segment(2)]) }}" method="post">
                {{ csrf_field() }}
                    <!-- Second Step -->
                    <div id="checkout-second" class="step">
                        <!-- Step Info -->
                        <ul class="nav nav-pills nav-justified checkout-steps push-bit">
                            <li class="active"><a href="javascript:void(0)" data-gotostep="checkout-second"><strong>2. ADDRESSES</strong></a></li>
                            <li><a href="javascript:void(0)" data-gotostep="checkout-third"><strong>3. PAYMENT</strong></a></li>
                            <li><a href="javascript:void(0)" data-gotostep="checkout-fourth"><strong>4. CONFIRM ORDER</strong></a></li>
                        </ul>
                        <!-- END Step Info -->
                        <div class="row row-centered">
                            <div class="col-sm-6 col-centered">
                                <h4 class="page-header">Shipping Address</h4>
                                <div class="form-group">
                                    <label for="checkout-shipping-name">Name</label>
                                    <input type="text" id="checkout-shipping-name" name="checkout-shipping-name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="checkout-shipping-address1">Address 1</label>
                                    <input type="text" id="checkout-shipping-address1" name="checkout-shipping-address1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="checkout-shipping-address1">Address 2</label>
                                    <input type="text" id="checkout-shipping-address2" name="checkout-shipping-address2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="checkout-shipping-postal">Postal Code</label>
                                    <input type="text" id="checkout-shipping-postal" name="checkout-shipping-postal" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="checkout-shipping-phone">Phone</label>
                                    <input type="text" id="checkout-shipping-phone" name="checkout-shipping-phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="checkout-shipping-address1">City</label>
                                    <input type="text" id="checkout-shipping-city" name="checkout-shipping-city" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Second Step -->
                    <!-- Form Buttons -->
                    <div class="form-group text-right">
                        <input type="submit" class="btn btn-primary" id="next" value="Next Step">
                    </div>
                    <!-- END Form Buttons -->
                </form>
                <!-- END Checkout Wizard Content -->
            </div>
        </div>
    </section>
@endsection
