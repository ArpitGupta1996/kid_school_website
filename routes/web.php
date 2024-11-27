<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about-us', [HomeController::class,'about'])->name('aboutus');
Route::get('classes', [HomeController::class,'class'])->name('classes');
Route::post('save-appointment', [HomeController::class,'saveappointemnt'])->name('saveappointemnt');


Route::get('school-faciltiy',[HomeController::class,'schoolfacility'])->name('schoolfacility');
Route::get('popular-teacher',[HomeController::class,'popularteacher'])->name('popularteacher');
Route::get('become-teacher',[HomeController::class,'becometeacher'])->name('becometeacher');
Route::get('appointment',[HomeController::class,'appointment'])->name('appointment');
Route::get('testimonial',[HomeController::class,'testimonial'])->name('testimonial');
Route::get('contact-us',[HomeController::class,'contact'])->name('contact-us');
Route::post('save-contact',[HomeController::class,'contactsave'])->name('contactsave');
