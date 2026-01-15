<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\FacilityController;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');

Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/services', [PageController::class, 'services'])->name('services');

Route::post('/careers', [CareerController::class, 'store'])->name('careers.store');;


// Customers (static pages)
Route::view('/customers', 'pages.customers.customers-1')->name('customers.page1');
Route::view('/customers/page-2', 'pages.customers.customers-2')->name('customers.page2');
Route::view('/customers/page-3', 'pages.customers.customers-3')->name('customers.page3');

Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/news', [PageController::class, 'news'])->name('news');

Route::get('/news/{slug}', [PageController::class, 'newsDetails'])
    ->name('news.details');




// Route::get('/coverage', function () {
//     return view('coverage'); // resources/views/contact.blade.php
// })->name('coverage');

// Route::get('/compliance', function () {
//     return view('compliance'); // resources/views/contact.blade.php
// })->name('compliance');

// Route::get('/careers', function () {
//     return view('careers'); // resources/views/contact.blade.php
// })->name('careers');



// Route::post('/save_trip', [TripController::class, 'save_trip'])->name('save_trip');
// Route::post('/send_contact', [ContactController::class, 'send'])->name('send_contact');


// Route::get('careers/apply', [CareerController::class, 'showForm'])->name('careers.apply');
// Route::post('careers/submit', [CareerController::class, 'submitApplication'])->name('careers.submit');


// routes/web.php
// Route::get('/latest-news', function () {
//     return view('blogs.latestNews');
// })->name('latestNews');

// Route::get('/nemt-vs-ambulance', function () {
//     return view('blogs.nemtVsAmbulance');
// })->name('nemtVsAmbulance');

// Route::get('/serving-community', function () {
//     return view('blogs.servingCommunity');
// })->name('servingCommunity');

// Route::get('/dispatch', function () {
//     return view('blogs.dispatch');
// })->name('dispatch');

// Route::get('/beyond-the-ride', function () {
//     return view('blogs.beyondTheRide');
// })->name('beyondTheRide');

// Route::get('/benefits-local-nemt-inland-empire', function () {
//     return view('blogs.localNEMTBenefits');
// })->name('localNEMTBenefits');

// Route::get('/wheelchair-transportation', function () {
//     return view('blogs.wheelchairTransport');
// })->name('wheelchairTransport');

// Route::get('/nemt-reduce-hospital-readmissions-southern-california', function () {
//     return view('blogs.nemtReadmission');
// })->name('nemtReadmission');

// Route::get('/senior-transportation-nemt-independent-living', function () {
//     return view('blogs.seniorTransportation');
// })->name('seniorTransportation');

// Route::get('/riverside-county-nemt', [CountyController::class, 'riverside'])->name('riversideNemt');
// Route::get('/san-bernardino-county-nemt', [CountyController::class, 'sanBernardino'])->name('sanBernardinoNemt');
// Route::get('/orange-county-nemt', [CountyController::class, 'orange'])->name('orangeNemt');
// Route::get('/los-angeles-county-nemt', [CountyController::class, 'losAngeles'])->name('losAngelesNemt');
