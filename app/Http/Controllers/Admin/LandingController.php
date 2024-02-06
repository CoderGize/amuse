<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Landing;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function show_landing()
    {
        $landing = Landing::find(1);

        return view('admin.landing.show_landing' , compact('landing'));
    }

    public function update_landing($id)
    {
        $landing = Landing::find($id);

        return view('admin.landing.update_landing',compact('landing'));
    }

    public function update_landing_confirm(Request $request , $id)
    {
        $landing = Landing::find($id);

        if ($request->hasFile('wedding_video')) {
            // Get the uploaded file
            $video = $request->file('wedding_video');

            // Generate a unique filename for the video
            $videoFileName = uniqid() . '.' . $video->getClientOriginalExtension();

            // Save the video to the public/landing folder
            $video->move(public_path('landing'), $videoFileName);

            $landing->wedding_video = $videoFileName;
        }
        $landing->wedding_title = $request->wedding_title;
        $landing->wedding_text = $request->wedding_text;

        if ($request->hasFile('club_video')) {
            // Get the uploaded file
            $video = $request->file('club_video');

            // Generate a unique filename for the video
            $videoFileName = uniqid() . '.' . $video->getClientOriginalExtension();

            // Save the video to the public/landing folder
            $video->move(public_path('landing'), $videoFileName);

            $landing->club_video = $videoFileName;
        }
        $landing->club_title = $request->club_title;
        $landing->club_text = $request->club_text;


        if ($request->hasFile('interactive_video')) {
            // Get the uploaded file
            $video = $request->file('interactive_video');

            // Generate a unique filename for the video
            $videoFileName = uniqid() . '.' . $video->getClientOriginalExtension();

            // Save the video to the public/landing folder
            $video->move(public_path('landing'), $videoFileName);

            $landing->interactive_video = $videoFileName;
        }
        $landing->interactive_title = $request->interactive_title;
        $landing->interactive_text = $request->interactive_text;


        if ($request->hasFile('special_video')) {
            // Get the uploaded file
            $video = $request->file('special_video');

            // Generate a unique filename for the video
            $videoFileName = uniqid() . '.' . $video->getClientOriginalExtension();

            // Save the video to the public/landing folder
            $video->move(public_path('landing'), $videoFileName);

            $landing->special_video = $videoFileName;
        }
        $landing->special_title = $request->special_title;
        $landing->special_text = $request->special_text;


        if ($request->hasFile('musical_video')) {
            // Get the uploaded file
            $video = $request->file('musical_video');

            // Generate a unique filename for the video
            $videoFileName = uniqid() . '.' . $video->getClientOriginalExtension();

            // Save the video to the public/landing folder
            $video->move(public_path('landing'), $videoFileName);

            $landing->musical_video = $videoFileName;
        }
        $landing->musical_title = $request->musical_title;
        $landing->musical_text = $request->musical_text;


        if ($request->hasFile('kid_video')) {
            // Get the uploaded file
            $video = $request->file('kid_video');

            // Generate a unique filename for the video
            $videoFileName = uniqid() . '.' . $video->getClientOriginalExtension();

            // Save the video to the public/landing folder
            $video->move(public_path('landing'), $videoFileName);

            $landing->kid_video = $videoFileName;
        }
        $landing->kid_title = $request->kid_title;
        $landing->kid_text = $request->kid_text;

        if ($request->hasFile('occasion_video')) {
            // Get the uploaded file
            $video = $request->file('occasion_video');

            // Generate a unique filename for the video
            $videoFileName = uniqid() . '.' . $video->getClientOriginalExtension();

            // Save the video to the public/landing folder
            $video->move(public_path('landing'), $videoFileName);

            $landing->occasion_video = $videoFileName;
        }
        $landing->occasion_title = $request->occasion_title;
        $landing->occasion_text = $request->occasion_text;

        $landing->save();

        return redirect('admin/show_landing')->with('message','Landing Updated');
    }



}
