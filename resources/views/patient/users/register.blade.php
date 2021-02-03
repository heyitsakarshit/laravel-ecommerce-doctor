@extends('socialvaidya.layouts.master')
@section('content')

<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        

        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-8 offset-md-2">

                        <!-- Register Content -->
                        <div class="account-content">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-7 col-lg-6 login-left">
                                    <img src="{{asset('assets/img/login-banner.png')}}" class="img-fluid" alt="Social Vaidya Register">
                                </div>
                                <div class="col-md-12 col-lg-6 login-right">
                                    <div class="login-header">
                                        <h3>Patient Register </h3>
                                    </div>
                                    @if(Session::has('flash_message_error'))
            <div class="alert alert-sm alert-danger alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
            <strong>{!! session('flash_message_error') !!}</strong>
            </div>
            @endif
                            @if(Session::has('flash_message_success'))
                        <div class="alert alert-sm alert-success alert-block" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{!! session('flash_message_success') !!}</strong>
                        </div>
                        @endif
                                    <!-- Register Form -->
                                    <form action="{{url('/user-register')}}" method="post">
                                    {{ csrf_field() }}
                                        <div class="form-group form-focus">
                                            <input type="text" name="name" class="form-control floating">
                                            <label class="focus-label">Name</label>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input type="tel" name="phone" class="form-control floating">
                                            <label class="focus-label">Mobile Number</label>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input type="email" name="email" class="form-control floating">
                                            <label class="focus-label">Email</label>
                                        </div>
                                        <!-- <div class="form-group form-focus">
                                            <input type="text"  class="form-control floating" maxlength="6" style="letter-spacing: 15px;">
                                            <label class="focus-label">OTP</label>
                                        </div> -->
                                        <div class="form-group">
                                    <input class="form-control" name="password"  id="pswd1" type="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password_confirmation" type="password" id="pswd2" placeholder="Confirm Password">
                                </div>
                                        <div class="text-right">
                                            <a class="forgot-link" href="{{url('/user-login-register')}}">Already have an account?</a>
                                        </div>
                                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
                                        <div class="login-or">
                                            <span class="or-line"></span>
                                            <span class="span-or">or</span>
                                        </div>
                                        <div class="row form-row social-login">
                                            <div class="col-6">
                                                <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /Register Form -->

                                </div>
                            </div>
                        </div>
                        <!-- /Register Content -->

                    </div>
                </div>

            </div>

        </div>
        <!-- /Page Content -->

          <!-- Footer -->
        <div class="footer"></div>
        <!-- /Footer -->

    </div>
   

@endsection