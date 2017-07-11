<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.meta')
    @yield('title')
    @include('layouts.css')
    @yield('css')
</head>
<body role="document">
    <div id="page-container">
        @include('layouts.nav')
    </div>
<div class="container theme-showcase" role="main">
    @yield('content')
    <hr>
<div class="under_content">
	@include('layouts.under-content')
</div>
<div class = "footer">
	@include('layouts.footer')
</div>
</div> <!-- /container -->
@include('layouts.scripts')
@yield('scripts')
</body>
</html>
