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

                        <!-- Login Tab Content -->
                        <div class="account-content">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-7 col-lg-6 login-left">
                                    <img src="assets/img/login-banner.png" class="img-fluid" alt="Social Vaidya Login">
                                </div>
                                <div class="col-md-12 col-lg-6 login-right">
                                    <div class="login-header">
                                        <h3>Login <span>Admin</span></h3>
                                    </div>
                                    @if(Session::has('flash_message_success'))
                        <div class="alert alert-sm alert-success alert-block" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{!! session('flash_message_success') !!}</strong>
                        </div>
                        @endif
                                    <form method="post" action="{{ url('/alllogin')}}">
                                    {{ csrf_field() }}
                                        <div class="form-group form-focus">
                                            <input type="email" name="email" class="form-control floating">
                                            <label class="focus-label">Email</label>
                                        </div>
                                           <div class="form-group">
                                                <select class="form-control" name="category" id="exampleFormControlSelect1">
                                                @foreach($category as $cat)
                                                        <option>{{$cat->category_name}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        <div class="form-group form-focus">
                                            <input type="password" name="password" class="form-control floating">
                                            <label class="focus-label">Password</label>
                                        </div>
                                        <div class="text-right">
                                            <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                                        </div>
                                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                                        <div class="login-or">
                                            <span class="or-line"></span>
                                            <span class="span-or">or</span>
                                        </div>
                                     
                                        <div class="text-center dont-have">Don’t have an account? <a href="{{url('/allregister')}}">Register</a></div>
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

    </div>
    <!-- /Main Wrapper -->

</body>
@endsection