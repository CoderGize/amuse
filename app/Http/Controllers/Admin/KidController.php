<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kid;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class KidController extends Controller
{
    public function show_kid()
    {
        $kid = Kid::latest()->paginate(10);

        return view('admin.kid.show_kid' , compact('kid'));
    }

    public function add_kid(Request $request)
    {
        $kid = new kid;

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('kid', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('kid/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('kid/' . $imgname));

            $kid->img = $imgname;
        }

        $kid->type = $request->type;
        $kid->title = $request->title;
        $kid->text = $request->text;
        $kid->url = $request->url;

       $kid->save();

       return redirect()->back()->with('message' , 'kid Added');

    }

    public function update_kid(Request $request , $id)
    {
        $kid = kid::find($id);

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('kid', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('kid/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('kid/' . $imgname));

            $kid->img = $imgname;
        }

        $kid->type = $request->type;
        $kid->title = $request->title;
        $kid->text = $request->text;
        $kid->url = $request->url;

       $kid->save();


       return redirect()->back()->with('message' , 'kid Updated');

    }

    public function delete_kid($id)
    {
        $kid = kid::find($id);

        $kid->delete();

        return redirect()->back()->with('message' , 'kid Deleted');

    }
}
