 <!-- Sidebar -->
 <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>

                        <li class="active">
                            <a href="{{url('/admin/dashboard')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                        </li>
                           <li class="submenu">
                            <a href="#"><i class="fe fe-document"></i> <span> Business Partners </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                  <li><a href="{{url('/admin/doctor-list')}}">Doctor-List</a></li>
                               
                                <li class="submenu">
                            <a href="">Blood Bank<span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                            <li><a href="{{url('/admin/bloodbank/bloodbank-listing')}}">Blood Bank List</a></li>
                            <li><a href="{{url('/admin/requestblood')}}">Blood Request</a></li>
                             <li><a href="{{url('/admin/donateblood')}}"> Blood Donate</a></li>
                 
                            </ul>
                        </li>
                                 <li><a href="{{url('/admin/diagnostics-list')}}">Diagnostics List</a></li>
                                <li><a href="{{url('/admin/hospital-list')}}">Hospital List</a></li>
                                   <li><a href="{{url('/admin/pharmacy-list')}}">Pharmacy-list</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('/admin/appointment-list')}}"><i class="fe fe-layout"></i> <span>Appointment</span></a>
                        </li>
                        <li>
                            <a href="{{url('/admin/category')}}"><i class="fe fe-layout"></i> <span>Categories</span></a>
                        </li>
                        <li>
                            <a href="{{url('/admin/subscription')}}"><i class="fe fe-layout"></i> <span>Subscription Plans</span></a>
                        </li>
                        <li>
                            <a href="{{url('/admin/subadmin')}}"><i class="fe fe-layout"></i> <span>Sub Admins</span></a>
                        </li>
                        <li>
                            <a href="{{url('/admin/speciality')}}"><i class="fe fe-users"></i> <span>Specialities</span></a>
                        </li>
                        <li>
                            <a href="{{url('/admin/patient-list')}}"><i class="fe fe-user"></i> <span>Patients</span></a>
                        </li>
                        <li>
                            <a href="{{url('/admin/reviews')}}"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
                        </li>
                        <li>
                            <a href="{{url('/admin/transactions')}}"><i class="fe fe-activity"></i> <span>Transactions</span></a>
                        </li>
                        
                        <li>
                            <a href="{{url('/admin/askquestion')}}"><i class="fa fa-question-circle"></i><span>Ask Question List</span></a>
                        </li>
                     
                        <li class="submenu">
                            <a><i class="fe fe-document"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{url('/admin/reports')}}">Invoice Reports</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="{{url('/admin/blog')}}"><i class="fe fe-star-o"></i> <span>Blog</span></a>
                        </li>

                        
                        <li>
                            <a href="{{url('/admin/product')}}"><i class="fe fe-star-o"></i> <span>Product</span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->

