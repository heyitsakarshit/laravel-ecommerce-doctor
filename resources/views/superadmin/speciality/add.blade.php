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
								<h3 class="page-title"> Add Specialities </h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Pages</a></li>
									<li class="breadcrumb-item active"> Add Specialities </li>
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
                                                <a class="nav-link" > Add Specialities </a>
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
                      


                                @if(Session::has('flash_message_success'))
                                <div class="alert alert-sm alert-success alert-block" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>{!! session('flash_message_success') !!}</strong>
                                </div>
                                @endif



								<!-- Add Blog -->
                                <form method="post" enctype="multipart/form-data"  name="add_spec" autocomplete="off" id="update_service" method="post" action="{{url('/admin/add-spec')}}">
                                {!! csrf_field() !!}
									

									<div class="service-fields mb-3">
										<div class="row">

											<div class="form-group col-md-6">
                                                <label for="category">Specialities</label>
                                              <input type="text" class="form-control" id="product-name" name="speciality_name" placeholder=" Add Specialities ">
                                            </div>
                                           
                                            
                                            	<div class="form-group col-md-6">
                                                <label for="category">Image</label>
                                               <input type="file" class="form-control" id="Add-Specialities-image" name="image" >
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
	
@endsection