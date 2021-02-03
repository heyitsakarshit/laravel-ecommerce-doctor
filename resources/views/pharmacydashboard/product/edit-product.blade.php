@extends('pharmacydashboard.layouts.master')
@section('content')
<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Edit Product</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/pharmacy-dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Edit Product</li>
                            </ul>
                            <a class="btn btn-success" style="float:right;" href="{{url('/pharmacy/product')}}">View Products</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body custom-edit-service">


                                <!-- Add Medicine -->
                                <form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service" action="{{ url('/pharmacy/product/edit-product/'.$pharmacy_pro->id)}}">
                                    {{ csrf_field() }}
                                    <div class="service-fields mb-3">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Product Name<span class="text-danger">*</span></label>
                                                    <input type="hidden" name="product_name" id="brand_name" value="18">
                                                    <input class="form-control" type="text" name="product_name" id="brand_name" value="{{$pharmacy_pro->product_name}}" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Category <span class="text-danger">*</span></label>
                                                    <select class="form-control select" name="product_category"  value="{{$pharmacy_pro->product_category}}" > 
                                                       @foreach($pharmacy_cat as $cat)
                                                        <option>{{$cat->category_name}}</option>
                                                 @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service-fields mb-3">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Price<span class="text-danger">*</span></label>
                                                    <input type="hidden" name="product_price" id="Price" value="18">
                                                    <input class="form-control" type="text" name="product_price" id="Price" value="{{$pharmacy_pro->product_price}}" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Quantity<span class="text-danger">*</span></label>
                                                    <input type="hidden" name="product_quantity" id="quantity" value="18">
                                                    <input class="form-control" type="text" name="product_quantity" id="quantity" value="{{$pharmacy_pro->product_quantity}}" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service-fields mb-3">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Discount<span class="text-danger">*</span></label>
                                                    <input type="hidden" name="product_discount" id="discount" value="18">
                                                    <input class="form-control" type="text" name="product_discount" id="discount" value="{{$pharmacy_pro->product_discount}}" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service-fields mb-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Descriptions <span class="text-danger">*</span></label>
                                                    <textarea id="about" class="form-control service-desc" name="product_description">{{$pharmacy_pro->product_description}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service-fields mb-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="service-upload">
                                                    <i class="fas fa-cloud-upload-alt"></i>
                                                    <span>Upload Product Images *</span>
                                                    <input type="hidden" value="{{$pharmacy_pro->product_image}}" name="current_image">
                                                    <input type="file" name="product_image" id="image" accept="image/jpeg, image/png, image/gif">

                                                </div>
                                                <div id="uploadPreview">
                                                    <ul class="upload-wrap">
                                                        <li>
                                                            <div class="upload-images">
                                                            <img src="{{ asset('superadmin/uploads/product/'.$pharmacy_pro->product_image) }}" id="img-tag" width="100px"/>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Submit</button>
                                    </div>
                                </form>
                                <!-- /Add Medicine -->


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    

    </div>
  @endsection