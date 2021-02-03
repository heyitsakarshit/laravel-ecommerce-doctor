@extends('socialvaidya.layouts.master')
@section('content')
<body>
   <!-- Main Wrapper -->
   <div class="main-wrapper">
   <div class="header"></div>
   <!-- Breadcrumb -->
   <div class="breadcrumb-bar">
      <div class="container-fluid">
         <div class="row align-items-center">
            <div class="col-md-12 col-12">
               <nav aria-label="breadcrumb" class="page-breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Ask Question</li>
                  </ol>
               </nav>
               <h2 class="breadcrumb-title">Ask Question</h2>
            </div>
         </div>
      </div>
   </div>
   <!-- /Breadcrumb -->
   <!-- Home Banner -->
   <section class="section section-search" style="    background-size: cover;
      width: 100%;
      padding: 20px 0 120px;">
      <div class="ask-question-form">
         <div class="container" >
            <div class="row">
               <!-- Add Blog -->
               <div class="col-md-6">
                  <div class="ask-question" style="padding: 40px 30px;margin-top: 18px; border: 1px solid #09dca45e;
                     margin: 0 auto; background-color: rgba(255,255,255,0.75);">

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

                     <form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service" action="{{url('/askquestion')}}">
                        {{ csrf_field() }}
                        <div class="service-fields mb-3">
                           <div class="row">
                              <div class="form-group col-md-12">
                                 <label>Details <span class="red">*</span></label>
                                 <textarea maxlength="5000" data-msg-required="Please enter your Correspondence Address." rows="5" class="form-control" name="detail" placeholder="Enter your Requirement" style="resize: none;"></textarea>
                                 <span id="details" class="color"></span>
                              </div>
                              <div class="form-group col-md-12">
                                 <div class="lybText--darkest lybText--small lybText--bolder lybMar-top-btm">
                                    I am looking for
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="radio" name="looking_for"  value="Just information" checked>
                                    <label class="form-check-label" for="just_information">
                                    Just information
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="radio" name="looking_for" id="exampleRadios2" value="Treatment details">
                                    <label class="form-check-label" for="treatment_details">
                                    Treatment details
                                    </label>
                                 </div>
                              </div>

                              <div class="form-group col-md-6">
                                 <label for="ask-q">Email</label>
                                 <input type="email" class="form-control" name="email" id="ask-email" placeholder="Email Id">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="ask-q">Phone-Number</label>
                                 <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                              </div>
                              <div class="form-group col-md-12">
                                 <div class="submit-section">
                                    <button class="btn btn-primary submit-btn btn-lg btn-block" type="submit" name="form_submit" value="submit">Submit</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- /Home Banner end -->
   <section class="section home-tile-section">
      <div class="section-header text-center">
         <h2>Recently Answered Health Questions</h2>
      </div>
      <div class="container">
         <div class="col-md-12">
            <div class="doctor-slider slider slick-initialized slick-slider">
               <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
               <div class="slick-list draggable">
                  <div class="slick-track" style="opacity: 1; width: 20000px; transform: translate3d(-280px, 0px, 0px);">
                     <div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1">
                        <div>
                           <div class="col-md-12 mb-3" style="width: 100%; display: inline-block;">
                              <div class="card text-center doctor-book-card">
                                 <img src="{{asset('assets/img/img-pharmacy1.jpg')}}" alt="" class="img-fluid">
                                 <div class="doctor-book-card-content tile-card-content-1">
                                    <div>
                                       <h3 class="card-title mb-0"> Clinic </h3>
                                       <!---<a href="#" class="btn book-btn1 px-3 py-2 mt-3" tabindex="-1">Book Now</a>--->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false">
                        <div>
                           <div class="col-md-12 mb-3" style="width: 100%; display: inline-block;">
                              <div class="card text-center doctor-book-card">
                                 <img src="{{asset('assets/img/doctors/doctor-07.jpg')}}" alt="" class="img-fluid">
                                 <div class="doctor-book-card-content tile-card-content-1">
                                    <div>
                                       <!---<h3 class="card-title mb-0"> Clinic </h3>-->
                                       <!---<a href="#" class="btn book-btn1 px-3 py-2 mt-3" tabindex="-1">Book Now</a>--->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1">
                        <div>
                           <div class="col-md-12 mb-3" style="width: 100%; display: inline-block;">
                              <div class="card text-center doctor-book-card">
                                 <img src="{{asset('assets/img/img-pharmacy1.jpg')}}" alt="" class="img-fluid">
                                 <div class="doctor-book-card-content tile-card-content-1">
                                    <div>
                                       <!---<h3 class="card-title mb-0"> Clinic </h3>-->
                                       <!--<a href="pharmacy-search.html" class="btn book-btn1 px-3 py-2 mt-3" tabindex="-1">Book Now</a>--->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1">
                        <div>
                           <div class="col-md-12 mb-3" style="width: 100%; display: inline-block;">
                              <div class="card text-center doctor-book-card">
                                 <img src="{{asset('assets/img/doctors/doctor-07.jpg')}}" alt="" class="img-fluid">
                                 <div class="doctor-book-card-content tile-card-content-1">
                                    <div>
                                       <!---<h3 class="card-title mb-0"> Clinic </h3>-->         
                                       <!--<a href="pharmacy-search.html" class="btn book-btn1 px-3 py-2 mt-3" tabindex="-1">Book Now</a>--->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1">
                        <div>
                           <div class="col-md-12 mb-3" style="width: 100%; display: inline-block;">
                              <div class="card text-center doctor-book-card">
                                 <img src="{{asset('assets/img/img-pharmacy1.jpg')}}" alt="" class="img-fluid">
                                 <div class="doctor-book-card-content tile-card-content-1">
                                    <div>
                                       <!---<h3 class="card-title mb-0"> Clinic </h3>-->
                                       <!--<a href="pharmacy-search.html" class="btn book-btn1 px-3 py-2 mt-3" tabindex="-1">Book Now</a>--->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" tabindex="-1">
                        <div>
                           <div class="col-md-12 mb-3" style="width: 100%; display: inline-block;">
                              <div class="card text-center doctor-book-card">
                                 <img src="{{asset('assets/img/doctors/doctor-07.jpg')}}" alt="" class="img-fluid">
                                 <div class="doctor-book-card-content tile-card-content-1">
                                    <div>
                                       <!---<h3 class="card-title mb-0"> Clinic </h3>-->
                                       <!--<a href="pharmacy-search.html" class="btn book-btn1 px-3 py-2 mt-3" tabindex="-1">Book Now</a>--->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" tabindex="-1">
                        <div>
                           <div class="col-md-12 mb-3" style="width: 100%; display: inline-block;">
                              <div class="card text-center doctor-book-card">
                                 <img src="{{asset('assets/img/img-pharmacy1.jpg')}}" alt="" class="img-fluid">
                                 <div class="doctor-book-card-content tile-card-content-1">
                                    <div>
                                       <!---<h3 class="card-title mb-0"> Clinic </h3>-->
                                       <a href="pharmacy-search.html" class="btn book-btn1 px-3 py-2 mt-3" tabindex="-1">Find Now</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" tabindex="-1">
                        <div>
                           <div class="col-md-12 mb-3" style="width: 100%; display: inline-block;">
                              <div class="card text-center doctor-book-card">
                                 <img src="{{asset('assets/img/doctors/doctor-07.jpg')}}" alt="" class="img-fluid">
                                 <div class="doctor-book-card-content tile-card-content-1">
                                    <div>
                                       <!---<h3 class="card-title mb-0"> Clinic </h3>-->
                                       <!--<a href="pharmacy-search.html" class="btn book-btn1 px-3 py-2 mt-3" tabindex="-1">Book Now</a>--->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" tabindex="-1">
                        <div>
                           <div class="col-md-12 mb-3" style="width: 100%; display: inline-block;">
                              <div class="card text-center doctor-book-card">
                                 <img src="{{asset('assets/img/img-pharmacy1.jpg')}}" alt="" class="img-fluid">
                                 <div class="doctor-book-card-content tile-card-content-1">
                                    <div>
                                       <!---<h3 class="card-title mb-0"> Clinic </h3>-->
                                       <!--<a href="pharmacy-search.html" class="btn book-btn1 px-3 py-2 mt-3" tabindex="-1">Book Now</a>--->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
            </div>
         </div>
      </div>
   </section>
</body>
@endsection