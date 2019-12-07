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
                            <h1>اعدادت الموقع<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">اعدادت الموقع</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- end .page title-->
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

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
                                <p>اضافة المعلومات</p>

                                <form action="{{route('setting.store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group"><label class="col-lg-2 control-label">اسم الموقع</label>

                                        <div class="col-lg-10">
                                            <input type="text" name="name" value="{{$setting->name}}"  class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-lg-2 control-label"> البريد الالكتروني</label>

                                        <div class="col-lg-10">
                                            <input type="text" name="email" value="{{$setting->email}}"  class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-lg-2 control-label">تويتر</label>

                                        <div class="col-lg-10">
                                            <input type="text" name="twitter" value="{{$setting->twitter}}"  class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-lg-2 control-label">انستغرام</label>

                                        <div class="col-lg-10">
                                            <input type="text" name="insta" value="{{$setting->insta}}"  class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-lg-2 control-label">سناب شات</label>

                                        <div class="col-lg-10">
                                            <input type="text" name="snapchat" value="{{$setting->snapchat}}"  class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group"><label class="col-lg-2 control-label">شعار الموقع</label>

                                        <div class="col-lg-10">
                                            <input type="file" name="logo" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <input type="submit" class="btn btn-success" value="اضافة">
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
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
                                <p>اضافة المعلومات</p>

                                <form action="{{route('phone.setting.store')}}" method="POST" class="form-horizontal">
                                    @csrf

                                    <input type="hidden" name="setting_id" value="{{$setting->id}}" >
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">الهاتف</label>

                                        <div class="col-lg-10">
                                            <input type="number" name="phone_number" size="10" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <input type="submit" class="btn btn-success" value="اضافة">
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>

                </div>

            </div><div style="clear:both;"></div> </div>
@endsection