<div class="container-fluid" style="background-color:#20c997;">
        <nav class="navbar navbar-expand-lg" style="padding: 0px 16px !important; font-size: 14px;">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin-left: 800px;">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#">Get the App </a>
                    </li>
                    <li class="nav-item active mx-5">
                        <a class="nav-link text-white" href="{{url('/business-partners')}}">For Business Partner</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#">Health Feed</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{url('/')}}"class="navbar-brand logo">
                    <img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{url('/')}}" class="menu-logo">
                        <img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    <li class="active">
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    
                    <li><a href="{{url('/doctors/search')}}">Doctor</a></li>
                    <li><a href="{{url('/product-all')}}">Medicine</a></li>
                    <!--<li class="has-submenu">-->
                    <!--    <a href="#">Pharmacy<i class="fas fa-chevron-down"></i></a>-->
                    <!--    <ul class="submenu">-->
                    <!--        <li><a href="{{url('/pharmacy-index')}}">Pharmacy</a></li>-->
                    <!--        <li><a href="{{url('/pharmacy-details')}}">Pharmacy Details</a></li>-->
                    
                    <!--        <li><a href="{{url('/product-all')}}">Product</a></li>-->
                    <!--        <li><a href="{{url('/view-cart')}}">Cart</a></li>-->
                    <!--         >-->
                    <!--    </ul>-->
                    <!--</li>-->
                    
                    <li>
                        <a href="{{url('/view-blog-grid')}}">Blog</a>
                        
                    </li>
                    <li><a href="{{url('/pharmacy-search')}}">Pharmacy</a></li>
                    <li class="login-link">
                        <a href="{{url('/user-login-register')}}">Login / Signup</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">

              
                <li class="nav-item">
                    <a class="nav-link header-login bg-danger text-white" href="{{ url('/requestblood')}}">Donate / Request </a>
                </li>
                
                
                
                @if(Session::get('email') == Null)
            
                    <li class="nav-item">
                    <a class="nav-link header-login" href="{{url('/user-login-register')}}">login / Signup</a>
                </li>
                  <li class="nav-item view-cart-header mr-3">
                    <a href="{{url('/view-cart')}}" class="" id="cart"><i class="fas fa-shopping-cart"></i> <small class="unread-msg1">7</small></a>
                    <!-- Shopping Cart -->

                </li>
            @else
            
              <li class="nav-item">
                    <a class="nav-link header-login" href="{{url('/patient-dashboard')}}">Account</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link header-login" href="{{url('/patient-logout')}}">Logout</a>
                </li>
           
            @endif
            

                <!--<li class="nav-item">-->
                <!--    <a class="nav-link header-login" href="{{url('/user-login-register')}}">login / Signup</a>-->
                <!--</li>-->
                <!--  <li class="nav-item view-cart-header mr-3">-->
                <!--    <a href="{{url('/view-cart')}}" class="" id="cart"><i class="fas fa-shopping-cart"></i> <small class="unread-msg1">7</small></a>-->
                    <!-- Shopping Cart -->

                <!--</li>-->

            </ul>
        </nav>
    </header>

    <div class="container-fluid col-md-12" style="background-color:#20c99773;">
        <nav class="navbar navbar-expand-lg navbar-light" style="padding: 0px 16px !important;">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin-left: 250px; color: aqua; ">
                    <li class="nav-item active mx-5">
                        <a class="nav-link text-secondary" href="{{url('/askquestion')}}"> <i class="fa fa-comment" aria-hidden="true"></i>&nbsp;Ask a Question</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-secondary" href="{{url('/doctors/search')}}"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;Book Appointments</a>
                    </li>
                    <li class="nav-item active mx-5">
                        <a class="nav-link text-secondary" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;Consult Online</a>
                    </li>

                   
                </ul>
            </div>
        </nav>
    </div>
    <!-- /Header -->