@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>الرسائل المرسلة الي البريد الالكتروني الخاص بالموقع<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">رسائل التواصل</li>
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
                                <h4 class="panel-title">جدول عرض رسائل التواصل</h4>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th><span style="color:yellowgreen;">اسم المرسل</span></th>
                                        <th><span style="color: yellowgreen;"> بريد المرسل</span></th>
                                        <th><span style="color: yellowgreen">هاتف المرسل</span></th>
                                        <th><span style="color: yellowgreen">رسالة المرسل</span></th>
                                        <th><span style="color: yellowgreen;">مسح</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $contact)
                                        <tr>

                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->phone}}</td>
                                            <td>{{$contact->message}}</td>
                                            <td>
                                                <form action="{{route('contacts.destroy',$contact->id)}}" method="POST">
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
