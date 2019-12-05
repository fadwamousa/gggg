@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>الحسابات البنكية <small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">الحسابات البنكية</li>
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
                                <h4 class="panel-title">جدول عرض الحسابات البنكية</h4>
                                <a href="{{route('accounts.create')}}" class="btn btn-success btn-sm">اضافة</a>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color:yellowgreen;">اسم البنك</span></th>
                                        <th><span style="color: yellowgreen;">اسم الحساب</span></th>
                                        <th><span style="color: yellowgreen">رقم الحساب</span></th>
                                        <th><span style="color: yellowgreen;">رقم الايبان</span></th>
                                        <th><span style="color: yellowgreen">صورة الحساب</span></th>
                                        <th><span style="color: yellowgreen;">تحديث</span></th>
                                        <th><span style="color: yellowgreen;">مسح</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($accounts as $account)
                                        <tr>
                                            <td>{{$account->id}}</td>
                                            <td>{{$account->bank_name}}</td>
                                            <td>{{$account->account_name}}</td>
                                            <td>{{$account->account_number}}</td>
                                            <td>{{$account->IBAN_number}}</td>
                                            <td><img src="{{asset('images/'.$account->image)}}" width="100" alt=""></td>
                                            <td><a href="{{route('accounts.edit',$account->id)}}" class="btn btn-success btn-sm">تحديث</a></td>
                                            <td>
                                                <form action="{{route('accounts.destroy',$account->id)}}" method="POST">
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
