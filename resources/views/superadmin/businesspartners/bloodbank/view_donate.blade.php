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
                            <h3 class="page-title">Blood Donate</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Blood Donate List</li>
                            </ul>
                        </div>
                        <!--<div class="col-sm-5 col">
                            <a href="add-producat.html" class="btn btn-primary float-right mt-2">Add</a>
                        </div>-->
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                        
                            <div class="card-body">
                            @if(Session::has('flash_message_success'))
            <div class="alert alert-sm alert-success alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
            <strong>{!! session('flash_message_success') !!}</strong>
            </div>
            @endif
                                <div class="table-responsive">
                                    <table class="datatable table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Phone</th>
												<th>Address</th>
												<th>Blood Group</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($donate_b as $dblood)
                                            <tr>
                                                <td>{{$dblood->id}}</td>

                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a>{{$dblood->name}}</a>
                                                    </h2>
                                                </td>

                                                <td>{{$dblood->age}}</td>

                                                <td>{{$dblood->phone}}</td>
											<td>{{$dblood->address}}</td>
												<td>{{$dblood->blood_group}}</td>

                                                <td class="text-right">
                                                    <div class="actions">
                                                        <a href="{{url('/admin/donateblood/delete/'.$dblood->id)}}"class="btn btn-sm bg-danger-light">
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


       
    </div>
    <!-- /Main Wrapper -->

    @endsection