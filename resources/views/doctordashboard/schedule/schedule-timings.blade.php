@extends('doctordashboard.layouts.master')
@section('content')
<body>
        
         
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        
            @if(Session::has('flash_message_error'))
            <div class="alert alert-sm alert-danger alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
            <strong>{!! session('flash_message_error') !!}</strong>
            </div>
            @endif

            @if(Session::has('flash_message_success'))
            <div class="alert alert-sm alert-success alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
            <strong>{!! session('flash_message_success') !!}</strong>
            </div>
            @endif

           <div class="col-md-12 ">
             <a class="btn btn-success  my-3 " href="{{url('/doctor-dashboard/add-schedule')}}"><i class="fa fa-plus mr-1"></i> Add Time Slot</a>
               </div> 
                        <div class="card card-table">
                                        
                            <div class="card-body">

                                <!-- Invoice Table -->
                                <div class="table-responsive">
                                    
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Week Days</th>
                                                <th>Start Schedule Time</th>
                                                <th>End Schedule Time</th>
                                                <th><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        @foreach($doctordetail as $dc)
                                        @foreach($schedule as $st)
                                        @if($dc->id == $st->doctorId)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a >{{$st->weekday}}</a>
                                                </td>
                                                
                                                
                                                <td>{{$st->starttime}}</td>
                                                <td>{{$st->endtime}}</td>
                                                <td class="">
                                                    <div class="table-action">
                                                        
                                                        
                                                        
                                                        <a  href="{{url('/doctor-dashboard/editschedule/'.$st->id)}}" class="btn btn-sm bg-info-light">
                                                            <i class="far fa-edit"></i>Edit
                                                        </a>
                                                        
                                                        <a href="{{url('/doctor-dashboard/delete-time-slot/'.$st->id)}}" class="btn btn-sm bg-primary-light">
                                                            <i class="fas fa-trash"></i>Delete
                                                        </a>
                                                        
                                                         <a href="{{url('/doctor-dashboard/add-schedule/'.$st->id)}}" class="btn btn-sm bg-primary-light">
                                                            Add & View Time Slot
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                        @endif
                                        @endforeach
                                        @endforeach
                                    </table>
                                </div>
                                <!-- /Invoice Table -->

                            </div>
                        </div>
                    </div>
               
    <!-- /Main Wrapper -->

</body>
@endsection