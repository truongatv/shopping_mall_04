@extends('admin.order_master')
@section('order')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Oder
                <small>List</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        @if(session('thongbao1'))
            <div class="alert alert-success">
                {{ session('thongbao1') }}
            </div>
        @endif
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Total Price</th>
                    <th>Content</th>
                    <th>Status</th>

                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order as $order)
                <tr class="odd gradeX" align="center">
                    <td class="center">{{ $order->order_id }}</td>
                    <td class="center">{{ $order->created_at }}</td>
                    <td class="center">{{ $order->user->name }}</td>
                    <td class="center">{{ $order->total_price }}</td>
                    <td class="center"><a href="{{ route('orderdetail_list', $order->order_id) }}">{{ $order->content }}</a></td>
                    @if($order->status == 1)
                        <td class="center">
                            Done
                        </td>
                    @else
                        <td class="center">
                            Doing <i class="fa fa-pencil fa-fw button_edit"></i>
                        </td>
                    @endif

                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ action('AdminController@getDeleteOrder', $order->order_id) }}" > Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.row -->
@endsection
