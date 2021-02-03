@extends('socialvaidya.layouts.master')
@section('content')
<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <div class="header"></div>
        


<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Business Partners</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Business Partners</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<section class="section-for-doctor">
<div class="container">
<div class="row">

    <div class="col-md-12">
        <div class="plan-title text-center p-3">
            <h1>Business Partners</h1>
        </div>
    </div>
    <div class="col-md-4 mt-3">
        <a  href="{{url('/doctor-dashboard')}}">
        <div class="card" style=" border: 1px solid #338ce4;">
            <div class="card-body">
              <h2 class="card-title text-center subscription-title">Individual Doctor</h2>
              <h4 class="card-traiel text-center">Trial Package</h4>
              <div class="col-sm-12 text-center"><span class="currency">₹</span>&nbsp;<span class="discountPrice">666</span></div>

              <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div></a>
    </div> 
   
    <div class="col-md-4 mt-3">
         <a  href="{{url('bloodbank/bloodbank-dashboard')}}">
        <div class="card" style=" border: 1px solid #338ce4;">
            <div class="card-body">
              <h2 class="card-title text-center subscription-title">Blood Bank</h2>
              <h4 class="card-traiel text-center">Silver Package</h4>
              <div class="col-sm-12 text-center"><span class="currency">₹</span>&nbsp;<span class="discountPrice">500</span></div>

              <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
          </a>
    </div> 

    <div class="col-md-4 mt-3">
         <a  href="{{url('/diagnostic/diagnostic-dashboard')}}">
        <div class="card" style=" border: 1px solid #338ce4;">
            <div class="card-body">
              <h2 class="card-title text-center subscription-title">Diagonostics</h2>
              <h4 class="card-traiel text-center">Gold Package</h4>
              <div class="col-sm-12 text-center"><span class="currency">₹</span>&nbsp;<span class="discountPrice">1000</span></div>

              <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
          </a>
    </div>
    
    
    <div class="col-md-4 mt-3">
         <a  href="{{url('/hospital/hospital-dashboard')}}">
        <div class="card" style=" border: 1px solid #338ce4;">
            <div class="card-body">
              <h2 class="card-title text-center subscription-title">Hospital</h2>
              <h4 class="card-traiel text-center">Platinum</h4>
              <div class="col-sm-12 text-center"><span class="currency">₹</span>&nbsp;<span class="discountPrice">2000</span></div>

              <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
          </a>
    </div> 


    <div class="col-md-4 mt-3">
         <a  href="{{url('/pharmacy-dashboard')}}">
        <div class="card" style=" border: 1px solid #338ce4;">
            <div class="card-body">
              <h2 class="card-title text-center subscription-title">Pharmacy</h2>
              <h4 class="card-traiel text-center">Platinum</h4>
              <div class="col-sm-12 text-center"><span class="currency">₹</span>&nbsp;<span class="discountPrice">2000</span></div>

              <p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
          </a>
    </div> 

    
</div>
</div>
</section>



    <!-- Footer -->
    <div class="footer"></div>

<!--UI by- Lalit Raghav-->
    </div>
 



</body>
@endsection