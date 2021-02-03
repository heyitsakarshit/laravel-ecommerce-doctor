<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Support\Facades\Validator;
use Session;
use Image;
use Illuminate\Http\Request;
use App\Requestblood;
use App\Donateblood;
use App\Bloodbank;


use App\Subscriptionplan;
class BloodbankController extends Controller
{
    public function viewrequestblood(){
        $req_blood = Requestblood::get();
        return view('superadmin.businesspartners.bloodbank.view_request')->with(compact('req_blood'));
    }

    public function deleterequestblood($id=null)
    {
        Requestblood::where(['id'=>$id])->delete();
        return redirect('/admin/requestblood')->with('flash_message_success','Deleted Successfully');
    }

    public function viewdonateblood(){
        $donate_b = Donateblood::get();
        return view('superadmin.businesspartners.bloodbank.view_donate')->with(compact('donate_b'));
    }

    public function deletedonateblood($id=null)
    {
        Donateblood::where(['id'=>$id])->delete();
        return redirect('/admin/donateblood')->with('flash_message_success','Deleted Successfully');
    }



    public function index()
	{
		$bloodbank = Bloodbank::get();
		return view('bloodbank.bloodbank-dashboard')->with(compact('bloodbank'));
	}

    public function loginbloodbank(Request $request)
    {
		if($request->isMethod('post')){
            $data = $request->input();
            $bloodbankCount = Bloodbank::where(['email'=>$data['email'],'password'=>md5($data['password']),'status'=>1])->count();
    		
    	if(	$bloodbankCount >0){
    		    
    		    Session::put('bloodbankSession',$data['email']);
    			return redirect('/bloodbank/bloodbank-dashboard');
			}
			else
			{

    			return redirect('/bloodbankadmin')->with('flash_message_error','Your account is not active');
    		}

    }
    	return view('bloodbank.users.login');
	}
	

	public function registerbloodbank(Request $request){
        $plan = Subscriptionplan::get();
		if($request->isMethod('post'))
		{
		 $data= $request->all();  
		
		 $bloodbankCount = Bloodbank::where(['email'=>$data['email']])->count();
		 
		 if($bloodbankCount>0){
		   return redirect()->back()->with('flash_message_error','Email already exists');
		 }
		 else
		 {

			$bloodbank = new Bloodbank();
			$bloodbank->email=$data['email'];
			$bloodbank->password=md5($data['password']);
			$bloodbank->name=$data['name'];
			$bloodbank->phone=$data['phone'];
			$bloodbank->package=$data['package'];

			if($request->hasfile('image'))
			{
   
				$img_tmp = Input::file('image');
   
				if($img_tmp->isValid())
				{
					$extension = $img_tmp->getClientOriginalExtension();
					$filename =rand(111,9999).'.'.$extension;
					$img_path= 'bloodbank/uploads/img/'.$filename;
			   
					Image::make($img_tmp)->save($img_path);
					$bloodbank->image =$filename;
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
                    return redirect('/bloodbankregister')->with('flash_message_error','Password Should Be Match');
                }


		 $bloodbank->save();
		 
		 return redirect('/bloodbankadmin')->with('flash_message_success','Registered successfully');
		}
	   
        
	   }
	   return view('bloodbank.users.register')->with('flash_message_success','Registered successfully')->with(compact('plan'));
   
	  }


	  public function viewrequest(){
			$req_blood = Requestblood::get();
		  	return view('bloodbank.bloodrequest')->with(compact('req_blood'));
	  }


	  public function viewdonate(){
			$donate_b = Donateblood::get();
		  return view('bloodbank.blooddonate')->with(compact('donate_b'));
	  }

	  public function changepassword(Request $request)
	  {
        $bloodbank = Bloodbank::where(['status'=>1])->first();
		if($request->isMethod('post'))
		{

    		$data = $request->input();
    		$userCount = Bloodbank::where(['email'=>Session::get('bloodbankSession'),'password'=>md5($data['password']),'status'=>1])->count();
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


    	    	Bloodbank::where(['email'=>Session::get('bloodbankSession')])->update(['password'=>$new_password]);	
    	    	return redirect()->back()->with('flash_message_success','Password Updated Successfully!');
    	    		}	
    	   else{
    	       return redirect()->back()->with('flash_message_error','Current password is incorrect');
    	   } 		
    	}
        return view('bloodbank.bloodbank-change-password')->with(compact('bloodbank'));
    }
	  



	public function profilesetting(){
		return view('bloodbank.bloodbank-profile-settings');
	}





	  public function logout() 
	  {
		  Session::flush();
		  return redirect('/bloodbank-dashboard-logout')->with('flash_message_success','Logout Successfully!');
	  }


}
