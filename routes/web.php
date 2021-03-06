<?php

use App\Mail\Adminmail;
use Illuminate\Support\Facades\Route;

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

Route::get('testemail', function () {
    return new Adminmail ;
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\VisitorController::class, 'index'])->name('index');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ADMIN
Route::get('/nanoadmin', [App\Http\Controllers\adminController::class, 'adminindex'])->name('adminindex');
Route::get('/pages', [App\Http\Controllers\adminController::class, 'pages'])->name('pages');
Route::get('/users', [App\Http\Controllers\adminController::class, 'users'])->name('users');
Route::get('/pendingwithdrawals', [App\Http\Controllers\adminController::class, 'pendingwithdrawals'])->name('pendingwithdrawals');
Route::get('/approvedwithdrawals', [App\Http\Controllers\adminController::class, 'approvedwithdrawals'])->name('approvedwithdrawals');
Route::get('/approveddeposits', [App\Http\Controllers\adminController::class, 'approveddeposits'])->name('approveddeposits');
Route::get('/pendingdeposits', [App\Http\Controllers\adminController::class, 'pendingdeposits'])->name('pendingdeposits');
Route::get('/runninginvestments', [App\Http\Controllers\adminController::class, 'runninginvestments'])->name('runninginvestments');

// email and top earners routes

Route::get('/viewuser/{id}', [App\Http\Controllers\adminController::class, 'viewuser'])->name('viewuser');

Route::get('/emailmgt', [App\Http\Controllers\adminController::class, 'emailmgt'])->name('emailmgt');

Route::get('/news', [App\Http\Controllers\adminController::class, 'news'])->name('news');

Route::get('/topearners', [App\Http\Controllers\adminController::class, 'topearners'])->name('topearners');
Route::get('/sendemail', [App\Http\Controllers\adminController::class, 'sendbulkemail'])->name('sendbulkemail');


Route::get('/sendemail/{id}', [App\Http\Controllers\adminController::class, 'sendemail'])->name('sendemail');


Route::post('/sendmail', [App\Http\Controllers\adminController::class, 'sendmail'])->name('sendmail');



//referals
Route::get('/viewuserreferrals{id}', [App\Http\Controllers\adminController::class, 'viewuserreferrals'])->name('viewuserreferrals');

Route::get('/referrals', [App\Http\Controllers\adminController::class, 'referrals'])->name('referrals');
Route::get('/payreferral', [App\Http\Controllers\adminController::class, 'payreferral'])->name('payreferral');

Route::get('/delreferral', [App\Http\Controllers\adminController::class, 'delreferral'])->name('delreferral');



Route::get('/investmentplans', [App\Http\Controllers\adminController::class, 'investmentplans'])->name('investmentplans');



//routes to preven error
Route::get('/savecompanydetails', [App\Http\Controllers\adminController::class, 'pages'])->name('savecompanydetaills');
Route::get('/savecompanyabout', [App\Http\Controllers\adminController::class, 'pages'])->name('savecompanyabout');
Route::get('/savecompanyfaq', [App\Http\Controllers\adminController::class, 'pages'])->name('savecompanyfaq');

Route::get('/savenews', [App\Http\Controllers\adminController::class, 'pages'])->name('savenews');



//admin post request
Route::post('/savecompanydetails', [App\Http\Controllers\adminController::class, 'savecompanydetails'])->name('savecompanydetails');
Route::post('/savecompanyabout', [App\Http\Controllers\adminController::class, 'savecompanyabout'])->name('savecompanyabout');

//faqs delete and edit
// Route::get('/viewnews', [App\Http\Controllers\adminController::class, 'viewnews'])->name('viewnews');
Route::get('/viewfaqs', [App\Http\Controllers\adminController::class, 'viewfaqs'])->name('viewfaqs');
Route::post('/editfaqs', [App\Http\Controllers\adminController::class, 'editfaqs'])->name('editfaqs');
Route::get('/deletefaqs{id}', [App\Http\Controllers\adminController::class, 'deletefaqs'])->name('deletefaqs');
Route::post('/savecompanyfaq', [App\Http\Controllers\adminController::class, 'savecompanyfaq'])->name('savecompanyfaq');

Route::get('/admingetrdelete/{id}', [App\Http\Controllers\adminController::class, 'adminuserdelete'])->name('adminuserdelete');
Route::get('/admingetlock/{id}', [App\Http\Controllers\adminController::class, 'adminunblock'])->name('adminunblock');
Route::get('/admingetck/{id}', [App\Http\Controllers\adminController::class, 'adminblock'])->name('adminblock');


// admin edit user name etc

Route::post('/updateuser', [App\Http\Controllers\adminController::class, 'updateuser'])->name('updateuser');
Route::post('/depositupdate', [App\Http\Controllers\adminController::class, 'depositupdate'])->name('depositupdate');
Route::post('/deletedeposit/{id}', [App\Http\Controllers\adminController::class, 'deletedeposit'])->name('deletedeposit');
Route::post('/adddeposit', [App\Http\Controllers\adminController::class, 'adddeposit'])->name('adddeposit');
Route::post('/editwithdrawal', [App\Http\Controllers\adminController::class, 'editwithdrawal'])->name('editwithdrawal');
Route::post('/deletewithdrawal/{id}', [App\Http\Controllers\adminController::class, 'deletewithdrawal'])->name('deletewithdrawal');
Route::post('/addwithdrawal', [App\Http\Controllers\adminController::class, 'addwithdrawal'])->name('addwithdrawal');

Route::post('/editinvestment', [App\Http\Controllers\adminController::class, 'editinvestment'])->name('editinvestment');
Route::post('/deleteinvestment/{id}', [App\Http\Controllers\adminController::class, 'deleteinvestment'])->name('deleteinvestment');

Route::post('/deleteinvestmentplan/{id}', [App\Http\Controllers\adminController::class, 'deleteinvestmentplan'])->name('deleteinvestmentplan');
Route::post('/editinvestmentplan/{id}', [App\Http\Controllers\adminController::class, 'editinvestmentplan'])->name('editinvestmentplan');
Route::post('/createinvestmentplan', [App\Http\Controllers\adminController::class, 'createinvestmentplan'])->name('createinvestmentplan');


// newssection
Route::post('/savenews', [App\Http\Controllers\adminController::class, 'savenews'])->name('savenews');

// Route::post('/deletenews/{id}', [App\Http\Controllers\adminController::class, 'deletenews'])->name('deletenews');
Route::post('/editnews/{id}', [App\Http\Controllers\adminController::class, 'editnews'])->name('editnews');
