@extends('layouts.master')
@section('text-center')
    <section class="site-section site-section-light site-section-top themed-background-dark">
        <div class="container text-center">
            <h1 class="animation-slideDown"><strong>Explore over 5.000 products!</strong></h1>
        </div>
    </section>
@endsection
@section('content')
    <section class="site-content site-section">
        <div class="container">
            <div id="wrapper">
                <!-- Navigation -->
                <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">Admin Area - {{ Auth::user()->name }} </a>
                    </div>
                    <!-- /.navbar-header -->
                    <!-- /.navbar-top-links -->
                    <div class="navbar-default sidebar_admin" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <li class="sidebar-search">
                                    <div class="input-group custom-search-form">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{ action('AdminController@getList') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{{ action('AdminController@getList') }}">List Category</a>
                                        </li>
                                        <li>
                                            <a href="{{ action('AdminController@getAdd') }}">Add Category</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                                <li>
                                    <a href="{{ action('AdminController@getProductList') }}"><i class="fa fa-cube fa-fw"></i> Product<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{{ action('AdminController@getProductList') }}">List Product</a>
                                        </li>
                                        <li>
                                            <a href="{{ action('AdminController@getAddProduct') }}">Add Product</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                                <li>
                                    <a href="{{ action('AdminController@getUserList') }}"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{{ action('AdminController@getUserList') }}">List User</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                                <li>
                                    <a href="{{ action('AdminController@getOrderList') }}"><i class="fa fa-users fa-fw"></i> Order<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="{{ action('AdminController@getOrderList') }}">List Order</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                            </ul>
                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->
                </nav>

                <!-- Page Content -->
                <div id="page-wrapper">
                    <div class="container-fluid">
                        @yield('order')
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /#page-wrapper -->

            </div>
        </div>


    </section>
@endsection
