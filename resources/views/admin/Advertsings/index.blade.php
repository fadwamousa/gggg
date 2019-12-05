@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>اعلانات <small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">اعلانات</li>
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
                                <h4 class="panel-title">جدول عرض الاعلانات</h4>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الاعلان</th>
                                        <th>الحدث</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($advs as $adv)
                                        <tr>
                                            <td>{{$adv->id}}</td>
                                            <td><img src="{{asset('advs/'.$adv->image)}}"
                                                     alt="{{$adv->alt}}"
                                                     class="img-responsive" width="150"></td>
                                            <td>

                                                <form action="{{route('advs.destroy',['id'=>$adv->id])}}" method="POST">
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
