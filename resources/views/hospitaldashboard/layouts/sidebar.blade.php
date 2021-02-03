<?php $hospitaluser = DB::table('hospitalprofiles')->where(['email'=>Session::get('hospitalSession')])->get(); ?>

<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
@foreach($hospitaluser as $hu)
<!-- Profile Sidebar -->
<div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="#" class="booking-doc-img">
                 <img src="{{asset('/hospital/uploads/user_img/'.$hu->user_image)}}" id="img-tag" alt="Upload Image">
            </a>
            <div class="profile-det-info">
                
                <h3>{{$hu->first_name}} {{$hu->last_name}}</h3>
                    <h4 class="mb-0">{{$hu->name}}</h4>
                <div class="patient-details">
                    <h5 class="mb-0">{{$hu->email}}</h5>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-widget">
        <nav class="dashboard-menu">
            <ul>
                <li class="active">
                    <a href="{{url('/hospital/hospital-dashboard')}}">
                        <i class="fas fa-columns"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
              
                <li>
                    <a href="{{url('/hospital/hospital-schedule-timings')}}">
                        <i class="fas fa-hourglass-start"></i>
                        <span>Schedule Timings</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{url('/hospital/hospital-reviews')}}">
                        <i class="fas fa-star"></i>
                        <span>Reviews</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('/hospital/hospital-profile-setting')}}">
                        <i class="fas fa-user-cog"></i>
                        <span>Profile Settings</span>
                    </a>
                </li>
            
                <li>
                    <a href="{{url('/hospital/change-password')}}">
                        <i class="fas fa-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('hospital/logout/'.$hu->id)}}">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /Profile Sidebar -->
@endforeach
</div>
