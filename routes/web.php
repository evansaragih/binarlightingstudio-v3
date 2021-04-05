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
    return view('en.projects');
    // return redirect()->route('maintenance');
});

Route::get('en/projects/noaa-social-dining', function () {
    return view('en.projects.noaa_social_dining');
});

Route::get('en/projects/adiwana-jeevalokha', function () {
    return view('en.projects.adiwana_jeevalokha');
});

Route::get('en/projects/harris-hotel-tebet', function () {
    return view('en.projects.harris_hotel_tebet');
});

Route::get('en/projects/villa-sentul', function () {
    return view('en.projects.villa_sentul');
});

Route::get('en/projects/mixed-used-area-lampung', function () {
    return view('en.projects.mixed_used_area_lampung');
});

Route::get('en/projects/the-waterfall-ulaman-retreat', function () {
    return view('en.projects.the_waterfall_ulaman_retreat');
});

Route::get('en/projects/harris-hotel-batam', function () {
    return view('en.projects.harris_hotel_batam');
});

Route::get('en/projects/villa-ali-agung', function () {
    return view('en.projects.villa_ali_agung');
});

Route::get('en/projects/villa-beraban', function () {
    return view('en.projects.villa_beraban');
});

Route::get('en/projects/karma-residence', function () {
    return view('en.projects.karma_residence');
});

Route::get('en/projects/harris-hotel-tuban', function () {
    return view('en.projects.harris_hotel_tuban');
});

Route::get('en/projects/ocean-palm', function () {
    return view('en.projects.ocean_palm');
});

Route::get('en/projects/tunon-residence', function () {
    return view('en.projects.tunon_residence');
});

Route::get('en/projects/kappa-ubud', function () {
    return view('en.projects.kappa_ubud');
});

Route::get('en/projects/pramana-bali-aga', function () {
    return view('en.projects.pramana_bali_aga');
});

Route::get('en/projects/the-suku', function () {
    return view('en.projects.the_suku');
});

Route::get('en/projects/adiwana-jelita', function () {
    return view('en.projects.adiwana_jelita');
});

Route::get('en/projects/pizza-stack', function () {
    return view('en.projects.pizza_stack');
});

Route::get('en/projects/byrdhouse', function () {
    return view('en.projects.byrdhouse');
});

Route::get('en/projects/diageo-office', function () {
    return view('en.projects.diageo_office');
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
    return view('en.work-together');
    // return redirect()->route('maintenance');
});

Route::get('id/services/our-service', function () {
    return view('id.our-service');
});

Route::get('id/services/work-together', function () {
    return view('id.work-together');
    // return redirect()->route('peningkatan');
});

/*
|--------------------------------------------------------------------------
| Route Halaman Lighting 101 
|--------------------------------------------------------------------------
*/

Route::get('en/lighting101', function () {
    return view('en.lighting-101');
    // return redirect()->route('maintenance');
});

Route::get('en/blog', function () {
    return view('en.blog1');
});

Route::get('id/lighting101', function () {
    // return view('id.lighting-101');
    return redirect()->route('peningkatan');
});


Route::post('/en/subscribe', 'Contact@sendMail');

Route::post('/en/services/work-together', 'WorkTogetherEN@sendMail');
Route::post('/id/services/work-together', 'WorkTogetherID@sendMail');
