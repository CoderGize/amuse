<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use App\Models\Show;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function show_counter()
    {
        $counter = Counter::find(1);
        $show = Show::find(1);

        return view('admin.counter.show_counter' , compact('counter' , 'show'));
    }

    public function  update_counter(Request $request , $id)
    {
        $counter = Counter::find($id);

        $counter->nb1 = $request->nb1;
        $counter->nb2 = $request->nb2;
        $counter->nb3 = $request->nb3;
        $counter->text1 = $request->text1;
        $counter->text2 = $request->text2;
        $counter->text3 = $request->text3;

        $counter->save();

        return redirect()->back()->with('message' , 'Counter Updated');
    }
}
