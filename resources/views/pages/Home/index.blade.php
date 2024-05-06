@extends('Layouts.main')
@section('main-container')
            <!-- CONTENT AREA -->
            <div class="content-area">
                <!-- PAGE -->
                <section class="page-section no-padding-bottom">
                    <!--banner slides-->
                    @include('pages.Home.components.banner')
                    @include('pages.Home.components.categories')

                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="thumbnail no-border no-padding thumbnail-banner size-1x3">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <div class="img-bg" style="background-image: url('assets/img/preview/shop/banner-1.jpg')"></div>
                                            <div class="caption">
                                                <div class="caption-wrapper div-table">
                                                    <div class="caption-inner div-cell">
                                                        <h2 class="caption-title"><span>Lorem Ipsum</span></h2>
                                                        <h3 class="caption-sub-title"><span>Dolor Sir Amet Percpectum</span></h3>
                                                        <span class="btn btn-theme btn-theme-sm">Shop Now</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="thumbnail no-border no-padding thumbnail-banner size-1x3">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <div class="img-bg" style="background-image: url('assets/img/preview/shop/banner-2.jpg')"></div>
                                            <div class="caption text-right">
                                                <div class="caption-wrapper div-table">
                                                    <div class="caption-inner div-cell">
                                                        <h2 class="caption-title"><span>Lorem Ipsum</span></h2>
                                                        <h3 class="caption-sub-title"><span>Dolor Sir Amet Percpectum</span></h3>
                                                        <span class="btn btn-theme btn-theme-sm">Shop Now</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    <!-- featured -->
                    @include('pages.Home.components.featured')
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">
                        <div class="message-box">
                            <div class="message-box-inner">
                                <h2>Free shipping on all orders over $45</h2>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->
                <!-- PAGE -->
                <section class="page-section">
                    <!-- toprated product-->
                    @include('pages.Home.components.top-rated-products')
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                   <!-- blog posts featured -->
                   @include('pages.Home.components.blog-posts-featured')
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                 <!-- brands and cients-->
                 @include('pages.Home.components.brands')
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    <!-- top rated sellers, clients and brands-->
                    @include('pages.Home.components.top-rated')

                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section no-padding-top">
                   <!-- get free tab-->
                   @include('pages.Home.components.free_tab_products')
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /CONTENT AREA -->


        <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>
        </div>
        @endsection
