<header>
    <div class="container">
        <!-- Site Logo -->
        <a href="{{ url('/') }}" class="site-logo">
            <i class="gi gi-flash"></i> <strong>Shopping</strong>Mail
        </a>
        <form action="{{ url('search') }}" method="post" class="quick-search">
            {{ csrf_field() }}
            <div class="input-group input-group-lg input_quick_search">
                <input type="text" id="ecom-search" name="ecom-search" class="form-control text-center" placeholder="Search Store..">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Site Logo -->

        <!-- Site Navigation -->
        <nav>
            <!-- Menu Toggle -->
            <!-- Toggles menu on small screens -->
            <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                <i class="fa fa-bars"></i>
            </a>

            <!-- END Menu Toggle -->
            <!-- Main Menu -->
            <ul class="site-nav">
                <!-- Toggles menu on small screens -->
                <li class="visible-xs visible-sm">
                    <a href="javascript:void(0)" class="site-menu-toggle text-center">
                        <i class="fa fa-times"></i>
                    </a>
                </li>
                <!-- END Menu Toggle -->
                <li>
                    <a href="{{ url('/') }}"></i>{{ trans('title.home') }}</a>
                </li>
                <li>
                    <a href="#">{{ trans('title.contact') }}</a>
                </li>
                <li>
                    <a href="#">{{ trans('title.about') }}</a>
                </li>
                @if (Auth::guest())
                <li>
                    <a href="{{route('login')}}" class="btn btn-primary">{{ trans('title.login') }}</a>
                </li>
                <li>
                    <a href="{{route('register')}}" class="btn btn-success">{{ trans('title.signup')  }}</a>
                </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ action('ProfileController@getProfile') }}">
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{ action('HistoryOrdersController@showHistory') }}">
                                    Your orders
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
            <!-- END Main Menu -->
        </nav>
        <!-- END Site Navigation -->
    </div>
</header>

