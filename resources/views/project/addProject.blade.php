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
                    <div class="col-sm-12">
                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30">Project</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="m-b-5"><b>Validation Project</b></h5>

                                    {{--message error--}}
                                    <div class="text-muted font-13 m-b-30">
                                        @if(count($errors)>0)
                                            <div class="mark">
                                                @if(is_object($errors))
                                                    @foreach($errors->all() as $error)
                                                        <p>{{$error}}</p>
                                                    @endforeach
                                                @else
                                                    <p>{{$errors}}</p>
                                                @endif
                                            </div>
                                        @endif
                                    </div>

                                    <form class="form-horizontal group-border-dashed" action="{{url('project')}}" method="post">
                                        {{--引进提交csrf 必须项目--}}
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Project name</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" required placeholder="Catecory name" name="title"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Url</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" required placeholder="Url" name="url"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-6">
                                                <textarea required class="form-control" name="description"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Category</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="project_fk_category_id">
                                                    <option value="">Select category</option>
                                                    @foreach($data as $v)
                                                        <option value="{{$v->category_id}}">{{$v->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9 m-t-15">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- end col -->


                            </div><!-- end row -->

                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        {{--<footer class="footer">--}}
            {{--2016 - 2017 © Adminto.--}}
        {{--</footer>--}}

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
@endsection('content')
