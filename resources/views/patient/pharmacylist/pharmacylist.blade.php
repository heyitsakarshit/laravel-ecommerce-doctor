@extends('patient.layouts.master')
@section('content')

  <!-- Main Wrapper -->
    <div class="main-wrapper">
         <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
        <!-- Header -->
        <div class="header"></div>
            <!-- /Header -->
            
 
        
     <?php $user= DB::table('patients')->where(['email'=>Session::get('patientSession')])->get();
 
 ?>   
    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
        <!-- Profile Sidebar -->               
        <div class="profile-sidebar">
        @foreach($user as $use)
                            <div class="widget-profile pro-widget-content">
                                <div class="profile-info-widget">
                                    <a href="#" class="booking-doc-img">
                                        <img src="{{asset('uploads/patient/img/'.$use->image)}}" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
 <h3>{{$use->name}}</h3>
 
  

                                        <div class="patient-details">
                                            <h5><i class="fas fa-birthday-cake"></i>{{$use->dob}}</h5>
                                            <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i>{{$use->city}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="{{url('/patient-dashboard')}}">
                                                <i class="fas fa-columns"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        
                                           <li>
                                            <a href="{{url('/patient/pharmacylist')}}">
                                                <i class="fas fa-prescription-bottle-alt"></i>
                                                <span>Pharmacy</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/patient/favourites')}}">
                                                <i class="fas fa-bookmark"></i>
                                                <span>Favourites</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{url('/patient/profile-settings')}}">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/patient/change-password')}}">
                                                <i class="fas fa-lock"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/patient-logout')}}">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            @endforeach
                        </div>
                        </div>
                    <!-- / Profile Sidebar -->
                





                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body pt-0  my-5">


                <div class="card card-table">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>SKU</th>
                                        <th>Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="product-description.html" class="avatar avatar-sm mr-2"><img class="avatar-img" src="{{asset('assets/img/products/product.jpg')}}" alt="User Image"></a>
                                            </h2>
                                            <a href="product-description.html">Benzaxapine Croplex</a>
                                        </td>
                                        <td>26565</td>
                                        <td>₹&nbsp;19</td>
                                        <td class="text-center">
                                            <div class="custom-increment cart">
                                                <div class="input-group1">
                                                    <span class="input-group-btn">
				                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
				                                          <span><i class="fas fa-minus"></i></span>
                                                    </button>
                                                    </span>
                                                    <input type="text" id="quantity1" name="quantity1" class=" input-number" value="10">
                                                    <span class="input-group-btn">
				                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
				                                            <span><i class="fas fa-plus"></i></span>
                                                    </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">₹&nbsp;19</td>
                                        <td class="text-right">
                                            <div class="table-action">
                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="product-description.html" class="avatar avatar-sm mr-2"><img class="avatar-img" src="{{asset('assets/img/products/product1.jpg')}}" alt="User Image"></a>
                                            </h2>
                                            <a href="product-description.html">Ombinazol Bonibamol</a>
                                        </td>
                                        <td>865727</td>
                                        <td>₹&nbsp;22</td>
                                        <td class="text-center">
                                            <div class="custom-increment cart">
                                                <div class="input-group1">
                                                    <span class="input-group-btn">
				                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
				                                          <span><i class="fas fa-minus"></i></span>
                                                    </button>
                                                    </span>
                                                    <input type="text" id="quantity2" name="quantity2" class=" input-number" value="10">
                                                    <span class="input-group-btn">
				                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
				                                            <span><i class="fas fa-plus"></i></span>
                                                    </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">₹&nbsp;22</td>
                                        <td class="text-right">
                                            <div class="table-action">
                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="product-description.html" class="avatar avatar-sm mr-2"><img class="avatar-img" src="{{asset('assets/img/products/product2.jpg')}}" alt="User Image"></a>
                                            </h2>
                                            <a href="product-description.html">Dantotate Dantodazole</a>
                                        </td>
                                        <td>978656</td>
                                        <td>₹&nbsp;10</td>
                                        <td class="text-center">
                                            <div class="custom-increment cart">
                                                <div class="input-group1">
                                                    <span class="input-group-btn">
				                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
				                                          <span><i class="fas fa-minus"></i></span>
                                                    </button>
                                                    </span>
                                                    <input type="text" id="quantity3" name="quantity3" class=" input-number" value="10">
                                                    <span class="input-group-btn">
				                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
				                                            <span><i class="fas fa-plus"></i></span>
                                                    </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">₹&nbsp;10</td>
                                        <td class="text-right">
                                            <div class="table-action">
                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="product-description.html" class="avatar avatar-sm mr-2"><img class="avatar-img" src="{{asset('assets/img/products/product3.jpg')}}" alt="User Image"></a>
                                            </h2>
                                            <a href="product-description.html">Alispirox Aerorenone</a>
                                        </td>
                                        <td>543252</td>
                                        <td>₹&nbsp;26</td>
                                        <td class="text-center">
                                            <div class="custom-increment cart">
                                                <div class="input-group1">
                                                    <span class="input-group-btn">
				                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
				                                          <span><i class="fas fa-minus"></i></span>
                                                    </button>
                                                    </span>
                                                    <input type="text" id="quantity4" name="quantity4" class=" input-number" value="10">
                                                    <span class="input-group-btn">
				                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
				                                            <span><i class="fas fa-plus"></i></span>
                                                    </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">₹&nbsp;26</td>
                                        <td class="text-right">
                                            <div class="table-action">
                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="product-description.html" class="avatar avatar-sm mr-2"><img class="avatar-img" src="{{asset('assets/img/products/product4.jpg')}}" alt="User Image"></a>
                                            </h2>
                                            <a href="product-description.html">Nitrolozin Zithrotropin</a>
                                        </td>
                                        <td>634534</td>
                                        <td>₹&nbsp;12</td>
                                        <td class="text-center">
                                            <div class="custom-increment cart">
                                                <div class="input-group1">
                                                    <span class="input-group-btn">
				                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
				                                          <span><i class="fas fa-minus"></i></span>
                                                    </button>
                                                    </span>
                                                    <input type="text" id="quantity5" name="quantity5" class=" input-number" value="10">
                                                    <span class="input-group-btn">
				                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
				                                            <span><i class="fas fa-plus"></i></span>
                                                    </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">₹&nbsp;12</td>
                                        <td class="text-right">
                                            <div class="table-action">
                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7 col-lg-8">
                    </div>

                    <div class="col-md-5 col-lg-4">

                        <!-- Booking Summary -->
                        <div class="card booking-card">
                           
                            <div class="card-body">

                          
                                     
                                        <div class="booking-total">
                                            <ul class="booking-total-list">
                                                <li>
                                                    <span>Total</span>
                                                    <span class="total-cost">₹&nbsp;160</span>
                                                </li>
                                                <li>
                                                 
                                                </li>
                                            </ul>
                                        </div>
                                   
                            </div>
                        </div>
                        <!-- /Booking Summary -->
</div>

</div>
</div>
                        
</div>
</div>
</div>
                        
</div>




@endsection