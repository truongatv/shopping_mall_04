<section class="">
    <h1>Xin Chào {{ $name }}</h1><br>
    <p>Đơn hàng bạn đặt là: </p>
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
            @php
                $sub_total = 0;
                $vat = 0;
                $sum = 0;
            @endphp
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
                        @if( $order->status == 0 )
                            <a href="{{ route('add_product', $order_detail->order_detail_id) }}" class="btn btn-xs btn-success" data-toggle="tooltip" title="Add"><i class="fa fa-plus"></i></a>
                            <a href="{{ route('minus_product', $order_detail->order_detail_id) }}" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove"><i class="fa fa-minus"></i></a>
                        @endif
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
</section>
