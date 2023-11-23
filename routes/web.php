<?php

use App\Models\listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\doctorsController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\sickLeavesController;
use App\Http\Controllers\appointmentsController;
use App\Http\Controllers\prescriptionController;
use App\Http\Controllers\medicalReportscontroller;

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
// all listings

//Show register/ create form for staff
Route::get('/register/staff', [staffController::class, 'create'])->middleware('guest');

//create new staff
Route::post('/staff', [staffController::class, 'store']);

//show login form
Route::get('/login/staff', [staffController::class, 'login'])->name('login')->middleware('guest');

//login
Route::post('/staff/authenticate', [staffController::class, 'authenticate']);

//logout
Route::post('/logout/staff', [staffController::class, 'logout']);

//homepage staff
Route::get('/homepage/staff', [staffController::class, 'index'])->middleware('auth:staff');

// show create form
Route::get('/sickleaves/create', [sickLeavesController::class, 'create']);

//Route::get('/search', [sickLeavesController::class, 'search']);
Route::get('/search', [staffController::class, 'search'])->name('search');


//store sick leave
Route::post('/sickleaves', [sickLeavesController::class, 'store']);

// show create form
Route::get('/medicalreports/create', [medicalReportscontroller::class, 'create']);

//store medical reports
Route::post('/medicalreports', [medicalReportscontroller::class, 'store']);



// show create form 
Route::get('/doctors/create', [doctorsController::class, 'create']);

//store doctors
Route::post('/doctors', [doctorsController::class, 'store']);

// show all doctors 
Route::get('/doctors/list', [doctorsController::class, 'show']);

//delete doctor
Route::delete('/doctors/{id}', [doctorsController::class, 'destroy'])->name('doctors.destroy');



//show create form
Route::get('/appointments/create', [appointmentsController::class, 'create']);

// store appointment
Route::post('/appointments', [appointmentsController::class, 'store']);

//show delete form
Route::get('/appointments/delete', [appointmentsController::class, 'delete']);

// store appointment delete
Route::post('/appointments/destroy', [appointmentsController::class, 'destroy']);

// show search form
Route::get('/appointments/search', [appointmentsController::class, 'searchform']);
//search
Route::get('/appointment/search', [appointmentsController::class, 'search']);

//show appointment info 
Route::get('/appointment{id}/info', [appointmentsController::class, 'showMe'])->name('appointments.show')->middleware('auth');

//show prescription create form
Route::get('/prescription/create', [prescriptionController::class, 'create']);

//store prescription
Route::post('/prescription', [prescriptionController::class, 'store']);

//show prescription info
Route::get('/prescription{id}/info', [prescriptionController::class, 'show'])->name('prescription.show')->middleware('auth');










Route::get('/', [ListingController::class, 'index']);

// show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// store listing form
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// show Edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//  update listing
Route::put('/listings/{listing}/', [ListingController::class, 'update'])->middleware('auth');

//  delete listing
Route::delete('/listings/{listing}/', [ListingController::class, 'destroy'])->middleware('auth');

//manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show register/ create form
Route::get('/register', [userController::class, 'create'])->middleware('guest');

//create new user
Route::post('/users', [userController::class, 'store']);

//logout
Route::post('/logout', [userController::class, 'logout'])->middleware('auth');

//show login form
Route::get('/login', [userController::class, 'login'])->name('login2')->middleware('guest');

//login
Route::post('/users/authenticate', [userController::class, 'authenticate']);































Route::get('/hello', function(){
    return view('welcome');
});
?>