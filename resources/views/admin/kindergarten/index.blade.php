@extends('admin.layouts.master')

@section('styles')

@endsection
@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>برامج المركز<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">روضة الجمعية</li>
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
                                <h4 class="panel-title">جدول عرض  برامج المركز  </h4>
                                <a href="{{route('kindergarten.create')}}" class="btn btn-success btn-sm">اضافة</a>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped" id="example">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color:yellowgreen;">اسم البرنامج التابع للمركز</span></th>
                                        <th><span style="color: yellowgreen">تحديث</span></th>
                                        <th><span style="color: yellowgreen">مسح</span></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($kindergarten as $kind)
                                        <tr>
                                            <td>{{$kind->id}}</td>
                                            <td><a href="{{route('photoKind.add',$kind->id)}}">{{$kind->name}}</a></td>
                                            <td><a href="{{route('kindergarten.edit',$kind->id)}}"
                                                   class="btn btn-success btn-sm">تحديث</a></td>
                                            <td>
                                                <form action="{{route('kindergarten.destroy',$kind->id)}}" method="POST">
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
                                <h4 class="panel-title">جدول عرض صور الروضة  </h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped" id="example">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><span style="color:yellowgreen;">الصور</span></th>
                                        <th><span style="color: yellowgreen">مسح</span></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($photos as $photo)
                                        <tr>
                                            <td>{{$photo->id}}</td>
                                            <td>{{$photo->kindergarten->name}}</td>
                                            <td><img src="{{asset('images/'.$photo->image)}}" width="100" alt=""></td>
                                            <td>
                                                <form action="{{route('photoKind.destroy',$photo->id)}}" method="POST">
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
@section('scripts')

    <script>
        $(document).ready(function() {
            $('#example').dataTable();
        } );
    </script>
@endsection
