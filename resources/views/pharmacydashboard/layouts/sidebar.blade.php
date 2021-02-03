
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="active"> 
								<a href="{{url('/pharmacy-dashboard')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li class="submenu">
								<a><i class="fe fe-document"></i> <span> Products</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{url('/pharmacy/product')}}">Products</a></li>
									<li><a href="{{url('/pharmacy/product/add-product')}}">Add Product</a></li>
									<li><a href="{{url('/pharmacy/product/outstock')}}">Out-Stock</a></li>
									
								</ul>
							</li>
							<li> 
								<a href="{{url('/pharmacy/category')}}"><i class="fe fe-layout"></i> <span>Categories</span></a>
							</li>
							<li><a href="{{url('/pharmacy/order')}}"><i class="fe fe-layout"></i><span> Order</span></a></li>
							
							<li><a href="{{url('/pharmacy/sales')}}"><i class="fe fe-activity"></i><span>Sales</span></a></li>
                        
							<li><a href="{{url('/pharmacy/transactions')}}"><i class="fe fe-table"></i> <span>Transaction</span></a></li>
							<li class="submenu">
								<a ><i class="fe fe-document"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{url('/pharmacy/invoice-report')}}">Invoice Reports</a></li>
								</ul>
							</li>
							<li> 
								<a href="{{url('/pharmacy/profile')}}"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			