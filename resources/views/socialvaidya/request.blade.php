@extends('socialvaidya.layouts.master')
@section('content')
<head>
   

    <style>
        #exTab1 .tab-content {
            color: white;
            padding: 5px 15px;
        }

        #exTab2 h3 {
            color: white;
            padding: 5px 15px;
        }

    </style>

</head>

<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <div class="header"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 my-5">


                    <div id="exTab1" class="container">
                    @if(Session::has('flash_message_success'))
                                <div class="alert alert-sm alert-success alert-block" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>{!! session('flash_message_success') !!}</strong>
                                </div>
                                @endif
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a href="#1a" class="btn btn-primary mx-3" data-toggle="tab">Request</a>
                            </li>
                            <li><a href="#2a" class="btn btn-primary" data-toggle="tab">Donate</a>
                            </li>
                        </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="1a">
                                <div class="col-md-12 col-lg-12 login-right">
                                    <div class="login-header">
                                        <h3>Blood Request</h3></a>
                                    </div>

                               
                                    <form method="post" enctype="multipart/form-data" action="{{ url('/addrequestblood')}}">
                                    {{ csrf_field() }}
                                        <div class="form-group form-focus">
                                            <input type="text" name="name" class="form-control floating" required>
                                            <label class="focus-label">Name</label>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input type="number" name="age" class="form-control floating" required>
                                            <label class="focus-label">Age</label>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input type="number" name="phone" class="form-control floating" required>
                                            <label class="focus-label">Phone</label>
                                        </div>

                                        <div class="form-group form-focus">
                                            <input type="text" name="address" class="form-control floating" required>
                                            <label class="focus-label">Address</label>
                                        </div>

                                        <div class="form-group form-focus">
                                            <input type="Number" name="height" class="form-control floating" required>
                                            <label class="focus-label">Height</label>
                                        </div>

                                        <div class="form-group form-focus">
                                            <input type="Number" name="weight" class="form-control floating" required>
                                            <label class="focus-label">Weight</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-primary">Blood Group</label>
                                            <select class="form-control select" name="blood_group">
                                                <option>A-</option>
                                                <option>A+</option>
                                                <option>B-</option>
                                                <option>B+</option>
                                                <option>AB-</option>
                                                <option>AB+</option>
                                                <option>O-</option>
                                                <option>O+</option>
                                            </select>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input type="email" class="form-control floating" name="email" required>
                                            <label class="focus-label">email</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-primary">Gender</label>
                                            <select class="form-control select" name="gender">
                                                <option>Select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                        <label class="text-primary">Image</label>
                                        <input type="file" class="form-control" name="image">
                                            
                                        </div>
                                        

                                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Submit</button>


                                    </form>
                                </div>

                            </div>
                            <div class="tab-pane" id="2a">
                                <div class="col-md-12 col-lg-12 login-right">
                                    <div class="login-header">
                                        <h3>Blood Donate</h3>
                                    </div>

                               
                                    <form method="post" enctype="multipart/form-data" action="{{ url('/adddonateblood')}}">
                                    {{ csrf_field() }}
                                        <div class="form-group form-focus">
                                            <input type="text" name="name" class="form-control floating" required>
                                            <label class="focus-label">Name</label>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input type="number" name="age" class="form-control floating" required>
                                            <label class="focus-label">Age</label>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input type="number" name="phone" class="form-control floating" required>
                                            <label class="focus-label">Phone</label>
                                        </div>

                                        <div class="form-group form-focus">
                                            <input type="text" name="address" class="form-control floating" required>
                                            <label class="focus-label">Address</label>
                                        </div>

                                        <div class="form-group form-focus">
                                            <input type="Number" name="height" class="form-control floating" required>
                                            <label class="focus-label">Height</label>
                                        </div>

                                        <div class="form-group form-focus">
                                            <input type="Number" name="weight" class="form-control floating" required>
                                            <label class="focus-label">Weight</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-primary">Blood Group</label>
                                            <select name="blood_group" class="form-control select">
                                                <option>A-</option>
                                                <option>A+</option>
                                                <option>B-</option>
                                                <option>B+</option>
                                                <option>AB-</option>
                                                <option>AB+</option>
                                                <option>O-</option>
                                                <option>O+</option>
                                            </select>
                                        </div>
                                        <div class="form-group form-focus">
                                            <input type="email" name="email" class="form-control floating" required>
                                            <label class="focus-label">email</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-primary">Gender</label>
                                            <select name="gender" class="form-control select">
                                                <option>Select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>

                                        <div class="form-group ">
                                        <label class="text-primary">Image</label>
                                        <input type="file" class="form-control" name="image">
                                            
                                        </div>

                                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Submit</button>


                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

                <!-- Page Content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12">

                                <!-- Register Content -->
                                <div class="account-content">
                                    <div class="row align-items-center justify-content-center">


                                        <div class="col-md-12 col-lg-12 login-rights">
                                            <img src="assets/img/blood-donation.svg" class="img-fluid" alt="Social Vaidya Register">
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

            </div>
        </div>
    </div>
    @endsection