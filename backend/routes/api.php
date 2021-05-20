<?php
use\App\Http\Controllers\TestimonialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//testimonials
Route::get('/testimonials',[TestimonialController::class,'index']);
Route::post('/testimonials',[TestimonialController::class,'store']);
Route::get('/testimonials/{id}',[TestimonialController::class,'show']);
//Route::put('/testimonials/{id}',[TestimonialController::class,'update']);
Route::delete('/testimonials/{id}',[TestimonialController::class,'destory']);