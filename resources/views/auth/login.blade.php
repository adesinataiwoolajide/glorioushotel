@extends('layouts.app')

@section('content')
 <div id="wrapper">

    <div class="card card-authentication1 mx-auto my-5">
        @include('layouts.message')
        <div class="card-body">
            <div class="card-content p-2">
                
                <div class="text-center"><a href="{{route('index')}}">
                    <img src="{{asset('styling/assets/images/logo.jpg')}}" style="height: 100px;" alt="logo icon"></a>
                </div>

                <div class="card-title text-uppercase text-center py-3">Sign In</div>
                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf

                    <div class="form-group">
                        <div class="position-relative has-icon-left">
                            <label for="exampleInputUsername" class="sr-only">Username</label>
                            <input type="email" id="exampleInputUsername" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter User Name">
                            <div class="form-control-position">
                                <i class="icon-user"></i>
                            </div>
                            
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                       </div>
                    </div>
                    <div class="form-group">
                        <div class="position-relative has-icon-left">
                            <label for="exampleInputPassword" class="sr-only">Password</label>
                            <input  id="exampleInputPassword" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter Your Password">

                            <div class="form-control-position">
                                  <i class="icon-lock"></i>
                            </div>
                            
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-row mr-0 ml-0">
                        <div class="form-group col-6">
                            <div class="icheck-material-primary">
                               <input type="checkbox" id="user-checkbox" checked="" />
                               <label for="user-checkbox">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group col-6 text-right">
                            <a href="{{route('guest.reset')}}">Reset Password</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Sign In</button>
                
                    <hr>
                    <p class="text-dark">Do not have an account? <a href="{{route('guest.registration')}}"> Sign Up here</a></p>
                    <p class="text-dark">Back to website? <a href="{{route('index')}}"> Click here</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!-- <div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                @include('layouts.message')
                <div class="card-header" align="center">
                    <img src="{{asset('styling/assets/images/logo.jpg')}}" style="width: 100px; height: 100px;" align="center">
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('LOGIN') }}
                                </button>
                                
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
