@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')
        @include('includes.tinyeditor')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>تحديث المعلومات الخاصة بالجمعية<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">الجمعية</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- end .page title-->

                <div class="row">

                    <div class="col-md-6">
                        <div class="panel panel-card margin-b-30">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title">Horizontal form</h4>
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                </div>
                            </div>

                            <div class="panel-body">
                                <p>تحديث المعلومات</p>

                                <form action="{{route('details.update',$detail->id)}}" method="POST" class="form-horizontal">
                                    @csrf
                                    @method('PUT')


                                    <div class="form-group"><label class="col-lg-2 control-label">العنوان</label>

                                        <div class="col-lg-10">
                                            <input type="text" name="heading" value="{{$detail->heading}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">النص</label>

                                        <div class="col-lg-10">
                                            <textarea name="body" class="form-control">

                                                {{$detail->body}}

                                            </textarea>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <input type="submit" class="btn btn-warning btn-sm" value="تحديث">
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div><div style="clear:both;"></div> </div>
@endsection