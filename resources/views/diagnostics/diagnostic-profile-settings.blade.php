@extends('diagnostics.layouts.master')
@section('content')
<?php $diagnostic = DB::table('diagnosticprofiles')->where(['email'=>Session::get('diagnosticSession')])->get(); ?>
<body>

                    <div class="col-md-7 col-lg-8 col-xl-9">
 <!-- Basic Information -->
                        <form method="post" enctype="multipart/form-data" action="{{url('/diagnostic/diagnostic-profile-settings')}}">
    {{ csrf_field() }}
                        <div class="card">
                            
                                  
                            <div class="card-body">@if(Session::has('flash_message_error'))
            <div class="alert alert-sm alert-danger alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
            <strong>{!! session('flash_message_error') !!}</strong>
            </div>
            @endif

            @if(Session::has('flash_message_success'))
            <div class="alert alert-sm alert-success alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
            <strong>{!! session('flash_message_success') !!}</strong>
            </div>
            @endif
                                <h4 class="card-title">Basic Information</h4>
                                <div class="row form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="change-avatar">
                                                <div class="profile-img">
                                                @foreach($diagnostic as $dia)    
                                                    <img src="{{asset('/diagnostics/uploads/user_img/'.$dia->user_image)}}"  alt="Upload Image">
                                                @endforeach
                                                </div>
                                                 <div class="upload-img">
                                                    <div class="change-photo-btn">
                                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                        
                                                        <input type="file" name="user_image" id="image"  class="upload" required>
                                                     @foreach($diagnostic as $dia) 
                                                        <input type="hidden" value="{{$dia->user_image}}" name="current_image1">
                                                        @endforeach
                                                    </div>
                                                    <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @foreach($diagnosticuser as $duser)
                                    <div class="col-md-6">
                                        <input type="hidden" name="diagnosticId" class="form-control" value="{{$duser->id}}">   
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Diagnostic Name<span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" value="{{$duser->name}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input type="email" name="email" value="{{$duser->email}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" name="phone" value="{{$duser->phone}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name <span class="text-danger">*</span></label>
                                            <input type="text" name="first_name"  class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name <span class="text-danger">*</span></label>
                                            <input type="text" name="last_name" class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control select" name="gender" required>
													<option>Select</option>
													<option>Male</option>
													<option>Female</option>
												</select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <label>Date of Birth</label>
                                            <input type="date" name="dob" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Basic Information -->

                        <!-- About Me -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">About Me</h4>
                                <div class="form-group mb-0">
                                    <label>Biography</label>
                                    <textarea class="form-control" name="bio" rows="5" required></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /About Me -->
                        
                              <!-- Hospital Info -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Diagnostic Info</h4>
                                <div class="row form-row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Diagnostic Address</label>
                                            <input type="text" name="diagnostic_address" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Diagnostic Images</label>
                                            <input type="file" name="diagnostic_image"  id="image"  class="upload" required>
                                            @foreach($diagnostic as $dia)
                                          
                                            <input type="hidden" value="{{$dia->diagnostic_image}}" id="image"  name="current_image2">
                                            @endforeach
                                        </div>
                                        <div class="upload-wrap">
                                            <div class="upload-images">
                                                @foreach($diagnostic as $dia)
                                                <img src="{{asset('/diagnostic/uploads/diagnostic_img/'.$dia->diagnostic_image)}}" id="img-tag"alt="Upload Image">
                                              
                                             @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Hospital Info -->

                       
                        <!-- /Payment Info -->
                        <div class="card">
                            <div class="card-body">
                              <div class="payment-widget">
                                        <h4 class="card-title">Payment Info</h4>

                                        <!-- Credit Card Payment -->
                                        <div class="payment-list">
                                     <label for="card-title">Account Details</label>
                                        
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group card-label">
                                                        <label for="card_name">Account Holder's Name</label>
                                                        <input class="form-control" name="account_holder" id="card_name" type="text" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group card-label">
                                                        <label for="card_number">Account Number</label>
                                                        <input class="form-control" name="account_number" id="card_number" placeholder="1234  5678  9876  5432" type="number" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group card-label">
                                                        <label for="expiry_month">IFSC Code</label>
                                                        <input class="form-control" name="ifsc_code" id="expiry_month" placeholder="ABCD1234" type="text" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group card-label">
                                                        <label for="expiry_year">UPI ID</label>
                                                        <input class="form-control" name="upi_id" id="expiry_year" placeholder="" type="text" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                               
                                          
                                              </div>
                                        </div>
                                      
                        <!-- Payment End ->
                        <!-- Contact Details -->
                        <div class="card contact-card">
                            <div class="card-body">
                                <h4 class="card-title">Contact Details</h4>
                                <div class="row form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address Line</label>
                                            <input type="text" name="address" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">City</label>
                                            <input type="text" name="city" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">State / Province</label>
                                            <input type="text" name="state" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Country</label>
                                            <input type="text" name="country" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Postal Code</label>
                                            <input type="text" name="postal_code" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Contact Details -->

                        <!-- Pricing -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pricing</h4>
                                <div class="form-group mb-0">
                                    <input type="text" name="price" class="form-control" placeholder="Enter Price" required>
                                </div>
                            </div>
                        </div>
                        <!-- /Subscriptions -->
                        
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Subscriptions by</h4>
                                 <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label>Promocode</label>
                                        <input type="text" name="promocode" class="form-control" placeholder="AB12CD45FG56">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / SubscriptionEnd -->

                        <!-- Services and Specialization -->
                        <div class="card services-card">
                            <div class="card-body">
                                <h4 class="card-title">Services and Specialization</h4>
                                <div class="form-group">
                                    <label>Services</label>
                                    <input type="text"class="form-control" placeholder="Enter Services" name="services" id="services" required>
                                </div>
                                <div class="form-group mb-0">
                                    <label>Specialization </label>
                                    <input class="form-control" type="text" placeholder="Enter Specialization" name="specialist" value="" id="specialist" required>
                                </div>
                            </div>
                        </div>
                        <!-- /Services and Specialization -->

                        <!-- Awards -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Awards</h4>
                                <div class="awards-info">
                                    <div class="row form-row awards-cont">
                                        <div class="col-12 col-md-5">
                                            <div class="form-group">
                                                <label>Awards</label>
                                                <input type="text" name="award" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <div class="form-group">
                                                <label>Year</label>
                                                <input type="text" name="award_year" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                       </div>
                        <!-- /Awards -->

                        <!-- Memberships -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Memberships</h4>
                                <div class="membership-info">
                                    <div class="row form-row membership-cont">
                                        <div class="col-12 col-md-10 col-lg-5">
                                            <div class="form-group">
                                                <label>Memberships</label>
                                                <input type="text" name="membership" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <!-- /Memberships -->

                        <!-- Registrations -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Registrations</h4>
                                <div class="registrations-info">
                                    <div class="row form-row reg-cont">
                                        <div class="col-12 col-md-5">
                                            <div class="form-group">
                                                <label>Diagnostic Registrations Number</label>
                                                <input type="text" name="registration_number" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <div class="form-group">
                                                <label>Year</label>
                                                <input type="text" name="registration_year" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- /Registrations -->

                        <div class="submit-section submit-btn-bottom">
                            <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                        </div>

                  
                    <form>
                </div>
</body>

@endsection