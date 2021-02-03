
        
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
                



                   