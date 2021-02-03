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
                            <h3 class="page-title">Sub-Admin List</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Sub-Admin List</li>
                            </ul>
                        </div>
                        <div class="col-sm-5 col">
                            <a href="{{url('/admin/add-admin')}}" class="btn btn-primary float-right mt-2">Add</a>
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
                                                <th>Sub-Admin Name</th>
                                                <th>Email</th>
                                                <th>Phone No.</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($subadmin as $sub)
                                            <tr>
                                                <td>{{$sub->id}}</td>

                                                <td>
                                                    <h2 class="table-avatar">
                                                      
                                                        <a data-toggle="modal" href="#edit_specialities_details">{{$sub->subadmin_name}}</a>
                                                    </h2>
                                                </td>

                                                <td>{{$sub->subadmin_email}}</td>

                                                <td>{{$sub->subadmin_phone}}</td>

                                                <td class="text-right">
                                                    <div class="actions">
                                                        <a  href="{{url('/admin/subadmin/delete/'.$sub->id)}}" class="btn btn-sm bg-danger-light">
                                                        <i class="fe fe-trash"></i> Delete</a>
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
       <!-- <div class="modal fade" id="Add_Specialities_details" aria-hidden="true" role="dialog">-->
       <!--     <div class="modal-dialog modal-dialog-centered" role="document">-->
       <!--         <div class="modal-content">-->
       <!--             <div class="modal-header">-->
       <!--                 <h5 class="modal-title">Add Sub-Admin</h5>-->
       <!--                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
							<!--	<span aria-hidden="true">&times;</span>-->
							<!--</button>-->
       <!--             </div>-->
       <!--             <div class="modal-body">-->
       <!--                 <form>-->
       <!--                     <div class="row form-row">-->
       <!--                         <div class="col-12 col-sm-6">-->
       <!--                             <div class="form-group">-->
       <!--                                 <label>Sub-Admin Name</label>-->
       <!--                                 <input type="text" class="form-control">-->
       <!--                             </div>-->
       <!--                         </div>-->
       <!--                         <div class="col-12 col-sm-6">-->
       <!--                             <div class="form-group">-->
       <!--                                 <label>Price</label>-->
       <!--                                 <input type="text" class="form-control">-->
       <!--                             </div>-->
       <!--                         </div>-->
       <!--                         <div class="col-12">-->
       <!--                             <div class="form-group">-->
       <!--                                 <label>Image</label>-->
       <!--                                 <input type="file" class="form-control">-->
       <!--                             </div>-->
       <!--                         </div>-->

       <!--                     </div>-->
       <!--                     <button type="submit" class="btn btn-primary btn-block">Save Changes</button>-->
       <!--                 </form>-->
       <!--             </div>-->
       <!--         </div>-->
       <!--     </div>-->
       <!-- </div>-->
        <!-- /ADD Modal -->

        <!-- Edit Details Modal -->
       <!-- <div class="modal fade" id="edit_specialities_details" aria-hidden="true" role="dialog">-->
       <!--     <div class="modal-dialog modal-dialog-centered" role="document">-->
       <!--         <div class="modal-content">-->
       <!--             <div class="modal-header">-->
       <!--                 <h5 class="modal-title">Edit Sub-Admin</h5>-->
       <!--                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
							<!--	<span aria-hidden="true">&times;</span>-->
							<!--</button>-->
       <!--             </div>-->
       <!--             <div class="modal-body">-->
       <!--                 <form>-->
       <!--                     <div class="row form-row">-->
       <!--                         <div class="col-12 col-sm-6">-->
       <!--                             <div class="form-group">-->
       <!--                                 <label>Sub-Admin Name</label>-->
       <!--                                 <input type="text" class="form-control">-->
       <!--                             </div>-->
       <!--                         </div>-->
       <!--                         <div class="col-12 col-sm-6">-->
       <!--                             <div class="form-group">-->
       <!--                                 <label>Price</label>-->
       <!--                                 <input type="text" class="form-control">-->
       <!--                             </div>-->
       <!--                         </div>-->
       <!--                         <div class="col-12">-->
       <!--                             <div class="form-group">-->
       <!--                                 <label>Image</label>-->
       <!--                                 <input type="file" class="form-control">-->
       <!--                             </div>-->
       <!--                         </div>-->

       <!--                     </div>-->
       <!--                     <button type="submit" class="btn btn-primary btn-block">Save Changes</button>-->
       <!--                 </form>-->
       <!--             </div>-->
       <!--         </div>-->
       <!--     </div>-->
        <!--</div>-->
        <!-- /Edit Details Modal -->

        <!-- Delete Modal -->
      <!--  <div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">-->
      <!--      <div class="modal-dialog modal-dialog-centered" role="document">-->
      <!--          <div class="modal-content">-->
                    <!--	<div class="modal-header">
						<!--	<h5 class="modal-title">Delete</h5>-->
						<!--	<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
						<!--		<span aria-hidden="true">&times;</span>-->
						<!--	</button>-->
						<!--</div>-->-->
      <!--              <div class="modal-body">-->
      <!--                  <div class="form-content p-2">-->
      <!--                      <h4 class="modal-title">Delete</h4>-->
      <!--                      <p class="mb-4">Are you sure want to delete?</p>-->
      <!--                      <button type="button" class="btn btn-primary">Save </button>-->
      <!--                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
      <!--                  </div>-->
      <!--              </div>-->
      <!--          </div>-->
      <!--      </div>-->
      <!--  </div>-->
        <!-- /Delete Modal -->
    </div>
    <!-- /Main Wrapper -->

   @endsection