@extends('doctordashboard.layouts.master')
@section('content')
<body>


               

                
                    <div class="col-md-7 col-lg-8 col-xl-9">
                         <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Edit Blog</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/doctor-dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript:(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Edit Blog</li>
                            </ul>
                            <a class="btn btn-success mb-3" style="float:right;" href="{{url('/doctor/blog')}}">View Blog</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                        <div class="card">
                            <div class="card-body custom-edit-service">

                                <div class="row mb-5">
                                    <div class="col">
                                        
                                    </div>
                                    
                                </div>

                                <!-- Add Blog -->
                                <form method="post" enctype="multipart/form-data" name="add_blog" autocomplete="off" 
                                id="update_service" action="{{url('/doctor/editblog/'.$blogdetails->id)}}">
                                   
										{!! csrf_field() !!}
                                   
                                                <div class="form-group">
                                                    <label>Author</label>
                                                    <input class="form-control" type="text"  
                                                   name="doctor" value="{{ $blogdetails->doctor }}" required>
                                                </div>
                                            
                                    <div class="service-fields mb-2">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Blog Title <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="blog_name" 
                                                    id="service_title" value="{{$blogdetails->blog_title}}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service-fields">
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<label>Date<span class="text-danger">*</span></label>
													
													<input class="form-control" type="Date" value="{{$blogdetails->date}}" name="date" id="date-section">
												</div>
											</div>
										</div>
									</div>

                                    <div class="service-fields mb-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Descriptions<span class="text-danger">*</span></label>
                                                    <textarea id="about" class="form-control service-desc" name="descriptions">{{$blogdetails->descriptions}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service-fields mb-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="category">Image</label>
                                                <input type="hidden" value="{{$blogdetails->image}}" name="current_image">
                                               <input type="file" class="form-control" id="product-image" name="image">
                                            </div>
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
               
    @endsection