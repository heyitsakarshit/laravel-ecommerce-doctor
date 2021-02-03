@extends('doctordashboard.layouts.master')
@section('content')
<body>

                    <div class="col-md-7 col-lg-8 col-xl-9">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                     
                                    <div class="card-body">
                                        
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
                                        <h4 class="card-title">Add Time Slots</h4>
                                       <!-- Add Blog -->
								<form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service" 
								action="{{url('/doctor-dashboard/add-schedule/'.$doctordetails->id)}}">
								{{ csrf_field() }}
                                
                                @foreach($doctor as $dc)
                                  <input type="text" name="doctorid" class="form-control my-2" value="{{$dc->id}}" readonly>
                                 
                                  @endforeach
                                <input type="text" name="doctorId" class="form-control my-2" value="{{$doctordetails->weekday}}" readonly>
                                 

									<div class="service-fields mb-3">
										<div class="row">
                                      
                                           
                                        <div class="field_wrapper">
                                      <div style="display:flex;">    
										<div class="form-group col-md-6">
                                                 
                                                <label>Start Time</label>
                                                <input type="time" id="starttime" name="starttime[]" class="form-control" placeholder="time" required/>
                                            </div>
                                  	<div class="form-group col-md-6">
                                                 
                                                <label>End Time</label>
                                               <input type="time" id="endtime" name="endtime[]" class="form-control" placeholder="time" required/>
                                                  
                                            </div>
                                           <a href="javascript:void(0);" class="btn btn-success add_button" title="Add field" style="margin: 8% 0%;">Add</a>
                                          
     
                                       </div>
                                  </div>
									
											</div>	
											</div>	
					
									<div class="submit-section">
										<input class="btn btn-primary submit-btn"  value="Add Time" type="submit" name="form_submit">
							
									</div>
									
								</form>
								<!-- /Add Blog -->
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">View Time Slots</h4>
                                        <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                       <!-- Add Blog -->
                                   
							<form enctype="multipart/form-data" method="post" action="{{url('/doctor-dashboard/edit-schedule/'.$doctordetails->id)}}">
                                   {{ csrf_field() }}

                                    
                                <thead>
                                    <tr class="info">
                                       <th>Schedule Day</th>
                                        <th>Start Time</th>
                                       <th>End Time</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($doctordetails['attributes'] as $cdoctor)   
                                    <tr>
                                      <td style="display: none;">
                                          <input type="text" name="attr[]" value="{{$cdoctor->id}}">{{$cdoctor->id}}</td>
                                       <td>{{$doctordetails->weekday}}</td>
                                       <td><input type="time" name="starttime[]" value="{{$cdoctor->starttime}}"></td>
                                       <td><input type="time" name="endtime[]" value="{{$cdoctor->endtime}}"></td>
                                      
                                       <td class="center">
                                        <div class="btn-group">
                                            	<div class="submit-section">
                                          <input type="submit" value="update" name="submit" class="btn btn-success">
                                          </div>
                                          <a href="{{url('/doctor-dashboard/delete-schedule/'.$cdoctor->id)}}" class="btn btn-danger mx-2" ><i class="fa fa-trash-o"></i>Delete</a>
                                        </div>
                                        
                                   
                                       </td>
                                    </tr>
                                    	@endforeach
								
							
								    </tbody>
								    </form>
                              </table>
								<!-- /Add Blog -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        	

                    </div>
                  
                  
                   

        <!-- /Page Content -->
            
                
        
      

@section('script')
@endsection
@endsection