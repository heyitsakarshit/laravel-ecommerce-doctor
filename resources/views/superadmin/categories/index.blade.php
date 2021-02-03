@extends('superadmin.layouts.master')
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
                        <div class="col-sm-7 col-auto">
                            <h3 class="page-title">Categories</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Categories</li>
                            </ul>
                        </div>
                        <div class="col-sm-5 col">
                            <a href="{{url('/admin/addcategory')}}"  class="btn btn-primary float-right mt-2">Add</a>
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
                                                <th>Id</th>
                                                <th>Categories</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										@foreach($category as $cat)
                                            <tr>
                                                <td>{{$cat->id}}</td>

                                                <td>
												{{$cat->category_name}}
                                                </td>

                                                <td class="text-right">
                                                    <div class="actions">
                                                       
															<a href="{{url('/admin/editcategory/'.$cat->id)}}" title="edit-product"
														class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></a>
														
                                                        <a href="{{url('/admin/category/delete/'.$cat->id)}}" class="btn btn-sm bg-danger-light">
                                                            <i class="fe fe-trash"></i> Delete
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
    
    <!-- /Main Wrapper -->
@endsection