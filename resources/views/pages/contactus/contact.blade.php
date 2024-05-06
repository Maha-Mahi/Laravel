@extends('Layouts.main')
@section('main-container')
            <!-- CONTENT AREA -->
            <div class="content-area">

                <!-- BREADCRUMBS -->
                <section class="page-section breadcrumbs">
                    <div class="container">
                        <div class="page-header">
                            <h1>Contact</h1>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/category')}}">Shop</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </section>
                <!-- /BREADCRUMBS -->

                <!-- PAGE -->
                <section class="page-section color">
                    <div class="container">
                        <div class="row">
                            <!-- address-->
                            @include('pages.contactus.components.adress')
                                <!-- contact form-->
                                @include('pages.contactus.components.contac-us-form')



                        </div>

                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section no-padding no-bottom-space">
                    <div class="container full-width">

                        <!-- Google map -->
                        <div class="google-map">
                            <div id="map-canvas"><h2>map is not showing here</h2></div>
                        </div>
                        <!-- /Google map -->

                    </div>
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /CONTENT AREA -->


            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

        </div>
@endsection
