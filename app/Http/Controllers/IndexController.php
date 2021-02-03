<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request; 
use App\Askquestion;
use App\Speciality;
use App\Requestblood;
use App\Donateblood;
use Image;
use Input;
use App\Alladmin;
use App\Doctor;
use App\Doctorprofile;
use App\Subscriptionplan;
use App\Category;
use Session;
use App\Patient;
use App\Doctorschedule;
use App\ScheduleAttribute;
use App\DoctorReview;
class IndexController extends Controller
{
    public function index()
    {
        $doctor = Doctorprofile::get();
        $blogdetails=Blog::get();
        $speciality=Speciality::get();
        return view('socialvaidya.index')->with(compact('blogdetails'))->with(compact('speciality','doctor'));
    }

    public function askquestion(){
        $ask=Askquestion::get();
        return view('socialvaidya.ask-question')->with(compact('ask'));
    }

    public function addquestion(Request $request){
        if($request->isMethod('post'))
        {
            $data = $request->all();
            
            $ask = new Askquestion;

            $ask->detail = $data['detail'];
            
            $ask->looking_for = $data['looking_for'];
            
            $ask->email = $data['email'];
            
            $ask->phone = $data['phone'];

            $ask->save();
            return redirect('/askquestion')->with('flash_message_success','Query has been submitted.');
        }
        return view('socialvaidya.ask-question');
    }

    public function requestblood()
    {
            $requestblood = Requestblood::get();
        
            return view('socialvaidya.request')->with(compact('requestblood'));
    }


    public function addrequestblood(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            
                    $requestblood = new Requestblood;

                    $requestblood->name = $data['name'];
                    
                    $requestblood->age = $data['age'];
                    
                    $requestblood->phone = $data['phone'];
                    
                    $requestblood->address = $data['address'];
                    
                    $requestblood->height = $data['height'];
                    
                    $requestblood->weight = $data['weight'];
                    
                    $requestblood->blood_group = $data['blood_group'];
                    
                    $requestblood->email = $data['email'];
                    
                    $requestblood->gender = $data['gender'];



                    if($request->hasfile('image'))
                {

                    $img_tmp = Input::file('image');

                    if($img_tmp->isValid())
                    {
                        $extension = $img_tmp->getClientOriginalExtension();
                        $filename =rand(111,9999).'.'.$extension;
                        $img_path= 'uploads/bloodbank/request/'.$filename;
                   
                        Image::make($img_tmp)->save($img_path);
                        
                    }
                    $requestblood->image =$filename;
                }
        
            $requestblood->save();
            
            return redirect('/requestblood')->with('flash_message_success','Requested for Blood Successfully.');
        }
        return view('socialvaidya.request');
    }

    

    public function adddonateblood(Request $request){
        
        if($request->isMethod('post'))
        {
            $data = $request->all();
            
            $donate  = new Donateblood;

            $donate->name = $data['name'];
            
            $donate->age = $data['age'];
            
            $donate->phone = $data['phone'];
            
            $donate->address = $data['address'];
            
            $donate->height = $data['height'];
            
            $donate->weight = $data['weight'];
            
            $donate->blood_group = $data['blood_group'];
            
            $donate->email = $data['email'];
            
            $donate->gender = $data['gender'];


            if($request->hasfile('image'))
                {

                    $img_tmp = Input::file('image');

                    if($img_tmp->isValid())
                    {
                        $extension = $img_tmp->getClientOriginalExtension();
                        $filename =rand(111,9999).'.'.$extension;
                        $img_path= 'uploads/bloodbank/donate/'.$filename;
                   
                        Image::make($img_tmp)->save($img_path);
                        
                    }
                    $donate->image =$filename;
                }



            $donate->save();
            
            return redirect('/adddonateblood')->with('flash_message_success','Donation Requested Successfully');
        }
        return view('socialvaidya.request');
    }


    public function privacy(){
        return view('socialvaidya.privacy-policy');
    }

    public function term(){
        return view('socialvaidya.term-condition');
    }

    public function registeralladmin(Request $request)
    { 
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $allad = new Alladmin;
            
            $allad->firstname = $data['firstname'];
            $allad->lastname = $data['lastname'];
            $allad->username = $data['username'];
            $allad->referalcode = $data['referalcode'];
            $allad->dob = $data['dob'];
            $allad->blood_group = $data['blood_group'];
            $allad->email = $data['email'];
            $allad->password = md5($data['password']);
            $allad->phone = $data['phone'];
            $allad->gender = $data['gender'];
            $allad->address1 = $data['address1'];
            $allad->address2 = $data['address2'];
            $allad->city = $data['city'];
            $allad->pincode = $data['pincode'];
            $allad->country = $data['country'];
            $allad->category = $data['category'];
            $allad->package = $data['package'];
            
            if($request->hasfile('image'))
                {

                    $img_tmp = Input::file('image');

                    if($img_tmp->isValid())
                    {
                        $extension = $img_tmp->getClientOriginalExtension();
                        $filename =rand(111,9999).'.'.$extension;
                        $img_path= 'uploads/alladmin/'.$filename;
                   
                        Image::make($img_tmp)->save($img_path);
                        
                    }
                    $allad->image =$filename;
                }
               
                $allad->save();
                return redirect('/allregister')->with('flash_message_success','Registered Successfully');      
        }
        $plan = Subscriptionplan::get();
        $category = Category::get();
        return view('socialvaidya.alladmin.register')->with(compact('plan'))->with(compact('category'));
    }

    public function loginalladmin(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->input();
            $userCount = Alladmin::where(['email'=>$data['email'],'password'=>md5($data['password']),'category'=>$data['category']])->count();
            if( $userCount > 0 )
            {
                Session::put('alladminSession',$data['email']);
                return redirect('/doctor-dashboard');
            }
            else
			{
    			return redirect('/alllogin')->with('flash_message_error','Your account is not active');
    		}
        }
        $category = Category::get();
        return view('socialvaidya.alladmin.alllogin')->with(compact('category'));
    }


    // front pages

    public function viewdoctorgrid(){
        return view('socialvaidya.map-grid');
    }
       
    
    public function searchdoctor(){
        $doctor = Doctorprofile::get();
        $schedule = Doctorschedule::get();
        return view('socialvaidya.search')->with(compact('doctor','schedule'));
    }
       
    public function viewdoctorprofile($id=null){
            $speciality=Speciality::get();
            $schedule = Doctorschedule::get();
            $doctor = Doctorprofile::where('id',$id)->first();
           $patientdetails = Patient::where(['id'=>$id])->first();
           $review = DoctorReview::get();
        return view('socialvaidya.doctor-profile')->with(compact('doctor','schedule','speciality','patientdetails','review'));
    }
    
    public function doctorreview(Request $request,$id=null)
    {
         
        if($request->isMethod('post'))
        {
            
            $data = $request->all();
            $review = new DoctorReview();
            $review->doctorId=$data['doctorId'];
            $review->patientId=$data['patientId'];
            $review->point=$data['point'];
            $review->title=$data['title'];
            $review->review=$data['review'];
            
            $review ->save();
            return redirect()->back()->with('flash_message_success','Thanks For giving your review.');
        }
            $patientdetails = Patient::where(['id'=>$id])->first();
            $doctor = Doctorprofile::where('id',$id)->first();
            $speciality=Speciality::get();
            $schedule = Doctorschedule::get();
            $review = DoctorReview::get();
        return view('socialvaidya.doctor-profile')->with(compact('doctor','schedule','speciality','patientdetails','review'));
    }
    
    public function booking($id=null)
    {
        $doctordetails= Doctorschedule::with('attributes')->where('id',$id)->first();
        $schedule = Doctorschedule::get();
        $doctor   = Doctorprofile::where('id',$id)->first();
        $timeslot = ScheduleAttribute::get();
        return view('socialvaidya.booking')->with(compact('doctordetails','doctor','schedule','timeslot'));
    }

    public function checkout(){
        return view('socialvaidya.checkout');
    }

    public function bookingsuccess(){
        return view('socialvaidya.booking-success');
    }


    public function pharmacyindex(){
        return view('socialvaidya.pharmacy-index');
    }

    public function pharmacydetails(){
        return view('socialvaidya.pharmacy-details');
    }

    public function pharmacysearch(){
        return view('socialvaidya.pharmacy-search');
    }

    public function productall(){
        return view('socialvaidya.product-all');
    }

    public function viewcart(){
        return view('socialvaidya.cart');
    }



    public function viewblogdetails($id=null){
        $blogdetails=Blog::where('id',$id)->first();
        return view('socialvaidya.blog-details')->with(compact('blogdetails'));
    }


    public function viewbloggrid(){
        $blogdetails=Blog::get();
        return view('socialvaidya.blog-grid')->with(compact('blogdetails'));
    }

    public function businesspartner(){
        return view('socialvaidya.business-partners');
    }
}