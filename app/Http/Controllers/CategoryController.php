<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function index(){
		$category =Category::get();
		return view('superadmin.categories.index')->with(compact('category'));
	}
	 
	public function addcat(Request $request)
	{
         
                 if($request->isMethod('post'))
				 {
                  $data = $request->all();
                    
                    $category = new Category;

            
              $category->category_name= $data['category_name'];
          
            
                $category->save();
                return redirect('/admin/category')->with('flash_message_success','Category added successfully');
              
           }
		
		return view('superadmin.categories.add-category');
	}
	
  public function editcat(Request $request, $id = null)
  {
           
          if($request->ismethod('post'))
          {

          $data = $request->all();
          
           Category::where(['id'=>$id])->update(['category_name'=>$data['cat_name']]);
           return redirect('/admin/category');
          }
        
            $categorydetails = Category::where(['id'=>$id])->first();

            return view('superadmin.categories.edit-category')->with(compact('categorydetails'));
    }

      public function deletecat($id=null)
      {  
        Category::where(['id'=>$id])->delete();
          return redirect('/admin/category');
      }
}
