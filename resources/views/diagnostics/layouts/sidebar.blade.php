<?php $diagnostic = DB::table('diagnostics')->where(['email'=>Session::get('diagnosticSession')])->get();
?>

<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                        <!-- Profile Sidebar -->
                        <div class="profile-sidebar">
                            @foreach($diagnostic as $dia)
                            <div class="widget-profile pro-widget-content">
                                <div class="profile-info-widget">
                                    <a href="#" class="booking-doc-img">
                                        <img src="{{asset('diagnostics/uploads/img/'.$dia->image)}}" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3>{{$dia->name}}</h3>

                                        <div class="patient-details">
                                            <h5 class="mb-0">{{$dia->email}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="{{url('/diagnostic/diagnostic-dashboard')}}">
                                                <i class="fas fa-columns"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                      
                                        <li>
                                            <a href="{{url('/diagnostic/diagnostic-schedules')}}">
                                                <i class="fas fa-hourglass-start"></i>
                                                <span>Schedule Timings</span>
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{url('/diagnostic/diagnostic-reviews')}}">
                                                <i class="fas fa-star"></i>
                                                <span>Reviews</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{url('/diagnostic/diagnostic-profile-settings')}}">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="{{url('diagnostic/diagnostic-change-password')}}">
                                                <i class="fas fa-lock"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/diagnostic/logout')}}">
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