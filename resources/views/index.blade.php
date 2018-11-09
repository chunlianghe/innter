@extends('layouts.template')
@section('content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
{{--<div class="content-page">--}}
    {{--<!-- Start content -->--}}
    {{--<div class="content">--}}
        {{--<div class="container">--}}
            {{--<!-- start row -->--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-3 col-md-6">--}}
                    {{--<div class="card-box">--}}
                        {{--<div class="dropdown pull-right">--}}
                            {{--<a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">--}}
                                {{--<i class="zmdi zmdi-more-vert"></i>--}}
                            {{--</a>--}}
                            {{--<ul class="dropdown-menu" role="menu">--}}
                                {{--<li><a href="#">Action</a></li>--}}
                                {{--<li><a href="#">Another action</a></li>--}}
                                {{--<li><a href="#">Something else here</a></li>--}}
                                {{--<li class="divider"></li>--}}
                                {{--<li><a href="#">Separated link</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                        {{--<h4 class="header-title m-t-0 m-b-30">Total Revenue</h4>--}}

                        {{--<div class="widget-chart-1">--}}
                            {{--<div class="widget-chart-box-1">--}}
                                {{--<input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "--}}
                                       {{--data-bgColor="#F9B9B9" value="58"--}}
                                       {{--data-skin="tron" data-angleOffset="180" data-readOnly=true--}}
                                       {{--data-thickness=".15"/>--}}
                            {{--</div>--}}

                            {{--<div class="widget-detail-1">--}}
                                {{--<h2 class="p-t-10 m-b-0"> 256 </h2>--}}
                                {{--<p class="text-muted">Revenue today</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div><!-- end col -->--}}

                {{--<div class="col-lg-3 col-md-6">--}}
                    {{--<div class="card-box">--}}
                        {{--<div class="dropdown pull-right">--}}
                            {{--<a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">--}}
                                {{--<i class="zmdi zmdi-more-vert"></i>--}}
                            {{--</a>--}}
                            {{--<ul class="dropdown-menu" role="menu">--}}
                                {{--<li><a href="#">Action</a></li>--}}
                                {{--<li><a href="#">Another action</a></li>--}}
                                {{--<li><a href="#">Something else here</a></li>--}}
                                {{--<li class="divider"></li>--}}
                                {{--<li><a href="#">Separated link</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                        {{--<h4 class="header-title m-t-0 m-b-30">Sales Analytics</h4>--}}

                        {{--<div class="widget-box-2">--}}
                            {{--<div class="widget-detail-2">--}}
                                {{--<span class="badge badge-success pull-left m-t-20">32% <i--}}
                                        {{--class="zmdi zmdi-trending-up"></i> </span>--}}
                                {{--<h2 class="m-b-0"> 8451 </h2>--}}
                                {{--<p class="text-muted m-b-25">Revenue today</p>--}}
                            {{--</div>--}}
                            {{--<div class="progress progress-bar-success-alt progress-sm m-b-0">--}}
                                {{--<div class="progress-bar progress-bar-success" role="progressbar"--}}
                                     {{--aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"--}}
                                     {{--style="width: 77%;">--}}
                                    {{--<span class="sr-only">77% Complete</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div><!-- end col -->--}}

                {{--<div class="col-lg-3 col-md-6">--}}
                    {{--<div class="card-box">--}}
                        {{--<div class="dropdown pull-right">--}}
                            {{--<a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">--}}
                                {{--<i class="zmdi zmdi-more-vert"></i>--}}
                            {{--</a>--}}
                            {{--<ul class="dropdown-menu" role="menu">--}}
                                {{--<li><a href="#">Action</a></li>--}}
                                {{--<li><a href="#">Another action</a></li>--}}
                                {{--<li><a href="#">Something else here</a></li>--}}
                                {{--<li class="divider"></li>--}}
                                {{--<li><a href="#">Separated link</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                        {{--<h4 class="header-title m-t-0 m-b-30">Statistics</h4>--}}

                        {{--<div class="widget-chart-1">--}}
                            {{--<div class="widget-chart-box-1">--}}
                                {{--<input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"--}}
                                       {{--data-bgColor="#FFE6BA" value="80"--}}
                                       {{--data-skin="tron" data-angleOffset="180" data-readOnly=true--}}
                                       {{--data-thickness=".15"/>--}}
                            {{--</div>--}}
                            {{--<div class="widget-detail-1">--}}
                                {{--<h2 class="p-t-10 m-b-0"> 4569 </h2>--}}
                                {{--<p class="text-muted">Revenue today</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div><!-- end col -->--}}

                {{--<div class="col-lg-3 col-md-6">--}}
                    {{--<div class="card-box">--}}
                        {{--<div class="dropdown pull-right">--}}
                            {{--<a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">--}}
                                {{--<i class="zmdi zmdi-more-vert"></i>--}}
                            {{--</a>--}}
                            {{--<ul class="dropdown-menu" role="menu">--}}
                                {{--<li><a href="#">Action</a></li>--}}
                                {{--<li><a href="#">Another action</a></li>--}}
                                {{--<li><a href="#">Something else here</a></li>--}}
                                {{--<li class="divider"></li>--}}
                                {{--<li><a href="#">Separated link</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                        {{--<h4 class="header-title m-t-0 m-b-30">Daily Sales</h4>--}}

                        {{--<div class="widget-box-2">--}}
                            {{--<div class="widget-detail-2">--}}
                                {{--<span class="badge badge-pink pull-left m-t-20">32% <i--}}
                                        {{--class="zmdi zmdi-trending-up"></i> </span>--}}
                                {{--<h2 class="m-b-0"> 158 </h2>--}}
                                {{--<p class="text-muted m-b-25">Revenue today</p>--}}
                            {{--</div>--}}
                            {{--<div class="progress progress-bar-pink-alt progress-sm m-b-0">--}}
                                {{--<div class="progress-bar progress-bar-pink" role="progressbar"--}}
                                     {{--aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"--}}
                                     {{--style="width: 77%;">--}}
                                    {{--<span class="sr-only">77% Complete</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div><!-- end col -->--}}
            {{--</div>--}}
            {{--<!-- end row -->--}}
        {{--</div> <!-- container -->--}}

    {{--</div> <!-- content -->--}}

    {{--<footer class="footer text-right">--}}
        {{--2014 - 2018 © Oshara.--}}
    {{--</footer>--}}

{{--</div>--}}


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<!-- Right Sidebar -->
<div class="side-bar right-bar">
    <a href="javascript:void(0);" class="right-bar-toggle">
        <i class="zmdi zmdi-close-circle-o"></i>
    </a>
    <h4 class="">Notifications</h4>
    <div class="notification-list nicescroll">
        <ul class="list-group list-no-border user-list">
            <li class="list-group-item">
                <a href="#" class="user-list-item">
                    <div class="avatar">
                        <img src="assets/images/users/avatar-2.jpg" alt="">
                    </div>
                    <div class="user-desc">
                        <span class="name">Michael Zenaty</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">2 hours ago</span>
                    </div>
                </a>
            </li>
            <li class="list-group-item">
                <a href="#" class="user-list-item">
                    <div class="icon bg-info">
                        <i class="zmdi zmdi-account"></i>
                    </div>
                    <div class="user-desc">
                        <span class="name">New Signup</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">5 hours ago</span>
                    </div>
                </a>
            </li>
            <li class="list-group-item">
                <a href="#" class="user-list-item">
                    <div class="icon bg-pink">
                        <i class="zmdi zmdi-comment"></i>
                    </div>
                    <div class="user-desc">
                        <span class="name">New Message received</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">1 day ago</span>
                    </div>
                </a>
            </li>
            <li class="list-group-item active">
                <a href="#" class="user-list-item">
                    <div class="avatar">
                        <img src="assets/images/users/avatar-3.jpg" alt="">
                    </div>
                    <div class="user-desc">
                        <span class="name">James Anderson</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">2 days ago</span>
                    </div>
                </a>
            </li>
            <li class="list-group-item active">
                <a href="#" class="user-list-item">
                    <div class="icon bg-warning">
                        <i class="zmdi zmdi-settings"></i>
                    </div>
                    <div class="user-desc">
                        <span class="name">Settings</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">1 day ago</span>
                    </div>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- /Right-bar -->

</div>
<!-- END wrapper -->
@endsection
