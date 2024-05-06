@extends('Layouts.main')
@section('main-container')
           <!-- CONTENT AREA -->
            <div class="content-area">

                <!-- BREADCRUMBS -->
                <section class="page-section breadcrumbs">
                    <div class="container">
                        <div class="page-header">
                            <h1>Wishlist</h1>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/category')}}">Shop</a></li>
                            <li class="active">Shopping Cart</li>
                        </ul>
                    </div>
                </section>
                <!-- /BREADCRUMBS -->

                <!-- PAGE -->
                <section class="page-section color no-padding-bottom">
                   <!-- wish list table-->
                   @include('pages.wishlist.components.wishlist-table')
                         <!-- login form-->
                         @include('pages.wishlist.components.login-details-form')
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
<!--tab free-->
@include('pages.wishlist.components.free-rated')
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /CONTENT AREA -->

            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

        </div>
@endsection
