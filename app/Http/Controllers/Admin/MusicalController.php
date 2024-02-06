<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Musical;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class MusicalController extends Controller
{
    public function show_musical()
    {
        $musical = Musical::latest()->paginate(10);

        return view('admin.musical.show_musical' , compact('musical'));
    }

    public function add_musical(Request $request)
    {
        $musical = new Musical;

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('musical', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('musical/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('musical/' . $imgname));

            $musical->img = $imgname;
        }

        $musical->type = $request->type;
        $musical->title = $request->title;
        $musical->text = $request->text;
        $musical->url = $request->url;

       $musical->save();

       return redirect()->back()->with('message' , 'Musical Added');

    }

    public function update_musical(Request $request , $id)
    {
        $musical = musical::find($id);

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('musical', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('musical/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('musical/' . $imgname));

            $musical->img = $imgname;
        }

        $musical->type = $request->type;
        $musical->title = $request->title;
        $musical->text = $request->text;
        $musical->url = $request->url;

       $musical->save();


       return redirect()->back()->with('message' , 'Musical Updated');

    }

    public function delete_musical($id)
    {
        $musical = musical::find($id);

        $musical->delete();

        return redirect()->back()->with('message' , 'Musical Deleted');

    }
}
