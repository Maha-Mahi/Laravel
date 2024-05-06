@extends('Layouts.main')

@section('main-container')
            <!-- CONTENT AREA -->
            <div class="content-area">

                <!-- BREADCRUMBS -->
                <section class="page-section breadcrumbs">
                    <div class="container">
                        <div class="page-header">
                            <h1>About Us</h1>
                        </div>
                        <ul class="breadcrumb"></ul>
                    </div>
                </section>
                <!-- /BREADCRUMBS -->

                <!-- PAGE -->
                <section class="page-section color">
                        @include('pages.aboutus.components.profile')
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    @include('pages.Home.components.top-rated')
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /CONTENT AREA -->

            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

        </div>
@endsection
