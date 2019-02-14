@extends('layouts.app')

@section('content')
 <div id="wrapper">

    <div class="card card-authentication1 mx-auto my-5">
        @include('layouts.message')
        <div class="card-body">
            <div class="card-content p-2">
                
                <div class="text-center">
                    <a href="{{route('index')}}">
                        <img src="{{asset('styling/assets/images/logo.jpg')}}" style="height: 100px;" alt="logo icon">
                    </a>
                </div>

                <div class="card-title text-uppercase text-center py-3">USER ACCOUNT RETRIVE FORM</div>
                <h6 align="center">Please Enter Your E-Mail</h6>
                <form method="POST" action="{{ route('guest.details') }}">
                    @csrf
                     
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
                    
                    <input type="hidden" name="status" value="1">
                    <input type="hidden" name="is_admin" value="Guest">
                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">RETRIVE ACCOUNT</button>
                
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
