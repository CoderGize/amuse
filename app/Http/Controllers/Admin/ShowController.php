<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Show;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function testimonial(Request $request)
    {
       $showall = Show::find(1);

       $showall->testimonial_sh = $request->datash;

    //    return $request->datash;

       $showall->save();

       if($request->datash == 1)
       {
        return redirect()->back()->with('message' , 'Testimonial Section Visible');
       }else
       {
      return redirect()->back()->with('message' , 'Testimonial Section Hidden');
      }
    }

    public function partner(Request $request)
    {
       $showall = Show::find(1);

       $showall->partner_sh = $request->datash;

    //    return $request->datash;

       $showall->save();

       if($request->datash == 1)
       {
        return redirect()->back()->with('message' , 'Partner Section Visible');
       }else
       {
      return redirect()->back()->with('message' , 'Partner Section Hidden');
      }
    }

    public function counter(Request $request)
    {
       $showall = Show::find(1);

       $showall->counter_sh = $request->datash;

    //    return $request->datash;

       $showall->save();

       if($request->datash == 1)
       {
        return redirect()->back()->with('message' , 'Counter Section Visible');
       }else
       {
      return redirect()->back()->with('message' , 'Counter Section Hidden');
      }
    }
}
