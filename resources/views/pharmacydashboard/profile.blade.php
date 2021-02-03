@extends('pharmacydashboard.layouts.master')
@section('content')
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/pharmacy-dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
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
								<div class="row align-items-center">
									<div class="col-auto profile-image">
										<a href="#">
											<img class="rounded-circle" alt="User Image" src="{{asset('pharmacydashboard/uploads/img/'.$userdetail->image)}}">
										</a>
									</div>
									<div class="col ml-md-n2 profile-user-info">
										<h4 class="user-name mb-0">{{$userdetail->name}}</h4>
										<h6 class="text-muted">{{$userdetail->email}}</h6>
										<div class="user-Location"><i class="fa fa-map-marker"></i>{{$userdetail->address}}</div>
										<!-- <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div> -->
									</div>
								
								</div>
							</div>
							<div class="profile-menu">
								<ul class="nav nav-tabs nav-tabs-solid">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
									</li>
								</ul>
							</div>	
							<div class="tab-content profile-tab-cont">
								
								<!-- Personal Details Tab -->
								<div class="tab-pane fade show active" id="per_details_tab">
								
									<!-- Personal Details -->
									<div class="row">
										<div class="col-lg-12">
											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>Personal Details</span> 
														<a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a>
													</h5>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
														<p class="col-sm-10">{{$userdetail->name}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Date of Birth</p>
														<p class="col-sm-10">{{$userdetail->dob}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
														<p class="col-sm-10">{{$userdetail->email}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
														<p class="col-sm-10">{{$userdetail->phone}}</p>
													</div>
													<div class="row">
														<p class="col-sm-2 text-muted text-sm-right mb-0">Address</p>
														<p class="col-sm-10 mb-0">{{$userdetail->address}}</p>
													</div>
												</div>
											</div>
											
											<!-- Edit Details Modal -->
											<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
												<div class="modal-dialog modal-dialog-centered" role="document" >
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Personal Details</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
														
															<form method="post" action="{{url('/pharmacy/editprofile')}}" enctype="multipart/form-data"  autocomplete="off">
															{{ csrf_field() }}
																<div class="row form-row">
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Name</label>
																			<input type="text" name="name" value="{{$userdetail->name}}" readonly class="form-control">
																		</div>	
																		<div class="form-group">
																			<input type="file" class="form-control" id="image" name="image" >
																			<input type="hidden" value="{{$userdetail->image}}" name="current_image">
																		</div>
																	</div>
																	
																	
																	<div class="col-12 col-sm-6">
																			<div class="form-group">
																				<img src="{{asset('pharmacydashboard/uploads/img/'.$userdetail->image)}}" id="img-tag"  style="padding: 10% 10% 10% 10%;
    margin: 0% 20% 0% 20%;"width="150px" height="150px" alt="User Image">
																			</div>
																	</div>
																		
																	
																	
																	<div class="col-12 col-sm-6">
																		<div class="form-group" >
																				<label for="dob">Date of Birth</label>
																				<input type="date" name="dob" value="{{$userdetail->dob}}" class="form-control">
																		</div>
																	</div>

																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Email ID</label>
																			<input type="email" name="email" class="form-control" value="{{$userdetail->email}}">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Mobile</label>
																			<input type="tel" name="phone" value="{{$userdetail->phone}}" class="form-control">
																		</div>
																	</div>
																	<div class="col-12">
																		<h5 class="form-title"><span>Address</span></h5>
																	</div>
																	<div class="col-12">
																		<div class="form-group">
																		<label>Address</label>
																			<input type="text" name="address" class="form-control" value="{{$userdetail->address}}">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>City</label>
																			<input type="text" name="city" class="form-control" value="{{$userdetail->city}}">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>State</label>
																			<input type="text" name="state" class="form-control"  value="{{$userdetail->state}}">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Zip Code</label>
																			<input type="text" name="zipcode" class="form-control" value="{{$userdetail->zipcode}}">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Country</label>
																			<input type="text" name="country" class="form-control" value="{{$userdetail->country}}">
																		</div>
																	</div>

																	


																</div>
																<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
															</form>
														</div>
													</div>
												</div>
											</div>
											<!-- /Edit Details Modal -->
											
										</div>

									
									</div>
									<!-- /Personal Details -->

								</div>
								<!-- /Personal Details Tab -->
								
								<!-- Change Password Tab -->
								<div id="password_tab" class="tab-pane fade">
								
									<div class="card">
										<div class="card-body">
										
											<h5 class="card-title">Change Password</h5>
											<div class="row">
												<div class="col-md-10 col-lg-6">
													<form method="post" action="{{url('/pharmacy/viewprofile')}}">
													{!! csrf_field() !!}
														<div class="form-group">
															<label>Old Password</label>
															<input type="hidden" name="old_password" class="form-control">
															<input type="password" name="password" class="form-control">
														</div>

														<div class="form-group">
															<label>New Password</label>
															<input type="password" name="new_password" class="form-control">
														</div>

														<!-- <div class="form-group">
															<label>Confirm Password</label>
															<input type="password" class="form-control">
														</div> -->
														<button class="btn btn-primary" type="submit">Save Changes</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Change Password Tab -->
								
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
    </body>
@endsection