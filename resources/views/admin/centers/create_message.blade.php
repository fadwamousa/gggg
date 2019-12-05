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
                            <h1>اضافة رسائل <small></small></h1>
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

                                {!! Form::open(['method' => 'POST' , 'route' => 'messages.store' , 'class' => 'form-horizontal']) !!}
                                    @csrf
                                    <div class="form-group"><label class="col-lg-2 control-label">عنوان الرسالة</label>

                                        <div class="col-lg-10">
                                            <input type="text" name="heading" class="form-control">
                                        </div>
                                    </div>



                                    <div class="form-group"><label class="col-lg-2 control-label">نص الرسالة</label>

                                        <div class="col-lg-10">
                                            <textarea name="body" id="" cols="30" rows="10" class="form-control">

                                            </textarea>

                                        </div>
                                    </div>
                                <div class="form-group"><label class="col-lg-2 control-label">اختر المركز</label>

                                    <div class="col-lg-10">

                                        {{Form::select('center_id',$center,null,['class' => 'form-control'])}}


                                    </div>
                                </div>





                                <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <input type="submit" class="btn btn-success" value="اضافة">
                                        </div>
                                    </div>

                               {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

                </div>

            </div><div style="clear:both;"></div> </div>
@endsection