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
                                <li class="breadcrumb-item active">Ask Question List</li>
                            </ul>
                        </div>
                        <!-- <div class="col-sm-5 col">
                            <a href="{{url('/admin/addproduct')}}" class="btn btn-primary float-right mt-2">Add</a>
                        </div> -->
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
                                                <th>Detail</th>
                                                <th>Looking For</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($ask as $as)
                                            <tr>
                                                <td>{{$as->id}}</td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                    {{$as->detail}}
                                                    </h2>
                                                </td>

                                                <td>{{$as->looking_for}}</td>

                                                <td>{{$as->email}}</td>
                                                <td>{{$as->phone}}</td>
                                                <td class="text-right">
                                                    <div class="actions">
                                                        <a  href="{{url('/admin/askquestion/delete/'.$as->id)}}" class="btn btn-sm bg-danger-light">
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

@endsection