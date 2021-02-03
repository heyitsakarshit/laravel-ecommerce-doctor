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
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
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
                                        <!-- Change Password Form -->
                                        <form method="post" action="{{ url('/patient/change-password') }}">
                                        {{ csrf_field() }}

                                                        <div class="form-group">
															<label>Old Password</label>
															<input type="hidden" name="old_password" class="form-control">
															<input type="password" name="password" class="form-control">
														</div>

														<div class="form-group">
															<label>New Password</label>
															<input type="password" name="new_password" class="form-control">
														</div>
                                            <!-- <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                            </div> -->
                                            <div class="submit-section">
                                                <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                            </div>
                                        </form>
                                        <!-- /Change Password Form -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
                            </div>
                        </div>
                    </div>
      
@endsection