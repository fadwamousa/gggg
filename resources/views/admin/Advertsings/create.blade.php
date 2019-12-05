@extends('admin.layouts.master')

@section('content')
    <section class="page">

        @include('admin.layouts.right')

        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>اعلانات<small></small></h1>
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home">

                                        </i></a></li>
                                <li class="active">اعلانات</li>
                            </ol>
                        </div>
                    </div>

                </div><!-- end .page title-->
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <br>
                <div class="row">
                    <div class="col-md-9 gallery-col">

                        <form  action="{{route('advs.store')}}"
                               method="POST"
                               enctype="multipart/form-data">
                            @csrf

                            <input type="text" placeholder="اكتب وصف للاعلان" name="alt" class="form-control">
                            <br>
                            <div class="input-group control-group increment" >
                                <input type="file" name="image[]" class="form-control">

                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="button">
                                        <i class="glyphicon glyphicon-plus"></i>Add</button>
                                </div>
                            </div>
                            <div class="clone hide">
                                <div class="control-group input-group" style="margin-top:10px">
                                    <input type="file" name="image[]" class="form-control">

                                    <div class="input-group-btn">
                                        <button class="btn btn-danger" type="button">
                                            Remove</button>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" style="margin-top:10px">
                                Submit
                            </button>

                        </form>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div><div style="clear:both;"></div> </div>
    </section>
@stop

@section('scripts')

    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


    <script type="text/javascript">

        $(document).ready(function() {
            $(".btn-success").click(function(){
                var html = $(".clone").html();
                $(".increment").after(html);
            });
            $("body").on("click",".btn-danger",function(){
                $(this).parents(".control-group").remove();
            });
        });

    </script>


@stop
