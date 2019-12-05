@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>users  <small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li class="active">قائمة المستخدمين(المدراء)</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- end .page title-->
                <div class="row users-row">
                    @foreach($users as $user)
                        <div class="col-md-6">
                            <div class="user-col">
                                <div class="media">

                                    <div class="media-body">

                                        <h3 class="follower-name">{{$user->name}}</h3>
                                        <div><i class="fa fa-map-marker"></i>{{$user->email}}</div>
                                        <div><i class="fa fa-briefcase"></i>{{$user->role ? $user->role->name  : ''}}</div>

                                        <div style="height: 20px;"></div>

                                        <div class="btn-toolbar">
                                            <div class="btn-group">
                                                <a href="{{route('users.edit',$user->id)}}">
                                                    <button class="btn btn-info btn-3d btn-sm">
                                                        <i class="fa fa-envelope-o"></i>تعديل</button>
                                                </a>
                                            </div><!-- btn-group -->
                                            <div class="btn-group">
                                                <form action="{{route('users.destroy',$user->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger btn-3d btn-sm">
                                                        <i class="fa fa-check"></i> حذف</button>
                                                </form>
                                            </div><!-- btn-group -->

                                        </div><!-- btn-toolbar -->

                                    </div><!-- media-body -->
                                </div>
                            </div>
                        </div><!--.col-6-->
                    @endforeach

                </div>
            </div><div style="clear:both;"></div> </div>
@endsection