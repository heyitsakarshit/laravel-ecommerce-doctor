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
							<div class="col-sm-7 col-auto">
								<h3 class="page-title">Products</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/pharmacy-dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Products</li>
								</ul>
							</div>
							<div class="col-sm-5 col">
								<a href="{{url('/pharmacy/product/add-product')}}" class="btn btn-primary float-right mt-2">Add New</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-md-12">
						
							<!-- Recent Orders -->
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Id</th>
													<th>Product Name</th>
													<th>Category</th>
													<th>Price</th>
													<th>Quantity</th>
													<th>Discount</th>
													<th>Expire</th>
													<th>Action</th>
												</tr>
											</thead>
											@foreach($pharmacy_pro as $prod)
											<tbody>
											
												<tr>
													<td>{{$prod->id}}</td>
													<td>
														<h2 class="table-avatar">
												
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="{{ asset('superadmin/uploads/product/'.$prod->product_image) }}" alt="product image"></span>
										
															{{$prod->product_name}}
														</h2>
													</td>
													<td>{{$prod->product_category}}</td>
													<td>{{$prod->product_price}}</td>
													<td>{{$prod->product_quantity}}</td>
													<td>{{$prod->product_discount}}</td>
													<td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="{{url('/pharmacy/product/edit-product/'.$prod->id)}}">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="{{url('/pharmacy/product/delete/'.$prod->id)}}" class="btn btn-sm bg-danger-light"  >
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												
											</tbody>
											@endforeach
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->
							
						</div>
					</div>
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->

		
@endsection