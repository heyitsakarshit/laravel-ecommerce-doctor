@extends('superadmin.layouts.master')
@section('content')
<body>
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-7 col-auto">
                            <h3 class="page-title">Product List</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Product List</li>
                            </ul>
                        </div>
                        <div class="col-sm-5 col">
                            <a href="{{url('/admin/addproduct')}}" class="btn btn-primary float-right mt-2">Add</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="datatable table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th>Quantity</th>
												<th>Discount</th>
                                                <th>Category</th>
                                                <th>Date</th>
                                                <th>Expire</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($product as $pro)
                                            <tr>
                                                <td>{{$pro->id}}</td>

                                                <td>
                                                    <h2 class="table-avatar">
                                                        <!-- <a class="avatar avatar-sm mr-2">
                                                            <img class="avatar-img rounded-circle" src="{{asset('superadmin/assets/img/product/product.jpg')}}" alt="product image">
                                                        </a> -->
                                                        <a>{{$pro->product_name}}</a>
                                                    </h2>
                                                </td>

                                                <td>₹&nbsp;{{$pro->product_price}}</td>
                                                <td><img  class="avatar-img" src="{{ asset('superadmin/uploads/product/'.$pro->product_image) }}" alt="product-image" width="50px;" height="50px;"/></td>
                                                <td>{{$pro->product_quantity}}</td>
												<td>{{$pro->product_discount}}</td>
                                                <td>{{$pro->product_category}}</td>
                                                <td>{{$pro->created_at}}</td>
                                                <td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
                                                <td class="text-right">
                                                    <div class="actions">
                                                        <a class="btn btn-sm bg-success-light"  href="{{url('/admin/editproduct/'.$pro->id)}}">
                                                            <i class="fe fe-pencil"></i> Edit
                                                        </a>
                                                        <a  href="{{url('/admin/product/delete/'.$pro->id)}}" class="btn btn-sm bg-danger-light">
                                                            <i class="fe fe-trash"></i>Delete
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Wrapper -->


        <!-- Add Modal -->
        <div class="modal fade" id="Add_Specialities_details" aria-hidden="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row form-row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /ADD Modal -->

        <!-- Edit Details Modal -->
        <div class="modal fade" id="edit_specialities_details" aria-hidden="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row form-row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        

@endsection