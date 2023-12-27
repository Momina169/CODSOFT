<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DeppartmentController;
use App\Http\Controllers\DocterDataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// ======== Frontend Routes ===========
Route::get('/', function () {
    return view ('/index');
})->middleware(['auth', 'verified'])->name('index');


Route::get('/lab-attendend', function () {
    return view('lab-attendend');
})->middleware(['auth', 'verified']);


Route::view('/contact','contact')->middleware(['auth', 'verified'])->name('contact');
Route::view('/doctors','doctors')->middleware(['auth', 'verified'])->name('doctors');
Route::view('/firstlearnmore','firstlearnmore')->middleware(['auth', 'verified'])->name('firstlearnmore');
Route::view('/sweepers','sweepers')->middleware(['auth', 'verified'])->name('sweepers');
Route::view('/labs','labs')->middleware(['auth', 'verified'])->name('labs');
Route::view('/mission','mission')->middleware(['auth', 'verified'])->name('mission');
Route::view('/vision','vision')->middleware(['auth', 'verified'])->name('vision');
Route::view('/nurses','nurses')->middleware(['auth', 'verified'])->name('nurses');
Route::view('/opd','opd')->middleware(['auth', 'verified'])->name('opd');
Route::view('/surgries','surgries')->middleware(['auth', 'verified'])->name('surgries');
Route::view('/welcome','welcome')->middleware(['auth', 'verified'])->name('welcome');


Route::get('admindashboard', function () {
    return view('/admin.admindashboard');
})->middleware(['auth', 'verified', 'admin'])->name('admindashboard');


// ============ Login/ Register ============

Route::get('register', function () {
    return view('/register');
})->middleware(['auth', 'verified', 'admin'])->name('register');

Route::get('login', function () {
    return view('/auth.login');
})->middleware(['auth', 'verified', 'admin'])->name('login');



// ========= Appointment routes =============

Route::prefix('appoint')->group(function(){
    Route::get('/',[AppointmentController::class,'index'])->middleware(['auth', 'verified', 'admin'])->name('appoint.index');
    Route::get('/store',[AppointmentController::class,'store'])->middleware(['auth', 'verified', 'admin'])->name('appoint.store');
    Route::get('/edit/{id}',[AppointmentController::class,'edit'])->middleware(['auth', 'verified', 'admin'])->name('appoint.edit');
    Route::get('/deleteappoint/{id}',[AppointmentController::class,'deleteappoint'])->middleware(['auth', 'verified', 'admin'])->name('deleteappoint');
    Route::get('/detail/{id}',[AppointmentController::class,'detail'])->middleware(['auth', 'verified', 'admin'])->name('appoint.detail');
});
Route::get('/updateappoint',[AppointmentController::class,'appointupdate'])->middleware(['auth', 'verified', 'admin'])->name('appointupdate');
Route::get('/detail/{id}',[AppointmentController::class,'detail'])->middleware(['auth', 'verified', 'admin'])->name('appoint.detail');
  

Route::get('/appoint/create', [AppointmentController::class,'checkEmailValidity']);

//============ Staff Routes ===========
Route::prefix('staff')->group(function(){
    Route::get('/',[StaffController::class,'index'])->middleware(['auth', 'verified', 'admin'])->name('staff.index');
    Route::get('/create',[StaffController::class,'create'])->middleware(['auth', 'verified', 'admin'])->name('staff.create');
    Route::get('/store',[StaffController::class,'store'])->middleware(['auth', 'verified', 'admin'])->name('staff.store');
});

Route::get('/staffedit/{id}',[StaffController::class,'staffedit'])->middleware(['auth', 'verified', 'admin'])->name('staff.edit');
Route::get('/updatestaff',[StaffController::class,'updatestaff'])->middleware(['auth', 'verified', 'admin'])->name('updatestaff');
Route::get('/deletestaff/{id}',[StaffController::class,'deletestaff'])->middleware(['auth', 'verified', 'admin'])->name('deletestaff');
Route::get('/detail/{id}',[StaffController::class,'detail'])->middleware(['auth', 'verified', 'admin'])->name('staff.detail');
Route::get('/appoint/create',[DeppartmentController::class,'getDeppartmentBreakdown'])->middleware(['auth', 'verified'])->name('appoint.create');

// ========= Departments ============
Route::get('/departments', [DeppartmentController::class, 'index']);
Route::get('/departments_id/{id}', [DeppartmentController::class, 'showDepartments'])->middleware(['auth', 'verified', 'admin'])->name('showDepartments');


// ============ CHECKOUT ===========
Route::get('/session', [AppointmentController::class, 'session'])->middleware(['auth', 'verified', 'admin'])->name('session');
Route::get('/success/{id}', [AppointmentController::class, 'success'])->middleware(['auth', 'verified', 'admin'])->name('checkout.success');
Route::get('/cancel', [AppointmentController::class, 'cancel'])->middleware(['auth', 'verified', 'admin'])->name('checkout.cancel');

    
// =========== Doctors ============
Route::get('/doctors', [DocterDataController::class, 'index'])->middleware(['auth', 'verified', 'admin'])->name('doctorcrud');
Route::get('/storedoctor', [DocterDataController::class, 'store'])->middleware(['auth', 'verified', 'admin'])->name('storedoctor');
Route::get('/DetailsCrud/{id}', [DocterDataController::class, 'details'])->middleware(['auth', 'verified', 'admin'])->name('details');
Route::get('/DeleteDoctor/{id}', [DocterDataController::class, 'destroy'])->middleware(['auth', 'verified', 'admin'])->name('DeleteDoctor');
Route::get('/findDoctor', [DocterDataController::class, 'finddoctor'])->middleware(['auth', 'verified'])->name('finddoctor');
Route::get('/doctor/{id}', [DocterDataController::class, 'show'])->middleware(['auth', 'verified', 'admin'])->name('showdoctor');
Route::get('/doctors/{department}', [DocterDataController::class, 'filterByCategory']);
Route::get('/get-doctor-breakdown',[AppointmentController::class,'getDoctorBreakdown']);


// ========== Admin Panel ==========
    Route::get('/dashboard', [HomeController::class, 'index'])
                    ->middleware(['auth', 'verified','admin'])->name('dashboard');

// ========== Users =============
Route::get('/users',[UserController::class,'index'])->middleware(['auth', 'verified', 'admin'])->name('users');
Route::get('/store',[UserController::class,'store'])->middleware(['auth', 'verified', 'admin'])->name('storeuser');
Route::get('/update',[UserController::class,'update'])->middleware(['auth', 'verified', 'admin'])->name('update');
Route::get('/edit/{id}',[UserController::class,'edit'])->middleware(['auth', 'verified', 'admin'])->name('edit');
Route::get('/delete/{id}',[UserController::class,'destroy'])->middleware(['auth', 'verified', 'admin'])->name('deleteuser');


// ======= User Authentication ==========
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['auth', 'verified', 'admin'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['auth', 'verified', 'admin'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(['auth', 'verified', 'admin'])->name('profile.destroy');
});

require __DIR__.'/auth.php';