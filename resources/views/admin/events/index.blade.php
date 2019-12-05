@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>الاحداث والفاعليات<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">الحدث</li>
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
                                <h4 class="panel-title">جدول عرض الاحداث والفاعليات</h4>
                                <a href="{{route('events.create')}}" class="btn btn-success btn-sm">اضافة</a>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color: yellowgreen;">اسم الحدث</span></th>
                                        <th><span style="color: yellowgreen">تحديث</span></th>
                                        <th><span style="color: yellowgreen">مسح</span></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($events as $event)
                                        <tr>
                                            <td>{{$event->id}}</td>
                                            <td>{{$event->event_name}}</td>

                                            <td><a href="{{route('events.edit',$event->id)}}"
                                                   class="btn btn-success btn-sm">تحديث</a></td>
                                            <td>
                                                <form action="{{route('events.delete',$event->id)}}" method="POST">
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
                                <h4 class="panel-title">جدول عرض الصور الخاصية بالاحداث والفاعليات</h4>
                                <a href="{{route('photos.create')}}" class="btn btn-success btn-sm">اضافة</a>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color: yellowgreen;">الصورة</span></th>
                                        <th><span style="color: yellowgreen">اسم الحدث</span></th>
                                        <th><span style="color: yellowgreen">مسح</span></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($photos as $photo)
                                        <tr>
                                            <td>{{$photo->id}}</td>
                                            <td><img src="{{asset('images/'.$photo->path)}}" width="100" alt=""></td>
                                            <td>{{$photo->event->event_name}}</td>

                                            <td>
                                                <form action="{{route('photos.delete',$photo->id)}}" method="POST">
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
