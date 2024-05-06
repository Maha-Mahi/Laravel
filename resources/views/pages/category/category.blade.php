@extends('Layouts.main')
@section('main-container')
            <!-- CONTENT AREA -->
            <div class="content-area">

                <!-- BREADCRUMBS -->
                <section class="page-section breadcrumbs">
                    <div class="container">
                        <div class="page-header">
                            <h1>Category Page</h1>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/category')}}">Shop</a></li>
                            <li class="active">Category Grid View Page With Left Sidebar</li>
                        </ul>
                    </div>
                </section>
                <!-- /BREADCRUMBS -->

                <!-- PAGE WITH SIDEBAR -->
                <section class="page-section with-sidebar">
                    <div class="container">
                        <div class="row">
                            <!-- /SIDEBAR -->
                            @include('pages.category.components.sidebar')
                            <!-- CONTENT -->
                            <div class="col-md-9 content" id="content">
                                <!--sliders-->
                                @include('pages.category.components.slider')


                                <!-- shop-sorting -->
                                <div class="shop-sorting">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <form class="form-inline" action="">
                                                <div class="form-group selectpicker-wrapper">
                                                    <select
                                                        class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                        data-toggle="tooltip" title="Select">
                                                        <option>Product Name</option>
                                                        <option>Product Name</option>
                                                        <option>Product Name</option>
                                                    </select>
                                                </div>
                                                <div class="form-group selectpicker-wrapper">
                                                    <select
                                                        class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                        data-toggle="tooltip" title="Select">
                                                        <option>Select Manifacturers</option>
                                                        <option>Select Manifacturers</option>
                                                        <option>Select Manifacturers</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-4 text-right-sm">
                                            <a class="btn btn-theme btn-theme-transparent btn-theme-sm" href="#"><img src="assets/img/icon-list.png" alt=""/></a>
                                            <a class="btn btn-theme btn-theme-transparent btn-theme-sm" href="#"><img src="assets/img/icon-grid.png" alt=""/></a>
                                        </div>
                                    </div>
                                    @include('pages.category.components.products')
                                </div>
                                <!-- /shop-sorting -->

                                <!-- Products grid -->

                                <!-- /Products grid -->

                                <!-- Pagination -->
                                <div class="pagination-wrapper">
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i> Previous</a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">Next <i class="fa fa-angle-double-right"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /Pagination -->

                            </div>
                            <!-- /CONTENT -->

                        </div>
                    </div>
                </section>
                <!-- /PAGE WITH SIDEBAR -->

                <!-- PAGE -->
                <section class="page-section no-padding-top">
                  <!-- free tab pages-->
                  @include('pages.category.components.free_tab_products')
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /CONTENT AREA -->


            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

        </div>

@endsection
