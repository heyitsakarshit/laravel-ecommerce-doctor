@extends('doctordashboard.layouts.master')
@section('content')
<body>

                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="card card-table">
                            <div class="card-body">

                                <!-- Invoice Table -->
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Invoice No</th>
                                                <th>Patient</th>
                                                <th>Amount</th>
                                                <th>Paid On</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="{{url('/doctor-dashboard/viewinvoice')}}">#INV-0010</a>
                                                </td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="patient-profile.html" class="avatar avatar-sm mr-2">
                                                            <img class="avatar-img rounded-circle" src="{{asset('assets/img/patients/patient.jpg')}}" alt="User Image">
                                                        </a>
                                                        <a href="patient-profile.html">Richard Wilson <span>#PT0016</span></a>
                                                    </h2>
                                                </td>
                                                <td>₹&nbsp;450</td>
                                                <td>14 Nov 2019</td>
                                                <td class="text-right">
                                                    <div class="table-action">
                                                        <a href="{{url('/doctor-dashboard/viewinvoice')}}" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-eye"></i> View
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
                                                            <i class="fas fa-print"></i> Print
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /Invoice Table -->

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /Page Content -->

        <!-- Footer -->
        <div class="footer"></div>
        <!-- /Footer -->

    </div>
    <!-- /Main Wrapper -->

</body>
@endsection