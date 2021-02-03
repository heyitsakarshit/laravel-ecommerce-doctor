<?php $doctor = DB::table('doctorprofiles')->where(['email'=>Session::get('doctorSession')])->get(); ?>

<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

<!-- Profile Sidebar -->
<div class="profile-sidebar">
    @foreach($doctor as $doc)
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="#" class="booking-doc-img">
                <img src="{{asset('doctorprofile/uploads/doc_img/'.$doc->doctor_image)}}" alt="User Image">
            </a>
            <div class="profile-det-info">
                <h3>{{$doc->first_name}} {{$doc->last_name}}</h3>
              
                <div class="patient-details">
                    <h5 class="mb-0">{{$doc->specialist}}</h5>
                    <h5 class="mb-0">{{$doc->address}}</h5>
                </div>
                
            </div>
        </div>
    </div>
    @endforeach
    
    
    <div class="dashboard-widget">
        <nav class="dashboard-menu">
            <ul>
                <li class="active">
                    <a href="{{url('/doctor-dashboard')}}">
                        <i class="fas fa-columns"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/doctor-dashboard/appointments')}}">
                        <i class="fas fa-calendar-check"></i>
                        <span>Appointments</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/doctor-dashboard/my-patients')}}">
                        <i class="fas fa-user-injured"></i>
                        <span>My Patients</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/doctor-dashboard/schedule-timings')}}">
                        <i class="fas fa-hourglass-start"></i>
                        <span>Schedule Timings</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/doctor-dashboard/listinvoice')}}">
                        <i class="fas fa-file-invoice"></i>
                        <span>Invoices</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/doctor-dashboard/reviews')}}">
                        <i class="fas fa-star"></i>
                        <span>Reviews</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{url('/doctor/blog')}}">
                    <i class="fas fa-star"></i>
                     <span>Blog</span>
                     </a>
                </li>
                
                <li>
                    <a href="{{url('doctor-dashboard/doctor-profile-settings')}}">
                        <i class="fas fa-user-cog"></i>
                        <span>Profile Settings</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/doctor-dashboard/social-media')}}">
                        <i class="fas fa-share-alt"></i>
                        <span>Social Media</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/doctor-dashboard/doctor-change-password')}}">
                        <i class="fas fa-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/doctor-dashboard/logout')}}">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /Profile Sidebar -->

</div>
