@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>مركز ورود الحياة <small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">مركز ورود الحياة</li>
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
                                <h4 class="panel-title">جدول عرض  المعلومات الخاصة بالمركز</h4>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color:yellowgreen;">الاسم</span></th>
                                        <th><span style="color: yellowgreen;">الرؤية</span></th>
                                        <th><span style="color: yellowgreen">الرسالة</span></th>
                                        <th><span style="color: yellowgreen">العنوان</span></th>
                                        <th><span style="color: yellowgreen;">الهاتف</span></th>
                                        <th><span style="color: yellowgreen;">الصورة</span></th>
                                        <th><span style="color: yellowgreen">تحديث</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($centers as $center)
                                        <tr>
                                            <td>{{$center->id}}</td>
                                            <td>{{$center->name}}</td>
                                            <td>{!! $center->vision !!}</td>
                                            <td>{!! $center->message !!}</td>
                                            <td>{{$center->address}}</td>
                                            <td>
                                                @foreach($center->phones as $phone)

                                                    {{$phone->phone}}

                                                @endforeach
                                            </td>
                                            <td><img src="{{asset('images/'.$center->image)}}" width="100" alt=""></td>

                                            <td><a href="{{route('centers.create',$center->id)}}"
                                                   class="btn btn-success btn-sm">تحديث</a></td>

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
                                <h4 class="panel-title">جدول عرض  الرسائل الموجهة لكل ام</h4>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color: yellowgreen;">العنوان</span></th>
                                        <th><span style="color: yellowgreen">النصوص</span></th>
                                        <th><span style="color: yellowgreen">تحديث</span></th>
                                        <th><span style="color: yellowgreen">مسح</span></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($messages as $message)
                                        <tr>
                                            <td>{{$message->id}}</td>
                                            <td>{{$message->heading}}</td>
                                            <td>{!! $message->body !!}</td>

                                            <td><a href="{{route('messages.edit',$message->id)}}"
                                                   class="btn btn-success btn-sm">تحديث</a></td>

                                            <td>
                                                <form action="{{route('messages.destroy',$message->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger btn-sm" value="مسح">
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
                                <h4 class="panel-title">جدول عرض  الاعمال التطوعية</h4>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color: yellowgreen;">المشاريع</span></th>
                                        <th><span style="color: yellowgreen">تحديث</span></th>
                                        <th><span style="color: yellowgreen">مسح</span></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($works as $work)
                                        <tr>
                                            <td>{{$work->id}}</td>
                                            <td>{!! $work->projects !!}</td>

                                            <td><a href="{{route('works.edit',$work->id)}}"
                                                   class="btn btn-success btn-sm">تحديث</a></td>

                                            <td>
                                                <form action="{{route('works.destroy',$work->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger btn-sm" value="مسح">
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

@section('scripts')

    <script>
        $(document).ready(function() {
            $('#example').dataTable();
        } );
    </script>
@endsection
