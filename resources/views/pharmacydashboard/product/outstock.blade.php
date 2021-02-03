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
                            <h3 class="page-title">Outstock</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/pharmacy/product')}}">Product</a></li>
                                <li class="breadcrumb-item active">Outstock</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="row">
                    <div class="col-md-12">

                        <!-- Recent Orders -->
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Brand Name</th>
                                                <th>Genetic Name</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Discount</th>
                                                <th>Expire</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <span class="avatar avatar-sm mr-2"><img class="avatar-img" src="{{asset('pharmacydashboard/assets/img/product/product1.jpg')}}" alt="product image"></span> Actamin
                                                    </h2>
                                                </td>
                                                <td>Amphetamine</td>
                                                <td>Phytopathology‎</td>
                                                <td>$22</td>
                                                <td><span class="btn btn-sm bg-danger-light">THERE ONLY 5</span></td>
                                                <td>0%</td>
                                                <td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
                                                <td>
                                                    <div class="actions">
                                                        <a class="btn btn-sm bg-success-light" href="edit-medicine.html">
                                                            <i class="fe fe-pencil"></i> Edit
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
                                                            <i class="fe fe-trash"></i> Delete
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /Recent Orders -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
  
</body>
@endsection