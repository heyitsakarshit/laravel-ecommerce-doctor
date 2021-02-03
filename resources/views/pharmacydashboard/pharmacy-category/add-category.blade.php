@extends('pharmacydashboard.layouts.master')
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
								<h3 class="page-title">Add-Categories</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ url('/pharmacy-dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Pages</a></li>
									<li class="breadcrumb-item active">Add-Categories</li>
								</ul>
								<a class="btn btn-success" style="float:right;" href="{{url('/pharmacy/category')}}">View Category</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body custom-edit-service">
									
									<div class="row mb-3">
                                    <div class="col">
                                        <ul class="nav nav-tabs nav-tabs-solid">
                                            <li class="nav-item">
                                                <a class="nav-link">Add-Categories</a>
                                            </li>
                                        </ul>

                                       
                                    </div>
                                   
                                </div>

                                
                                <!-- Add Blog -->
                                @if(Session::has('flash_message_success'))
            <div class="alert alert-sm alert-success alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
            <strong>{!! session('flash_message_success') !!}</strong>
            </div>
            @endif
								<form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service" action="{{url('/pharmacy/category/add-category')}}">
									{{ csrf_field() }}

									<div class="service-fields mb-3">
										<div class="row">
                                            <div class="form-group col-md-12">
                                                <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Category Name">
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
   
</body>

@endsection