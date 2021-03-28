<?php

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

Route::get('/en/maintenance', function () {
    $progress = "27";
    return view('en.page.maintenance', ['progress' => $progress]);
})->name('maintenance');


Route::get('/id/maintenance', function () {
    $progress = "27";
    return view('id.page.maintenance', ['progress' => $progress]);
})->name('peningkatan');

Route::get('/', function () {
    return redirect()->route('maintenance');
    // return view('en.homepage');
});

/*
|--------------------------------------------------------------------------
| Route Halaman Homepage
|--------------------------------------------------------------------------
*/

Route::get('/en', function () {
    return view('en.homepage');
});

Route::get('/id', function () {
    return view('id.homepage');
});

/*
|--------------------------------------------------------------------------
| Route Halaman Career
|--------------------------------------------------------------------------
*/

Route::get('en/career/drafter', function () {
    return view('en.recruitment-drafter');
});

Route::get('en/career/junior-architect', function () {
    return view('en.recruitment-junior_arch');
});

Route::get('id/career/drafter', function () {
    return view('id.recruitment-drafter');
});

Route::get('id/career/junior-architect', function () {
    return view('id.recruitment-junior_arch');
});

/*
|--------------------------------------------------------------------------
| Route Halaman About
|--------------------------------------------------------------------------
*/

Route::get('en/about-us/our-philosophy-story', function () {
    return view('en.about-us');
});

Route::get('en/about-us/our-studio', function () {
    return view('en.our-studio');
});

Route::get('/en/privacy-policy', function () {
    return view('en.page.privacy-policy');
});

Route::get('/en/terms-condition', function () {
    return view('en.page.terms-condition');
});

Route::get('id/about-us/our-philosophy-story', function () {
    return view('id.about-us');
});

Route::get('id/about-us/our-studio', function () {
    return view('id.our-studio');
});

Route::get('/id/terms-condition', function () {
    return view('id.page.terms-condition');
});

Route::get('/id/privacy-policy', function () {
    return view('id.page.privacy-policy');
});

/*
|--------------------------------------------------------------------------
| Route Halaman Projects
|--------------------------------------------------------------------------
*/

Route::get('en/projects', function () {
    // return view('en.projects');
    return redirect()->route('maintenance');
});

Route::get('/projects/noaa-social-dining', function () {
    return view('en.projects.noaa_social_dining');
});

Route::get('id/projects', function () {
    // return view('en.projects');
    return redirect()->route('peningkatan');
});

/*
|--------------------------------------------------------------------------
| Route Halaman Services 
|--------------------------------------------------------------------------
*/

Route::get('en/services/our-service', function () {
    return view('en.our-service');
});

Route::get('en/services/work-together', function () {
    // return view('en.work-together');
    return redirect()->route('maintenance');
});

Route::get('id/services/our-service', function () {
    return view('id.our-service');
});

Route::get('id/services/work-together', function () {
    // return view('id.work-together');
    return redirect()->route('peningkatan');
});

/*
|--------------------------------------------------------------------------
| Route Halaman Lighting 101 
|--------------------------------------------------------------------------
*/

Route::get('en/lighting101', function () {
    // return view('en.lighting-101');
    return redirect()->route('maintenance');
});

Route::get('id/lighting101', function () {
    // return view('id.lighting-101');
    return redirect()->route('peningkatan');
});


Route::post('/en/subscribe', 'Contact@sendMail');
