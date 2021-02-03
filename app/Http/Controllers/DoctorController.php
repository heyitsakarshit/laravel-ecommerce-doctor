<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Doctor;
use App\Doctorprofile;
use App\Doctorsocialmedia;
use App\Doctorschedule;
use App\ScheduleAttribute;
use Input;
use Image;
use App\Speciality;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class DoctorController extends Controller
{
    public function viewdoctordashboard(){
        return view('doctordashboard.doctor-dashboard');
    }

    public function logindoctor(Request $request)
    {
		if($request->isMethod('post')){
            $data = $request->input();
            $doctorCount = Doctor::where(['email'=>$data['email'],'password'=>md5($data['password']),'status'=>1])->count();
    		
    	if(	$doctorCount >0){
    		    
    		    Session::put('doctorSession',$data['email']);
    			return redirect('/doctor-dashboard');
			}
			else
			{
    			return redirect('/doctoradmin')->with('flash_message_error','Your account is not active');
    		}

    }
    	return view('doctordashboard.users.login');
	}
	

	public function registerdoctor(Request $request){

		if($request->isMethod('post')){
		 
		 $data= $request->all();  
		
		 $doctorCount = Doctor::where(['email'=>$data['email']])->count();
		 
		 if($doctorCount>0){
   
		   return redirect()->back()->with('flash_message_error','Email already exists');
		 }else{
   
		 $doctoruser = new Doctor();
		 $doctoruser->email=$data['email'];
         $doctoruser->password=md5($data['password']);
         $doctoruser->phone=$data['phone'];
		 $doctoruser->name=$data['name'];
		 

		 $val = Input::all();

                $rules = [
                    'password' => 'required|min:8',
                    'password_confirmation' => 'required|min:8|same:password',
                ];

                $messages = [
                    'password_confirmation.same' => 'Password Confirmation should match the Password',
                ];
                $validator = Validator::make($val, $rules, $messages);

                if ($validator->fails()) {
                    return redirect('/doctorregister')->with('flash_message_error','Password Should Be Match');
                }


		 $doctoruser->save();
		 
		 return redirect('/doctoradmin')->with('flash_message_success','Registered successfully');
		}
	   }return view('doctordashboard.users.register')->with('flash_message_success','Registered successfully');
	  }

    public function viewdoctorappointment(){
        return view('doctordashboard.appointments');
    }

    public function viewmypatient(){
        return view('doctordashboard.my-patients');
    }

    public function viewschedule(){
        $doctordetail= Doctor::where(['email'=>Session::get('doctorSession')])->get();
         $schedule =  Doctorschedule::get();
        return view('doctordashboard.schedule.schedule-timings')->with(compact('schedule','doctordetail'));
    }

    public function editschedule(Request $request , $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
      
      
            $schedule = Doctorschedule::where(['id'=>$id])->update(['starttime'=>$data['starttime'],'endtime'=>$data['endtime']]);
         
            return redirect('doctor-dashboard/schedule-timings')->with('flash_message_success','Time Edited Successfully.');       
        }
        
            $schedule = Doctorschedule::where(['id'=>$id])->first();
        return view('doctordashboard.schedule.schedule-edit-time')->with(compact('schedule'));
    }
    
    
    public function scheduleattribute(Request $request, $id=null){

       $doctordetails= Doctorschedule::with('attributes')->where('id',$id)->first();
       $doctor= Doctor::where(['email'=>Session::get('doctorSession')])->get();
       if($request->ismethod('post')){

          $data = $request->all();

          foreach($data['starttime'] as $key =>$val){

            if(empty($val)){

             // prevent duplicate sKU
              $attrCountSKU = ScheduleAttribute::where('starttime',$val)->count();
              if($attrCountSKU>0){
                return redirect('/doctor-dashboard/add-schedule/'.$id)->with('flash_message_error','Start time is already exist please select another');
              }
              // prevent duplicate weight
              $attrCountSIZE = ScheduleAttribute::where(['id'=>$id,'endtime'=>$data['endtime'][$key]])->count();
              if($attrCountSIZE>0){
                return redirect('/doctor-dashboard/add-schedule/'.$id)->with('flash_message_error',''.$data['endtime'][$key].'endtime is already exist please select another');
              }
            }
              $attribute = new ScheduleAttribute;
               $attribute->doctorId =$data['doctorid'];
              $attribute->scheduleId =$id;
              $attribute->starttime =$val;
              $attribute->endtime =$data['endtime'][$key];
            
              $attribute->save();
            }
           return redirect('/doctor-dashboard/add-schedule/'.$id)->with('flash_message_success','Added successfully');
          }
          
      return view('doctordashboard.schedule.schedule-attribute')->with(compact('doctordetails','doctor'));
    }    
    
    public function deleteattribute($id=null){
       
       ScheduleAttribute::where(['id'=>$id])->delete();

        return redirect()->back()->with('flash_message_error','Deleted successfully');
      }


    public function editscheattribute(Request $request,$id=null){
        
           if($request->isMethod('post')){

          $data = $request->all();
          
          foreach($data['attr'] as $key=>$attr){
          
           ScheduleAttribute::where(['id'=>$data['attr'][$key]])->update(['starttime'=>$data['starttime'][$key],'endtime'=>$data['endtime'][$key]]);
          }
           return redirect()->back()->with('flash_message_success','Updated successfully');
     
        }
    }
    public function addtime(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $schedulecount= Doctorschedule::where(['doctorId'=>Session::get('doctoSession'),'weekday'=>$data['weekday']])->count();
            
             if($schedulecount > 0 )
             {
                 return redirect('doctor-dashboard/schedule-timings')->with('flash_message_error','Schedule is already exist on this day.Add time Slot on that day.');
             }
             else{
            $schedule = new Doctorschedule();
            $schedule->doctorId = $data['doctorId'];
            $schedule->weekday = $data['weekday'];
            $schedule->starttime = $data['starttime'];
            $schedule->endtime = $data['endtime'];
            
            $schedule->save();
         
            return redirect('doctor-dashboard/schedule-timings')->with('flash_message_success','Time Added Successfully.');
            
        }
            
        }
        $schedule = Doctor::where(['email'=>Session::get('doctorSession'),'status'=>1])->get();
     
        return view('doctordashboard.schedule.schedule-add-time')->with(compact('schedule'));
    }


public function deleteschedule($id=null){
    Doctorschedule::where(['id'=>$id])->delete();
   return redirect('doctor-dashboard/schedule-timings')->with('flash_message_success','Time Slot Deleted Successfully.');
}

    public function listinvoice(){
        return view('doctordashboard.invoices.invoices');
    }

    public function viewinvoice(){
        return view('doctordashboard.invoices.invoice-view');
    }

    public function viewreview(){
        return view('doctordashboard.reviews');
    }

public function viewdoctorprofile(Request $request){
     
  if($request->isMethod('post'))
  {         
            
            
        $user = DB::table('doctorprofiles')->where(['email'=>Session::get('doctorSession')])->count();
        $data = $request->all();
        if ($user> 0) 
        {
            if($request->hasfile('doctor_image'))
			{
	  
				$img_tmp = Input::file('doctor_image');
	
				if($img_tmp->isValid())
				{
				$extension = $img_tmp->getClientOriginalExtension();
				$filename1 =rand(111,9999).'.'.$extension;
				$img_path='doctorprofile/uploads/doc_img/'.$filename1;
				Image::make($img_tmp)->save($img_path);
				}
			}

			else
			{
				$filename1= $data['current_image1'];
			} 
			
			if($request->hasfile('clinic_image'))
			{
	  
				$img_tmp = Input::file('clinic_image');
	
				if($img_tmp->isValid())
				{
				$extension = $img_tmp->getClientOriginalExtension();
				$filename2 =rand(111,9999).'.'.$extension;
				$img_path='doctorprofile/uploads/clinic_img/'.$filename2;
				Image::make($img_tmp)->save($img_path);
				}
			}

			else
			{
				$filename2= $data['current_image2'];
			}
			$profileCount = Doctorprofile::where(['email'=>Session::get('doctorSession'), 'status'=>1])->count();
			if(	$profileCount == 1)
			{ 
			   
				Doctorprofile::where(['email'=>Session::get('doctorSession')])->update(['doctor_image'=>$filename1,'clinic_image'=>$filename2,
				'first_name'=>$data['first_name'],'last_name'=>$data['last_name'],'gender'=>$data['gender'],'dob' => $data['dob'],'bio'=>$data['bio'],
				'clinic_name'=>$data['clinic_name'],'clinic_address'=>$data['clinic_address'],'account_holder_name'=>$data['account_holder_name'],
				'ifsc'=>$data['ifsc'],'upi_id'=>$data['upi_id'],'address' => $data['address'],'city' => $data['city'],'state' => $data['state'],
				'postal_code' => $data['postal_code'],'country' => $data['country'],'price'=>$data['price'],'promocode'=>$data['promocode'],
				'services'=>$data['services'],'specialist'=>$data['specialist'],
				'degree1'=>$data['degree1'],'college1'=>$data['college1'],'year1'=>$data['year1'],
				'degree2'=>$data['degree2'],'college2'=>$data['college2'],'year2'=>$data['year2'],
				'degree3'=>$data['degree3'],'college3'=>$data['college3'],'year3'=>$data['year3'],
				'hospital_name1'=>$data['hospital_name1'],'from1'=>$data['from1'],'to1'=>$data['to1'],'designation1'=>$data['designation1'],
				'hospital_name2'=>$data['hospital_name2'],'from2'=>$data['from2'],'to2'=>$data['to2'],'designation2'=>$data['designation2'],
				'award1'=>$data['award1'],'award_year'=>$data['award_year'],'membership'=>$data['membership']
				]);	
				return redirect()->back()->with('flash_message_success','Profile Updated Successfully!');
			}
        }
            
        else
        {
            $profile = new Doctorprofile;
            $profile->userid = $data['userid'];
            $profile->email = $data['email'];
            $profile->phone = $data['phone'];
            $profile->name = $data['name'];
            
            if($request->hasfile('doctor_image'))
            {
    
                $img_tmp = Input::file('doctor_image');
    
                if($img_tmp->isValid())
                {
                    $extension = $img_tmp->getClientOriginalExtension();
                    $filename1 =rand(111,9999).'.'.$extension;
                    $img_path= 'doctorprofile/uploads/doc_img/'.$filename1;
               
                    Image::make($img_tmp)->save($img_path);
                    $profile->doctor_image =$filename1;
                }
            }
            
            $profile->first_name = $data['first_name'];
            $profile->last_name = $data['last_name'];
            $profile->gender = $data['gender'];
            $profile->dob = $data['dob'];
            $profile->bio = $data['bio'];
            $profile->clinic_name = $data['clinic_name'];
            $profile->clinic_address = $data['clinic_address'];
    
            
            if($request->hasfile('clinic_image'))
            {
    
                $img_tmp = Input::file('clinic_image');
    
                if($img_tmp->isValid())
                {
                    $extension = $img_tmp->getClientOriginalExtension();
                    $filename2 =rand(111,9999).'.'.$extension;
                    $img_path= 'doctorprofile/uploads/clinic_img/'.$filename2;
               
                    Image::make($img_tmp)->save($img_path);
                    $profile->clinic_image =$filename2;
                }
            }
    
            $profile->account_holder_name = $data['account_holder_name'];
            $profile->account_number = $data['account_number'];
            $profile->ifsc = $data['ifsc'];
            $profile->upi_id = $data['upi_id'];
            
            $profile->address = $data['address'];
            $profile->city = $data['city'];
            $profile->state = $data['state'];
            $profile->country = $data['country'];
            $profile->postal_code = $data['postal_code'];
    
            $profile->price = $data['price'];
            $profile->promocode = $data['promocode'];
            $profile->services = $data['services'];
            $profile->specialist = $data['specialist'];
            
            $profile->degree1 = $data['degree1'];
            $profile->college1 = $data['college1'];
            $profile->year1 = $data['year1'];
    
    
            $profile->degree2 = $data['degree2'];
            $profile->college2 = $data['college2'];
            $profile->year2 = $data['year2'];
    
            $profile->degree3 = $data['degree3'];
            $profile->college3 = $data['college3'];
            $profile->year3 = $data['year3'];
    
    
            $profile->hospital_name1 = $data['hospital_name1'];
            $profile->from1 = $data['from1'];
            $profile->to1 = $data['to1'];
            $profile->designation1 = $data['designation1'];
    
            $profile->hospital_name2 = $data['hospital_name2'];
            $profile->from2 = $data['from2'];
            $profile->to2 = $data['to2'];
            $profile->designation2 = $data['designation2'];
    
            $profile->award1 = $data['award1'];
            $profile->award_year = $data['award_year'];
    
            $profile->membership = $data['membership'];
    
    
            $profile->save();
            return redirect()->back()->with('flash_message_success','Data Inserted Successfully!');
        }
               

    }     
        $dprofile = Doctor::where(['email'=>Session::get('doctorSession'),'status'=>1])->get();
        
        $profile = Doctorprofile::get();
        return view('doctordashboard.doctor-profile-settings')->with(compact('dprofile','profile'));
    }

    public function addsocialmedia(Request $request)
        {
            if($request->isMethod('post'))
            {
                $data = $request->all();
               
                
                $socialurl = new Doctorsocialmedia;
                $socialurl->facebook_url = $data['facebook_url'];
                $socialurl->twitter_url = $data['twitter_url'];
                $socialurl->instagram_url = $data['instagram_url'];
                $socialurl->pinterest_url = $data['pinterest_url'];
                $socialurl->linkedin_url = $data['linkedin_url'];
                $socialurl->youtube_url = $data['youtube_url'];
                $socialurl->user_id = $data['emailid'];
                $socialurl->save();
               
                return redirect('/doctor-dashboard/social-media')->with('flash_message_success','Url Successfully Added.');
              

            }
            
    $social = Doctor::where(['email'=>Session::get('doctorSession'),'status'=>1])->get();
        return view('doctordashboard.social-media')->with(compact('social'));
    }

    public function changepassword(Request $request)
    {
        $doctordetail = Doctor::where(['status'=>1])->first();
    	if($request->isMethod('post')){

    		$data = $request->input();
    			
    		$userCount = Doctor::where(['email'=>Session::get('doctorSession'),'password'=>md5($data['password']),'status'=>1])->count();
    	    if(	$userCount == 1){
                $new_password = md5($data['new_password']);	 
                
                $val = Input::all();

                $rules = [
                    'new_password' => 'required|min:8',
                    'password_confirmation' => 'required|min:8|same:new_password',
                ];

                $messages = [
                    'password_confirmation.same' => 'Password Confirmation should match the Password',
                ];
                $validator = Validator::make($val, $rules, $messages);

                if ($validator->fails()) {
                    return redirect()->back()->with('flash_message_error','Password Should Be Match');
                }


    	    	Doctor::where(['email'=>Session::get('doctorSession')])->update(['password'=>$new_password]);	
    	    	return redirect()->back()->with('flash_message_success','Password Updated Successfully!');
    	    		}	
    	   else{
    	       return redirect()->back()->with('flash_message_error','Current password is incorrect');
    	   } 		
    	}
        return view('doctordashboard.doctor-change-password');
    }

    public function alllogout(){
        Session::flush();
        return redirect('/doctoradmin')->with('flash_message_error','Logout Successfully.');
    }
}
