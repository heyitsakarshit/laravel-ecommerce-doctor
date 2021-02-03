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
                        <div class="col-sm-7">
                            <h3 class="page-title"> Plan List</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
                                <li class="breadcrumb-item active">Plan List</li>
                            </ul>
                        </div>
                            <div class="col-sm-5 col">
                            <a href="{{url('/admin/subscription/add')}}" class="btn btn-primary float-right mt-2">Add</a>
                        </div>
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
                                                <th>Categories Name</th>
                                                <th>Subscription Pack</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($plan as $pl)
                                            <tr>
                                                <td>{{$pl->id}}</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a>{{$pl->category}}</a>
                                                    </h2>
                                                </td>
												 <td>{{$pl->package}}</td>
                                                <td>₹&nbsp;{{$pl->price}}</td>
												 <td>{{$pl->description}}</td>
                                                <td>
                                                    <div class="status-toggle">
										<a class="btn btn-sm bg-success-light"  href="{{url('/admin/subscription/delete/'.$pl->id)}}">
                                                            <i class="fe fe-pencil"></i> Delete
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