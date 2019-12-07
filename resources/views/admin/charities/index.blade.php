@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>الجمعية <small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">الجمعية</li>
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
                                <h4 class="panel-title">جدول عرض  المعلومات الخاصة بالجمعية</h4>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color:yellowgreen;">الاسم</span></th>
                                        <th><span style="color: yellowgreen;">الرؤية</span></th>
                                        <th><span style="color: yellowgreen">الرسالة</span></th>
                                        <th><span style="color: yellowgreen;">وقف الجمعية</span></th>
                                        <th><span style="color: yellowgreen">تحديث</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($charities as $charity)
                                        <tr>
                                            <td>{{$charity->id}}</td>
                                            <td>{{$charity->name}}</td><span style="color: yellowgreen">{{$charity->slug}}</span>
                                            <td>{{$charity->vision}}</td>
                                            <td>{{$charity->message}}</td>
                                            <td>{{$charity->wakf_body}}</td>
                                            <td><a href="{{route('charities.create',$charity->id)}}" class="btn btn-success btn-sm">تحديث</a></td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>

                        </div><!-- End .panel -->
                    </div><!--end .col-->
                    <div class="col-md-12">
                        <div class="panel panel-card margin-b-30 ">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title">جدول عرض تفاصيل وقف الجمعية</h4>
                                <a href="{{route('detail.add')}}" class="btn btn-success">اضافة</a>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color:yellowgreen">العناوين</span></th>
                                        <th><span style="color:yellowgreen">النصوص</span></th>
                                        <th><span style="color: yellowgreen">تحديث</span></th>
                                        <th><span style="color: yellowgreen;">مسح</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($details as $detail)
                                        <tr>
                                            <td>{{$detail->id}}</td>
                                            <td>{{$detail->heading}}</td>
                                            <td>{{$detail->body}}</td>
                                            <td><a href="{{route('details.edit',$detail->id)}}" class="btn btn-warning btn-sm">تحديث</a></td>
                                            <td>
                                                <form action="{{route('details.delete',$detail->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <input type="submit" value="مسح" class="btn btn-danger btn-sm">

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>

                        </div><!-- End .panel -->
                    </div><!--end .col-->
                    <div class="col-md-12">
                        <div class="panel panel-card margin-b-30 ">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title">جدول عرض تفاصيل انواع وقف الجمعية</h4>
                                <a href="{{route('wakf.create')}}" class="btn btn-success">اضافة</a>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color:yellowgreen">العنوان</span></th>
                                        <th><span style="color:yellowgreen">النص</span></th>
                                        <th><span style="color:yellowgreen">الصورة</span></th>
                                        <th><span style="color: yellowgreen">تحديث</span></th>
                                        <th><span style="color: yellowgreen;">مسح</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($wakf as $w)
                                        <tr>
                                            <td>{{$w->id}}</td>
                                            <td>{!! $w->heading !!}</td>
                                            <td>{!! $w->body !!}</td>
                                            <td><img src="{{asset('images/'.$w->image)}}" width="100" alt=""></td>
                                            <td><a href="{{route('wakf.edit',$w->id)}}" class="btn btn-warning btn-sm">تحديث</a></td>
                                            <td>
                                                <form action="{{route('wakf.destroy',$w->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <input type="submit" value="مسح" class="btn btn-danger btn-sm">

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>

                        </div><!-- End .panel -->
                    </div><!--end .col-->
                    <div class="col-md-12">
                        <div class="panel panel-card margin-b-30 ">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title">اهداف الجمعية</h4>
                                <a href="{{route('target.add')}}" class="btn btn-success">اضافة</a>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color:yellowgreen">الصورة</span></th>
                                        <th><span style="color:yellowgreen">النص</span></th>
                                        <th><span style="color: yellowgreen">تحديث</span></th>
                                        <th><span style="color: yellowgreen;">مسح</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($targets as $target)
                                        <tr>
                                            <td>{{$target->id}}</td>
                                            <td><img src="{{asset('images/'.$target->image)}}" width="150" height="150" alt=""></td>
                                            <td>{{$target->body}}</td>
                                            <td><a href="{{route('target.edit',$target->id)}}" class="btn btn-warning btn-sm">تحديث</a></td>
                                            <td>
                                                <form action="{{route('target.delete',$target->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <input type="submit" value="مسح" class="btn btn-danger btn-sm">

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>

                        </div><!-- End .panel -->
                    </div><!--end .col-->
                </div>
            </div><div style="clear:both;"></div> </div>
    </section>
@stop
