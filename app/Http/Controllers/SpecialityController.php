<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use App\Speciality;
use Image;

class SpecialityController extends Controller
{
    public function viewspec()
    {
        $speciality=Speciality::get();
        return view('superadmin.speciality.view')->with(compact('speciality'));
    }

    public function addspec(Request $request)
    {
            if($request->isMethod('post'))
            {

             $data = $request->all();
               
               $speciality = new Speciality;
               $speciality->speciality_name= $data['speciality_name'];
    
                if($request->hasfile('image'))
                {

                    $img_tmp = Input::file('image');

                    if($img_tmp->isValid())
                    {
                        $extension = $img_tmp->getClientOriginalExtension();
                        $filename =rand(111,9999).'.'.$extension;
                        $img_path= 'superadmin/uploads/speciality/'.$filename;
                   
                        Image::make($img_tmp)->save($img_path);
                        $speciality->image =$filename;
                    }
                }
            $speciality->save();
            return redirect('/admin/speciality')->with('flash_message_success','Speciality added successfully');
            }

        return view('superadmin.speciality.add');
    }

    public function editspec(Request $request, $id = null)
    { 
            if($request->ismethod('post'))
            {
  
            $data = $request->all();
            if($request->hasfile('image')){
  
                $img_tmp = Input::file('image');

                if($img_tmp->isValid()){
                $extension = $img_tmp->getClientOriginalExtension();
                $filename =rand(111,9999).'.'.$extension;
               $img_path= 'superadmin/uploads/speciality/'.$filename;

                Image::make($img_tmp)->save($img_path);
               
                   }
                }else{
                  $filename= $data['current_image'];
                 } 
              
         Speciality::where(['id'=>$id])->update(['speciality_name'=>$data['speciality_name'],'image'=>$filename]);
                return redirect('/admin/speciality');
        }
         $specialities=Speciality::where(['id'=>$id])->first();
        return view('superadmin.speciality.edit')->with(compact('specialities'));
    }

    public function deletespec($id=null)
    {
         
        Speciality::where(['id'=>$id])->delete();
        return redirect('/admin/speciality');
    }

}