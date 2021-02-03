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
                        <div class="row row-grid">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="doctor-profile.html">
                                            <img class="img-fluid" alt="User Image" src="{{asset('assets/img/doctors/doctor-01.jpg')}}">
                                        </a>
                                        <a href="javascript:void(0)" class="fav-btn">
                                            <i class="far fa-bookmark"></i>
                                        </a>
                                    </div>
                                    <div class="pro-content">
                                        <h3 class="title">
                                            <a href="doctor-profile.html">Dr. Ruby Perrin</a>
                                            <i class="fas fa-check-circle verified"></i>
                                        </h3>
                                        <p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="d-inline-block average-rating">(17)</span>
                                        </div>
                                        <ul class="available-info">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> Florida, USA
                                            </li>
                                            <li>
                                                <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                            </li>
                                            <li>
                                                <i class="far fa-money-bill-alt"></i> ₹&nbsp;300 - ₹&nbsp;1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                            </li>
                                        </ul>
                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="booking.html" class="btn book-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="doctor-profile.html">
                                            <img class="img-fluid" alt="User Image" src="{{asset('assets/img/doctors/doctor-02.jpg')}}">
                                        </a>
                                        <a href="javascript:void(0)" class="fav-btn">
                                            <i class="far fa-bookmark"></i>
                                        </a>
                                    </div>
                                    <div class="pro-content">
                                        <h3 class="title">
                                            <a href="doctor-profile.html">Dr. Darren Elder</a>
                                            <i class="fas fa-check-circle verified"></i>
                                        </h3>
                                        <p class="speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(35)</span>
                                        </div>
                                        <ul class="available-info">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> Newyork, USA
                                            </li>
                                            <li>
                                                <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                            </li>
                                            <li>
                                                <i class="far fa-money-bill-alt"></i> ₹&nbsp;50 - ₹&nbsp;300 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                            </li>
                                        </ul>
                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="booking.html" class="btn book-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="doctor-profile.html">
                                            <img class="img-fluid" alt="User Image" src="{{asset('assets/img/doctors/doctor-03.jpg')}}">
                                        </a>
                                        <a href="javascript:void(0)" class="fav-btn">
                                            <i class="far fa-bookmark"></i>
                                        </a>
                                    </div>
                                    <div class="pro-content">
                                        <h3 class="title">
                                            <a href="doctor-profile.html">Dr. Deborah Angel</a>
                                            <i class="fas fa-check-circle verified"></i>
                                        </h3>
                                        <p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(27)</span>
                                        </div>
                                        <ul class="available-info">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> Georgia, USA
                                            </li>
                                            <li>
                                                <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                            </li>
                                            <li>
                                                <i class="far fa-money-bill-alt"></i> ₹&nbsp;100 - ₹&nbsp;400 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                            </li>
                                        </ul>
                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="booking.html" class="btn book-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="doctor-profile.html">
                                            <img class="img-fluid" alt="User Image" src="{{asset('assets/img/doctors/doctor-04.jpg')}}">
                                        </a>
                                        <a href="javascript:void(0)" class="fav-btn">
                                            <i class="far fa-bookmark"></i>
                                        </a>
                                    </div>
                                    <div class="pro-content">
                                        <h3 class="title">
                                            <a href="doctor-profile.html">Dr. Sofia Brient</a>
                                            <i class="fas fa-check-circle verified"></i>
                                        </h3>
                                        <p class="speciality">MBBS, MS - General Surgery, MCh - Urology</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(4)</span>
                                        </div>
                                        <ul class="available-info">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> Louisiana, USA
                                            </li>
                                            <li>
                                                <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                            </li>
                                            <li>
                                                <i class="far fa-money-bill-alt"></i> ₹&nbsp;150 - ₹&nbsp;250 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                            </li>
                                        </ul>
                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="booking.html" class="btn book-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="doctor-profile.html">
                                            <img class="img-fluid" alt="User Image" src="{{asset('assets/img/doctors/doctor-05.jpg')}}">
                                        </a>
                                        <a href="javascript:void(0)" class="fav-btn">
                                            <i class="far fa-bookmark"></i>
                                        </a>
                                    </div>
                                    <div class="pro-content">
                                        <h3 class="title">
                                            <a href="doctor-profile.html">Dr. Marvin Campbell</a>
                                            <i class="fas fa-check-circle verified"></i>
                                        </h3>
                                        <p class="speciality">MBBS, MD - Ophthalmology, DNB - Ophthalmology</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(66)</span>
                                        </div>
                                        <ul class="available-info">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> Michigan, USA
                                            </li>
                                            <li>
                                                <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                            </li>
                                            <li>
                                                <i class="far fa-money-bill-alt"></i> ₹&nbsp;50 - ₹&nbsp;700
                                                <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                            </li>
                                        </ul>
                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="booking.html" class="btn book-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="doctor-profile.html">
                                            <img class="img-fluid" alt="User Image" src="{{asset('assets/img/doctors/doctor-06.jpg')}}">
                                        </a>
                                        <a href="javascript:void(0)" class="fav-btn">
                                            <i class="far fa-bookmark"></i>
                                        </a>
                                    </div>
                                    <div class="pro-content">
                                        <h3 class="title">
                                            <a href="doctor-profile.html">Dr. Katharine Berthold</a>
                                            <i class="fas fa-check-circle verified"></i>
                                        </h3>
                                        <p class="speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(52)</span>
                                        </div>
                                        <ul class="available-info">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> Texas, USA
                                            </li>
                                            <li>
                                                <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                            </li>
                                            <li>
                                                <i class="far fa-money-bill-alt"></i> ₹&nbsp;100 - ₹&nbsp;500
                                                <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                            </li>
                                        </ul>
                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="booking.html" class="btn book-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="doctor-profile.html">
                                            <img class="img-fluid" alt="User Image" src="{{asset('assets/img/doctors/doctor-07.jpg')}}">
                                        </a>
                                        <a href="javascript:void(0)" class="fav-btn">
                                            <i class="far fa-bookmark"></i>
                                        </a>
                                    </div>
                                    <div class="pro-content">
                                        <h3 class="title">
                                            <a href="doctor-profile.html">Dr. Linda Tobin</a>
                                            <i class="fas fa-check-circle verified"></i>
                                        </h3>
                                        <p class="speciality">MBBS, MD - General Medicine, DM - Neurology</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(43)</span>
                                        </div>
                                        <ul class="available-info">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> Kansas, USA
                                            </li>
                                            <li>
                                                <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                            </li>
                                            <li>
                                                <i class="far fa-money-bill-alt"></i> ₹&nbsp;100 - ₹&nbsp;1000
                                                <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                            </li>
                                        </ul>
                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="booking.html" class="btn book-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="doctor-profile.html">
                                            <img class="img-fluid" alt="User Image" src="{{asset('assets/img/doctors/doctor-08.jpg')}}">
                                        </a>
                                        <a href="javascript:void(0)" class="fav-btn">
                                            <i class="far fa-bookmark"></i>
                                        </a>
                                    </div>
                                    <div class="pro-content">
                                        <h3 class="title">
                                            <a href="doctor-profile.html">Dr. Paul Richard</a>
                                            <i class="fas fa-check-circle verified"></i>
                                        </h3>
                                        <p class="speciality">MBBS, MD - Dermatology , Venereology & Lepros</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(49)</span>
                                        </div>
                                        <ul class="available-info">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> California, USA
                                            </li>
                                            <li>
                                                <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                            </li>
                                            <li>
                                                <i class="far fa-money-bill-alt"></i> ₹&nbsp;100 - ₹&nbsp;400
                                                <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                            </li>
                                        </ul>
                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="booking.html" class="btn book-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="doctor-profile.html">
                                            <img class="img-fluid" alt="User Image" src="{{asset('assets/img/doctors/doctor-09.jpg')}}">
                                        </a>
                                        <a href="javascript:void(0)" class="fav-btn">
                                            <i class="far fa-bookmark"></i>
                                        </a>
                                    </div>
                                    <div class="pro-content">
                                        <h3 class="title">
                                            <a href="doctor-profile.html">Dr. John Gibbs</a>
                                            <i class="fas fa-check-circle verified"></i>
                                        </h3>
                                        <p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(112)</span>
                                        </div>
                                        <ul class="available-info">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> Oklahoma, USA
                                            </li>
                                            <li>
                                                <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                            </li>
                                            <li>
                                                <i class="far fa-money-bill-alt"></i> ₹&nbsp;500 - ₹&nbsp;2500
                                                <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                            </li>
                                        </ul>
                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="booking.html" class="btn book-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="doctor-profile.html">
                                            <img class="img-fluid" alt="User Image" src="{{asset('assets/img/doctors/doctor-10.jpg')}}">
                                        </a>
                                        <a href="javascript:void(0)" class="fav-btn">
                                            <i class="far fa-bookmark"></i>
                                        </a>
                                    </div>
                                    <div class="pro-content">
                                        <h3 class="title">
                                            <a href="doctor-profile.html">Dr. Olga Barlow</a>
                                            <i class="fas fa-check-circle verified"></i>
                                        </h3>
                                        <p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(65)</span>
                                        </div>
                                        <ul class="available-info">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> Montana, USA
                                            </li>
                                            <li>
                                                <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                            </li>
                                            <li>
                                                <i class="far fa-money-bill-alt"></i> ₹&nbsp;75 - ₹&nbsp;250
                                                <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                            </li>
                                        </ul>
                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="booking.html" class="btn book-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="doctor-profile.html">
                                            <img class="img-fluid" alt="User Image" src="{{asset('assets/img/doctors/doctor-11.jpg')}}">
                                        </a>
                                        <a href="javascript:void(0)" class="fav-btn">
                                            <i class="far fa-bookmark"></i>
                                        </a>
                                    </div>
                                    <div class="pro-content">
                                        <h3 class="title">
                                            <a href="doctor-profile.html">Dr. Julia Washington</a>
                                            <i class="fas fa-check-circle verified"></i>
                                        </h3>
                                        <p class="speciality">MBBS, MD - General Medicine, DM - Endocrinology</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(5)</span>
                                        </div>
                                        <ul class="available-info">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> Oklahoma, USA
                                            </li>
                                            <li>
                                                <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                            </li>
                                            <li>
                                                <i class="far fa-money-bill-alt"></i> ₹&nbsp;275 - ₹&nbsp;450
                                                <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                            </li>
                                        </ul>
                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="booking.html" class="btn book-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="profile-widget">
                                    <div class="doc-img">
                                        <a href="doctor-profile.html">
                                            <img class="img-fluid" alt="User Image" src="{{asset('assets/img/doctors/doctor-12.jpg')}}">
                                        </a>
                                        <a href="javascript:void(0)" class="fav-btn">
                                            <i class="far fa-bookmark"></i>
                                        </a>
                                    </div>
                                    <div class="pro-content">
                                        <h3 class="title">
                                            <a href="doctor-profile.html">Dr. Shaun Aponte</a>
                                            <i class="fas fa-check-circle verified"></i>
                                        </h3>
                                        <p class="speciality">MBBS, MS - ENT, Diploma in Otorhinolaryngology (DLO)</p>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">(5)</span>
                                        </div>
                                        <ul class="available-info">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i> Indiana, USA
                                            </li>
                                            <li>
                                                <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                            </li>
                                            <li>
                                                <i class="far fa-money-bill-alt"></i> ₹&nbsp;150 - ₹&nbsp;350
                                                <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                            </li>
                                        </ul>
                                        <div class="row row-sm">
                                            <div class="col-6">
                                                <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="booking.html" class="btn book-btn">Book Now</a>
                                            </div>
                                        </div>
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