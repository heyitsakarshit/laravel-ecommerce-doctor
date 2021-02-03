<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Social Vaidya - Pharmacy Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('pharmacydashboard/assets/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('pharmacydashboard/assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('pharmacydashboard/assets/css/font-awesome.min.css')}}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('pharmacydashboard/assets/css/feathericon.min.css')}}">
		
		<link rel="stylesheet" href="{{asset('pharmacydashboard/assets/plugins/morris/morris.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('pharmacydashboard/assets/css/style.css')}}">
		
		<!--[if lt IE 9]>
			<script src="{{asset('pharmacydashboard/assets/js/html5shiv.min.js')}}"></script>
			<script src="{{asset('pharmacydashboard/assets/js/respond.min.js')}}"></script>
		<![endif]-->
    </head>
    <body>

    @include('pharmacydashboard.layouts.header')
    @include('pharmacydashboard.layouts.sidebar')
    @yield('content')

    
    </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{asset('pharmacydashboard/assets/js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{asset('pharmacydashboard/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('pharmacydashboard/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{asset('pharmacydashboard/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<script src="{{asset('pharmacydashboard/assets/plugins/raphael/raphael.min.js')}}"></script>    
		<script src="{{asset('pharmacydashboard/assets/plugins/morris/morris.min.js')}}"></script>  
		<script src="{{asset('pharmacydashboard/assets/js/chart.morris.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{asset('pharmacydashboard/assets/js/script.js')}}"></script>

        <script>
                                                            function readURL(input) {
                                                                if (input.files && input.files[0]) {
                                                                    var reader = new FileReader();

                                                                    reader.onload = function (e) {
                                                                        $('#img-tag').attr('src', e.target.result);
                                                                    }

                                                                    reader.readAsDataURL(input.files[0]);
                                                                }
                                                            }

                                                            $("#image").change(function(){
                                                                readURL(this);
                                                            });
                                                </script>
		
    </body>

</html>