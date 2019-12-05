@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>لجان الجمعية <small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">لجان الجمعية</li>
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
                                <h4 class="panel-title">جدول عرض  المعلومات الخاصة باللجان </h4>
                                <a href="{{route('committes.create')}}" class="btn btn-success btn-sm">اضافة</a>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color:yellowgreen;">الاسم</span></th>
                                        <th><span style="color: yellowgreen;">الصورة</span></th>
                                        <th><span style="color: yellowgreen">المرفق</span></th>
                                        <th><span style="color: yellowgreen">تحديث</span></th>
                                        <th><span style="color: yellowgreen">مسح</span></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($commites as $comm)
                                        <tr>
                                            <td>{{$comm->id}}</td>
                                            <td>{{$comm->name}}</td>
                                            <td><img src="{{asset('images/'.$comm->image)}}" alt=""></td>
                                            <td><a href="{{Storage::url($comm->attachment)}}">المرفق</a></td>
                                            <td><a href="{{route('committes.edit',$comm->id)}}"
                                                   class="btn btn-success btn-sm">تحديث</a></td>
                                            <td>
                                                <form action="{{route('commites.delete',$comm->id)}}" method="POST">
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
                                <h4 class="panel-title">اهداف اللجان</h4>
                                <a href="{{route('committes.target.create')}}" class="btn btn-success btn-sm">اضافة</a>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color:yellowgreen;">الاسم</span></th>
                                        <th><span style="color: yellowgreen;">اللجنة</span></th>
                                        <th><span style="color: yellowgreen">تحديث</span></th>
                                        <th><span style="color: yellowgreen">مسح</span></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($targets_commite as $target)
                                        <tr>
                                            <td>{{$target->id}}</td>
                                            <td>{!! $target->target !!}</td>
                                            <td>{{$target->committe->name}}</td>
                                            <td><a href="{{route('committes.target.edit',$target->id)}}"
                                                   class="btn btn-success btn-sm">تحديث</a></td>
                                            <td>
                                                <form action="{{route('committes.target.delete',$target->id)}}" method="POST">
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
