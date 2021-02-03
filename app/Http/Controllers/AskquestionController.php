<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Askquestion;
class AskquestionController extends Controller
{
    public function viewlist(){
        $ask=Askquestion::get();
        return view('superadmin.askquestion.ask-question')->with(compact('ask'));
    }

    public function deleteque($id=null){
        Askquestion::where(['id'=>$id])->delete();
        return redirect('/admin/askquestion')->with('flash_message_success','Deleted Successfully');
    }

}
