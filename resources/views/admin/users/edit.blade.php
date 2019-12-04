@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>التعديل علي مستخدم<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li class="active">المستخدمين</li>
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
                                <p>التعديل علي المستخدم</p>

                                    {!! Form::model($user,['method' => 'PATCH' , 'action' => ['AdminUsersController@update',$user->id] , 'class'=>'form-horizontal']) !!}
                                    @csrf
                                    @method('PUT')


                                <div class="form-group"><label class="col-lg-2 control-label">الاسم</label>

                                    <div class="col-lg-10">
                                        {{Form::text('name',null,['class'=>'form-control' , 'placeholder' => 'اكتب الاسم'])}}
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">الاميل</label>

                                    <div class="col-lg-10">
                                        {{Form::email('email',null,['class'=>'form-control' , 'placeholder' => 'اكتب الايميل'])}}
                                    </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">كلمة المرور</label>

                                    <div class="col-lg-10">
                                        <input type="password" class="form-control" value="{{$user->password}}">
                                    </div>
                                </div>

                                    <div class="form-group"><label class="col-lg-2 control-label">الحالة</label>

                                        <div class="col-lg-10">
                                            {{Form::select('is_active',['1' => 'active' , '0' => 'not active'],null,['class'=>'form-control'])}}
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-lg-2 control-label">المسمي</label>

                                        <div class="col-lg-10">
                                            {{Form::select('role_id',$roles ,null,['class'=>'form-control'])}}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            {!! Form::submit('تعديل' , ['class'=>'btn btn-sm btn-primary']) !!}
                                        </div>
                                    </div>

                                 {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>

            </div><div style="clear:both;"></div> </div>
@endsection