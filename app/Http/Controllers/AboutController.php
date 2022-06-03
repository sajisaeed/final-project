<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\about;

class AboutController extends Controller
{
    public function store(Request $request){
        $about=new about();
        $about->about=$request->about;
        $about->save();
        return redirect()->back();
    }
    public function showeditabout(){
        return view('admin.editabout');
    }

}
