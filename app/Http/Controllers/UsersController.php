<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Patient;
use Session;
use Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
class UsersController extends Controller
{
    public function viewdashboard()
	{
        
		$patientuser = Patient::get();
		return view('patient.patient-dashboard')->with(compact('patientuser'));
    }
    
    public function userlogin(Request $request)
    {
		if($request->isMethod('post')){
            $data = $request->input();
            $userCount = Patient::where(['email'=>$data['email'],'password'=>md5($data['password']),'status'=>1])->count();
    		
    		
    	if(	$userCount >0){
    		      Session::put('email',$data['email']);  
		         
    		    Session::put('patientSession',$data['email']);
    			return redirect('/patient-dashboard');
			}
			else
			{

    			return redirect('/user-login-register')->with('flash_message_error','Invalid ID OR PASSWORD');
    		}

    }
    return view('patient.users.login-register');
    }


    public function userregister(Request $request){

		if($request->isMethod('post')){
		 
		 $data= $request->all();  
		 
		 $userCount = Patient::where(['email'=>$data['email']])->count();
		 
		 if($userCount>0){
		   return redirect()->back()->with('flash_message_error','Email already exists');
		 }else{
   
		        $patientuser = new Patient();
		        $patientuser->name=$data['name'];
                $patientuser->phone=$data['phone'];
                $patientuser->email=$data['email'];
                $patientuser->password=md5($data['password']);

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
                    return redirect()->back()->with('flash_message_error','Password Should Be Match');
                }
                $patientuser->save();
                
           Session::put('email',$data['email']);        
		   Session::put('patientSession',$data['email']);
		         
	 
		 return redirect('/patient-dashboard')->with('flash_message_success','Registered successfully');
		}
	   
		 
	   }return view('patient.users.register')->with('flash_message_success','Registered successfully');
   
	  }


public function pharmacylist(){
    return view('patient.pharmacylist.pharmacylist');
}

public function favourites(){
    return view('patient.favourites.favourites');
}

public function profilesetting(Request $request)
{
    
    if($request->isMethod('post'))
    {
        $data = $request->input();
        if($request->hasfile('image'))
        {
  
            $img_tmp = Input::file('image');

            if($img_tmp->isValid())
            {
            $extension = $img_tmp->getClientOriginalExtension();
            $filename =rand(111,9999).'.'.$extension;
            $img_path='uploads/patient/img/'.$filename;
            Image::make($img_tmp)->save($img_path);
            }
        }
        else
        {
            $filename= $data['image'];
        } 
        $patientCount = Patient::where(['email'=>Session::get('patientSession'), 'status'=>1])->count();
        if(	$patientCount == 1)
        { 
           
            Patient::where(['email'=>Session::get('patientSession')])->update(['dob' => $data['dob'],'name' => $data['name'],'phone'=>$data['phone'],'email'=>$data['email'],'age' => $data['age'],'blood_group' => $data['blood_group'],'address' => $data['address'],'city' => $data['city'],'state' => $data['state'],'zipcode' => $data['zipcode'],'country' => $data['country'],'image'=>$filename]);	
            return redirect()->back()->with('flash_message_success','Profile Updated Successfully!');
        }  
    }
    $patientuser=Patient::get();
    $patientdetails = Patient::where(['email'=>Session::get('patientSession'),'status'=>1])->first();
    return view('patient.profile-settings.profile-settings')->with(compact('patientuser','patientdetails'));
}

public function changepassword(Request $request)
{
    $userdetail = Patient::where(['status'=>1])->first();
    	if($request->isMethod('post')){

    		$data = $request->input();
    			
    		$userCount = Patient::where(['email'=>Session::get('patientSession'),'password'=>md5($data['password']),'status'=>1])->count();
    	    if(	$userCount == 1){
    	    	$new_password = md5($data['new_password']);	    
    	    	Patient::where(['email'=>Session::get('patientSession')])->update(['password'=>$new_password]);	
    	    	return redirect()->back()->with('flash_message_success','Password Updated Successfully!');
    	    		}	
    	   else{
    	       return redirect()->back()->with('flash_message_error','Current password is incorrect');
    	   } 		
    	}
    return view('patient.change-password.change-password');
}

public function logout(){
    Session::flush();
    return redirect('/user-login-register')->with('flash_message_error','Logout Successfully.');
}

}
