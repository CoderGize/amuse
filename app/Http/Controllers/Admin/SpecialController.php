<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Special;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SpecialController extends Controller
{
    public function show_special()
    {
        $special = Special::latest()->paginate(10);

        return view('admin.special.show_special' , compact('special'));
    }

    public function add_special(Request $request)
    {
        $special = new Special;

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('special', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('special/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('special/' . $imgname));

            $special->img = $imgname;
        }

        $special->type = $request->type;
        $special->title = $request->title;
        $special->text = $request->text;
        $special->url = $request->url;

       $special->save();

       return redirect()->back()->with('message' , 'Special Added');

    }

    public function update_special(Request $request , $id)
    {
        $special = Special::find($id);

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('special', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('special/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('special/' . $imgname));

            $special->img = $imgname;
        }

        $special->type = $request->type;
        $special->title = $request->title;
        $special->text = $request->text;
        $special->url = $request->url;

       $special->save();


       return redirect()->back()->with('message' , 'Special Updated');

    }

    public function delete_special($id)
    {
        $special = Special::find($id);

        $special->delete();

        return redirect()->back()->with('message' , 'Special Deleted');

    }
}
