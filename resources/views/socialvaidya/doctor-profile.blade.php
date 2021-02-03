@extends('socialvaidya.layouts.master')

	
@section('content')
   
	<style>
  
.visuallyhidden{
  position: absolute !important; clip: rect(1px 1px 1px 1px); clip: rect(1px, 1px, 1px, 1px);
}


.stars-outer {
  display: inline-block;
  position: relative;
  font-family: FontAwesome;
}

.stars-outer::before {
  content: "\f006 \f006 \f006 \f006 \f006";
}

.stars-inner {
  position: absolute;
  top: 0;
  left: 0;
  white-space: nowrap;
  overflow: hidden;
  width: 0;
}



.stars-inner::before {
  content: "\f005 \f005 \f005 \f005 \f005";
  color: #f8ce0b;
}



 </style>
	
	<body> 




		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
		
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Doctor Profile</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Doctor Profile</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">

					<!-- Doctor Widget -->
					<div class="card">
						<div class="card-body">
							<div class="doctor-widget">
								<div class="doc-info-left">
									<div class="doctor-img">
										<img src="{{asset('/doctorprofile/uploads/doc_img/'.$doctor->doctor_image)}}" class="img-fluid" alt="User Image">
									</div>
									<div class="doc-info-cont">
										<h4 class="doc-name">{{$doctor->first_name}} {{$doctor->last_name}}</h4>
										<p class="doc-speciality">{{$doctor->degree1}}</p>
										<p class="doc-department">{{$doctor->specialist}}</p>
										<div class="rating">
                                                  <?php 
     $url= URL::current();
          
            $url_components = parse_url($url); 

            // parse_str($url_components['query'], $params); 
            
            $id = explode("/",end($url_components))[2];
   $review= DB::table('doctor_reviews')->where(['doctorID'=>$doctor->userid])->get();
   $count= count($review);
   if($count==0)
    $count = 1;
       $sum= 0;
   foreach ($review as $key ) {
        

    $sum= $sum+$key->point;
}
   
    ?>
 
                                <h2 style="font-size:13px; color: orange; " class="hotel_a">Rating:- <div class="stars-outer">
          <div class="stars-inner"></div>
        </div>  
        
               
                 <?php 
                                 if($count>0){
                                    echo $sum/$count; 
                                 }else{
                                echo $sum;
                                }?>/5</h2>
                           				
                                            </div>
										<div class="clinic-details">
											<p class="doc-location"><i class="fas fa-map-marker-alt"></i> {{$doctor->address}}</p>
											<ul class="clinic-gallery">
												<li>
													<a  data-fancybox="gallery">
														<img src="{{asset('doctorprofile/uploads/clinic_img/'.$doctor->clinic_image)}}" alt="Feature">
													</a>
												</li>
												
											</ul>
										</div>
										<div class="clinic-services">
											<span>{{$doctor->services}}</span>
											
										</div>
									</div>
								</div>
								<div class="doc-info-right">
									<div class="clini-infos">
										<ul>
											<!--<li><i class="far fa-thumbs-up"></i> 99%</li>-->
											<li><i class="far fa-comment"></i> <?php $reviewCount = DB::table('doctor_reviews')->where(['doctorId'=>$doctor->userid])->count(); echo $reviewCount ;?> Feedback</li>
											<li><i class="fas fa-map-marker-alt"></i>{{$doctor->address}} {{$doctor->city}} {{$doctor->state}}</li>
											<li><i class="far fa-money-bill-alt"></i> ₹&nbsp;{{$doctor->price}}</li>
										</ul>
									</div>
									
									<div class="clinic-booking">
										<a class="apt-btn" href="{{url('/doctor-booking/'.$doctor->id)}}">Book Appointment</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Doctor Widget -->
					
						
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
					
					
					<!-- Doctor Details Tab -->
					<div class="card">
						<div class="card-body pt-0">
						
							<!-- Tab Menu -->
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="#doc_overview" data-toggle="tab">Overview</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#doc_locations" data-toggle="tab">Locations</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#doc_reviews" data-toggle="tab">Reviews</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#doc_business_hours" data-toggle="tab">Business Hours</a>
									</li>
								</ul>
							</nav>
							<!-- /Tab Menu -->
							
							<!-- Tab Content -->
							<div class="tab-content pt-0">
							
								<!-- Overview Content -->
								<div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
									<div class="row">
										<div class="col-md-12 col-lg-9">
										
											<!-- About Details -->
											<div class="widget about-widget">
												<h4 class="widget-title">About Me</h4>
                                                <p>{{$doctor->bio}}</p>
											</div>
											<!-- /About Details -->
										
											<!-- Education Details -->
											<div class="widget education-widget">
												<h4 class="widget-title">Education</h4>
												<div class="experience-box">
													<ul class="experience-list">
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a class="name"><b>College</b> - {{$doctor->college1}}</a>
																	<div><b>Degree</b> - {{$doctor->degree1}}</div>
																	<span class="time"><b>Year</b> - {{$doctor->year1}}</span>
																</div>
															</div>
														</li>
														
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a class="name"><b>College</b> - {{$doctor->college2}}</a>
																	<div><b>Degree</b> - {{$doctor->degree2}}</div>
																	<span class="time"><b>Year</b> - {{$doctor->year2}}</span>
																</div>
															</div>
														</li>
														
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a class="name"><b>College</b> - {{$doctor->college3}}</a>
																	<div><b>Degree</b> - {{$doctor->degree3}}</div>
																	<span class="time"><b>Year</b> - {{$doctor->year3}}</span>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<!-- /Education Details -->
									
											<!-- Experience Details -->
											<div class="widget experience-widget">
												<h4 class="widget-title">Work & Experience</h4>
												<div class="experience-box">
													<ul class="experience-list">
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a  class="name"><b>Hospital Name - </b>{{$doctor->hospital_name1}}  <b> - Designation : </b> {{$doctor->designation1}}</a>
																	<span class="time"><b>From - </b>{{$doctor->from1}} <b>To</b> {{$doctor->to1}}</span>
																</div>
															</div>
														</li>
														
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a  class="name"><b>Hospital Name - </b>{{$doctor->hospital_name2}}  <b> - Designation : </b> {{$doctor->designation2}}</a>
																	<span class="time"><b>From - </b>{{$doctor->from2}} <b>To</b> {{$doctor->to2}}</span>
																</div>
															</div>
														</li>
														
														
													</ul>
												</div>
											</div>
											<!-- /Experience Details -->
								
											<!-- Awards Details -->
											<div class="widget awards-widget">
												<h4 class="widget-title">Awards</h4>
												<div class="experience-box">
													<ul class="experience-list">
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<p class="exp-year">{{$doctor->award_year}}</p>
																	<h4 class="exp-title">{{$doctor->award1}}</h4>
																</div>
															</div>
														</li>
														
													</ul>
												</div>
											</div>
											<!-- /Awards Details -->
											
											<!-- Services List -->
											<div class="service-list">
												<h4>Services</h4>
												<ul class="clearfix">
													<li>{{$doctor->services}}</li>
													
												</ul>
											</div>
											<!-- /Services List -->
											
											<!-- Specializations List -->
											<div class="service-list">
												<h4>Specializations</h4>
												<ul class="clearfix">
													<li>{{$doctor->specialist}}</li>
													
												</ul>
											</div>
											<!-- /Specializations List -->

										</div>
									</div>
								</div>
								<!-- /Overview Content -->
								
								<!-- Locations Content -->
								<div role="tabpanel" id="doc_locations" class="tab-pane fade">
								
									<!-- Location List -->
									<div class="location-list">
										<div class="row">
										
											<!-- Clinic Content -->
											<div class="col-md-8">
											   <div class="row">
								                <div class="col-md-2 m-2">
										            <img src="{{asset('/doctorprofile/uploads/clinic_img/'.$doctor->clinic_image)}}" width="80px;" height="80px;" style="border-radius:50px;" alt="Feature Image">
												</div>
												<div class="col-md-6">
												<div class="clinic-content">
													<h4 class="clinic-name"><a >{{$doctor->clinic_name}}</a></h4>
													<p class="doc-speciality my-2">{{$doctor->specialist}}</p>
													
													<div class="clinic-details mb-0">
														<h5 class="clinic-direction"> <i class="fas fa-map-marker-alt"></i> {{$doctor->address}} - {{$doctor->city}} - {{$doctor->state}}</h5>
														
													</div>
												</div>
												</div>
											</div>
											</div>
											<div class="col-md-4">
											    <h4 class="clinic-name">Doctor Fees</h4>
												<div class="consult-price my-3 p-3">
						
													₹&nbsp;{{$doctor->price}}
												</div>
											</div>
										
											
											
											<!-- /Clinic Content -->
												@foreach($schedule as $sch)
											<!-- Clinic Timing -->
											<div class="col-md-4 mt-2">
	
		    
													<div class="clinic-timing py-2">
												
														<p class="timings-days">
															<span>{{$sch->weekday}}</span>
														</p>
													
													
														<p class="timings-times">
															<span>{{date('g:i a',strtotime($sch->starttime))}} - {{date('g:i a',strtotime($sch->endtime))}}</span>
														</p>
												
												
												</div>	
											</div>
													
											
											<!-- /Clinic Timing -->
											@endforeach
										</div>
									</div>
									<!-- /Location List -->
									
								<!-- Reviews Content -->
								<div role="tabpanel" id="doc_reviews" class="tab-pane fade">
								
									<!-- Review Listing -->
									<div class="widget review-listing">
										<ul class="comments-list">
										
											<!-- Comment List -->
											
											<li>
											    @foreach($review as $re)
											   
                                                @if($re->patientId==$patientdetails->id && $re->doctorId==$doctor->userid)
												<div class="comment">
													<img class="avatar avatar-sm rounded-circle" alt="User Image" src="{{asset('/uploads/patient/img/'.$patientdetails->image)}}">
														
													<div class="comment-body">
														<div class="meta-data">
															<span class="comment-author">{{$patientdetails->name}}</span>
														
															<span class="comment-date">Reviewed <a href=""><i class="fa fa-clock-o"></i> {{date('H : i',strtotime($re->created_at))}} </a> <a href=""><i class="fa fa-calendar-o"> {{date('j F Y',strtotime($re->created_at))}}</i></a></span>
																	<div class="ratings">
								<i class="far fa-star"></i>Rating : {{$re->point}}/5
                           				
										</div>
										</div>			
														<!--<p class="recommended"><i class="far fa-thumbs-up"></i> I recommend the doctor</p>-->
													
														<p class="comment-content">
															{{$re->review}}
														</p>
													
														<!--<div class="comment-reply">-->
														<!--	<a class="comment-btn" href="#">-->
														<!--		<i class="fas fa-reply"></i> Reply-->
														<!--	</a>-->
														<!--   <p class="recommend-btn">-->
														<!--	<span>Recommend?</span>-->
														<!--	<a href="#" class="like-btn">-->
														<!--		<i class="far fa-thumbs-up"></i> Yes-->
														<!--	</a>-->
														<!--	<a href="#" class="dislike-btn">-->
														<!--		<i class="far fa-thumbs-down"></i> No-->
														<!--	</a>-->
														<!--</p>-->
														<!--</div>-->
													</div>
												</div>
												@endif
												 @endforeach
												 <!--Comment Reply -->
												<!--<ul class="comments-reply">-->
												<!--	<li>-->
												<!--		<div class="comment">-->
												<!--			<img class="avatar avatar-sm rounded-circle" alt="User Image" src="{{asset('assets/img/patients/patient1.jpg')}}">-->
												<!--			<div class="comment-body">-->
												<!--				<div class="meta-data">-->
												<!--					<span class="comment-author">Charlene Reed</span>-->
												<!--					<span class="comment-date">Reviewed 3 Days ago</span>-->
												<!--					<div class="review-count rating">-->
												<!--						<i class="fas fa-star filled"></i>-->
												<!--						<i class="fas fa-star filled"></i>-->
												<!--						<i class="fas fa-star filled"></i>-->
												<!--						<i class="fas fa-star filled"></i>-->
												<!--						<i class="fas fa-star"></i>-->
												<!--					</div>-->
												<!--				</div>-->
												<!--				<p class="comment-content">-->
												<!--					Lorem ipsum dolor sit amet, consectetur adipisicing elit,-->
												<!--					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.-->
												<!--					Ut enim ad minim veniam.-->
												<!--					Curabitur non nulla sit amet nisl tempus-->
												<!--				</p>-->
												<!--				<div class="comment-reply">-->
												<!--					<a class="comment-btn" href="#">-->
												<!--						<i class="fas fa-reply"></i> Reply-->
												<!--					</a>-->
												<!--					<p class="recommend-btn">-->
												<!--						<span>Recommend?</span>-->
												<!--						<a href="#" class="like-btn">-->
												<!--							<i class="far fa-thumbs-up"></i> Yes-->
												<!--						</a>-->
												<!--						<a href="#" class="dislike-btn">-->
												<!--							<i class="far fa-thumbs-down"></i> No-->
												<!--						</a>-->
												<!--					</p>-->
												<!--				</div>-->
												<!--			</div>-->
												<!--		</div>-->
												<!--	</li>-->
												<!--</ul>-->
												<!-- /Comment Reply -->
												
											</li>
											<!-- /Comment List -->
										
										
										<!-- Show All -->
										<div class="all-feedback text-center">
											<a href="#" class="btn btn-primary btn-sm">
												Show all feedback <strong>(167)</strong>
											</a>
										</div>
										<!-- /Show All -->
										
									</div>
									
									<!-- /Review Listing -->
									  
									    
									<!-- Write Review -->
									<div class="write-review">
									    
								
									    
										<h4>Write a review for <strong>{{$doctor->first_name}} {{$doctor->last_name}}</strong></h4>
										
										<!-- Write Review Form -->
										<form method="post" enctype="multipart/form-data" action="{{url('/doctor-profile/reviews/'.$doctor->id)}}">
										    {{ csrf_field() }}
										    <input type="hidden" id="review" name="point" required>
											<div class="form-group">
												<label>Review</label>
												<div class="star-rating">
												<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
			
                                                    
												    
													<input id="star-5" type="radio" name="rating" value="5" class="visuallyhidden" required />
													<label for="star-5" title="5 stars" onclick="myFunction(this.id)" id="5">
														<i class="active fa fa-star"></i>
													</label>
													<input id="star-4" type="radio" name="rating" value="4" class="visuallyhidden" required />
													<label for="star-4" title="4 stars" onclick="myFunction(this.id)" id="4">
														<i class="active fa fa-star"></i>
													</label>
													<input id="star-3" type="radio" name="rating" value="3" class="visuallyhidden" required />
													<label for="star-3" title="3 stars" onclick="myFunction(this.id)" id="3">
														<i class="active fa fa-star"></i>
													</label>
													<input id="star-2" type="radio" name="rating" value="2" class="visuallyhidden" required />
													<label for="star-2" title="2 stars" onclick="myFunction(this.id)" id="2">
														<i class="active fa fa-star"></i>
													</label>
													<input id="star-1" type="radio" name="rating" value="1" class="visuallyhidden" required />
													<label for="star-1" title="1 star" onclick="myFunction(this.id)" id="1">
														<i class="active fa fa-star"></i>
													</label>
												</div>
											</div>
											
											
											<script>
  console.log("try")
        function  myFunction(id) {
            document.getElementById("review").value = id;
                console.log("id",id)
        }
  </script>
  
  <input  name="doctorId" type="hidden" value="{{$doctor->userid}}" readonly>
<?php $pat = DB::table('patients')->where(['email'=>Session::get('patientSession')])->get(); ?>
@foreach($pat as $p)
  <input  name="patientId" type="hidden" value="{{$p->id}}" readonly>
@endforeach
											<div class="form-group">
												<label>Title of your review</label>
												<input class="form-control" name="title" type="text"
												placeholder="If you could say it in one sentence, what would you say?" required>
											</div>
											<div class="form-group">
												<label>Your review</label>
												<textarea id="review_desc" name="review"  maxlength="500" class="form-control" required></textarea>
											  
											  <div class="d-flex justify-content-between mt-3"><small class="text-muted"><span id="chars">500</span> characters remaining</small></div>
											</div>
										
											<hr>
											
											<div class="submit-section">
											    <button type="submit" class="btn btn-primary submit-btn">Add Review</button>
											    
											</div>
										</form>
										<!-- /Write Review Form -->
										
									</div>
									<!-- /Write Review -->
						
								</div>
								<!-- /Reviews Content -->
								
								<!-- Business Hours Content -->
								<div role="tabpanel" id="doc_business_hours" class="tab-pane fade">
									<div class="row">
										<div class="col-md-6 offset-md-3">
										
											<!-- Business Hours Widget -->
											<div class="widget business-widget">
												<div class="widget-content">
													<div class="listing-hours">
														<div class="listing-day current">
															<div class="day">Today <span>5 Nov 2019</span></div>
															<div class="time-items">
																<span class="open-status"><span class="badge bg-success-light">Open Now</span></span>
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Monday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Tuesday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Wednesday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Thursday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Friday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Saturday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day closed">
															<div class="day">Sunday</div>
															<div class="time-items">
																<span class="time"><span class="badge bg-danger-light">Closed</span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /Business Hours Widget -->
									
										</div>
									</div>
								</div>
								<!-- /Business Hours Content -->
								
							</div>
						</div>
					</div>
					<!-- /Doctor Details Tab -->

				</div>
			</div>		
			<!-- /Page Content -->

			<!-- Footer -->
	 <div class="footer"></div>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	
	
	<!--Rating script-->
	
	            <script>
                const ratings = {
                
                  hotel_a : '{{$sum/$count}}',
                 
                };
                
                // total number of stars
                const starTotal = 5;
                
                for(const rating in ratings) {  
                  const starPercentage = (ratings[rating] / starTotal) * 100;
                  const starPercentageRounded = `${(Math.round(starPercentage / 10) * 10)}%`;
                  document.querySelector(`.${rating} .stars-inner`).style.width = starPercentageRounded; 
                }
                
                </script>
	
	
	
	          
                
                
	
	<!--end Rating script-->
	
	
		
	</body>
@endsection