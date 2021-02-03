@extends('doctordashboard.layouts.master')
@section('content')
<?php $doctor = DB::table('doctorprofiles')->where(['email'=>Session::get('doctorSession')])->get(); ?>
<body>

                    <div class="col-md-7 col-lg-8 col-xl-9">

                        <!-- Basic Information -->
    <form method="post" enctype="multipart/form-data" action="{{url('/doctor-dashboard/doctor-profile-settings')}}">
    {{ csrf_field() }}
    
                        <div class="card">
                            <div class="card-body">
                                
                                <h4 class="card-title">Basic Information</h4>
                                <div class="row form-row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="change-avatar">
                                                <div class="profile-img">
                                                
                                        @foreach($doctor as $doc)            <img src="{{asset('doctorprofile/uploads/doc_img/'.$doc->doctor_image)}}" id="img-tag" alt="User Image">
                                               @endforeach
                                                </div>
                                                <div class="upload-img">
                                                    <div class="change-photo-btn">
                                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                        
                                                        <input type="file" name="doctor_image" id="image"  class="upload" required>
                                                        @foreach($profile as $pro)
                                                        <input type="hidden" value="{{$pro->doctor_image}}" name="current_image1">
                                                        @endforeach
                                                    </div>
                                                    <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    @foreach($dprofile as $dpro)
                                    <div class="col-md-6">
                                    
                                        <input type="hidden" name="userid" class="form-control" value="{{$dpro->id}}">   
                                    
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control" value="{{$dpro->email}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" value="{{$dpro->name}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" name="phone" value="{{$dpro->phone}}" class="form-control" readonly>
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
                                            <input type="text" name="last_name"  class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control select"  name="gender" required>
													<option>Select</option>
													<option>Male</option>
													<option>Female</option>
												</select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <label>Date of Birth</label>
                                            <input type="date" name="dob"  class="form-control" required>
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

                        <!-- Clinic Info -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Clinic Info</h4>
                                <div class="row form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Clinic Name</label>
                                            <input type="text" name="clinic_name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Clinic Address</label>
                                            <input type="text" name="clinic_address"   class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Clinic Images</label>
                                            <input type="file" name="clinic_image"  id="image"  class="upload" required>
                                            @foreach($profile as $pro)
                                            <input type="hidden" value="{{$pro->clinic_image}}" id="image"  name="current_image2">
                                            @endforeach
                                        </div>
                                        <div class="upload-wrap">
                                            <div class="upload-images">
                                            @foreach($doctor as $doc)            <img src="{{asset('doctorprofile/uploads/clinic_img/'.$doc->clinic_image)}}" id="img-tag" alt="Image">
                                               @endforeach
                                          </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /Clinic Info -->
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
                                                        <input class="form-control" name="account_holder_name"  id="card_name" type="text" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group card-label">
                                                        <label for="card_number">Account Number</label>
                                                        <input class="form-control" name="account_number"  id="card_number" placeholder="1234  5678  9876  5432" type="number" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group card-label">
                                                        <label for="expiry_month">IFSC Code</label>
                                                        <input class="form-control" name="ifsc" id="expiry_month"  placeholder="ABCD1234" type="text" required>
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
                                      
                        <!-- Payment End -->
                        <!-- Contact Details -->
                        <div class="card contact-card">
                            <div class="card-body">
                                <h4 class="card-title">Contact Details</h4>
                                <div class="row form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address Line</label>
                                            <input type="text" name="address"   class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">City</label>
                                            <input type="text" name="city"   class="form-control" required>
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
                                            <input type="number" name="postal_code"   class="form-control" required>
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

                                
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" id="price" name="price" class="form-control" required>
                                            
                                        </div>
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
                                        <input type="text" name="promocode" class="form-control" placeholder="AB12CD45FG56" required>
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
                                    <input type="text"  class="input-tags form-control" placeholder="Enter Services" name="services"  id="services" required>
                                    
                                </div>
                                
                                
                                
                                <div class="form-group mb-0">
                                    <label>Specialization </label>
                                    <input class="input-tags form-control" type="text" placeholder="Enter Specialization" name="specialist"   id="specialist" required>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /Services and Specialization -->

                        <!-- Education -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Education</h4>
                                <div class="education-info">
                                    <div class="row form-row education-cont">
                                        <div class="col-12 col-md-10 col-lg-11">
                                            <div class="row form-row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>Post Graduation</label>
                                                        <input type="text" name="degree1" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>College/Institute</label>
                                                        <input type="text" name="college1" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>Year of Completion</label>
                                                        <input type="text" name="year1"   class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="education-info">
                                    <div class="row form-row education-cont">
                                        <div class="col-12 col-md-10 col-lg-11">
                                            <div class="row form-row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>Graduation</label>
                                                        <input type="text" name="degree2"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>College/Institute</label>
                                                        <input type="text" name="college2" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>Year of Completion</label>
                                                        <input type="text" name="year2"  class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="education-info">
                                    <div class="row form-row education-cont">
                                        <div class="col-12 col-md-10 col-lg-11">
                                            <div class="row form-row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>Intercollege</label>
                                                        <input type="text" name="degree3"   class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>College/Institute</label>
                                                        <input type="text" name="college3"   class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>Year of Completion</label>
                                                        <input type="text" name="year3"  class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- /Education -->

                        <!-- Experience -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Experience</h4>
                                <div class="experience-info">
                                    <div class="row form-row experience-cont">
                                        <div class="col-12 col-md-10 col-lg-11">
                                            <div class="row form-row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>Hospital Name</label>
                                                        <input type="text" name="hospital_name1"   class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>From</label>
                                                        <input type="date" name="from1" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>To</label>
                                                        <input type="date" name="to1" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>Designation</label>
                                                        <input type="text" name="designation1"   class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="experience-info">
                                    <div class="row form-row experience-cont">
                                        <div class="col-12 col-md-10 col-lg-11">
                                            <div class="row form-row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>Hospital Name</label>
                                                        <input type="text" name="hospital_name2"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>From</label>
                                                        <input type="date" name="from2"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>To</label>
                                                        <input type="date" name="to2" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="form-group">
                                                        <label>Designation</label>
                                                        <input type="text" name="designation2"  class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Experience -->

                        <!-- Awards -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Awards</h4>
                                <div class="awards-info">
                                    <div class="row form-row awards-cont">
                                        <div class="col-12 col-md-5">
                                            <div class="form-group">
                                                <label>Awards</label>
                                                <input type="text" name="award1"  class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <div class="form-group">
                                                <label>Year</label>
                                                <input type="text" name="award_year"  class="form-control" required>
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
                                                <input type="text" name="membership"  class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <!-- /Memberships -->

                        <div class="submit-section submit-btn-bottom">
                            <button type="submit" class="btn btn-primary submit-btn">Save</button>
                        </div>
</div>
                  
    </form>
</div>
        <!-- /Page Content -->


</body>

@endsection