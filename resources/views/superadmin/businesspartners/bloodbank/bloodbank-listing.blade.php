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
                        <div class="col-sm-12">
                            <h3 class="page-title">List of BloodBank Partners</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
                            
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
                                                <th>Blood Bank Name</th>
                                                <th>Email Id</th>
                                                <th>Phone</th>
                                                <th>Subscription Pack</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($bloodbank as $bb)
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('bloodbank/uploads/img/'.$bb->image)}}" alt="User Image"></a>
                                                        <a>{{$bb->name}}</a>
                                                    </h2>
                                                </td>
                                                <td>{{$bb->email}}</td>

                                                <td>{{$bb->phone}}</td>

                                                <td>{{$bb->package}}</td>
                                                <td><input type="checkbox" data-id="{{ $bb->id}}" name="status" class="js-switch" {{$bb->status == 1 ? 'checked' : ''}}></td>
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
                    url: '{{ route('bloodbank.update.status') }}',
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