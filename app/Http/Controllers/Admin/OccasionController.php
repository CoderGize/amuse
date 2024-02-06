<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Occasion;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class OccasionController extends Controller
{
    public function show_occasion()
    {
        $occasion = Occasion::latest()->paginate(10);

        return view('admin.occasion.show_occasion' , compact('occasion'));
    }

    public function add_occasion(Request $request)
    {
        $occasion = new occasion;

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('occasion', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('occasion/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('occasion/' . $imgname));

            $occasion->img = $imgname;
        }

        $occasion->type = $request->type;
        $occasion->title = $request->title;
        $occasion->text = $request->text;
        $occasion->url = $request->url;

       $occasion->save();

       return redirect()->back()->with('message' , 'Occasion Added');

    }

    public function update_occasion(Request $request , $id)
    {
        $occasion = occasion::find($id);

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('occasion', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('occasion/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('occasion/' . $imgname));

            $occasion->img = $imgname;
        }

        $occasion->type = $request->type;
        $occasion->title = $request->title;
        $occasion->text = $request->text;
        $occasion->url = $request->url;

       $occasion->save();


       return redirect()->back()->with('message' , 'Occasion Updated');

    }

    public function delete_occasion($id)
    {
        $occasion = occasion::find($id);

        $occasion->delete();

        return redirect()->back()->with('message' , 'Occasion Deleted');

    }
}
