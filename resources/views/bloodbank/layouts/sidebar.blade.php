<?php $bloodbank= DB::table('bloodbanks')->where(['email'=>Session::get('bloodbankSession')])->get();
 
 ?> 

<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                        <!-- Profile Sidebar -->
                        <div class="profile-sidebar">
                            @foreach($bloodbank as $blood)
                            <div class="widget-profile pro-widget-content">
                                <div class="profile-info-widget">
                                    <a href="#" class="booking-doc-img">
                                        <img src="{{asset('bloodbank/uploads/img/'.$blood->image)}}" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3>{{$blood->name}}</h3>

                                        <div class="patient-details">
                                            <h5 class="mb-0">{{$blood->email}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="{{url('/bloodbank/bloodbank-dashboard')}}">
                                                <i class="fas fa-columns"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/bloodbank/blooddonate')}}">
                                                <i class="fas fa-user-injured"></i>
                                                <span>Blood Donate</span>
                                            </a>
                                        </li>
                                          <li>
                                            <a href="{{url('/bloodbank/bloodrequest')}}">
                                                <i class="fas fa-user-injured"></i>
                                                <span>Blood Request</span>
                                            </a>
                                        </li>
                                        <!-- <li>
                                            <a href="bloodbank-schedule-timings.html">
                                                <i class="fas fa-hourglass-start"></i>
                                                <span>Schedule Timings</span>
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="bloodbank-reviews.html">
                                                <i class="fas fa-star"></i>
                                                <span>Reviews</span>
                                            </a>
                                        </li> -->

                                        <li>
                                            <a href="{{url('/bloodbank/profile-settings')}}">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="{{url('/bloodbank/change-password')}}">
                                                <i class="fas fa-lock"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/bloodbank-dashboard-logout')}}">
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