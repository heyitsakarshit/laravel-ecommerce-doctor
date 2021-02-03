@extends('doctordashboard.layouts.master')
@section('content')
<body>

  
                    <div class="col-md-7 col-lg-8 col-xl-9">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Edit Time Slots</h4>
                                       <!-- Add Blog -->
                                          
                                  
							<form method="post" enctype="multipart/form-data"  action="{{url('/doctor-dashboard/editschedule/'.$schedule->id)}}">
								{{ csrf_field() }}

      

									<div class="service-fields mb-3">
										<div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Select Day</label>
                                            <select class="form-control" name="weekday" >
														<option value="{{$schedule->weekday}}" selected>{{$schedule->weekday}}</option>
														<option value="Sunday">Sunday</option>
														<option value"Monday">Monday</option>  
														<option value"Tuesday">Tuesday</option>
														<option value"Wednesday">Wednesday</option>
														<option value"Thursday">Thursday</option>  
														<option value"Friday">Friday</option>
														<option value"Saturday">Saturday</option>
													</select>
                                            </div>
                                            
                                           
                                            
										<div class="form-group col-md-6">
                                                 
                                                <label>Start Time</label>
                                                   <input type="time" id="starttime" name="starttime" class="form-control" placeholder="time"value="{{$schedule->starttime}}" required> 
                                            </div>
                                  	<div class="form-group col-md-6">
                                                 
                                                <label>End Time</label>
                                                <input type="time" id="endtime" name="endtime" value="{{$schedule->endtime}}" required class="form-control" placeholder="time"/>
                                            </div>
                                           
                    
									
											</div>
											</div>	
		
									<div class="submit-section">
										<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Update</button>
									</div>
								</form>
									
								<!-- /Add Blog -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
              
             </div>
                            </div>
                        </div>

                    </div>
              

</body>

@endsection