<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Interactive;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class InteractiveController extends Controller
{
    public function show_interactive()
    {
        $interactive = Interactive::latest()->paginate(10);

        return view('admin.interactive.show_interactive' , compact('interactive'));
    }

    public function add_interactive(Request $request)
    {
        $interactive = new Interactive;

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('interactive', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('interactive/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('interactive/' . $imgname));

            $interactive->img = $imgname;
        }

        $interactive->type = $request->type;
        $interactive->title = $request->title;
        $interactive->text = $request->text;
        $interactive->url = $request->url;

       $interactive->save();

       return redirect()->back()->with('message' , 'interactive Added');

    }

    public function update_interactive(Request $request , $id)
    {
        $interactive = Interactive::find($id);

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('interactive', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('interactive/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('interactive/' . $imgname));

            $interactive->img = $imgname;
        }

        $interactive->type = $request->type;
        $interactive->title = $request->title;
        $interactive->text = $request->text;
        $interactive->url = $request->url;

       $interactive->save();


       return redirect()->back()->with('message' , 'Interactive Updated');

    }

    public function delete_interactive($id)
    {
        $interactive = interactive::find($id);

        $interactive->delete();

        return redirect()->back()->with('message' , 'Interactive Deleted');

    }
}
