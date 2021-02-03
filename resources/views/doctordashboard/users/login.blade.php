<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Social Vaidya - Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('pharmacydashboard/assets/img/favicon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('pharmacydashboard/assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('pharmacydashboard/assets/css/font-awesome.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('pharmacydashboard/assets/css/style.css')}}">

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="{{asset('pharmacydashboard/assets/img/logo-white.png')}}" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login to Doctor Dashboard</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
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
                            <!-- Form -->
                            <form action="{{url('/doctoradmin')}}" method="post">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <input class="form-control" name="email" type="text" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" type="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                                </div>
                            </form>
                            <!-- /Form -->

                            <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">or</span>
                            </div>

                            <!-- Social Login -->
                            <div class="social-login">
                                <span>Login with</span>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
                            </div>
                            <!-- /Social Login -->

                            <div class="text-center dont-have">Don’t have an account? <a href="{{url('/doctorregister')}}">Register</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{asset('pharmacydashboard/assets/js/jquery-3.2.1.min.js')}}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{asset('pharmacydashboard/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('pharmacydashboard/assets/js/bootstrap.min.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('pharmacydashboard/assets/js/script.js')}}"></script>

</body>

</html>