<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show_about()
    {
       $about = About::find(1);

       return view('admin.about.show_about',compact('about'));

    }

    public function update_about(Request $request,$id)
    {
        $about = About::find($id);

        $about->title = $request->title;
        $about->text = $request->text;
        $about->video = $request->video;
        $about->video_sh = $request->video_sh;

        $about->save();

        return  redirect()->back()->with('message','About Updated');

    }
}
