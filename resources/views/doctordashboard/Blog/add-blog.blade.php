@extends('doctordashboard.layouts.master')
@section('content')
    <body>
	
					
					
						<div class="col-md-7 col-lg-8 col-xl-9">
						    
						    <!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Add Blog</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/doctor-dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Pages</a></li>
									<li class="breadcrumb-item active">Add Blog</li>
								</ul>
								<a class="btn btn-success mb-3" style="float:right;" href="{{url('/doctor/blog')}}">View Blog</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
							<div class="card">
								<div class="card-body custom-edit-service">
									
									<div class="row mb-5">
                                    <div class="col">
                                        
                                    </div>
                                  
                                </div>
								@if(Session::has('flash_message_success'))
                                <div class="alert alert-sm alert-success alert-block" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>{!! session('flash_message_success') !!}</strong>
                                </div>
                                @endif
								<!-- Add Blog -->
								<form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service" action="{{url('/doctor/addblog')}}">
									
											{{ csrf_field() }}
									
                                                <div class="form-group">
                                                    <label>Author<span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text"
                                                     name="doctor" required>
                                                </div>
                                            

									<div class="service-fields mb-3">
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<label>Blog Title <span class="text-danger">*</span></label>
													<input type="hidden" name="service_id" id="service_id" value="18">
													<input class="form-control" type="text" name="blog_title" id="service_title"  required="">
												</div>
											</div>
										</div>
									</div>
									<div class="service-fields mb-3">
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<label>Date<span class="text-danger">*</span></label>
													
													<input class="form-control" type="Date" name="date" id="date-section">
												</div>
											</div>
										</div>
									</div>
									
									
									<div class="service-fields mb-3">
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<label>Descriptions <span class="text-danger">*</span></label>
													<textarea id="about" class="form-control service-desc" name="descriptions"></textarea>
												</div>
											</div>
										</div>
									</div>
									
									<div class="service-fields mb-3">
										<div class="row">
											<div class="col-lg-12">
												
											<div class="form-group">
                                                <label for="category">Image</label>
												
                                               <input type="file" class="form-control" id="product-image" name="image">
                                            </div>
											</div>
										</div>
									</div>
									
									<div class="submit-section">
										<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Submit</button>
									</div>
								</form>
								<!-- /Add Blog -->


								</div>
							</div>
						</div>			
				

		
		
		@endsection