@extends('socialvaidya.layouts.master')
@section('content')
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			 <div class="header"></div>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Blog</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Blog Grid</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">
				
					<div class="row">
						<div class="col-lg-8 col-md-12">
						
							<div class="row blog-grid-row">
							    @foreach($blogdetails as $blog)
								<div class="col-md-6 col-sm-12">
								
									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="{{url('/blog-details/'.$blog->id)}}"><img class="img-fluid" src="{{asset('doctorprofile/uploads/blogimg/'.$blog->image)}}" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="{{url('/doctor-profile')}}"><span>{{ $blog->doctor}}</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i>{{$blog->date}}</li>
											</ul>
											<h3 class="blog-title"><a href="{{url('/blog-details/'.$blog->id)}}">{{$blog->blog_title}}</a></h3>
											<p class="mb-0">{{$blog->descriptions}}</p>
										</div>
									</div>
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
													<a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
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
													<a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<!-- /Blog Pagination -->
							
						</div>
						
						<!-- Blog Sidebar -->
						<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">

							<!-- Search -->
							<div class="card search-widget">
								<div class="card-body">
									<form class="search-form">
										<div class="input-group">
											<input type="text" placeholder="Search..." class="form-control">
											<div class="input-group-append">
												<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /Search -->

							<!-- Latest Posts -->
							<div class="card post-widget">
								<div class="card-header">
									<h4 class="card-title">Latest Posts</h4>
								</div>
								<div class="card-body">
									<ul class="latest-posts">
										@foreach($blogdetails as $blog)
										<li>
											<div class="post-thumb">
												<a href="{{url('/blog-details/'.$blog->id)}}">
													<img class="img-fluid" src="{{asset('doctorprofile/uploads/blogimg/'.$blog->image)}}" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="{{url('/blog-details/'.$blog->id)}}">{{$blog->blog_title}}</a>
												</h4>
												<p>{{$blog->date}}</p>
											</div>
										</li>
										@endforeach
									</ul>
								</div>
							</div>
							<!-- /Latest Posts -->

							<!-- Categories -->
							<div class="card category-widget">
								<div class="card-header">
									<h4 class="card-title">Blog Categories</h4>
								</div>
								<div class="card-body">
									<ul class="categories">
										<li><a href="#">Cardiology <span>(62)</span></a></li>
										<li><a href="#">Health Care <span>(27)</span></a></li>
										<li><a href="#">Nutritions <span>(41)</span></a></li>
										<li><a href="#">Health Tips <span>(16)</span></a></li>
										<li><a href="#">Medical Research <span>(55)</span></a></li>
										<li><a href="#">Health Treatment <span>(07)</span></a></li>
									</ul>
								</div>
							</div>
							<!-- /Categories -->

							<!-- Tags -->
							<div class="card tags-widget">
								<div class="card-header">
									<h4 class="card-title">Tags</h4>
								</div>
								<div class="card-body">
									<ul class="tags">
										<li><a href="#" class="tag">Children</a></li>
										<li><a href="#" class="tag">Disease</a></li>
										<li><a href="#" class="tag">Appointment</a></li>
										<li><a href="#" class="tag">Booking</a></li>
										<li><a href="#" class="tag">Kids</a></li>
										<li><a href="#" class="tag">Health</a></li>
										<li><a href="#" class="tag">Family</a></li>
										<li><a href="#" class="tag">Tips</a></li>
										<li><a href="#" class="tag">Shedule</a></li>
										<li><a href="#" class="tag">Treatment</a></li>
										<li><a href="#" class="tag">Dr</a></li>
										<li><a href="#" class="tag">Clinic</a></li>
										<li><a href="#" class="tag">Online</a></li>
										<li><a href="#" class="tag">Health Care</a></li>
										<li><a href="#" class="tag">Consulting</a></li>
										<li><a href="#" class="tag">Doctors</a></li>
										<li><a href="#" class="tag">Neurology</a></li>
										<li><a href="#" class="tag">Dentists</a></li>
										<li><a href="#" class="tag">Specialist</a></li>
										<li><a href="#" class="tag">Social Vaidya</a></li>
									</ul>
								</div>
							</div>
							<!-- /Tags -->
							
						</div>
						<!-- /Blog Sidebar -->
						
					</div>
				</div>
			</div>	
			<!-- /Page Content -->
   
			<!-- Footer -->
		 <div class="footer"></div>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
	</body>


@endsection