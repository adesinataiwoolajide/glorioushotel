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

                <div class="card-title text-uppercase text-center py-3">USER REGISTRATION FORM</div>
                <form method="POST" action="{{ route('guest.save') }}">
                    @csrf
                     <div class="form-group">
                        <div class="position-relative has-icon-left">
                            <label for="exampleInputUsername" class="sr-only">Full Name</label>
                            <input type="text" id="exampleInputUsername" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter Full Name">
                            <div class="form-control-position">
                                <i class="icon-user"></i>
                            </div>
                            
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                       </div>
                    </div>
                    <div class="form-group">
                        <div class="position-relative has-icon-left">
                            <label for="exampleInputUsername" class="sr-only">Username</label>
                            <input type="email" id="exampleInputUsername" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter User Name">
                            <div class="form-control-position">
                                <i class="icon-envelope"></i>
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

                    <!--  <div class="form-group">
                        <div class="position-relative has-icon-left">
                            <label for="exampleInputPassword" class="sr-only">Repeat Password</label>
                            <input  id="exampleInputPassword" type="password" class="form-control{{ $errors->has('repeat') ? ' is-invalid' : '' }}" name="repeat" required placeholder="Repeat Your Password">

                            <div class="form-control-position">
                                  <i class="icon-lock"></i>
                            </div>
                            
                            @if ($errors->has('repeat'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('repeat') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div> -->
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
                    <input type="hidden" name="status" value="1">
                    <input type="hidden" name="is_admin" value="Guest">
                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">RGISTER</button>
                
                    <hr>
                    <p class="text-dark">Do not have an account? <a href="{{route('admin.login')}}"> Sign In</a></p>
                    <p class="text-dark">Back to website? <a href="{{route('index')}}"> Click here</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>

@endsection
