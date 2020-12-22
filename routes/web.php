<?php

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

/* ROUTES FOR VIEWS*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/homepage', function () {
    return view('home');
});
Route::get('/homepageapply', function () {
    return view('homepageapply');
});

Route::get('/homepagenotification', function () {
    return view('homepagenotification');
});
Route::get('/admissionnotices', function () {
    return view('admissionnotices');
});
Route::get('/admissionprocedure', function () {
    return view('admissionprocedure');
});

Route::get('/notice', function () {
    return view('admissionnotices');
});
Route::get('/applicantlogin', function () {
    return view('applicantlogin');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/hosts', function () {
    return view('hoststudents');
});

Route::get('/int', function () {
    return view('internationalstudents');
});

Route::get('/scholarship', function () {
    return view('scholarshipinfo');
});

Route::get('/admitcard', function () {
    return view('admitcard');
});


Route::get('/sschscinfo', function () {
    return view('sschscinfo');
});


Route::get('/preview', function () {
    return view('preview');
});
Route::get('/confirmation', function () {
    return view('confirmationpage');
});

Route::get('/applicantdashboard', function () {
    return view('applicantdashboard');
});
Route::get('/applicantpayment', function () {
    return view('applicantpayment');
});

Route::get('/payment', function () {
    return view('afterpayment');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});
Route::get('/admindashboard', function () {
    return view('admindashboard');
});



Route::get('/faq', function () {
    return view('faq');
});
Route::get('/offered', function () {
    return view('offeredprogrammes');
});

Route::get('/status', function () {
    return view('status');
});


//Route::get('/preview', 'ApplicantController@genpinpass');


Route::post('/insertsschscinfo', 'SscHscController@storeSscHscinfo');



Route::post('/checklogin','Applicantcontroller@checklogin');

Route::get('/admitcard','Admincontroller@check');
//Route::get('/logout','Applicantcontroller@logout');

//Route::get('/applicantdashboard', 'Applicantcontroller@dashpreview');

Route::post('/Genpin','Applicantcontroller@storePinPass');

//Route::get('/preview', 'ApplicantController@getData');

Route::get('/status', 'ApplicantController@statusview');

Route::get('/applicantdashboard', 'ApplicantController@profileview');

Route::post('/preview', 'SscHscController@show');


Route::get('/preview', 'SscHscController@index');

//Route::post('/paymentVerify', 'TransactionController@applicantPayment');

Route::post('/paymentVerify','TransactionController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

Route::post('user/profile', function () {
    // Validate the request...

    return back()->withInput();
});

//Route::get('/profile', 'ProfileController@index')->name('profile');
//Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');