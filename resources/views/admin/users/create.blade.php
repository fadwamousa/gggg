@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>انشاء مستخدم جديد<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
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
                                    <p>تسجيل الدخول </p>

                                <form action="{{route('users.store')}}" method="POST" class="form-horizontal">
                                    @csrf

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
                                            {{Form::password('password',['class' => 'form-control' , 'placeholder' => 'اكتب كلمة المرور'])}}
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-lg-2 control-label">كلمة المرور</label>

                                        <div class="col-lg-10">
                                            {{Form::password('password_confirmation',['class' => 'form-control' , 'placeholder' => 'اكتب كلمة المرور'])}}
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">الحالة</label>

                                        <div class="col-lg-10">
                                            {{Form::select('is_active',['1' => 'active' , '0' => 'not active'],null,['class'=>'form-control'])}}
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-lg-2 control-label">المسمي</label>

                                        <div class="col-lg-10">
                                            {{Form::select('role_id',['' => 'choose an option'] +$roles ,null,['class'=>'form-control'])}}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            {!! Form::submit('تسجيل الدخول' , ['class'=>'btn btn-sm btn-primary']) !!}
                                        </div>
                                    </div>

                            </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div><div style="clear:both;"></div> </div>
@endsection