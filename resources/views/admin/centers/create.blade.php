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
                            <h1>اضافة معلومات عن المركز<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">مركز ورود الحياة</li>
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

                                <form action="{{route('centers.store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group"><label class="col-lg-2 control-label">اسم المركز</label>

                                        <div class="col-lg-10">
                                            <input type="text" name="name" value="{{$center->name}}"  class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-lg-2 control-label">عنوان المركز</label>

                                        <div class="col-lg-10">
                                            <input type="text" name="address" value="{{$center->address}}"  class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-lg-2 control-label">رؤية المركز</label>

                                        <div class="col-lg-10">
                                            <textarea name="vision" id="" cols="30" rows="10" class="form-control">
                                                {{$center->vision}}
                                            </textarea>

                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-lg-2 control-label">رسالة المركز</label>

                                        <div class="col-lg-10">
                                            <textarea name="message" id="" cols="30" rows="10" class="form-control">
                                                {{$center->message}}
                                            </textarea>

                                        </div>
                                    </div>


                                    <div class="form-group"><label class="col-lg-2 control-label">صورة المركز</label>

                                        <div class="col-lg-10">
                                            <input type="file" name="image" class="form-control">
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

                                <form action="{{route('phone.store')}}" method="POST" class="form-horizontal">
                                    @csrf

                                    <input type="hidden" name="center_id" value="{{$center->id}}" >
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">الهاتف</label>

                                        <div class="col-lg-10">
                                            <input type="number" name="phone" size="10" class="form-control">
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