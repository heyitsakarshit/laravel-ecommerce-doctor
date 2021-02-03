 @extends('socialvaidya.layouts.master')
@section('content')
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			 <div class="header"></div>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Booking</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Booking</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">
				
					<div class="row">
						<div class="col-12">
						
							<div class="card">
								<div class="card-body">
									
									<div class="booking-doc-info">
									    
										<a href="{{url('/doctor-profile/'.$doctor->id)}}" class="booking-doc-img">
											<img src="{{asset('/doctorprofile/uploads/doc_img/'.$doctor->doctor_image)}}" alt="User Image">
										</a>
										   
										<div class="booking-info">
											<h4><a href="{{url('/doctor-profile/'.$doctor->id)}}">{{$doctor->first_name}} {{$doctor->last_name}}</a></h4>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">35</span>
											</div>
											<p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i>{{$doctor->address}}</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-sm-4 col-md-6">
									<h4 class="mb-3">
                                        <script> document.write(new Date().toDateString()); </script>
                                    </h4>
								</div>
                            </div>
							<!-- Schedule Widget -->
							<div class="card booking-schedule schedule-widget">
							<!-- /Schedule Widget -->
							<div class="card-body">
                                    <h4 class="card-title">Schedule Timings</h4>
                                    <div class="profile-box">
                                    
                                    <div class="row">
                                    <div class="col-md-12">
                                    <div class="card schedule-widget mb-0">
                                    
                                    	<!-- Schedule Header -->
                                    	<div class="schedule-header">
                                    	
                                    		<!-- Schedule Nav -->
                                    		<div class="schedule-nav">
                                    			<ul class="nav nav-tabs nav-justified">
                                    			    @foreach($schedule as $sc)
                                    				<li class="nav-item">
                                    					<a class="nav-link" data-toggle="tab" href="#{{$sc->weekday}}">{{$sc->weekday}}</a>
                                    				</li>
                                    				@endforeach
                                    			</ul>
                                    		</div>
                                    		<!-- /Schedule Nav -->
                                    		
                                    	</div>
                                    	<!-- /Schedule Header -->
                                    	
                                    	<!-- Schedule Content -->
                                    	<div class="tab-content schedule-cont">
                                    	   
                                    
                                    	@foreach($schedule as $sc)
                                    		<div id="{{$sc->weekday}}" class="tab-pane fade">
                                    			<h4 class="card-title d-flex justify-content-between">
                                    				<span>Time Slots</span> 
                                    			</h4>
                                    
                                    
                                    
                                    @foreach($timeslot as $cdoctor)
                                    @if($cdoctor->scheduleId == $sc->id)
                                    	<!-- Slot List -->
                                    	<div class="doc-times">
                                    		<div class="doc-slot-list">
                                    		{{$cdoctor->starttime}} - {{$cdoctor->endtime}}
                                    		</div>
                                    	</div>
                                    	<!-- /Slot List --> 
                                    	@endif
                                    @endforeach
                                    
                                            </div>
                                    	@endforeach
                                    		
                                    
                                    		
                                    
                                    	</div>
                                    	<!-- /Schedule Content -->
							
												
										</div>
									</div>
								</div>
						
								<!-- /Schedule Content -->
								
							</div>
							
															
														</div>
													</div>
												</div>
											</div>
										</div>
							<!-- Submit Section -->
						 <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-7 col-lg-8">
                        <div class="card">
                            <div class="card-body">

                                <!-- Checkout Form -->
                                <form action="{{url('/doctor-booking')}}">

                                    <!-- Personal Information -->
                                    <div class="info-widget">
                                        <h4 class="card-title">Personal Information</h4>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Patient Name</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Email</label>
                                                    <input class="form-control" type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Phone</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Date</label>
                                                    <input class="form-control" name="appointment_date" id="appointment_date" type="date">
                                                </div>
                                            </div>
                                            
                                            
                                             <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Day</label>
                                          <input type="text" id="day" name="day" value="" readonly>
													  </div>
                                        </div>
                                        
                                         <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Time Slot</label>
                                            <select class="form-control" name="timeslot">
														<option >-</option>
														<option value="Time" selected>09:00AM To 11:00AM</option>
														<option>09:00AM To 11:00AM</option>  
														<option>09:00AM To 11:00AM</option>
														
													</select>
													  </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Doctor Fees</label>
                                                    <input class="form-control" type="text" name="price">
                                                </div>
                                            </div>
                                        
                                        
                                            
                                             <div class="col-md-12 col-sm-12">
                                                <div class="form-group card-label">
                                                    <label>Address</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            
                                             
                                  
                                    
                                        </div>
                                           </div>
                                   
                                    <!-- /Personal Information -->

                                        <!-- Submit Section -->
                                        <div class="submit-section mt-4">
                                            <input type="submit" class="btn btn-primary submit-btn" value="Submit">
                                        </div>
                                        <!-- /Submit Section -->

                                 
                                </form>
                                <!-- /Checkout Form -->

                            </div>
                        </div>

                    </div>

                    <div class="col-md-5 col-lg-4 theiaStickySidebar">

                        <!-- Booking Summary -->
                        <div class="card booking-card">
                            <div class="card-header">
                                <h4 class="card-title">Booking Summary</h4>
                            </div>
                            <div class="card-body">

                                <!-- Booking Doctor Info -->
                                <div class="booking-doc-info">
                                    <a href="{{url('/doctor-profile')}}" class="booking-doc-img">
                                        <img src="{{asset('assets/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image">
                                    </a>
                                    <div class="booking-info">
                                        <h4><a href="{{url('/doctor-profile')}}">Dr. Darren Elder</a></h4>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">35</span>
                                        </div>
                                        <div class="clinic-details">
                                            <p class="doc-location"><i class="fas fa-map-marker-alt"></i> Newyork, USA</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Booking Doctor Info -->

                                <div class="booking-summary">
                                    <div class="booking-item-wrap">
                                        <ul class="booking-date">
                                            <li>Date <span>16 Nov 2019</span></li>
                                            <li>Time <span>10:00 AM</span></li>
                                        </ul>
                                        <ul class="booking-fee">
                                            <li>Consulting Fee <span>₹&nbsp;100</span></li>
                                            <li>Booking Fee <span>₹&nbsp;10</span></li>
                                        </ul>
                                        <div class="booking-total">
                                            <ul class="booking-total-list">
                                                <li>
                                                    <span>Total</span>
                                                    <span class="total-cost">₹&nbsp;160</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Booking Summary -->

                   
        </div>
							<!-- /Submit Section -->
							
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
		 <div class="footer"></div>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	
	</body>

@endsection