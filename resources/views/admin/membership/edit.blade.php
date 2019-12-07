@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>تعديل الاعضاء<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">اعضاء مجلس الادارة</li>
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

                                <form action="{{route('membership.update',$membership->id)}}"
                                      method="POST"
                                      class="form-horizontal"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')


                                    <div class="form-group"><label class="col-lg-2 control-label">اسم العضو</label>

                                        <div class="col-lg-10">
                                            <input type="text" name="name" value="{{$membership->name}}" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group"><label class="col-lg-2 control-label">المسمي الوظيفي </label>

                                        <div class="col-lg-10">
                                            <input type="text" name="career_name" value="{{$membership->career_name}}"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">تاريخ التعين</label>

                                        <div class="col-lg-10">
                                            <input type="text" name="date_hiring" class="form-control" id="hijri-date-input">
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
@section('scripts')
            <script type="text/javascript">
                $(function () {
                    $("#hijri-date-input").hijriDatePicker();
                });
            </script>
@endsection