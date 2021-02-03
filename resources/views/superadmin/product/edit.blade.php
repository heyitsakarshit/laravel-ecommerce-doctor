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
								<h3 class="page-title">Edit Product</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Pages</a></li>
									<li class="breadcrumb-item active">Edit Product</li>
								</ul>
                                <a class="btn btn-success" style="float:right;" href="{{url('/admin/product')}}">View Products</a>
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
                                                <a class="nav-link">Edit Producat</a>
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
								<form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service" action="{{url('/admin/editproduct/'.$product->id)}}">
									{!! csrf_field() !!}
									<div class="service-fields mb-3">
										<div class="row">

										<div class="form-group col-md-6">
                                                <label for="category">Product Name</label>
                                              <input type="text" class="form-control" id="product-name" name="product_name" value="{{$product->product_name}}" placeholder="Product Name">
                                            </div>
                                            	<div class="form-group col-md-6">
                                                <label for="category">Price</label>
                                               <input type="text" class="form-control" id="price" name="product_price" value="{{$product->product_price}}" placeholder="Price">
                                            </div>
                                            
                                            	<div class="form-group col-md-6">
                                                <label for="category">Image</label>
                                                <input type="hidden" value="{{$product->product_image}}" name="current_image">
                                               <input type="file" class="form-control" name="product_image" id="product-image">
                                            </div>

											<div class="form-group col-md-6">
                                                    <label>Quantity<span class="text-danger">*</span></label>
                                                    <input type="hidden" name="product_quantity" id="quantity" value="18">
                                                    <input class="form-control" type="text" name="product_quantity" id="quantity" value="{{$product->product_quantity}}" required="">
                                                </div>

												<div class="form-group col-md-6">
                                                    <label>Discount<span class="text-danger">*</span></label>
                                                    <input type="hidden" name="product_discount" id="discount" value="18">
                                                    <input class="form-control" type="text" name="product_discount" id="discount" value="{{$product->product_discount}}" required="">
                                                </div>

												<div class="form-group col-md-6 ">
                                                    <label>Category <span class="text-danger">*</span></label>
                                                    <select class="form-control select" name="product_category"  value="{{$product->product_category}}" > 
                                                       @foreach($pharmacy_cat as $cat)
                                                        <option>{{$cat->category_name}}</option>
                                                 @endforeach
                                                    </select>
                                                </div>


                                            <div class="form-group col-md-6">
                                                <label for="category">Description</label>
                                               <textarea type="text" class="form-control" name="product_description"  id="product-image">{{$product->product_description}}</textarea>
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
            

    </div>
@endsection