@extends('hospitaldashboard.layouts.master')
@section('content')
<body>

                    <div class="col-md-7 col-lg-8 col-xl-9">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Edit Time Slots</h4>
                                       <!-- Add Blog -->
								<form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service" action="https://Social Vaidya-html.dreamguystech.com/template/admin/blog.html">
									<input type="hidden" name="csrf_token_name" value="0146f123a4c7ae94253b39bca6bd5a5e">

									<div class="service-fields mb-3">
										<div class="row">

										<div class="form-group col-md-6">
                                                 
                                                <label>Start Time</label>
                                                <select class="form-control">
														<option>-</option>
														<option selected>12.00 am</option>
														<option>12.30 am</option>  
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
                                            </div>
                                  	<div class="form-group col-md-6">
                                                 
                                                <label>Start Time</label>
                                                <select class="form-control">
														<option>-</option>
														<option selected>12.00 am</option>
														<option>12.30 am</option>  
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
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

            </div>

        </div>
        <!-- /Page Content -->

  

</body>

@endsection