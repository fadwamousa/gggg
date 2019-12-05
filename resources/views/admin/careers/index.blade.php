@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>المسميات الوظيفية<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">الوظيفة</li>
                            </ol>
                        </div>
                    </div>

                </div><!-- end .page title-->
                @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-card margin-b-30 ">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title">جدول عرض الوظائف</h4>
                                <a href="{{route('career.create')}}" class="btn btn-success btn-sm">اضافة</a>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color: yellowgreen;">المسمي الوظيفي</span></th>
                                        <th><span style="color: yellowgreen">تحديث</span></th>
                                        <th><span style="color: yellowgreen">مسح</span></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cars as $car)
                                        <tr>
                                            <td>{{$car->id}}</td>
                                            <td>{{$car->career_name}}</td>

                                            <td><a href="{{route('career.edit',$car->id)}}"
                                                   class="btn btn-success btn-sm">تحديث</a></td>
                                            <td>
                                                <form action="{{route('career.delete',$car->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <input type="submit" class="btn btn-danger btn-sm" value="مسح">

                                                </form></td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>

                        </div><!-- End .panel -->
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-card margin-b-30 ">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title">جدول عرض الموظفين</h4>
                                <a href="{{route('employee.create')}}" class="btn btn-success btn-sm">اضافة</a>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color: yellowgreen;">الاسم</span></th>
                                        <th><span style="color: yellowgreen;">الوظيفة</span></th>
                                        <th><span style="color: yellowgreen">تحديث</span></th>
                                        <th><span style="color: yellowgreen">مسح</span></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($employee as $emp)
                                        <tr>
                                            <td>{{$emp->id}}</td>
                                            <td>{{$emp->name}}</td>
                                            <td>{{$emp->career->career_name}}</td>

                                            <td><a href="{{route('employee.edit',$emp->id)}}"
                                                   class="btn btn-success btn-sm">تحديث</a></td>
                                            <td>
                                                <form action="{{route('employee.delete',$emp->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <input type="submit" class="btn btn-danger btn-sm" value="مسح">

                                                </form></td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>

                        </div><!-- End .panel -->
                    </div>
                </div><div style="clear:both;"></div> </div>
    </section>
@stop
