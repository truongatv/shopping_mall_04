<header>
    <div class="container">
        <!-- Site Logo -->
        <a href="index.html" class="site-logo">
            <i class="gi gi-flash"></i> <strong>Shopping</strong>Mail
        </a>
        <form action="ecom_search_results.html" method="post" class="quick-search">
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
                    <a href="#"></i>{{ trans('title.home') }}</a>
                </li>
                <li>
                    <a href="contact.html">{{ trans('title.contact') }}</a>
                </li>
                <li>
                    <a href="about.html">{{ trans('title.about') }}</a>
                </li>
                <li>
                    <a href="login.html" class="btn btn-primary">{{ trans('title.login') }}</a>
                </li>
                <li>
                    <a href="signup.html" class="btn btn-success">{{ trans('title.signup')  }}</a>
                </li>
            </ul>
            <!-- END Main Menu -->
        </nav>
        <!-- END Site Navigation -->
    </div>
</header>
            
