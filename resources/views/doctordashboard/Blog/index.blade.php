@extends('doctordashboard.layouts.master')
@section('content')
<body>

             
                    <div class="col-md-7 col-lg-8 col-xl-9">
 <!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">View Blog</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/doctor-dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Pages</a></li>
									<li class="breadcrumb-item active">View Blog</li>
								</ul>
								
							</div>
						</div>
					</div>
					<!-- /Page Header -->
                        <div class="row mb-5">
                            <div class="col">
                                
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-primary btn-sm " href="{{url('/doctor/addblog')}}"><i class="fa fa-plus mr-1"></i> Add Blog</a>
                            </div>
                        </div>

                        <!-- Blog -->
                        <div class="row blog-grid-row">
                            @foreach($blogdetails as $blog)
                            <div class="col-md-6 col-xl-4 col-sm-12">
                           
                                <!-- Blog Post -->
                                

                                <div class="blog grid-blog">
                                
                                    <div class="blog-image">
                                        <img class="img-fluid" src="{{asset('doctorprofile/uploads/blogimg/'.$blog->image)}}" alt="Post Image">
                                    </div>
                                    
                                    <div class="blog-content">
                                            
                                                <div class="post-author">
                                                    <a>{{ $blog->doctor}}</a>
                                                </div>
                                            
                                        <ul class="entry-meta meta-item my-2">
                                            <li><i class="far fa-clock"></i>{{$blog->date}}</li>
                                        </ul>
                                        <h3 class="blog-title"><a href="#">{{$blog->blog_title}}</a></h3>
                                        <p class="mb-0">{{$blog->descriptions}}</p>
                                    </div>
                                   
                                    <div class="row pt-3">
                                        <div class="col"><a href="{{url('/doctor/editblog/'.$blog->id)}}" 
                                        class="text-success"><i class="fa fa-edit"></i> Edit</a></div>
                                        <div class="col text-right"><a href="{{url('/doctor/blog/delete/'.$blog->id)}}" class="text-danger" ><i class="fa fa-trash-alt"></i>Delete</a></div>
                                    </div>
                                    
                                </div>
                                
                                <!-- /Blog Post -->

                    
                                <!-- /Blog Post -->
                                
                            </div>
                            @endforeach
                        </div>

                        <!-- Blog Pagination -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog-pagination">
                                    <nav>
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1"><i class="fa fa-angle-double-left"></i></a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- /Blog Pagination -->
                        <!-- /Blog -->
                    </div>
                

    @endsection
