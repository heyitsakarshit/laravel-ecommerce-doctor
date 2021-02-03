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
							<div class="col-12">
								<h3 class="page-title">Order</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/pharmacy-dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Order</li>
								</ul>
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
													<th>Patient ID</th>
													<th>Patient Name</th>
													<th>Order By</th>
													<th>Order On</th>
													<th>Ordered Product</th>
													<th>Quantity</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>256</td>
													<td>Douglas Meyer</td>
													<td>Trinity General Hospital</td>
													<td>10-5-2020</td>
													<td>Dolofin Antigripal(Dolo)</td>
													<td>15</td>
													<td>
														<div class="actions">
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td>20</td>
													<td>Tyler Robinson</td>
													<td>Grand Valley Clinic</td>
													<td>10-5-2020</td>
													<td>Dolofin Antigripal(Dolo)</td>
													<td>50</td>
													<td>
														<div class="actions">
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
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
							<!-- /Recent Orders -->
							
						</div>
					</div>
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
    </body>

@endsection