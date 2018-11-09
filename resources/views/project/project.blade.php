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
                    <div class="col-lg-6">
                        <div class="card-box">
                            {{--btn add--}}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="m-b-30">
                                        <a href="{{url('category/create')}}"><button  class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></button></a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="header-title m-t-0 m-b-30">Basic example</h4>
                            <table class="table m-0">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date created</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($data as $v)
                                <tr>
                                    <td>{{$v->title}}</td>
                                    <td>{{$v->description}}</td>
                                    <td>{{$v->created_date}}</td>
                                    <td>{{$v->is_active}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!-- end col -->



                </div>
                <!-- End row -->



            </div> <!-- container -->

        </div> <!-- content -->

        {{--<footer class="footer">--}}
            {{--2016 - 2017 © Adminto.--}}
        {{--</footer>--}}

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
@endsection
