<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wedding;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class WeddingController extends Controller
{
    public function show_wedding()
    {
        $wedding = Wedding::latest()->paginate(10);

        return view('admin.wedding.show_wedding' , compact('wedding'));
    }

    public function add_wedding(Request $request)
    {
        $wedding = new wedding;

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('wedding', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('wedding/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('wedding/' . $imgname));

            $wedding->img = $imgname;
        }

        $wedding->type = $request->type;
        $wedding->title = $request->title;
        $wedding->text = $request->text;
        $wedding->url = $request->url;

       $wedding->save();

       return redirect()->back()->with('message' , 'Wedding Added');

    }

    public function update_wedding(Request $request , $id)
    {
        $wedding = Wedding::find($id);

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('wedding', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('wedding/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('wedding/' . $imgname));

            $wedding->img = $imgname;
        }

        $wedding->type = $request->type;
        $wedding->title = $request->title;
        $wedding->text = $request->text;
        $wedding->url = $request->url;

       $wedding->save();


       return redirect()->back()->with('message' , 'Wedding Updated');

    }

    public function delete_wedding($id)
    {
        $wedding = Wedding::find($id);

        $wedding->delete();

        return redirect()->back()->with('message' , 'Wedding Deleted');

    }
}
