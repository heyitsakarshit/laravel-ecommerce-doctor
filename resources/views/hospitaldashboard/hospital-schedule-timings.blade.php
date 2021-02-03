@extends('hospitaldashboard.layouts.master')
@section('content')
<body>

                    <div class="col-md-7 col-lg-8 col-xl-9">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Schedule Timings</h4>
                                        <div class="profile-box">
                                            <div class="row">

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Timing Slot Duration</label>
                                                        <select class="select form-control">
																<option>-</option>
																<option>15 mins</option>
																<option selected="selected">30 mins</option>  
																<option>45 mins</option>
																<option>1 Hour</option>
															</select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card schedule-widget mb-0">

                                                        <!-- Schedule Header -->
                                                        <div class="schedule-header">

                                                            <!-- Schedule Nav -->
                                                            <div class="schedule-nav">
                                                                <ul class="nav nav-tabs nav-justified">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#slot_sunday">Sunday</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-toggle="tab" href="#slot_monday">Monday</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#slot_tuesday">Tuesday</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#slot_wednesday">Wednesday</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#slot_thursday">Thursday</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#slot_friday">Friday</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#slot_saturday">Saturday</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- /Schedule Nav -->

                                                        </div>
                                                        <!-- /Schedule Header -->

                                                        <!-- Schedule Content -->
                                                        <div class="tab-content schedule-cont">

                                                            <!-- Sunday Slot -->
                                                            <div id="slot_sunday" class="tab-pane fade">
                                                                <h4 class="card-title d-flex justify-content-between">
                                                                    <span>Time Slots</span>
                                                                    <a class="edit-link"  href="{{url('/hospital/hospital-schedule-add-time')}}"><i class="fa fa-plus-circle"></i> Add Slot</a>
                                                                </h4>
                                                                <p class="text-muted mb-0">Not Available</p>
                                                            </div>
                                                            <!-- /Sunday Slot -->

                                                            <!-- Monday Slot -->
                                                            <div id="slot_monday" class="tab-pane fade show active">
                                                                <h4 class="card-title d-flex justify-content-between">
                                                                    <span>Time Slots</span>
                                                                    <a class="edit-link"  href="{{url('/hospital/hospital-schedule-edit-time')}}"><i class="fa fa-edit mr-1"></i>Edit</a>
                                                                </h4>

                                                                <!-- Slot List -->
                                                                <div class="doc-times">
                                                                    <div class="doc-slot-list">
                                                                        8:00 pm - 11:30 pm
                                                                        <a href="javascript:void(0)" class="delete_schedule">
                                                                            <i class="fa fa-times"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="doc-slot-list">
                                                                        11:30 pm - 1:30 pm
                                                                        <a href="javascript:void(0)" class="delete_schedule">
                                                                            <i class="fa fa-times"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="doc-slot-list">
                                                                        3:00 pm - 5:00 pm
                                                                        <a href="javascript:void(0)" class="delete_schedule">
                                                                            <i class="fa fa-times"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="doc-slot-list">
                                                                        6:00 pm - 11:00 pm
                                                                        <a href="javascript:void(0)" class="delete_schedule">
                                                                            <i class="fa fa-times"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- /Slot List -->

                                                            </div>
                                                            <!-- /Monday Slot -->

                                                            <!-- Tuesday Slot -->
                                                            <div id="slot_tuesday" class="tab-pane fade">
                                                                <h4 class="card-title d-flex justify-content-between">
                                                                    <span>Time Slots</span>
                                                                    <a class="edit-link" href="{{url('/hospital/hospital-schedule-add-time')}}"><i class="fa fa-plus-circle"></i> Add Slot</a>
                                                                </h4>
                                                                <p class="text-muted mb-0">Not Available</p>
                                                            </div>
                                                            <!-- /Tuesday Slot -->

                                                            <!-- Wednesday Slot -->
                                                            <div id="slot_wednesday" class="tab-pane fade">
                                                                <h4 class="card-title d-flex justify-content-between">
                                                                    <span>Time Slots</span>
                                                                    <a class="edit-link" href="{{url('/hospital/hospital-schedule-add-time')}}"><i class="fa fa-plus-circle"></i> Add Slot</a>
                                                                </h4>
                                                                <p class="text-muted mb-0">Not Available</p>
                                                            </div>
                                                            <!-- /Wednesday Slot -->

                                                            <!-- Thursday Slot -->
                                                            <div id="slot_thursday" class="tab-pane fade">
                                                                <h4 class="card-title d-flex justify-content-between">
                                                                    <span>Time Slots</span>
                                                                    <a class="edit-link" href="{{url('/hospital/hospital-schedule-add-time')}}"><i class="fa fa-plus-circle"></i> Add Slot</a>
                                                                </h4>
                                                                <p class="text-muted mb-0">Not Available</p>
                                                            </div>
                                                            <!-- /Thursday Slot -->

                                                            <!-- Friday Slot -->
                                                            <div id="slot_friday" class="tab-pane fade">
                                                                <h4 class="card-title d-flex justify-content-between">
                                                                    <span>Time Slots</span>
                                                                    <a class="edit-link" href="{{url('/hospital/hospital-schedule-add-time')}}"><i class="fa fa-plus-circle"></i> Add Slot</a>
                                                                </h4>
                                                                <p class="text-muted mb-0">Not Available</p>
                                                            </div>
                                                            <!-- /Friday Slot -->

                                                            <!-- Saturday Slot -->
                                                            <div id="slot_saturday" class="tab-pane fade">
                                                                <h4 class="card-title d-flex justify-content-between">
                                                                    <span>Time Slots</span>
                                                                    <a class="edit-link" href="{{url('/hospital/hospital-schedule-add-time')}}"><i class="fa fa-plus-circle"></i> Add Slot</a>
                                                                </h4>
                                                                <p class="text-muted mb-0">Not Available</p>
                                                            </div>
                                                            <!-- /Saturday Slot -->

                                                        </div>
                                                        <!-- /Schedule Content -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <!-- /Page Content -->

</body>
@endsection