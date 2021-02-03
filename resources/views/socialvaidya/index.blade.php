@extends('socialvaidya.layouts.master')
@section('content')
<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <div class="header"></div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Today Offer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <img src="{{asset('assets/img/offers.jpg')}}" alt="offers" width="100%" />
                </div>


            </div>
        </div>
    </div>






    <!-- Home Banner -->
    <section class="section section-search">
        <div class="container-fluid" style="
                padding: 40px 30px;
                width: 80%;
                margin-top: 18px;
                border: 1px solid #09dca45e;
                background-color: rgba(44, 130, 201, 0.2)">
            <div class="banner-wrapper">
                <div class="banner-header text-center">
                    <h1>Search Doctor, Make an Appointment</h1>
                    <p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
                </div>

                <!-- Search -->
                <div class="search-box">
                    <form action="search.html">
                        <div class="form-group search-location">
                            <input type="text" class="form-control" placeholder="Search Location">
                            <span class="form-text">Based on your Location</span>
                        </div>
                        <div class="form-group search-info">
                            <input type="text" class="form-control" placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc">
                            <span class="form-text">Ex : Dental or Sugar Check up etc</span>
                        </div>

                        <div class="form-group search-info">
                            <input type="text" class="form-control" placeholder="Speciality">
                            <span class="form-text text-white">Ex : Surgical Gastroenterology.</span>
                        </div>
                        <button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
                    </form>
                </div>
                <!-- /Search -->

            </div>
        </div>
    </section>
    <!-- /Home Banner -->


    <section class="section home-tile-section">

        <div class="section-header text-center">
            <h2>What are you looking for?</h2>
        </div>
        <div class="container">

            <div class="col-md-12">
                <div class="doctor-slider slider">

                    <!-- Doctor Widget -->

                    <div class="col-md-12 mb-3">
                        <div class="card text-center doctor-book-card">
                            <img src="{{asset('assets/img/doctors/doctor-07.jpg')}}" alt="" class="img-fluid">
                            <div class="doctor-book-card-content tile-card-content-1">
                                <div>
                                    <h3 class="card-title mb-0">Blood Bank</h3>
                                    <a href="{{ url('/requestblood')}}" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="card text-center doctor-book-card">
                            <img src="{{asset('assets/img/img-pharmacy1.jpg')}}" alt="" class="img-fluid">
                            <div class="doctor-book-card-content tile-card-content-1">
                                <div>
                                    <h3 class="card-title mb-0">Find a Pharmacy</h3>
                                    <a href="{{url('/pharmacy-search')}}" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0">Find Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="card text-center doctor-book-card">
                            <img src="{{asset('assets/img/doctors/doctor-07.jpg')}}" alt="" class="img-fluid">
                            <div class="doctor-book-card-content tile-card-content-1">
                                <div>
                                    <h3 class="card-title mb-0">Diagnostic</h3>
                                    <a href="{{url('/doctors/search')}}" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="card text-center doctor-book-card">
                            <img src="{{asset('assets/img/img-pharmacy1.jpg')}}" alt="" class="img-fluid">
                            <div class="doctor-book-card-content tile-card-content-1">
                                <div>
                                    <h3 class="card-title mb-0"> Clinic </h3>
                                    <a href="{{url('/pharmacy-search')}}" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- Clinic and Specialities -->
    <section class="section section-specialities">
        <div class="container-fluid">
            <div class="section-header text-center">
                <h2>Specialities</h2>
                <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <!-- Slider -->
                  
                    <div class="specialities-slider slider">

                        <!-- Slider Item -->
                        @foreach($speciality as $spec)
                        <div class="speicality-item text-center">
                            <div class="speicality-img">
                                <img src="{{ asset('superadmin/uploads/speciality/'.$spec->image) }}" class="img-fluid" alt="Speciality" width="auto;" height="auto;">
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>{{$spec->speciality_name}}</p>
                        </div>
                        @endforeach
                        <!-- /Slider Item -->

                        <!-- Slider Item -->
                        <div class="speicality-item text-center">
                            <div class="speicality-img">
                                <img src="{{asset('assets/img/specialities/specialities-02.png')}}" class="img-fluid" alt="Speciality">
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Neurology</p>
                        </div>
                        <!-- /Slider Item -->

                        <!-- Slider Item -->
                        <div class="speicality-item text-center">
                            <div class="speicality-img">
                                <img src="{{asset('assets/img/specialities/specialities-03.png')}}" class="img-fluid" alt="Speciality">
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Orthopedic</p>
                        </div>
                        <!-- /Slider Item -->

                        <!-- Slider Item -->
                        <div class="speicality-item text-center">
                            <div class="speicality-img">
                                <img src="{{asset('assets/img/specialities/specialities-04.png')}}" class="img-fluid" alt="Speciality">
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Cardiologist</p>
                        </div>
                        <!-- /Slider Item -->

                        <!-- Slider Item -->
                        <div class="speicality-item text-center">
                            <div class="speicality-img">
                                <img src="{{asset('assets/img/specialities/specialities-05.png')}}" class="img-fluid" alt="Speciality">
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Dentist</p>
                        </div>
                        <!-- /Slider Item -->

                    </div>
                    <!-- /Slider -->

                </div>
            </div>
        </div>
    </section>
    <!-- Clinic and Specialities -->

    <!-- Popular Section -->
    <section class="section section-doctor">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-header ">
                        <h2>Book Our Doctor</h2>
                        <p>Lorem Ipsum is simply dummy text </p>
                    </div>
                    <div class="about-content">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
                        <p>web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes</p>
                        <a href="javascript:;">Read More..</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="doctor-slider slider">
@foreach($doctor as $doc)
                        <!-- Doctor Widget -->
                        <div class="profile-widget">
                            <div class="doc-img">
                                <a href="{{url('/doctor-profile/'.$doc->id)}}">
                                    <img class="img-fluid" alt="User Image" src="{{asset('doctorprofile/uploads/doc_img/'.$doc->doctor_image)}}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a href="{{url('/doctor-profile/'.$doc->id)}}">{{$doc->first_name}} {{$doc->last_name}}</a>
                                    <i class="fas fa-check-circle verified"></i>
                                </h3>
                                <p class="speciality">{{$doc->specialist}}</p>
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
                                        <i class="fas fa-map-marker-alt"></i>{{$doc->address}}
                                    </li>
                                    <li>
                                        <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                    </li>
                                    <li>
                                        <i class="far fa-money-bill-alt"></i> ₹&nbsp;{{$doc->price}}
                                        <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                    </li>
                                </ul>
                                <div class="row row-sm">
                                    <div class="col-6">
                                        <a href="{{url('/doctor-profile/'.$doc->id)}}" class="btn view-btn">View Profile</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{url('/doctor-booking')}}" class="btn book-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctor Widget -->
 @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Popular Section -->


    <!-- /Availabe Features -->

    <!-- Blog Section -->
    <section class="section section-blogs">
        <div class="container-fluid">

            <!-- Section Header -->
            <div class="section-header text-center">
                <h2>Blogs and News</h2>
                <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!-- /Section Header -->

            <div class="row blog-grid-row">
            @foreach($blogdetails as $blog)
                <div class="col-md-6 col-lg-3 col-sm-12">

                    <!-- Blog Post -->
                    <div class="blog grid-blog">
                        <div class="blog-image" >
                            <img class="img-fluid" src="{{asset('doctorprofile/uploads/blogimg/'.$blog->image)}}" alt="Post Image"/>
                        </div>
                        <div class="blog-content">
                            <ul class="entry-meta meta-item">
                                <li>
                                    <div class="post-author">
                                        <a><span>{{ $blog->doctor}}</span></a>
                                    </div>
                                </li>
                                <li><i class="far fa-clock"></i>{{$blog->date}}</li>
                            </ul>
                            <h3 class="blog-title">{{$blog->blog_title}}</h3>
                            <p class="mb-0">{{$blog->descriptions}}</p>
                        </div>
                    </div>
                    <!-- /Blog Post -->

                </div>
                @endforeach
                </div>
            <div class="view-all text-center">
                <a href="blog-list.html" class="btn btn-primary">View All</a>
            </div>
        </div>
    </section>
    <!-- /Blog Section -->

    <!-- Footer -->
    <div class="footer"></div>


    </div>

</body>
@endsection