<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ClubController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\InteractiveController;
use App\Http\Controllers\Admin\KidController;
use App\Http\Controllers\Admin\LandingController;
use App\Http\Controllers\Admin\MusicalController;
use App\Http\Controllers\Admin\OccasionController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ShowController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\SpecialController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WeddingController;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::prefix('/admin')->middleware('auth')->group(function ()
{
    Route::get('/', [CmsController::class, 'dash']);

    // {{ User }}
    Route::get('/show_user', [UserController::class, 'show_user']);
    Route::get('/update_user/{id}', [UserController::class, 'update_user']);
    Route::post('/update_user_confirm/{id}', [UserController::class, 'update_user_confirm']);
    Route::get('/delete_user/{id}', [UserController::class, 'delete_user']);

    // {{ Social }}
    Route::get('/show_social',[SocialController::class,'show_social']);
    Route::post('/update_social_confirm/{id}',[SocialController::class,'update_social_confirm']);
    Route::get('/update_social/{id}',[SocialController::class,'update_social']);

    // {{ About }}
    Route::get('/show_about',[AboutController::class,'show_about']);
    Route::post('/update_about/{id}',[AboutController::class,'update_about']);

    //{{ Partner }}
    Route::get('/show_partner', [PartnerController::class, 'show_partner']);
    Route::post('/add_partner', [PartnerController::class, 'add_partner']);
    Route::get('/delete_partner/{id}', [PartnerController::class, 'delete_partner']);

    //{{ Testimonial }}
    Route::get('/show_testimonial',[TestimonialController::class,'show_testimonial']);
    Route::post('/add_testimonial',[TestimonialController::class,'add_testimonial']);
    Route::post('update_testimonial/{id}',[TestimonialController::class,'update_testimonial']);
    Route::get('/delete_testimonial/{id}', [TestimonialController::class, 'delete_testimonial']);

    // {{ Landing }}
    Route::get('/show_landing',[LandingController::class,'show_landing']);
    Route::get('/update_landing/{id}',[LandingController::class,'update_landing']);
    Route::post('/update_landing_confirm/{id}',[LandingController::class,'update_landing_confirm']);

    // {{ Counter }}
    Route::get('/show_counter',[CounterController::class,'show_counter']);
    Route::post('/update_counter/{id}',[CounterController::class,'update_counter']);

    // {{ Wedding }}
    Route::get('/show_wedding',[WeddingController::class,'show_wedding']);
    Route::post('/add_wedding',[WeddingController::class,'add_wedding']);
    Route::post('/update_wedding/{id}',[WeddingController::class,'update_wedding']);
    Route::get('/delete_wedding/{id}',[WeddingController::class,'delete_wedding']);

    // {{ Club }}
    Route::get('/show_club',[ClubController::class,'show_club']);
    Route::post('/add_club',[ClubController::class,'add_club']);
    Route::post('/update_club/{id}',[ClubController::class,'update_club']);
    Route::get('/delete_club/{id}',[ClubController::class,'delete_club']);

    // {{ Interactive }}
    Route::get('/show_interactive',[InteractiveController::class,'show_interactive']);
    Route::post('/add_interactive',[InteractiveController::class,'add_interactive']);
    Route::post('/update_interactive/{id}',[InteractiveController::class,'update_interactive']);
    Route::get('/delete_interactive/{id}',[InteractiveController::class,'delete_interactive']);

    // {{ Special }}
    Route::get('/show_special',[SpecialController::class,'show_special']);
    Route::post('/add_special',[SpecialController::class,'add_special']);
    Route::post('/update_special/{id}',[SpecialController::class,'update_special']);
    Route::get('/delete_special/{id}',[SpecialController::class,'delete_special']);

    // {{ Musical }}
    Route::get('/show_musical',[MusicalController::class,'show_musical']);
    Route::post('/add_musical',[musicalController::class,'add_musical']);
    Route::post('/update_musical/{id}',[musicalController::class,'update_musical']);
    Route::get('/delete_musical/{id}',[musicalController::class,'delete_musical']);

    // {{ Kid }}
    Route::get('/show_kid',[KidController::class,'show_kid']);
    Route::post('/add_kid',[kidController::class,'add_kid']);
    Route::post('/update_kid/{id}',[kidController::class,'update_kid']);
    Route::get('/delete_kid/{id}',[kidController::class,'delete_kid']);

    // {{ occasion }}
    Route::get('/show_occasion',[OccasionController::class,'show_occasion']);
    Route::post('/add_occasion',[occasionController::class,'add_occasion']);
    Route::post('/update_occasion/{id}',[occasionController::class,'update_occasion']);
    Route::get('/delete_occasion/{id}',[occasionController::class,'delete_occasion']);


    // {{ Show }}
    Route::post('/testimonial',[ShowController::class,'testimonial']);
    Route::post('/partner',[ShowController::class,'partner']);
    Route::post('/counter',[ShowController::class,'counter']);


});

Route::redirect('/', '/login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});






/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
*/

Route::get('/api/get-about',[ApiController::class,'getAbout']);
Route::get('/api/get-testimonial',[ApiController::class,'getTestimonial']);
Route::get('/api/get-landing',[ApiController::class,'getLanding']);
Route::get('/api/get-partner',[ApiController::class,'getPartner']);
Route::get('/api/get-counter',[ApiController::class,'getCounter']);
Route::get('/api/get-wedding',[ApiController::class,'getWedding']);
Route::get('/api/get-club',[ApiController::class,'getClub']);
Route::get('/api/get-interactive',[ApiController::class,'getInteractive']);
Route::get('/api/get-special',[ApiController::class,'getSpecial']);
Route::get('/api/get-muscial',[ApiController::class,'getMuscial']);
Route::get('/api/get-kid',[ApiController::class,'getKid']);
Route::get('/api/get-occasion',[ApiController::class,'getOccasion']);
Route::get('/api/get-show',[ApiController::class,'getShow']);
Route::get('/api/get-social',[ApiController::class,'getSocial']);

