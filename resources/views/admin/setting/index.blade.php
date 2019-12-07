@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>اعدادت الموقع<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">الاعدادت</li>
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
                                <h4 class="panel-title">جدول عرض  المعلومات الخاصة باعدات الموقع</h4>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th><span style="color:yellowgreen;">الاسم</span></th>
                                        <th><span style="color: yellowgreen;">البريد الالكتروني</span></th>
                                        <th><span style="color: yellowgreen">شعار الموقع</span></th>
                                        <th><span style="color: yellowgreen">تويتر</span></th>
                                        <th><span style="color: yellowgreen;">انستغرام</span></th>
                                        <th><span style="color: yellowgreen;">سناب شات</span></th>
                                        <th><span style="color: yellowgreen;">الهواتف الخاصة بادارة الموقع</span></th>
                                        <th><span style="color: yellowgreen">تحديث</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($settings as $setting)
                                        <tr>
                                            <td>{{$setting->name}}</td>
                                            <td>{{ $setting->email }}</td>
                                            <td><img src="{{asset('/images/'.$setting->logo)}}" width="100" alt=""></td>
                                            <td><a target="_blank" href="{{$setting->twitter}}">تويتر</a></td>
                                            <td><a target="_blank" href="{{$setting->insta}}">انستغرام</a></td>
                                            <td><a target="_blank" href="{{$setting->snapchat}}">سناب شات</a></td>
                                            <td>
                                                @foreach($setting->phones as $phone)

                                                    -{{$phone->phone_number}}

                                                @endforeach
                                            </td>

                                            <td><a href="{{route('setting.create',$setting->id)}}"
                                                   class="btn btn-success btn-sm">تحديث</a></td>

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

