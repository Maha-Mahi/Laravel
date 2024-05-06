@extends('Layouts.main')
@section('main-container')
            <!-- CONTENT AREA -->
            <div class="content-area">

                <!-- PAGE -->
                <section class="page-section">
                    <!-- carousel-->
                    @include('pages.productdetails.components.product-carousel')
                            <div class="col-md-6">
                                <div class="back-to-category">
                                    <span class="link"><i class="fa fa-angle-left"></i> Back to <a href="{{url('/category')}}">Category</a></span>
                                    <div class="pull-right">
                                        <a class="btn btn-theme btn-theme-transparent btn-previous" href="#"><i class="fa fa-angle-left"></i></a><!--
                                        --><a class="btn btn-theme btn-theme-transparent btn-next" href="#"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                                @include('pages.productdetails.components.product-description')
                            </div>
                            <!-- product description-->

                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section md-padding">
                  <!-- free rated tab-->
                  @include('pages.productdetails.components.free-rated')
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    @include('pages.productdetails.components.reviews')
                            <!-- review of users and form-->
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                  <!--related products-->     @include('pages.productdetails.components.related-product')

                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                  <!--brands and clothes-->
                  @include('pages.productdetails.components.brands')
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /CONTENT AREA -->


            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>
        </div>
@endsection
