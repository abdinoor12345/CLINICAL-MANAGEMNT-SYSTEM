<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Livewire\TaskList;
use App\Livewire\ContactForm;
use App\Livewire\AppointmentManager;



 //use\app\Livewire\Appointments;

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
Route::get('/makeappointments', function () {
  return view('user.make-appointment');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::resource('task', TaskController::class);
 Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::get('/add_doctors',[AdminController::class,'doctor']);
Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);
  Route::get('/canceled/{id}',[AdminController::class,'canceled']);
  Route::get('/showdoctor',[AdminController::class,'showdoctor']);

  Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

  Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);
  Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);
  Route::get('/emailview/{id}',[AdminController::class,'emailview']);
  Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);
  Route::get('/updatedrug/{id}',[AdminController::class,'updatedrug']);
  Route::post('/editdrug/{id}',[AdminController::class,'editdrug']);
 
Route::get('/home',[HomeController::class,'redirect']);
   //Route::get('/tasks', TaskList::class);
  Route::middleware(['auth'])->group(function () {
    Route::get('/tasks', TaskList::class);
    Route::get('/contact',ContactForm::class);
    Route::get('/show_cart/{id}',[HomeController::class,'show_cart']);

    Route::get('/stock',[AdminController::class,'stock']);

});
 
Route::get('/medicine',[AdminController::class,'medicine']);
Route::post('/upload_medics',[AdminController::class,'upload_medics']);
Route::get('/order',[AdminController::class,'order']);
Route::get('/deliverd/{id}',[AdminController::class,'delivered']);
Route::get('/print_pdf/{id}',[AdminController::class,'print_pdf']);
Route::get('/search1',[AdminController::class,'searchdata']);
Route::get('/docs_details/{id}',[AdminController::class,'doc_details']);

Route::get('/showdrug',[AdminController::class,'showdrug']);

Route::get('/drug_details/{id}',[HomeController::class,'drug_details']);
Route::post('/add_cart/{id}',[HomeController::class,'add_cart']);
//Route::get('/show_cart/{id}',[HomeController::class,'show_cart']);
Route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);
Route::get('/cash_order',[HomeController::class,'cash_order']);
Route::get('/stripe/{totalprice}', [HomeController::class, 'stripe']);
Route::post('/stripe/{totalprice}', [HomeController::class, 'stripePost'])->name('stripe.post');

Route::get('/show_order',[HomeController::class,'show_order']);

Route::get('/cancel_order/{id}',[HomeController::class,'cancel_order']);

//Route::get('/my_appointment',[HomeController::class,'my_appointment']);

Route::post('/appointment',[HomeController::class,'appointment']);
 Route::get('/myappointment',[HomeController::class,'myappointment']);
 Route::post('/cancel-appointment/{id}', [HomeController::class, 'cancel_appoint'])->name('cancel.appointment');
   Route::get('/approved/{id}',[AdminController::class,'approved']);
  Route::get('/canceled/{id}',[AdminController::class,'canceled']);
  Route::get('/show_appointments',[HomeController::class,'show_appointments']);

Route::get('/search', [AdminController::class, 'search'])->name('search');
Route::get('/live-search', [HomeController::class, 'ajax']);
Route::get('/live-search/search', [HomeController::class, 'search'])->name('live-search.search');
Route::get('/contact1', [HomeController::class, 'contact']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/service', [HomeController::class, 'services']);


