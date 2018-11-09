@include('common.header')
<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="text-center">
        <a href="index" class="logo">
            <img class="logo-nor" src="https://oshara.ca/public/assets/images/site/logo.svg" height="34px" alt="Oshara Inc">
        </a>
    </div>
    <div class="m-t-40 card-box">
        <div class="text-center">
            <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
        </div>
        <div class="panel-body">
            <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group ">
                    <div class="col-xs-12">

                        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">

                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-custom">

                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label for="checkbox-signup">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group text-center m-t-30">
                    <div class="col-xs-12">

                        <button type="submit" class="btn btn-primary btn btn-custom btn-bordred btn-block waves-effect waves-light">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <a href="{{ route('password.request') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 text-center">
            <p class=""><a href="{{ route('register') }}" class="text-primary m-l-5"><b>Register</b></a></p>
        </div>
    </div>
</div>
<!-- end wrapper page -->
@include('common.footer')


