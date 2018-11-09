@extends('layouts.template')
@section('content')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="{{url('project/create')}}">
                        <button type="button" class="btn btn-purple btn-rounded w-md waves-effect waves-light m-b-20">
                            Create Project
                        </button>
                    </a>
                </div>
                {{--<div class="col-sm-8">--}}
                    {{--<div class="project-sort pull-right">--}}
                        {{--<div class="project-sort-item">--}}
                            {{--<form class="form-inline">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Category :</label>--}}
                                    {{--<select class="form-control input-sm">--}}
                                        {{--<option>All Projects</option>--}}
                                        {{--@foreach($data as $v)--}}
                                            {{--<option>{{$v->cate_title}}</option>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}

                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div><!-- end col-->--}}
            </div>
            <!-- end row -->

            @foreach($data as $v)
                <div class="flex-row">
                    <div class="col-lg-4">
                        <div class="card-box project-box">
                            <h4 class="m-t-0 m-b-5"><a href="{{$v->url}}" class="text-inverse">{{$v->title}}</a></h4>

                            <p class="text-success text-uppercase m-b-20 font-13">{{$v->cate_title}}</p>
                            <p class="text-muted font-13">
                                {{$v->description}}<a href="{{$v->url}}" class="font-600 text-muted">view more</a>
                            </p>
                        </div>
                    </div><!-- end col-->
                </div>
                <!-- end row -->
            @endforeach
        </div> <!-- container -->

    </div> <!-- content -->
</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
@endsection
