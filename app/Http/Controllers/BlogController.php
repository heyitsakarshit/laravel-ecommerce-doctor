<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use App\Blog;
use Image;


class BlogController extends Controller
{
  
	
	  public function index()
	  {
    $blogdetails=Blog::get();
		return view('doctordashboard.Blog.index')->with(compact('blogdetails'));
	}
	
	public function addblog(Request $request)
	{
         
                 if($request->isMethod('post'))
				 {
                  $data=$request->all();
                    
                    $blog = new Blog;

              
              $blog->blog_title= $data['blog_title'];
              $blog->date=$data['date'];
              $blog->doctor = $data['doctor'];
              $blog->descriptions = $data['descriptions'];

              if($request->hasfile('image'))
                {

                    $img_tmp = Input::file('image');

                    if($img_tmp->isValid())
                    {
                        $extension = $img_tmp->getClientOriginalExtension();
                        $filename =rand(111,9999).'.'.$extension;
                        $img_path= 'doctorprofile/uploads/blogimg/'.$filename;
                   
                        Image::make($img_tmp)->save($img_path);
                        $blog->image =$filename;
                    }
                }
               
              $blog->save();
              return redirect('/doctor/blog')->with('flash_message_success','Blog added successfully');
         
           }
		
		return view('doctordashboard.Blog.add-blog');
	}
	
	
	
	public function editblog(Request $request, $id = null){
           
          if($request->ismethod('post')){

          $data = $request->all();
  
           if($request->hasfile('image')){
  
                  $img_tmp = Input::file('image');
  
                  if($img_tmp->isValid()){
                  $extension = $img_tmp->getClientOriginalExtension();
                  $filename =rand(111,9999).'.'.$extension;
                 $img_path= 'doctorprofile/uploads/blogimg/'.$filename;
  
                  Image::make($img_tmp)->save($img_path);
                 
                     }
                  }else{
                    $filename= $data['current_image'];
                   } 
          




            Blog::where(['id'=>$id])->update(['blog_title'=>$data['blog_name'],'date'=>$data['date'],'doctor'=>$data['doctor'],'image'=>$filename,'descriptions'=>$data['descriptions']]);
            
           return redirect('/doctor/blog');

        }
        
         $blogdetails = Blog::where(['id'=>$id])->first();
        
      
            return view('doctordashboard.Blog.edit-blog')->with(compact('blogdetails'));

      }

      public function deleteblog($id=null)
      {  
        Blog::where(['id'=>$id])->delete();
          return redirect('/doctor/blog');
      }


}
