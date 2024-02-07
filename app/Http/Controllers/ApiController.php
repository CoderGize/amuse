<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use App\Models\Club;
use App\Models\About;
use App\Models\Counter;
use App\Models\Landing;
use App\Models\Musical;
use App\Models\Partner;
use App\Models\Special;
use App\Models\Wedding;
use App\Models\Occasion;
use App\Models\Interactive;
use App\Models\Show;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAbout()
    {
        $about = About::find(1);

        return response()->json($about);
    }

    public function getTestimonial()
    {
       $testimonial = Testimonial::all();

       return response()->json($testimonial);

    }

    public function getLanding()
    {
        $landing = Landing::all();

        return response()->json($landing);

    }

    public function getPartner()
    {
        $partner = Partner::all();

        return response()->json($partner);

    }

    public function getCounter()
    {
        $counter = Counter::find(1);

        return response()->json($counter);

    }

    public function getWedding()
    {
        $wedding = Wedding::all();

        return response()->json($wedding);

    }

    public function getClub()
    {
        $club = Club::all();

        return response()->json($club);

    }

    public function getInteractive()
    {
        $interactive = Interactive::all();

        return response()->json($interactive);

    }

    public function getSpecial()
    {
        $special = Special::all();

        return response()->json($special);

    }

    public function getMusical()
    {
        $musical = Musical::all();

        return response()->json($musical);

    }

    public function getKid()
    {
        $kid = Kid::all();

        return response()->json($kid);

    }

    public function getOccasion()
    {
        $occasion = Occasion::all();

        return response()->json($occasion);

    }

    public function getShow()
    {
        $show = Show::find(1);

        return response()->json($show);

    }
}
