<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subadmin;
class SubadminController extends Controller
{
    public function viewadmin()
    {
        $subadmin=Subadmin::get();
        return view('superadmin.subadmin.view')->with(compact('subadmin'));
    }

    public function addadmin(Request $request)
    {
            if($request->isMethod('post'))
            {

             $data = $request->all();
               
               $subadmin = new Subadmin;
               $subadmin->	subadmin_name= $data['admin_name'];
               $subadmin->	subadmin_email= $data['admin_email'];
               $subadmin->	subadmin_phone= $data['admin_phone'];
               $subadmin->	password= md5($data['admin_password']);
               
               
            $subadmin->save();
            return redirect('/admin/subadmin')->with('flash_message_success','Sub Admin added successfully');
            }

        return view('superadmin.subadmin.add');
    }

  
    public function deleteadmin($id=null)
    { 
        Subadmin::where(['id'=>$id])->delete();
        return redirect('/admin/subadmin');
    }
}
