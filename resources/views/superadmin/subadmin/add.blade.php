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
								<h3 class="page-title">Sub-Admin</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Pages</a></li>
									<li class="breadcrumb-item active">Sub-Admin</li>
								</ul>
                                <a class="btn btn-success" style="float:right;" href="{{url('/admin/subadmin')}}">View Sub-Admin</a>
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
                                                <a class="nav-link" href="add-producat.html">Sub-Admin</a>
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
								<form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service" action="{{url('/admin/add-admin')}}">
                                {!! csrf_field() !!}

									<div class="service-fields mb-3">
										<div class="row">

										<div class="form-group col-md-6">
                                                <label for="category">Name</label>
                                              <input type="text" class="form-control" name="admin_name" id="product-name" placeholder="Name">
                                            </div>
                                            	<div class="form-group col-md-6">
                                                <label for="category">Email</label>
                                               <input type="email" class="form-control" name="admin_email" id="price" placeholder="Email">
                                            </div>
                                            
                                            	<div class="form-group col-md-6">
                                                <label for="category">Phone</label>
                                               <input type="number" class="form-control" name="admin_phone" id="product-image" placeholder="Phone">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="category">Password</label>
                                                <input type="password" class="form-control" name="admin_password" id="product-image" placeholder="Password">
                                            </div>										</div>
									</div>
									
						
									
									
									<div class="submit-section">
										<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Submit</button>
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
    <!-- /Main Wrapper -->
@endsection
