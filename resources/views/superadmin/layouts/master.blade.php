<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Social Vaidya - Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('superadmin/assets/img/favicon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('superadmin/assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('superadmin/assets/css/font-awesome.min.css')}}">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{asset('superadmin/assets/css/feathericon.min.css')}}">

    <link rel="stylesheet" href="{{asset('superadmin/assets/plugins/morris/morris.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('superadmin/assets/css/style.css')}}">


</head>
<body>

@include('superadmin.layouts.header')
@include('superadmin.layouts.sidebar')
@yield('content')




    <!-- /Main Wrapper -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- jQuery -->
    <script src="{{asset('superadmin/assets/js/jquery-3.2.1.min.js')}}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{asset('superadmin/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('superadmin/assets/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JS -->
    <script src="{{asset('superadmin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <script src="{{asset('superadmin/assets/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('superadmin/assets/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('superadmin/assets/js/chart.morris.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('superadmin/assets/js/script.js')}}"></script>
 <!-- Datatables JS -->
    <script src="{{asset('superadmin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('superadmin/assets/plugins/datatables/datatables.min.js')}}"></script>
     

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