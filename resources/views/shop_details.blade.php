@extends('layouts.master')
@section('text-center')
    <section class="site-section site-section-light site-section-top themed-background-dark">
        <div class="container text-center">
            <h1 class="animation-slideDown"><strong>{{ $shop_product->shop_product_name }}</strong></h1>
            <h2 class="h3 text-center animation-slideUp"><strong>{{ trans('title.keep_camp_and_love_shopping!') }}</strong></h2>
        </div>
    </section>
    @endsection
@section('content')
        <div id="page-container">
            <!-- Company Info -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="site-block">
                                <h3 class="site-heading"><strong>When</strong> did all start?</h3>
                                <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget!</p>
                            </div>
                            <div class="site-block">
                                <h3 class="site-heading"><strong>Where</strong> did all start?</h3>
                                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="site-block">
                                <h3 class="site-heading"><strong>What</strong> will the future bring?</h3>
                                <p>Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget!</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="site-block">
                                <table class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Year</th>
                                            <th class="text-center">Projects</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width: 50%;">2009</td>
                                            <td><strong>300</strong></td>
                                        </tr>
                                        <tr>
                                            <td>2010</td>
                                            <td><strong>450</strong></td>
                                        </tr>
                                        <tr>
                                            <td>2011</td>
                                            <td><strong>1000</strong></td>
                                        </tr>
                                        <tr>
                                            <td>2012</td>
                                            <td><strong>1200</strong></td>
                                        </tr>
                                        <tr>
                                            <td>2013</td>
                                            <td><strong>1800</strong></td>
                                        </tr>
                                        <tr>
                                            <td>2014</td>
                                            <td><strong>2000</strong> &amp; Counting..</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="site-block">
                                <p class="text-center">
                                    <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                                </p>
                                <blockquote>
                                    <p>I'm grateful we made it that far and continue strong! Thank you all for supporting us!</p>
                                    <footer><strong>John Doe</strong>, CEO</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-block text-center">
                    <a href="contact.html" class="btn btn-lg btn-primary">Shop's product <i class="fa fa-arrow-right"></i></a>
                </div>
            </section>
            <!-- END Company Info -->
        </div>
        <!-- END Page Container -->
@endsection
