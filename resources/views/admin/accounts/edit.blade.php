@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>اضافة المعلومات الخاصة بالحسابات البنكية<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">الحسابات البنكية</li>
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
                                <p>اضافة المعلومات</p>

                                <form action="{{route('accounts.update',$account->id)}}"
                                      method="POST"
                                      class="form-horizontal"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')


                                    <div class="form-group"><label class="col-lg-2 control-label">اسم البنك</label>

                                        <div class="col-lg-10">
                                            <input type="text" name="bank_name" value="{{$account->bank_name}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">اسم الحساب</label>

                                        <div class="col-lg-10">
                                            <input type="text" name="account_name" value="{{$account->account_name}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-lg-2 control-label">رقم الحساب</label>

                                        <div class="col-lg-10">
                                            <input type="text" name="account_number"  value="{{$account->account_number}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">رقم الايبان</label>

                                        <div class="col-lg-10">
                                            <input type="text" name="IBAN_number" value="{{$account->IBAN_number}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">الصورة</label>

                                        <div class="col-lg-10">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <input type="submit" class="btn btn-success" value="تعديل">
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div><div style="clear:both;"></div> </div>
@endsection