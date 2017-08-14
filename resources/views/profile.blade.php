@extends('layouts.master')
@section('css')
    {!! Html::style('css/profile.css') !!}
    @endsection
@section('text-center')
    <section class="site-section site-section-light site-section-top themed-background-dark">
        <div class="container text-center">
            <h1 class="animation-slideDown"><strong> {{ trans('title.The_customer_is_always_right') }} </strong></h1>
        </div>
    </section>
@endsection
@section('content')
    <!-- Product Comparison -->
    <section class="site-content site-section">
        <div class="container">
            <div class="table-responsive site-block">
                 <thead>
                    <div class="text-center col-xs-12   ">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{ $err }} <br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <th class="text-center col-xs-12   row"  >
                        <p> {{ trans('title.Information\'s_Customer') }}</p>
                        <a href="img/placeholders/photos/photo35.jpg" data-toggle="lightbox-image">
                            <!-- <img src="{{$profile->avatar_image_link}}" alt="avatra" class="push-bit" style="width: 220px;"> -->
                            {{ Html::image('/assets/uploads/' . $profile->avatar_image_link, trans('title.this-is-avatar'), [
                                    'class' => 'push-bit2 ',
                            ]) }}
                        </a>
                        <div class="h1 text-primary"><strong>{{ $profile->name }}</strong></div>
                    </th>

                    </div>
                    </thead>
                <table class="table table-vcenter nav-style-table">
                    <tbody>
                        <tr>
                            <th class="h3" colspan="4">{{ trans('title.Acount') }}</th>
                        </tr>
                        <tr >
                            <td class="active col-md-3 col-xs-12">{{ trans('title.Name') }}</td>
                            <td class="text-center col-xs-12 ">{{ $profile->name }}</td>
                        </tr>
                        <tr>
                            <td class="active col-md-3 col-xs-12">{{ trans('title.Email') }}</td>
                            <td class="text-center col-xs-12">{{ $profile->email }}</td>
                        </tr>
                        <tr>
                            <td class="active col-md-3 col-xs-12">{{ trans('title.Address') }}</td>
                            <td class="text-center col-xs-12"> </td>
                        </tr>

                        @foreach($address as $add)

                            <tr>
                                <td class="active col-md-3 col-xs-12 customize"></td>
                                <td class="text-center col-xs-12">{{ $add->address }} </td>
                            </tr>
                         @endforeach

                        <tr>
                            <td class="active col-md-3 col-xs-12">{{ trans('title.Phone') }}</td>
                            <td class="text-center col-xs-12">{{ $profile->phone }}</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-vcenter">
                    <tbody>
                        <tr>
                            <th class="h3" colspan="4">{{ trans('title.Subcribe') }}</th>
                        </tr>
                        <tr>
                            <td class="text-center">{{ $profile->subcribe }}</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-vcenter">
                    <tbody>
                        <tr>
                            <th class="h3" colspan="4">{{ trans('title.Order') }} </th>
                        </tr>
                        <tr>
                            <table class="table table-striped table-bordered table-hover" id="">
                                <thead>
                                    <tr align="center">
                                        <th>Date</th>
                                        <th>Total Price</th>
                                        <th>Content</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order as $order)
                                    <tr class="odd gradeX" align="center">
                                        <td class="center">{{ $order->created_at }}</td>
                                        <td class="center">{{ $order->total_price }}</td>
                                        <td class="center"><a href="{{ route('orderdetail_list', $order->order_id) }}">{{ $order->content }}</a></td>
                                        @if($order->status == 1)
                                        <td class="center">
                                            Done
                                        </td>
                                        @else
                                        <td class="center">
                                            Doing
                                        </td>
                                        @endif
                                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Edit</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </tr>
                   </tbody>
                </table>
                <table class="table table-vcenter">
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <a href="{{ route('edit-profile-user') }}" class="btn btn-lg btn-primary"><i class="fa fa-shopping-cart"></i> {{ trans('title.Edit') }} </a><br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
            <!-- END Product Comparison -->
@endsection
