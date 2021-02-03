@extends('pharmacydashboard.layouts.master')
@section('content')

<body>

    <!-- Main Wrapper -->
  <!-- Page Wrapper -->
  <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Add Product</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{('/pharmacy-dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add Product</li>
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
                                <form method="post" enctype="multipart/form-data"  autocomplete="off" id="update_service" action="{{url('/pharmacy/product/add-product')}}">
                                    {{ csrf_field() }}

                                    <div class="service-fields mb-3">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Product Name<span class="text-danger">*</span></label>
                                                    <input type="hidden" name="product_name" id="brand_name" value="18">
                                                    <input class="form-control" type="text" name="product_name" id="brand_name" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Category <span class="text-danger">*</span></label>
                                                    <select class="form-control select" name="product_category" required=""> 
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
                                                    <input class="form-control" type="text" name="product_price" id="Price"  required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Quantity<span class="text-danger">*</span></label>
                                                    <input type="hidden" name="product_quantity" id="quantity" value="18">
                                                    <input class="form-control" type="text" name="product_quantity" id="quantity" value="" required="">
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
                                                    <input class="form-control" type="text" name="product_discount" id="discount"  required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="service-fields mb-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Descriptions <span class="text-danger">*</span></label>
                                                    <textarea id="about" class="form-control service-desc" name="product_description"></textarea>
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
                                                    <input type="file" name="product_image" id="image" class="form-control" accept="image/jpeg, image/png, image/gif">
                                                    
                                                </div>
                                                <div id="uploadPreview">
                                                    <ul class="upload-wrap">
                                                        <li>
                                                            <div class="upload-images">
                                                            <img src="#" id="img-tag" width="100px" />
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
        <!-- /Page Wrapper -->
    <!-- /Main Wrapper -->

    



</body>
@endsection