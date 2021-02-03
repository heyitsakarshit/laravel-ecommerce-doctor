@extends('patient.layouts.master')
@section('content')
    <!-- Main Wrapper -->
    <div class="main-wrapper">
         <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
        <!-- Header -->
        <div class="header"></div>
            <!-- /Header -->
            
 
        
     <?php $user= DB::table('patients')->where(['email'=>Session::get('patientSession')])->get();
 
 ?>   
    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
        <!-- Profile Sidebar -->               
        <div class="profile-sidebar">
        @foreach($user as $use)
                            <div class="widget-profile pro-widget-content">
                                <div class="profile-info-widget">
                                    <a href="#" class="booking-doc-img">
                                        <img src="{{asset('uploads/patient/img/'.$use->image)}}" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
 <h3>{{$use->name}}</h3>
 
  

                                        <div class="patient-details">
                                            <h5><i class="fas fa-birthday-cake"></i>{{$use->dob}}</h5>
                                            <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i>{{$use->city}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="{{url('/patient-dashboard')}}">
                                                <i class="fas fa-columns"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        
                                           <li>
                                            <a href="{{url('/patient/pharmacylist')}}">
                                                <i class="fas fa-prescription-bottle-alt"></i>
                                                <span>Pharmacy</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/patient/favourites')}}">
                                                <i class="fas fa-bookmark"></i>
                                                <span>Favourites</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{url('/patient/profile-settings')}}">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/patient/change-password')}}">
                                                <i class="fas fa-lock"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/patient-logout')}}">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            @endforeach
                        </div>
                        </div>
                    <!-- / Profile Sidebar -->
                



                        

                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body">
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
                                <!-- Profile Settings Form -->
                                <form method="post" enctype="multipart/form-data" action="{{url('/patient/profile-settings')}}">
                                {{ csrf_field() }}
                                    <div class="row form-row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <div class="change-avatar">
                                                    <div class="profile-img">
                                                        <img src="{{asset('uploads/patient/img/'.$patientdetails->image)}}" id="img-tag"  width="100px" alt="User Image">
                                                    </div>
                                                    <div class="upload-img">
                                                        <div class="change-photo-bt">
                                                        
                                                                <label for="category">Image</label>
                                                            <input type="file" class="form-control" id="image" name="image" >
                                            
                                                        </div>
                                                        <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" value="{{$patientdetails->name}}" readonly>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                
                                                    <input type="date" name="dob" placeholder="Enter Date of Birth" value="{{$patientdetails->dob}}" class="form-control">
                                                
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="text" class="form-control" name="age" value="{{$patientdetails->age}}" placeholder="Enter Your Age">
                                            </div>
                                        </div>


                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Blood Group</label>
                                                <select name="blood_group" value="{{$patientdetails->blood_group}}" class="form-control select">
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
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Email ID</label>
                                                
                                                <input type="email"  class="form-control" name="email"
                                                value="{{$patientdetails->email}}" readonly>
                                           
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                
                                                <input type="tel" name="phone" value="{{$patientdetails->phone}}" readonly class="form-control">
                                                
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address" value="{{$patientdetails->address}}" placeholder="Enter Your Address">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" value="{{$patientdetails->city}}" placeholder="Enter City Name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" name="state" class="form-control" value="{{$patientdetails->state}}" placeholder="Enter State Name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Zip Code</label>
                                                <input type="text" name="zipcode" class="form-control" value="{{$patientdetails->zipcode}}" placeholder="Enter Zip Code">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" name="country" class="form-control" value="{{$patientdetails->country}}" placeholder="Enter Country Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                    </div>
                                </form>
                                <!-- /Profile Settings Form -->
</div>
                            </div>
                        </div>
                    </div>
</div>
                        </div>
                    </div>

@endsection