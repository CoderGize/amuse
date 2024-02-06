<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ClubController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\LandingController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WeddingController;
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
