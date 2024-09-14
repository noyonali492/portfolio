<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\dashboarController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\fontendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [fontendController::class, 'index'])->name('home');


//dashboard Start
Route::get('/mydashboard', [dashboarController::class, 'mydashboard'])->name('mydashboard')->middleware('auth');
Route::get('/form', [dashboarController::class, 'form']);
Route::get('/register', [dashboarController::class, 'register']);

// expertise
Route::get('/expertiselist', [ExpertiseController::class, 'index']);
Route::get('/addexpertise', [ExpertiseController::class, 'addexpertise']);
Route::post('/saveexpertise', [ExpertiseController::class, 'saveexpertise']);
Route::get('/editexpertise/{edit_id}', [ExpertiseController::class, 'editexpertise']);
Route::post('/updateexpertise', [ExpertiseController::class, 'updateexpertise']);
Route::get('/deleteexpertise/{edit_id}', [ExpertiseController::class, 'deleteexpertise']);
//hero
Route::get('/herolist', [HeroController::class, 'index']);
Route::get('/addhero', [HeroController::class, 'addhero']);
Route::post('/savehero', [HeroController::class, 'savehero']);
Route::get('/edit-hero/{edit_id}',[HeroController::class, 'editHero']);
Route::post('/update-hero', [HeroController::class, 'updateHero']);
Route::post('/delete-hero',[HeroController::class, 'deleteHero'])->name('delete.hero');

//Education
Route::get('/educationlist', [EducationController::class, 'index']);
Route::get('/addeducation', [EducationController::class, 'addeducation']);
Route::post('/saveeducation', [EducationController::class, 'saveeducation']);
Route::get('/editeducation/{id}', [EducationController::class, 'editeducation']);
Route::post('/updateeducation', [EducationController::class, 'updateeducation']);


// Package
Route::get('/package', [PackageController::class, 'index'])->name('package');
Route::get('/package/create', [PackageController::class, 'create'])->name('package.create');
Route::post('/package', [PackageController::class, 'store'])->name('package.store');
Route::get('/package/{id}/edit', [PackageController::class, 'edit'])->name('package.edit');
Route::put('/package/{id}', [PackageController::class, 'update'])->name('package.update');
Route::delete('/package/{id}', [PackageController::class, 'destroy'])->name('package.destroy');

// Service
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('/service', [ServiceController::class, 'store'])->name('service.store');
Route::get('/service/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
Route::put('/service/{id}', [ServiceController::class, 'update'])->name('service.update');
Route::delete('/service/{id}', [ServiceController::class, 'show'])->name('service.destroy');

//auth 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('mydashboard');
