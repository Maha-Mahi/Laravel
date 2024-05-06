@extends('Layouts.main')
@section('main-container')
<!-- CONTENT AREA -->
            <div class="content-area">

                <!-- BREADCRUMBS -->
                <section class="page-section breadcrumbs">
                    <div class="container">
                        <div class="page-header">
                            <h1>Shopping Cart</h1>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="#">Shop</a></li>
                            <li class="active">Shopping Cart</li>
                        </ul>
                    </div>
                </section>
                <!-- /BREADCRUMBS -->

                <!-- PAGE -->
                <section class="page-section color">
                    @include('pages.checkout.components.account')
                      @include('pages.checkout.components.orders')
                      @include('pages.checkout.components.shopping-cart')
                      @include('pages.checkout.components.delivery')
                      @include('pages.checkout.components.payment')
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    @include('pages.Home.components.free_tab_products')
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /CONTENT AREA -->

    @endsection
