<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;
use App\Subscriptionplan;
use Session;
use Image;
use Input;
use Validator;
use DB;
use App\Hospitalprofile;
class HospitalController extends Controller
{
    public function viewdashboard(){
        return view('hospitaldashboard.hospital-dashboard');
    }

    public function loginhospital(Request $request){
        if($request->isMethod('post'))
        {
            $data = $request->input();
            $hospitalCount = Hospital::where(['email'=>$data['email'],'password'=>md5($data['password']),'status'=>1])->count();
            if($hospitalCount > 0)
            {
                Session::put('hospitalSession',$data['email']);
                return redirect('/hospital/hospital-dashboard');
            }
            else{
                return redirect('/hospitaladmin')->with('flash_message_error','Invalid Password Or Email');
            }
        }
        return view('hospitaldashboard.users.login');
    }

    public function registerhospital(Request $request){
        $plan = Subscriptionplan::get();
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $hospitalCount = Hospital::where(['email'=>$data['email']])->count();
            if($hospitalCount > 0)
            {
                return redirect()->back()->with('flash_message_error','Email Already Exist..!');
            }
            else{
            $hospitaluser = new Hospital();
            $hospitaluser->email = $data['email'];
            $hospitaluser->password = md5($data['password']);
            $hospitaluser->phone = $data['phone'];
            $hospitaluser->name=$data['name'];
            $hospitaluser->package=$data['package'];

            if($request->hasfile('image'))
			{
   
				$img_tmp = Input::file('image');
   
				if($img_tmp->isValid())
				{
					$extension = $img_tmp->getClientOriginalExtension();
					$filename =rand(111,9999).'.'.$extension;
					$img_path= 'hospital/uploads/img/'.$filename;
			   
					Image::make($img_tmp)->save($img_path);
					$hospitaluser->image =$filename;
				}
			}


            $val = Input::all();

            $rules = [
                'password' => 'required|min:8',
                'password_confirmation' => 'required|min:8|same:password',
            ];

            $messages = [
                'password_confirmation.same'=> 'Confirmation Password Should the match Password'
            ];
            $validator = Validator::make($val , $messages, $rules);
            if($validator->fails())
            {
                return redirect('/hospitalregister')->with('flash_message_error','Password Should be match');
            }

            $hospitaluser->save();
            return redirect('/hospitaladmin')->with('flash_message_success','Successfully Registered');

            }
        }
        return view('hospitaldashboard.users.register')->with(compact('plan'));
    }
    
    public function viewschedule(){
        return view('hospitaldashboard.hospital-schedule-timings');
    }
    
    
    public function editschedule(){
        return view('hospitaldashboard.schedule-edit-time');
    }
    
    public function addtime(){
        return view('hospitaldashboard.schedule-add-time');
    }
    
    public function changepassword(Request $request){
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $hospitalCount = Hospital::where(['email'=>Session::get('hospitalSession'),'password'=>md5($data['password']),'status'=>1 ])->count();
            if($hospitalCount==1){
                $new_password = md5($data['new_password']);
                
                $val = Input::all();
                
                $rules = [
                    'new_password' => 'required|min:8',
                    'password_confirmation' => 'required|min:8|same:new_password',
                    ];
                    
                $messages = [
                    'password_confirmation.same' => 'Password Should match the Password',
                    ];
                    
                $validator = Validator::make($val , $rules , $messages);
                if($validator->fails()){
                    return redirect()->back()->with('flash_message_error','Password should be same.');
                }
                
                Hospital::where(['email'=>Session::get('hospitalSession')])->update(['password'=>md5($data['new_password'])]);
                return redirect()->back()->with('flash_message_success','Password Changed Successfully.');
            }
            else{
                return redirect()->back()->with('flash_message_error','Current Password is Wrong.');
            }
        }
        return view('hospitaldashboard.hospital-change-password');
    }
    
    
    public function profilesetting(Request $request)
    {
        if($request->isMethod('post'))
        {
         $data = $request->all();
         $profile= DB::table('hospitalprofiles')->where(['email'=>Session::get('hospitalSession')])->count();
         if($profile > 0)
         {
             if($request->hasfile('user_image'))
             {
                 $img_tmp = Input::file('user_image');
                 if($img_tmp->isValid()){
                     $extension = $img_tmp->getClientOriginalExtension();
                     $filename1 = rand(111,9999).'.'.$extension;
                     $img_path = 'hospital/uploads/user_img/'.$filename1;
                     Image::make($img_tmp)->save($img_path);
                     
                 }
             }
             else{
                 $filename1 = $data['current_image1'];
             }
             
             if($request->hasfile('hospital_image'))
             {
                 $img_tmp = Input::file('hospital_image');
                 if($img_tmp->isValid()){
                     $extension = $img_tmp->getClientOriginalExtension();
                     $filename2 = rand(111,9999).'.'.$extension;
                     $img_path = 'hospital/uploads/hospital_img/'.$filename2;
                     Image::make($img_tmp)->save($img_path);
                 }
             }
             else{
                 $filename2 = $data['current_image2'];
             }
             
             $hospitalCount = Hospitalprofile::where(['email'=>Session::get('hospitalSession'),'status'=>1])->count();
             if($hospitalCount == 1){
                 Hospitalprofile::where(['email'=>Session::get('hospitalSession')])->update([
                     
                     'user_image' => $filename1,
                     'first_name' => $data['first_name'],
                     'last_name' => $data['last_name'],
                     'gender' => $data['gender'],
                     'dob' => $data['dob'],
                     'bio' => $data['bio'],
                     'hospital_address'=>$data['hospital_address'],
                     'hospital_image'=> $filename2,
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
             $profile = new Hospitalprofile();
             $profile->userid = $data['userid'];
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
                     $img_path = 'hospital/uploads/user_img/'.$filename1;
                     Image::make($img_tmp)->save($img_path);
                     $profile->user_image = $filename1;
                 }
             }
             
             if($request->hasfile('hospital_image'))
             {
                 $img_tmp = Input::file('hospital_image');
                 if($img_tmp->isValid())
                 {
                     $extension = $img_tmp->getClientOriginalExtension();
                     $filename2 = rand(111,9999).'.'.$extension;
                     $img_path = 'hospital/uploads/hospital_img/'.$filename2;
                     Image::make($img_tmp)->save($img_path);
                     $profile->hospital_image=$filename2;
                 }
             }
            $profile->first_name = $data['first_name'];
            $profile->last_name = $data['last_name'];
            $profile->gender = $data['gender'];
            $profile->dob = $data['dob'];
            $profile->bio = $data['bio'];
            
            $profile->hospital_address = $data['hospital_address'];
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
        $hospitaluser = Hospital::where(['email'=>Session::get('hospitalSession'),'status'=>1])->get();
        $profile = Hospitalprofile::get();
        return view('hospitaldashboard.hospital-profile-settings')->with(compact('hospitaluser','profile'));
    }
    
        
    
    public function viewreview(){
        return view('hospitaldashboard.hospital-reviews');
    }
    
    
    
    public function hospitallogout($id=null){
        
        Session::flush();
        return redirect('/hospitaladmin')->with('flash_message_success','Logout Successfully.');
    }
    
    
}
