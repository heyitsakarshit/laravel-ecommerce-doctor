@extends('socialvaidya.layouts.master')
@section('content')
<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-8">
                        <!-- Account Content -->
                        <div class="account-content">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-12 login-right">
                                    <div class="login-header">
                                        <h3 style="font-size: 40px;">Register <a href="register.html"></a></h3>
                                    </div>
                                    @if(Session::has('flash_message_success'))
                        <div class="alert alert-sm alert-success alert-block" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{!! session('flash_message_success') !!}</strong>
                        </div>
                        @endif
                                    <form action="{{ url('/allregister')}}"  enctype="multipart/form-data"  autocomplete="off" method="post">
                                    {!! csrf_field() !!}
                                        <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <div class="change-avatar">
                                                        <div class="profile-img">
                                                            <img src="assets/img/patients/patient.jpg"  id="img-tag" alt="User Image">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="prfile-pic">Image</label>
                                               <input type="file" class="form-control" name="image" id="image" >
                                            	</div>
                                                <div class="form-group col-md-6">
                                                    <label for="Name">First Name</label>
                                                    <input type="text" class="form-control" id="Name" name="firstname" placeholder="First Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="Name">Last Name</label>
                                                    <input type="text" class="form-control" id="Name" name="lastname" placeholder="Last Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="user">Username</label>
                                                    <input type="text" class="form-control" id="Name" name="username" placeholder="Username">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="Name">Referal Code</label>
                                                    <input type="text" class="form-control" id="Name" name="referalcode" placeholder="Referal Code">
                                                </div>
                                                <div class="form-group col-md-6">

                                                    <label for="DOB">Date of Birth</label>
                                                    <input type="Date" name="dob" class="form-control floating">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Blood Group</label>
                                                    <select name ="blood_group" class="form-control select">
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

                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Email</label>
                                                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" class="form-control" id="inputAddress" placeholder="Your password" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="number">Phone Number</label>
                                                    <input type="number" name="phone" class="form-control" id="number" placeholder="Phone Number">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="gender">Gender</label>
                                                    <select class="form-control" name="gender" id="exampleFormControlSelect1">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Others</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="inputAddress">Address 1</label>
                                                    <input type="text" name="address1" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputAddress2">Address 2</label>
                                                    <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="inputAddress">City</label>
                                                    <input type="text" name="city" class="form-control" id="inputAddress" placeholder="City">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="pincode">Pincode</label>
                                                    <input type="Number" name="pincode" class="form-control" id="inputAddress2" placeholder="Pincode">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputAddress">Country</label>
                                                    <input type="text" name="country" class="form-control" id="inputAddress" placeholder="Country">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="category">Select Category</label>
                                                    <select class="form-control" name="category" id="exampleFormControlSelect1">
                                                    @foreach($category as $cat)
                                                        <option>{{$cat->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="category">Subscription Pack</label>
                                                    <select class="form-control" name="package" id="exampleFormControlSelect1">
                                                    @foreach($plan as $pl)
                                                        <option>{{$pl->package}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                        </div>
                                    

                                        <div class="col-md-12">

                                            <div class="text-right">
                                                <a class="forgot-link" href="{{url('/alllogin')}}">Already have an account?</a>
                                            </div>
                                            <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
                                        </div>
                                    </form>
                                    <!-- Register Form -->

                                    <!-- /Register Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/pro-slider-1.svg" width="100%" alt="doctor svg" />
                        <img src="assets/img/oc_doctor.svg" width="100%" alt="doctor svg" />
                        <img src="assets/img/yup.svg" width="100%" alt="doctor svg"/>
                    </div>
                </div>
                <!-- /Account Content -->

            </div>
        </div>

    </div>

    </div>
    <!-- /Page Content -->
@endsection
