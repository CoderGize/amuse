<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Show;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PartnerController extends Controller
{
    public function show_partner()
    {
        $partner = Partner::latest()->paginate(10);
        $show = Show::find(1);

        return view('admin.partner.show_partner', compact('partner' , 'show'));
    }

    public function add_partner(Request $request)
    {
        $partner = new Partner;

        $logo = $request->logo;


        if($logo)
        {
            $logoname = Str::random(20) . '.' . $logo->getClientOriginalExtension();

            //Save the original image
            $request->logo->move('partner', $logoname);

            //change the image quality using Intervention Image
            $logo = Image::make(public_path('partner/' . $logoname));

            $logo->encode($logo->extension, 10)->save(public_path('partner/' . $logoname));

            $partner->logo = $logoname;
        }

        $partner->save();

        return redirect()->back()->with('message', 'Partner Added');
    }



    public function delete_partner($id)
    {
        $partner = Partner::find($id);

        $partner->delete();

        return redirect()->back()->with('message', 'Partner Deleted');
    }
}
