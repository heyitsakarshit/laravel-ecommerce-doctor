@extends('superadmin.layouts.master')
@section('content')

<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
                            <h3 class="page-title">Diagnostics List</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Diagnostics List</li>
                            </ul>
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
                                                <th>Diagnostics Name</th>
                                                <th>Diagnostics Email</th>
                                        
                                                <th>Phone</th>
                                                <th>Created At</th>
                                                <th>Status</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($diagnostic as $dia)
                                            <tr>
                                                <td>{{$dia->id}}</td>

                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a class="avatar avatar-sm mr-2" data-toggle="modal" href="#edit_specialities_details">
                                                            <img class="avatar-img rounded-circle" src="{{asset('diagnostics/uploads/img/'.$dia->image)}}" alt="product image">
                                                        </a>
                                                        <a data-toggle="modal" href="#edit_specialities_details">{{$dia->name}}</a>
                                                    </h2>
                                                </td>

                                                <td>{{$dia->email}}</td>

                                                <td>{{$dia->phone}}</td>

                                                <td>{{$dia->created_at}}</td>
                                                <td><input type="checkbox" data-id="{{ $dia->id}}" name="status" class="js-switch" {{$dia->status == 1 ? 'checked' : ''}}></td>
                                                <td class="text-right">
                                                    <div class="actions">
                                                       
                                                        <a  href="{{url('/admin/diagnostic/delete/'.$dia->id)}}" class="btn btn-sm bg-danger-light">
                                                            <i class="fe fe-trash"></i>Delete
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                        @endforeach
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
                        <h5 class="modal-title">Add Diagnostics</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row form-row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Diagnostics Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Diagnostics Details</label>
                                        <textarea class="form-control" rows="4"></textarea>
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
                        <h5 class="modal-title">Edit Diagnostics</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row form-row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Diagnostics Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Diagnostics Details</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Details Modal -->

        <!-- Delete Modal -->
        <div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <!--	<div class="modal-header">
							<h5 class="modal-title">Delete</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>-->
                    <div class="modal-body">
                        <div class="form-content p-2">
                            <h4 class="modal-title">Delete</h4>
                            <p class="mb-4">Are you sure want to delete?</p>
                            <button type="button" class="btn btn-primary">Save </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Modal -->
    </div>
    <!-- /Main Wrapper -->
    <script>
        let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function(html) {
            let switchery = new Switchery(html,  { size: 'small' });
        });
        $(document).ready(function(){
            
            $('.js-switch').change(function () {
                let status = $(this).prop('checked') === true ? 1 : 0;
                let userId = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('diagnostic.update.status') }}',
                    data: {'status': status, 'id': userId},
                    success: function (data) {
                        toastr.options.closeButton = true;
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 100;
                        toastr.success(data.message);
                    }
                });
            });
        });
    </script>
</body>

@endsection