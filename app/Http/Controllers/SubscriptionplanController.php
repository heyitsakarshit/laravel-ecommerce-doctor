<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriptionplan;
use App\Category;
class SubscriptionplanController extends Controller
{
    public function viewplan(){
        $plan = Subscriptionplan::get();
        
        return view('superadmin.subscriptionplan.view')->with(compact('plan'));
    }

    public function addplan(Request $request){
        $category =Category::get();
        if($request->isMethod('post'))
        {
            $data = $request->all();

            $plan = new Subscriptionplan;

            $plan->category = $data['category'];
            $plan->package = $data['package'];
            $plan->price = $data['price'];
            $plan->description = $data['description'];

            $plan->save();
            return redirect('/admin/subscription')->with('flash_message_success','Plan Added Successfully.');
        }
        return view('superadmin.subscriptionplan.add')->with(compact('category'));
    }

    public function deleteplan($id=null)
    {
        Subscriptionplan::where(['id'=>$id])->delete();
        return redirect('/admin/subscription')->with('flash_message_success','Deleted Successfully');
    }
}
