@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>عضاء مجلس الادارة<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">أعضاء مجلس الادارة</li>
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
                                <a href="{{route('membership.create')}}" class="btn btn-success btn-sm">اضافة</a>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color:yellowgreen;">الاسم</span></th>
                                        <th><span style="color: yellowgreen;">المسمي الوظيفي</span></th>
                                        <th><span style="color: yellowgreen">تاريخ التعين</span></th>
                                        <th><span style="color: yellowgreen">تحديث</span></th>
                                        <th><span style="color: yellowgreen">مسح</span></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($membership as $member)
                                        <tr>
                                            <td>{{$member->id}}</td>
                                            <td>{{$member->name}}</td>
                                            <td>{{$member->career_name}}</td>
                                            <td>
                                                {{Hijrian::hijri($member->date_hiring)}}
                                            </td>
                                            <td><a href="{{route('membership.edit',$member->id)}}"
                                                   class="btn btn-success btn-sm">تحديث</a></td>
                                            <td>
                                                <form action="{{route('membership.destroy',$member->id)}}" method="POST">
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
