<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\dashboarController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\PricingController; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//dashboard Start
Route::get('/mydashboard', [dashboarController::class, 'mydashboard'])->name('mydashboard')->middleware('auth');
Route::get('/form', [dashboarController::class, 'form']);
Route::get('/register', [dashboarController::class, 'register']);

// expertise
Route::get('/expertiselist', [ExpertiseController::class, 'index']);
Route::get('/addexpertise', [ExpertiseController::class, 'addexpertise']);
Route::post('/saveexpertise', [ExpertiseController::class, 'saveexpertise']);

//hero
Route::get('/herolist', [HeroController::class, 'index']);
Route::get('/addhero', [HeroController::class, 'addhero']);
Route::post('/savehero', [HeroController::class, 'savehero']);

//Education
Route::get('/educationlist', [EducationController::class, 'index']);
Route::get('/addeducation', [EducationController::class, 'addeducation']);
Route::post('/saveeducation', [EducationController::class, 'saveeducation']);
Route::get('/editeducation/{id}', [EducationController::class, 'editeducation']);
Route::post('/updateeducation', [EducationController::class, 'updateeducation']);



Route::get('/pricinglist', [PricingController::class, 'index']);
Route::get('/addpricing', [PricingController::class, 'addpricing']);
Route::post('/savepricing', [PricingController::class, 'savepricing'])->name('savepricing');
//auth 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('mydashboard');
