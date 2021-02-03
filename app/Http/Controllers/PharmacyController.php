<?php

namespace App\Http\Controllers;
use Auth;
use Image;
use Session;
use App\Pharmacy;
use App\Pharmacycategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
class PharmacyController extends Controller
{
	public function index()
	{
		$pharmacy = Pharmacy::get();
		return view('pharmacydashboard.index')->with(compact('pharmacy'));
	}

    public function loginpharmacy(Request $request)
    {
		if($request->isMethod('post')){
            $data = $request->input();
            $pharmacyCount = Pharmacy::where(['email'=>$data['email'],'password'=>md5($data['password']),'status'=>1])->count();
    		
    	if(	$pharmacyCount >0){
    		    
    		    Session::put('pharmacySession',$data['email']);
    			return redirect('/pharmacy-dashboard');
			}
			else
			{

    			return redirect('/pharmacyadmin')->with('flash_message_error','Your account is not active');
    		}

    }
    	return view('pharmacydashboard.users.login');
	}
	

	public function registerpharmacy(Request $request){

		if($request->isMethod('post')){
		 
		 $data= $request->all();  
		 // echo "<pre>";
		 // print_r($data);
		 // die;
		 $pharmacyCount = Pharmacy::where(['email'=>$data['email']])->count();
		 
		 if($pharmacyCount>0){
   
		   return redirect()->back()->with('flash_message_error','Email already exists');
		 }else{
   
		 $pharmacy = new Pharmacy();
		 $pharmacy->email=$data['email'];
		 $pharmacy->password=md5($data['password']);
		 $pharmacy->name=$data['name'];
		 

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
                    return redirect('/pharmacyregister')->with('flash_message_error','Password Should Be Match');
                }


		 $pharmacy->save();
		 
		 return redirect('/pharmacyadmin')->with('flash_message_success','Registered successfully');
		}
	   
		 
	   }return view('pharmacydashboard.users.register')->with('flash_message_success','Registered successfully');
   
	  }




	  public function logout() 
	  {
		  Session::flush();
		  return redirect('/pharmacyadmin')->with('flash_message_success','Logout Successfully!');
	  }




	  public function pharmacycategory(){
		  $pharmacy_cat = Pharmacycategory::get();
		  return view('pharmacydashboard.pharmacy-category.category')->with(compact('pharmacy_cat'));
	  }

	  public function addpharmacycat(Request $request){
		  if($request->isMethod('post'))
		  {
			  $data = $request->all();
			  $pharmacy_cat = new Pharmacycategory;

			  $pharmacy_cat->category_name = $data['category_name'];
			  $pharmacy_cat->save();
			  return redirect('/pharmacy/category/add-category')->with('flash_message_success','Category Added Successfully');
		  }
		  return view('pharmacydashboard.pharmacy-category.add-category');
	  }

	  public function editpharmacycat(Request $request , $id=null){
		  if($request->isMethod('post'))
		  {
			  $data = $request->all();
			 

			  Pharmacycategory::where(['id'=>$id])->update(['category_name'=>$data['category_name']]);
			
			  return redirect('/pharmacy/category');
		  }
		  $pharmacy_cat = Pharmacycategory::where(['id'=>$id])->first();
		  return view('pharmacydashboard.pharmacy-category.edit-category')->with(compact('pharmacy_cat'));
	  }

	  public function deletepharmacycat($id=null){
		  Pharmacycategory::where(['id'=>$id])->delete();
		  return redirect('/pharmacy/category')->with('flash_message_success','Category Deleted Successfully');
	  }
	  public function viewprofile(){
		$userdetail=Pharmacy::get();
		$userdetail = Pharmacy::where(['email'=>Session::get('pharmacySession'),'status'=>1])->first();
		return view('pharmacydashboard.profile')->with(compact('userdetail'));
	  }


	  public function changepassword(Request $request){

		$userdetail = Pharmacy::where(['status'=>1])->first();
		if($request->isMethod('post'))
		{

    		$data = $request->input();
    			
    		$pharmacyCount = Pharmacy::where(['email'=>Session::get('pharmacySession'),'password'=>md5($data['password']), 'status'=>1])->count();
    	    if(	$pharmacyCount == 1){
    	    	$new_password = md5($data['new_password']);	    
    	    	Pharmacy::where(['email'=>Session::get('pharmacySession')])->update(['password'=>$new_password]);	
    	    	return redirect()->back()->with('flash_message_success','Password Updated Successfully!');
    	    		}	
    	   else{
    	       return redirect()->back()->with('flash_message_error','Current password is incorrect');
    	    	
    	       
    	   } 		
		}
		$userdetail=Pharmacy::get();
		$userdetail = Pharmacy::where(['email'=>Session::get('pharmacySession'),'status'=>1])->first();
		return view('pharmacydashboard.profile')->with(compact('userdetail'));
	  }
		// }
		
		// if($request->isMethod('post'))
		// {
		// 	$data = $request->input();

		//edit profile
		public function editprofile(Request $request){

			$userdetail = Pharmacy::where(['status'=>1])->first();
			if($request->isMethod('post')){
				$data = $request->all();
			if($request->hasfile('image'))
			{
	  
				$img_tmp = Input::file('image');
	
				if($img_tmp->isValid())
				{
				$extension = $img_tmp->getClientOriginalExtension();
				$filename =rand(111,9999).'.'.$extension;
				$img_path='pharmacydashboard/uploads/img/'.$filename;
				Image::make($img_tmp)->save($img_path);
				}
			}

			else
			{
				$filename= $data['current_image'];
			} 
			$pharmacyCount = Pharmacy::where(['email'=>Session::get('pharmacySession'), 'status'=>1])->count();
			if(	$pharmacyCount == 1)
			{ 
			   
				Pharmacy::where(['email'=>Session::get('pharmacySession')])->update(['dob' => $data['dob'],
				'name' => $data['name'],'phone'=>$data['phone'],'email'=>$data['email'],
				'address' => $data['address'],'city' => $data['city'],'state' => $data['state'],
				'zipcode' => $data['zipcode'],'country' => $data['country'],'image'=>$filename]);	
				return redirect()->back()->with('flash_message_success','Profile Updated Successfully!');
			}  
		}

		$userdetail=Pharmacy::get();
		$userdetail = Pharmacy::where(['email'=>Session::get('pharmacySession'),'status'=>1])->first();
		return view('pharmacydashboard.profile')->with(compact('userdetail'));
	  }

	  public function vieworder(){
		  return view('pharmacydashboard.order.order');
	  }

	  public function viewsales(){
		  return view('pharmacydashboard.sales.sales');
	  }

	  public function viewtransaction(){
		  return view('pharmacydashboard.transactions.transactions');
	  }

	  public function viewinvoice(){
		  return view('pharmacydashboard.reports.invoice-report');
	  }

	  public function editinvoice(){
		  return view('pharmacydashboard.reports.edit-Invoice-report');
	  }
	
}
 