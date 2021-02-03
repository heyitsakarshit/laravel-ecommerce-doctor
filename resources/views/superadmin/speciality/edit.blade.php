@extends('superadmin.layouts.master')
@section('content')

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Page Wrapper -->
     <!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Edit Specialities</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/superadmin/dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Pages</a></li>
									<li class="breadcrumb-item active">Edit Specialities</li>
								</ul>
								<a class="btn btn-success" style="float:right;" href="{{url('/admin/speciality')}}">View Specialities</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body custom-edit-service">
									
									<div class="row mb-5">
                                    <div class="col">
                                        <ul class="nav nav-tabs nav-tabs-solid">
                                            <li class="nav-item">
                                                <a class="nav-link" >Edit Specialities</a>
                                            </li>
                                            <!--<li class="nav-item">
                                                <a class="nav-link" href="pending-blog.html">Pending Blog</a>
                                            </li>-->
                                        </ul>
                                    </div>
                                   <!--- <div class="col-auto">
                                        <a class="btn btn-primary btn-sm" href="category.html"><i class="fas fa-plus mr-1"></i> Add Category</a>
                                    </div>--->
                                </div>
							
								<!-- Add Blog -->
<form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service" 
action="{{url('/admin/edit-spec/'.$specialities->id)}}">
							{!! csrf_field() !!}
										<div class="service-fields mb-3">
										<div class="row">

										<div class="form-group col-md-6">
                                                <label for="category">Specialities</label>
                                              <input type="text" class="form-control"
											   name="speciality_name" value="{{$specialities->speciality_name}}"
											   id="product-name" placeholder="Edit Specialities">
                                            </div>
                                           
                                            
                                            	<div class="form-group col-md-6">
                                                <label for="category">Image</label>
												<input type="hidden" value="{{$specialities->image}}" name="current_image">
                                               <input type="file" name="image" class="form-control"  id="Edit Specialities-image" value="{{$specialities->image}}">
                                            </div>
										</div>
									</div>
									
						
									
									
									<div class="submit-section">
										<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Save Change</button>
									</div>
								</form>
								<!-- /Add Blog -->


								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
  @endsection