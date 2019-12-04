@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>Dashboard<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- end .page title-->

                <div class="row row-md">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box box-block  tile-2  widget-box clearfix height-auto">
                            <div class="t-icon right"><i class="ti-shopping-cart-full"></i></div>
                            <div class="t-content">
                                <h1 class="m-b-1">1,325</h1>
                                <h6 class="text-uppercase">Orders</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box box-block  tile-2  widget-box clearfix height-auto">
                            <div class="t-icon right"><i class="ti-bar-chart"></i></div>
                            <div class="t-content">
                                <h1 class="m-b-1">$ 47,855</h1>
                                <h6 class="text-uppercase">Revenue</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box box-block  tile-2  widget-box clearfix height-auto">
                            <div class="t-icon right"><i class="ti-package"></i></div>
                            <div class="t-content">
                                <h1 class="m-b-1">6,800</h1>
                                <h6 class="text-uppercase">Products</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box box-block  tile-2  widget-box clearfix height-auto">
                            <div class="t-icon right"><i class="ti-receipt"></i></div>
                            <div class="t-content">
                                <h1 class="m-b-1">1,682</h1>
                                <h6 class="text-uppercase">Sold</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div><div style="clear:both;"></div> </div>
    </section>
@stop
