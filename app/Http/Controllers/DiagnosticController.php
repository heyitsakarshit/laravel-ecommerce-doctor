<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagnostic;
use Session;
use Image;
use Input;
use App\Diagnosticprofile;
use DB;
use Illuminate\Support\Facades\Validator;
class DiagnosticController extends Controller
{

    public function index()
	{
		$diagnostic = Diagnostic::get();
		return view('diagnostics.diagnostic-dashboard')->with(compact('diagnostic'));
	}

    public function logindiagnostic(Request $request)
    {
		if($request->isMethod('post')){
            $data = $request->input();
            $diagnosticCount = Diagnostic::where(['email'=>$data['email'],'password'=>md5($data['password']),'status'=>1])->count();
    		
    	if(	$diagnosticCount >0){
    		    
    		    Session::put('diagnosticSession',$data['email']);
    			return redirect('/diagnostic/diagnostic-dashboard');
			}
			else
			{

    			return redirect('/diagnosticadmin')->with('flash_message_error','Your account is not active');
    		}

    }
    	return view('diagnostics.users.login');
	}
	

	public function registerdiagnostic(Request $request){
        
		if($request->isMethod('post'))
		{
		 $data= $request->all();  
		
		 $diagnosticCount = Diagnostic::where(['email'=>$data['email']])->count();
		 
		 if($diagnosticCount>0){
		   return redirect()->back()->with('flash_message_error','Email already exists');
		 }
		 else
		 {

			$diagnostic = new Diagnostic();
			$diagnostic->email=$data['email'];
			$diagnostic->password=md5($data['password']);
			$diagnostic->name=$data['name'];
			$diagnostic->phone=$data['phone'];
			

			if($request->hasfile('image'))
			{
   
				$img_tmp = Input::file('image');
   
				if($img_tmp->isValid())
				{
					$extension = $img_tmp->getClientOriginalExtension();
					$filename =rand(111,9999).'.'.$extension;
					$img_path= 'diagnostics/uploads/img/'.$filename;
			   
					Image::make($img_tmp)->save($img_path);
					$diagnostic->image =$filename;
				}
			}
		 
		 
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
                    return redirect('/diagnosticregister')->with('flash_message_error','Password Should Be Match');
                }


		 $diagnostic->save();
		 
		 return redirect('/diagnosticadmin')->with('flash_message_success','Registered successfully');
		}
	   
        
	   }
	   return view('diagnostics.users.register')->with('flash_message_success','Registered successfully');
   
	  }
	  
	  public function logout(){
	      Session::flush();
	      return redirect('/diagnosticadmin')->with('flash_message_success','Logout Successfully.');
	  }
	  
	  public function changepassword(Request $request){
	      $diagnostic = Diagnostic::where(['status'=>1])->first();
	      if($request->isMethod('post'))
	      {
	          $data = $request->input();
	          $userCount = Diagnostic::where(['email'=>Session::get('diagnosticSession'),'password'=>md5($data['password']),'status'=>1])->count();
	          if($userCount == 1)
	          {
	              $new_password = md5($data['new_password']);
	              
	              $val = Input::all();
	              $rules = [
	                  'new_password' => 'required|min:8',
	                  'password_confirmation' => 'required|min:8|same:new_password',
	                  ];
	              $messages = [
	                  'password_confirmation.same'=>'Password Confirmation should Match the Password',
	                  ];
	                
	                $validator = Validator::make($val,$rules,$messages);
	                if($validator->fails()) {
	                    return redirect()->back()->with('flash_message_error','Password Should be Same.');
	                }
	          
	                Diagnostic::where(['email'=>Session::get('diagnosticSession')])->update(['password'=>$new_password]);
	                return redirect()->back()->with('flash_message_success','Password Updated Successfully.');
	          }
	                else{
	                
	                    return redirect()->back()->with('flash_message_error','Old Password is Incorrect..!');
	                }
	          }
	          return view('diagnostics.diagnostic-change-password')->with(compact('diagnostic'));
	      }
	  
	  
	      
	      
	public function profilesetting(Request $request)
    {
        if($request->isMethod('post'))
        {
         $data = $request->all();
         $profile= DB::table('diagnosticprofiles')->where(['email'=>Session::get('diagnosticSession')])->count();
         if($profile > 0)
         {
             if($request->hasfile('user_image'))
             {
                 $img_tmp = Input::file('user_image');
                 if($img_tmp->isValid()){
                     $extension = $img_tmp->getClientOriginalExtension();
                     $filename1 = rand(111,9999).'.'.$extension;
                     $img_path = 'diagnostics/uploads/user_img/'.$filename1;
                     Image::make($img_tmp)->save($img_path);
                     
                 }
             }
             else{
                 $filename1 = $data['current_image1'];
             }
             
             if($request->hasfile('diagnostic_image'))
             {
                 $img_tmp = Input::file('diagnostic_image');
                 if($img_tmp->isValid()){
                     $extension = $img_tmp->getClientOriginalExtension();
                     $filename2 = rand(111,9999).'.'.$extension;
                     $img_path = 'diagnostics/uploads/diagnostic_img/'.$filename2;
                     Image::make($img_tmp)->save($img_path);
                 }
             }
             else{
                 $filename2 = $data['current_image2'];
             }
             
             $diagnosticCount = Diagnosticprofile::where(['email'=>Session::get('diagnosticSession'),'status'=>1])->count();
             if($diagnosticCount == 1){
                 Diagnosticprofile::where(['email'=>Session::get('diagnosticSession')])->update([
                     
                     'user_image' => $filename1,
                     'first_name' => $data['first_name'],
                     'last_name' => $data['last_name'],
                     'gender' => $data['gender'],
                     'dob' => $data['dob'],
                     'bio' => $data['bio'],
                     'diagnostic_address'=>$data['diagnostic_address'],
                     'diagnostic_image'=> $filename2,
                     'account_number' => $data['account_number'],
                     'account_holder' => $data['account_holder'],
                     'ifsc_code' => $data['ifsc_code'],
                     'upi_id' => $data['upi_id'],
                     'address'=>$data['address'],
                     'city' => $data['city'],
                     'state' => $data['state'],
                     'country' => $data['country'],
                     'postal_code' => $data['postal_code'],
                     'price' => $data['price'],
                     'promocode' => $data['promocode'],
                     'services' => $data['services'],
                     'specialist' => $data['specialist'],
                     'award' => $data['award'],
                     'award_year' => $data['award_year'],
                     'membership' => $data['membership'],
                     'registration_number' => $data['registration_number'],
                     'registration_year' => $data['registration_year'],
                     
                     ]);
                     
                     return redirect()->back()->with('flash_message_success','Profile Updated Successfully.');
        
             }
         }
         else {
             $profile = new Diagnosticprofile();
             $profile->diagnosticId = $data['diagnosticId'];
             $profile->email = $data['email'];
             $profile->name = $data['name'];
             $profile->phone = $data['phone'];
             
             if($request->hasfile('user_image'))
             {
                 $img_tmp = Input::file('user_image');
                 if($img_tmp->isValid())
                 {
                     $extension = $img_tmp->getClientOriginalExtension();
                     $filename1 = rand(111,9999).'.'.$extension;
                     $img_path = 'diagnostics/uploads/user_img/'.$filename1;
                     Image::make($img_tmp)->save($img_path);
                     $profile->user_image = $filename1;
                 }
             }
             
             if($request->hasfile('diagnostic_image'))
             {
                 $img_tmp = Input::file('diagnostic_image');
                 if($img_tmp->isValid())
                 {
                     $extension = $img_tmp->getClientOriginalExtension();
                     $filename2 = rand(111,9999).'.'.$extension;
                     $img_path = 'diagnostics/uploads/diagnostic_img/'.$filename2;
                     Image::make($img_tmp)->save($img_path);
                     $profile->diagnostic_image=$filename2;
                 }
             }
            $profile->first_name = $data['first_name'];
            $profile->last_name = $data['last_name'];
            $profile->gender = $data['gender'];
            $profile->dob = $data['dob'];
            $profile->bio = $data['bio'];
            
            $profile->diagnostic_address = $data['diagnostic_address'];
            $profile->account_holder = $data['account_holder'];
            $profile->account_number = $data['account_number'];
            $profile->ifsc_code = $data['ifsc_code'];
            $profile->upi_id = $data['upi_id'];
            $profile->address = $data['address'];
            $profile->city = $data['city'];
            $profile->state = $data['state'];
            $profile->country = $data['country'];
            $profile->postal_code = $data['postal_code'];
            $profile->price = $data['price'];
            $profile->promocode =$data['promocode'];
            $profile->services = $data['services'];
            $profile->specialist = $data['specialist'];
            $profile->award = $data['award'];
            $profile->award_year = $data['award_year'];
            $profile->membership = $data['membership'];
            $profile->registration_number = $data['registration_number'];
            $profile->registration_year = $data['registration_year'];
            
            $profile->save();
            return redirect()->back()->with('flash_message_success','Record Successfully Saved..!');
             
         }
        }
            $diagnosticuser = Diagnostic::where(['email'=>Session::get('diagnosticSession'),'status'=>1])->get();
            $profile = Diagnosticprofile::get();
	      return view('diagnostics.diagnostic-profile-settings')->with(compact('diagnosticuser','profile'));
	  }
	  
	  
	  public function viewschedule()
	  {
	      return view('diagnostics.diagnostic-schedule-timings');
	  }
	  
	  public function viewreview(){
	      return view('diagnostics.diagnostic-reviews');
	  }
	  
	  public function editschedule(){
	      return view('diagnostics.schedule-edit-time');
	  }
	  
	  public function addtime(){
	      return view('diagnostics.schedule-add-time');
	  }
	  
}
