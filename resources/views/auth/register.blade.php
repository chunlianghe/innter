@include('common.header')

<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="text-center">
        <a href="index.html" class="logo">
            <img class="logo-nor" src="https://oshara.ca/public/assets/images/site/logo.svg" height="34px"
                 alt="Oshara Inc">
        </a>
    </div>

    <div class="m-t-40 card-box">
        <div class="text-center">
            <h4 class="text-uppercase font-bold m-b-0">Register</h4>
        </div>

        <div class="panel-body">
            <form class="form-horizontal m-t-20" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}" required="" placeholder="Username">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}" required="" placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="password" required="" placeholder="password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" name="password_confirmation" placeholder="Confirm Password">
                        </div>
                    </div>

                    {{--<div class="form-group">--}}
                        {{--<div class="col-xs-12">--}}
                            {{--<div class="checkbox checkbox-custom">--}}
                                {{--<input id="checkbox-signup" type="checkbox" checked="checked">--}}
                                {{--<label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- end card-box -->

    <div class="row">
        <div class="col-sm-12 text-center">
            <p class="">Already have account?<a href="{{ route('login') }}" class="text-primary m-l-5"><b>Sign
                        In</b></a></p>
        </div>
    </div>

</div>
