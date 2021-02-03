<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use Image;
use Input;
use App\Pharmacycategory;
class ProductController extends Controller
{
    public function viewproduct()
    {
        $product = Product::get();
        return view('superadmin.product.view')->with(compact('product'));
    }

    public function addproduct(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $product = new Product;
            $product->product_name = $data['product_name'];
            $product->product_price = $data['product_price'];
            $product->product_description =$data['product_description'];

            $product->product_discount = $data['product_discount'];
            $product->product_quantity = $data['product_quantity'];
            $product->product_category = $data['product_category'];
            if($request->hasfile('product_image'))
                {

                    $img_tmp = Input::file('product_image');

                    if($img_tmp->isValid())
                    {
                        $extension = $img_tmp->getClientOriginalExtension();
                        $filename =rand(111,9999).'.'.$extension;
                        $img_path= 'superadmin/uploads/product/'.$filename;
                   
                        Image::make($img_tmp)->save($img_path);
                        $product->product_image = $filename;
                    }
                }
            $product->save();
            return redirect('/admin/addproduct')->with('flash_message_success','Product Successfully Added.');
        }
        $pharmacy_cat = Pharmacycategory::get();
        return view('superadmin.product.add')->with(compact('pharmacy_cat'));
    }

    public function editproduct(Request $request,$id=null)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();

            if($request->hasfile('product_image')){
  
                $img_tmp = Input::file('product_image');

                if($img_tmp->isValid())
                {
                $extension = $img_tmp->getClientOriginalExtension();
                $filename =rand(111,9999).'.'.$extension;
               $img_path= 'superadmin/uploads/product/'.$filename;

                Image::make($img_tmp)->save($img_path);
               
                }
                }
                else{
                  $filename= $data['current_image'];
                 }




            Product::where(['id'=>$id])->update(['product_name'=>$data['product_name'],'product_price'=>$data['product_price'],'product_description'=>$data['product_description'],'product_image'=>$filename,'product_discount'=>$data['product_discount'],'product_quantity'=>$data['product_quantity'],'product_category'=>$data['product_category']]);
            return redirect('/admin/product');
        }
        $pharmacy_cat = Pharmacycategory::get();
        $product=Product::where(['id'=>$id])->first();
        return view('superadmin.product.edit')->with(compact('product'))->with(compact('pharmacy_cat'));
    }

    public function deleteproduct($id=null)
    {
        Product::where(['id'=>$id])->delete();
        return redirect('/admin/product');
    }



    //pharmacy product

    public function pharmacyproduct(){
        $product = Product::get();
        $pharmacy_pro = Product::get();
        return view('pharmacydashboard.product.products')->with(compact('pharmacy_pro'))->with(compact('product'));
    }

    public function addpharmacyproduct(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $pharmacy_pro = new Product;

            
            $pharmacy_pro->product_name = $data['product_name'];
            $pharmacy_pro->product_category = $data['product_category'];
            $pharmacy_pro->product_price = $data['product_price'];
            $pharmacy_pro->product_quantity = $data['product_quantity'];
            $pharmacy_pro->product_discount = $data['product_discount'];
            $pharmacy_pro->product_description =$data['product_description'];
            if($request->hasfile('product_image'))
                {

                    $img_tmp = Input::file('product_image');

                    if($img_tmp->isValid())
                    {
                        $extension = $img_tmp->getClientOriginalExtension();
                        $filename =rand(111,9999).'.'.$extension;
                        $img_path='superadmin/uploads/product/'.$filename;
                   
                        Image::make($img_tmp)->save($img_path);
                        $pharmacy_pro->product_image = $filename;
                    }
                }
            $pharmacy_pro->save();
            return redirect('/pharmacy/product')->with('flash_message_success','Product Successfully Added.');
        }
        
        $pharmacy_cat = Pharmacycategory::get();
        return view('pharmacydashboard.product.add-product')->with(compact('pharmacy_cat'));
    }

    public function editpharmacyproduct(Request $request,$id=null)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            
            if($request->hasfile('product_image')){
  
                $img_tmp = Input::file('product_image');

                if($img_tmp->isValid())
                {
                $extension = $img_tmp->getClientOriginalExtension();
                $filename =rand(111,9999).'.'.$extension;
                   $img_path= 'superadmin/uploads/product/'.$filename;

                    Image::make($img_tmp)->save($img_path);
                
                    
                }
                }
                
                      else{
                        $filename= $data['current_image'];
                      }
               

                
            Product::where(['id'=>$id])->update(['product_name'=>$data['product_name'],'product_price'=>$data['product_price'],'product_description'=>$data['product_description'],'product_discount'=>$data['product_discount'],'product_image'=>$filename,'product_quantity'=>$data['product_quantity'],'product_category'=>$data['product_category']]);
            return redirect('/pharmacy/product');
        }
        
        $pharmacy_pro=Product::where(['id'=>$id])->first();
        $pharmacy_cat = Pharmacycategory::get();
  
        return view('pharmacydashboard.product.edit-product')->with(compact('pharmacy_pro'))->with(compact('pharmacy_cat'));
    }

    public function deletepharmacyproduct($id=null){
        Product::where(['id'=>$id])->delete();
        return redirect('/pharmacy/product')->with('flash_message_success','Product Deleted Successfully');
    }


    // public function expireproduct(){
    //     return view('pharmacydashboard.product.expired');
    // }

    public function outstock(){
        return view('pharmacydashboard.product.outstock');
    }

}
