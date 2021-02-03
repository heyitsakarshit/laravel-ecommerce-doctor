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
                  <h3 class="page-title">Transactions</h3>
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                     <li class="breadcrumb-item active">Transactions</li>
                  </ul>
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
                                 <th>Invoice No</th>
                                 <th>Product ID</th>
                                 <th>Product Name</th>
                                 <th>Total Amount</th>
                                 <th class="text-center">Status</th>
                                 <th class="text-right">Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <a href="invoice.html">
                                       #IN0001
                                 </td>
                                 <td>#01</td>
                                 <td>
                                 <h2 class="table-avatar">
                                 <span class="avatar avatar-sm mr-2"><img class="avatar-img" src="{{asset('pharmacydashboard/assets/img/product/product.jpg')}}" alt="User Image"></span>
                                 Abilify
                                 </h2>
                                 </td>
                                 <td>$100.00</td>
                                 <td class="text-center">
                                 <span class="badge badge-pill bg-success inv-badge">Paid</span>
                                 </td>
                                 <td class="text-right">
                                 <div class="actions">
                                 <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
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
            </div>
         </div>
      </div>
   </div>
   <!-- /Page Wrapper -->
</div>
    <!-- /Main Wrapper -->

</body>
@endsection