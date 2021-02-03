<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Auth;
use App\Patient;
use App\User;
use App\Doctor;
use Hash;
use Image;
use App\Blog;
use App\Alladmin;
use App\Category;
use App\Pharmacy;
use App\Diagnostic;
use App\Bloodbank;
use App\Hospital;
use App\Doctorprofile;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->input();
            
            if(Auth::attempt(['email'=>$data['username'],'password'=>$data['password']]))
            {
                return redirect('admin/dashboard');
            }
            else{
                return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
            }
        }
        return view('superadmin.login');
    }

    public function dashboard()
    {
        $admin = User::get();
        return view('superadmin.dashboard')->with(compact('admin'));
    }
    
    public function logout() 
    {
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Logout Successfully!');
    }

    public function register(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $userCount = User::where(['email'=>$data['email']])->count();
		 
		 if($userCount>0){
		   return redirect()->back()->with('flash_message_error','Email already exists');
		 }else{
            $register = new User;
            
            $register->name = $data['name'];
            
            $register->email = $data['email'];
            
            $register->password =Hash::make($data['password']);
            

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
                    return redirect('/admin/register')->with('flash_message_error','Password Should Be Match');
                }

            $register->save();
            
            return redirect('/admin')->with('flash_message_success','Register Successfully.Now Login With Registered Email.');
        }
        return view('superadmin.register');
    }

    }
// update the permission of pharmacy
public function updatepharmacystatus(Request $request){

    $pharmacy= Pharmacy::findorfail($request->id);
    $pharmacy->status= $request->status;
    $pharmacy->save();
    return response()->json(['message'=>'Your status updated!']);
}

public function viewdoctor(){
    $category = Category::get();
    $doctoruser = Doctor::get();
    $doctorpro = Doctorprofile::where(['email'=>Session::get('doctorSession')])->first();
    return view('superadmin.businesspartners.doctor-list')->with(compact('category','doctoruser','doctorpro'));
}


public function viewbloodbank(){
    
    $bloodbank = bloodbank::get();
    $bloodbankdetails = bloodbank::where(['email'=>Session::get('bloodbankSession'),'status'=>1])->first();
    return view('superadmin.businesspartners.bloodbank.bloodbank-listing')->with(compact('bloodbank','bloodbankdetails'));
}

// update the permission of bloodbank
public function updatebloodbankstatus(Request $request){

    $bloodbank= Bloodbank::findorfail($request->id);
    $bloodbank->status= $request->status;
    $bloodbank->save();
    return response()->json(['message'=>'Your status updated!']);
}


public function updatedoctorstatus(Request $request){

    $doctoruser= Doctor::findorfail($request->id);
    $doctoruser->status= $request->status;
    $doctoruser->save();
    return response()->json(['message'=>'Your status updated!']);
}

public function viewdiagnostics(){

    $diagnostic = Diagnostic::all();
   
    return view('superadmin.businesspartners.diagnostics-list')->with(compact('diagnostic'));
}

public function updatediagnosticstatus(Request $request){

    $diagnosticuser= Diagnostic::findorfail($request->id);
    $diagnosticuser->status= $request->status;
    $diagnosticuser->save();
    return response()->json(['message'=>'Your status updated!']);
}


public function deletediagnostic($id=null){
    Diagnostic::where(['id'=>$id])->delete();
    return redirect('/admin/diagnostics-list')->with('flash_message_success','Account Deleted Successfully');
}

public function viewhospital(){
    $hospitaluser = Hospital::all();
    return view('superadmin.businesspartners.hospital-list')->with(compact('hospitaluser'));
}

public function updatehospitalstatus(Request $request){
    $hospitaluser = Hospital::findorfail($request->id);
    $hospitaluser->status = $request->status;
    $hospitaluser->save();
    return response()->json(['message'=>'Your Status Updated']);
}


public function deletehospital($id=null){
    Hospital::where(['id'=>$id])->delete();
    return redirect()->back()->with('flash_message_success','Deleted Hospital Successfully.');
}

public function viewpharmacy(){
    $pharmacy = Pharmacy::all();
    return view('superadmin.businesspartners.pharmacy-list')->with(compact('pharmacy'));
}

public function viewappointment(){
    return view('superadmin.appointment-list.appointment-list');
}

public function viewpatient(){
    $patientuser=Patient::get();
    $patientdetails = Patient::where(['email'=>Session::get('patientSession'),'status'=>1])->first();
    return view('superadmin.patient-list.patient-list')->with(compact('patientuser','patientdetails'));
}

// update the permission of pharmacy
public function updatepatientstatus(Request $request){

    $patientuser= Patient::findorfail($request->id);
    $patientuser->status= $request->status;
    $patientuser->save();
    return response()->json(['message'=>'Your status updated!']);
}

public function viewreport(){
    return view('superadmin.report.invoice-report');
}

public function viewtransaction(){
    return view('superadmin.transaction-list.transactions-list');
}
public function viewreview(){
    return view('superadmin.review-list.reviews');
}

public function viewblog()
	  {
    $blogdetails=Blog::get();
		return view('superadmin.Blog.index')->with(compact('blogdetails'));
	}


}
