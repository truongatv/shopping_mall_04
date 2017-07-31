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
            <div class="site-block">
                <form id="checkout-wizard" action="{{ route('checkout_confirm_done',['user_id'=>Auth::user()->id,'order_id' => Request::segment(2)]) }}" method="post">
                {{ csrf_field() }}
                    <!-- Fourth Step -->
                    <div id="checkout-fourth" class="step">
                        <!-- Step Info -->
                        <ul class="nav nav-pills nav-justified checkout-steps push-bit">
                            <li><a href="javascript:void(0)" data-gotostep="checkout-second"><i class="fa fa-check"></i> <strong>2. ADDRESSES</strong></a></li>
                            <li><a href="javascript:void(0)" data-gotostep="checkout-third"><i class="fa fa-check"></i> <strong>3. PAYMENT</strong></a></li>
                            <li class="active"><a href="javascript:void(0)" data-gotostep="checkout-fourth"><strong>4. CONFIRM ORDER</strong></a></li>
                        </ul>
                        <!-- END Step Info -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-vcenter">
                            <thead>
                                <tr>
                                    <th colspan="2">Product</th>
                                    <th class="text-center">QTY</th>
                                    <th class="text-right">Unit Price</th>
                                    <th class="text-right">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $sub_total = 0;
                                $vat = 0;
                                $sum = 0;
                            ?>
                            @foreach ($order_details as $order_detail)
                                <tr>
                                    <td style="width: 200px;">
                                        <img src={{ $order_detail->product->images[0]->link }} alt="" style="width: 180px;">
                                    </td>
                                    <td>
                                        <strong></strong><br>{{ $order_detail->product->name }}<br>
                                        <strong class="text-success">In stock</strong> - 24h Delivery
                                    </td>
                                    <td class="text-center">
                                        <strong>{{ $order_detail->quality }}</strong>
                                    </td>
                                    <td class="text-right">${{ $order_detail->product->unit_price }}</td>
                                        <?php
                                            $total = $order_detail->quality * $order_detail->product->unit_price;
                                            $sub_total += $total;
                                            $vat += $total*20/100;  
                                            $sum += $sub_total + $vat;
                                        ?>
                                    <td class="text-right"><strong>${{ $total }}</strong></td>
                                </tr>
                            @endforeach
                                <tr>
                                    <td colspan="4" class="text-right h4"><strong>Sub Total</strong></td>
                                    <td class="text-right h4"><strong>${{ $sub_total }}</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right h4"><strong>VAT (20%)</strong></td>
                                    <td class="text-right h4"><strong>${{ $vat }}</strong></td>
                                </tr>
                                <tr class="active">
                                    <td colspan="4" class="text-right text-uppercase h4"><strong>Total Price</strong></td>
                                    <td class="text-right text-success h4"><strong>${{ $sum }}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- END Fourth Step -->
                    <!-- Form Buttons -->
                    <div class="form-group text-right">
                        <a href="{{ URL::previous() }}" type="reset" class="btn btn-danger" id="back" value="Previous Step">Previous Step</a>
                        <input type="submit" class="btn btn-primary" id="next" value="Confirm Order">
                    </div>
                    <!-- END Form Buttons -->
                </form>
                <!-- END Checkout Wizard Content -->
            </div>
        </div>
    </section>
@endsection
