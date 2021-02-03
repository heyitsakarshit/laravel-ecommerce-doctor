@extends('bloodbank.layouts.master')
@section('content')

<body>

                    <div class="col-md-7 col-lg-8 col-xl-9">

                    @if(Session::has('flash_message_success'))
            <div class="alert alert-sm alert-success alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
            <strong>{!! session('flash_message_success') !!}</strong>
            </div>
            @endif
                        <div class="appointments">
                        @foreach($req_blood as $rb)
                            <!-- Appointment List -->
                            <div class="appointment-list">
                                <div class="profile-info-widget">
                                    <a href="patient-profile.html" class="booking-doc-img">
                                        <img src="{{asset('uploads/bloodbank/request/'.$rb->image)}}" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="patient-profile.html">{{$rb->name}}</a></h3>
                                        <div class="patient-details">
                                            <h5><i class="far fa-clock"></i>{{$rb->created_at}}/h5>
                                            <h5><i class="fas fa-map-marker-alt"></i>{{$rb->address}}</h5>
                                            <h5><i class="fas fa-envelope"></i>{{$rb->email}}</h5>
                                            <h5 class="mb-0"><i class="fas fa-phone"></i>{{$rb->phone}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-action">
                                    <a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
                                        <i class="far fa-eye"></i> View
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                        <i class="fas fa-check"></i> Accept
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                        <i class="fas fa-times"></i> Cancel
                                    </a>
                                </div>
                            </div>
                            <!-- /Appointment List -->
@endforeach
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /Page Content -->

</body>

@endsection