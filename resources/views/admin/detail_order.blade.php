@extends('admin.order_master')
@section('order')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header header2">{{ $orderdetail->order_detail }}
                <small>{{ $orderdetail->list }}</small><span>  </span>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>{{ trans('admin.id') }}</th>
                    <th>{{ trans('admin.product') }}</th>
                    <th>{{ trans('admin.unit_price') }}</th>
                    <th>{{ trans('admin.quanity') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orderdetail as $orderdetail)
                <tr class="odd gradeX" align="center">
                    <td class="center">{{ $orderdetail->order_detail_id }}</td>
                    <td class="center">{{ $orderdetail->product->name }}</td>
                    <td class="center">{{ $orderdetail->unit_price }}</td>
                    <td class="center">{{ $orderdetail->quality }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.row -->
@endsection
