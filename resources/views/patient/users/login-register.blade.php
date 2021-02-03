@extends('socialvaidya.layouts.master')
@section('content')

<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <div class="header"></div>
        <!-- /Header -->

        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-8 offset-md-2">

                        <!-- Login Tab Content -->
                        <div class="account-content">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-7 col-lg-6 login-left">
                                    <img src="{{asset('assets/img/login-banner.png')}}" class="img-fluid" alt="Social Vaidya Login">
                                </div>
                                <div class="col-md-12 col-lg-6 login-right">
                                    <div class="login-header">
                                        <h3>Login <span>Social Vaidya</span></h3>
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
                                    <form method="post" action="{{url('/user-login-register')}}">
                                    {{ csrf_field() }}
                                        <div class="form-group form-focus">
                                            <input type="email" name="email" class="form-control floating">
                                            <label class="focus-label">Email</label>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input type="password" name="password" class="form-control floating">
                                            <label class="focus-label">Password</label>
                                        </div>
                                        <div class="text-right">
                                            <a class="forgot-link" href="{{url('/patient/forgot-password')}}">Forgot Password ?</a>
                                        </div>
                                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                                        <div class="login-or">
                                            <span class="or-line"></span>
                                            <span class="span-or">or</span>
                                        </div>
                                        <div class="row form-row social-login">
                                            <div class="col-6">
                                                <a href="#" class="btn btn-facebook btn-block"><i class="fa fa-facebook-f mr-1"></i> Login</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="#" class="btn btn-google btn-block"><i class="fa fa-google mr-1"></i> Login</a>
                                            </div>
                                        </div>
                                        <div class="text-center dont-have">Don’t have an account? <a href="{{url('/user-register')}}">Register</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Login Tab Content -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        @endsection