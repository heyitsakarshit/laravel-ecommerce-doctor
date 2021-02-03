@extends('superadmin.layouts.master')
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
							<div class="col-sm-12">
								<h3 class="page-title">Plan</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Pages</a></li>
									<li class="breadcrumb-item active">plan</li>
								</ul>
								<a class="btn btn-success" style="float:right;" href="{{url('/admin/subscription')}}">View Plan</a>
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
                                                <a class="nav-link">Plan</a>
                                            </li>
                                            <!--<li class="nav-item">
                                                <a class="nav-link" href="pending-blog.html">Pending Blog</a>
                                            </li>--->
                                        </ul>
                                    </div>
                                   <!--- <div class="col-auto">
                                        <a class="btn btn-primary btn-sm" href="category.html"><i class="fas fa-plus mr-1"></i> Add Category</a>
                                    </div>--->
                                </div>
							
								<!-- Add Blog -->
								<form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service" action="{{('/admin/subscription/add')}}">
									{{ csrf_field() }}

									<div class="service-fields mb-3">
										<div class="row">
										<div class="form-group col-md-6">
                                                <label for="category">Select Category</label>
                                                <select class="form-control" name="category" id="exampleFormControlSelect1">
                                                @foreach($category as $cat)
                                                    <option>{{$cat->category_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
										<div class="form-group col-md-6">
                                                <label for="category">Subscription Pack</label>
                                                <select class="form-control" name="package" id="exampleFormControlSelect1">
                                                    <option>Free</option>
                                                    <option>Silver (3 Months)</option>
                                                    <option>Gold (6 Months)</option>
                                                    <option>Platinum (12 Months)</option>
                                                </select>
                                            </div>
                                            	<div class="form-group col-md-6">
                                                <label for="category">Price</label>
                                               <input type="text" name="price" class="form-control" id="Price" placeholder="Price">
                                            </div>
                                            
                                            	<div class="form-group col-md-6">
                                                <label for="category">Description</label>
                                               <input type="text" name="description" class="form-control" id="description" placeholder="description">
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
					</div>
				</div>			
			</div>
			<!-- /Page Wrapper -->
    <!-- /Main Wrapper -->
@endsection