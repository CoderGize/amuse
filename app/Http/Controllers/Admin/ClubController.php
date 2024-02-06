<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ClubController extends Controller
{
    public function show_club()
    {
        $club = Club::latest()->paginate(10);

        return view('admin.club.show_club' , compact('club'));
    }

    public function add_club(Request $request)
    {
        $club = new Club;

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('club', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('club/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('club/' . $imgname));

            $club->img = $imgname;
        }

        $club->type = $request->type;
        $club->title = $request->title;
        $club->text = $request->text;
        $club->url = $request->url;

       $club->save();

       return redirect()->back()->with('message' , 'Club Added');

    }

    public function update_club(Request $request , $id)
    {
        $club = Club::find($id);

        $img = $request->img;


        if($img)
        {
            $imgname = Str::random(20) . '.' . $img->getClientOriginalExtension();

            //Save the original image
            $request->img->move('club', $imgname);

            //change the image quality using Intervention Image
            $img = Image::make(public_path('club/' . $imgname));

            $img->encode($img->extension, 10)->save(public_path('club/' . $imgname));

            $club->img = $imgname;
        }

        $club->type = $request->type;
        $club->title = $request->title;
        $club->text = $request->text;
        $club->url = $request->url;

       $club->save();


       return redirect()->back()->with('message' , 'Club Updated');

    }

    public function delete_club($id)
    {
        $club = Club::find($id);

        $club->delete();

        return redirect()->back()->with('message' , 'Club Deleted');

    }
}
