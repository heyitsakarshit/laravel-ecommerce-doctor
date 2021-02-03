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
							<div class="col-sm-12">
								<h3 class="page-title">Edit Category</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/pharmacy-dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Pages</a></li>
									<li class="breadcrumb-item active">Edit Category</li>
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
                                    <div class="row mb-5">
                                        <div class="col">
                                            <ul class="nav nav-tabs nav-tabs-solid">
                                                <li class="nav-item">
                                                    <a class="nav-link">Edit Category</a>
                                                </li>
                                            </ul>
                                        </div> 
                                    </div>
							
								<!-- Add Blog -->
								<form method="post" enctype="multipart/form-data"  action="{{url('/pharmacy/category/edit-category/'.$pharmacy_cat->id)}}">
								{{ csrf_field() }}

									<div class="service-fields mb-3">
										<div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="category">Category</label>
                                                <input type="text" class="form-control" name="category_name" id="category_name" value="{{$pharmacy_cat->category_name}}">
                                            </div>
									    </div>

                                        <div class="submit-section">
                                            <button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Save Change</button>
                                        </div>
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

</body>

@endsection