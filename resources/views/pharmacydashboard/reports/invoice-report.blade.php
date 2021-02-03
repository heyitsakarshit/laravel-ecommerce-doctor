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
								<h3 class="page-title">Invoice Report</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/pharmacy-dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Invoice Report</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Invoice Number</th>
													<th>Medicine Name</th>
													<th>Total Amount</th>
													<th>Created Date</th>
													<th class="text-center">Status</th>
													<th class="text-right">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="sorting_1"><a>#IN0001</a></td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="{{asset('pharmacydashboard/assets/img/product/product.jpg')}}" alt="Product Image"></span>
															Abilify	
														</h2>
													</td>
													<td>$100.00</td>
													<td>9 Sep 2019</td>
													<td class="text-center">
														<span class="badge badge-pill bg-success inv-badge">Paid</span>
													</td>
													<td class="text-right">
														<div class="actions">
															
															<a  href="{{url('/pharmacy/edit-Invoice-report')}}" class="btn btn-sm bg-success-light mr-2">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												
											</tbody>
										</table>
									</div>
								</div>
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