@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>Gallery <small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">Gallery</li>
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
                                <h4 class="panel-title">جدول عرض الصور الخاصة بالعضوية</h4>
                                <a href="{{route('cards.create')}}" class="btn btn-success btn-sm">اضافة</a>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الصورة</th>
                                        <th style="color:yellowgreen">مسح</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cards as $card)
                                        <tr>
                                            <td>{{$card->id}}</td>
                                            <td><img src="{{asset('images/'.$card->image)}}"

                                                     class="img-responsive" width="150"></td>
                                            <td>

                                                <form action="{{route('cards.delete',['id'=>$card->id])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a href=""><button class="btn btn-danger btn-sm">حذف</button></a>

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
                                <h4 class="panel-title">جدول عرض الاستمارات</h4>
                                <a href="{{route('membership.card.create')}}" class="btn btn-success btn-sm">اضافة</a>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الاستمارة</th>
                                        <th>المرفق</th>
                                        <th>تعديل</th>
                                        <th style="color:yellowgreen">مسح</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($member as $m)
                                        <tr>
                                            <td>{{$m->id}}</td>
                                            <td>{{$m->name}}</td>
                                            <td><a href="{{Storage::url($m->attachment)}}">المرفق</a></td>
                                            <td><a href="{{route('membership.card.edit',$m->id)}}">تعديل</a></td>
                                            <td>

                                                <form action="{{route('membership.card.delete',['id'=>$m->id])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a href=""><button class="btn btn-danger btn-sm">حذف</button></a>

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
