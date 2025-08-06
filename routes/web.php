<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvisoryController;
use App\Http\Controllers\LandingController;

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

Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::prefix('about-the-morgans')->group(function(){
    Route::get('/', [LandingController::class, 'about'])->name('landing.about');
    Route::get('/our-business-approach', [LandingController::class, 'ourBusinessApproach'])->name('landing.ourBusinessApproach');
    Route::get('/strength-and-values', [LandingController::class, 'strengthAndValues'])->name('landing.strength');
    Route::get('/mission-statement', [LandingController::class, 'missionStatement'])->name('landing.missionStatement');
    Route::get('/leadership', [LandingController::class, 'leadership'])->name('landing.leadership');
});

Route::prefix('subsidiaries')->group(function(){
    Route::get('/', [LandingController::class, 'subsidiaries'])->name('landing.subsidiaries');
    Route::get('/procurements', [LandingController::class, 'procurements'])->name('landing.procurements');
    Route::get('/real-estate', [LandingController::class, 'realEstate'])->name('landing.realEstate');
    Route::get('/it-solution', [LandingController::class, 'itSolution'])->name('landing.itSolution');
    Route::get('/prints-solution', [LandingController::class, 'printSolution'])->name('landing.printSolution');
    Route::get('/it-solution/cyber-security', [LandingController::class, 'cyberSecurity'])->name('itSolution.cyber');
    Route::get('/it-solution/media-solutions', [LandingController::class, 'mediaSolutions'])->name('itSolution.media');
    Route::get('/background-checks', [LandingController::class, 'backgroundChecks'])->name('landing.backgroundChecks');
    Route::get('/recruitments', [LandingController::class, 'recruitments'])->name('landing.recruitments');
    Route::get('/tmc-institute', [LandingController::class, 'tmcInstitute'])->name('landing.tmcInstitute');
    Route::get('/facility-management', [LandingController::class, 'facilityManagement'])->name('landing.facilityManagement');
    Route::get('/advisory', [LandingController::class, 'advisory'])->name('landing.advisory');
    Route::get('/grc-fincrime-prevention-awards', [LandingController::class, 'grcFinCrimeAwards'])->name('landing.grcFinCrimeAwards');
    Route::get('/women-in-grc', [LandingController::class, 'womenInGrc'])->name('landing.womeningrc');
});

Route::get('advisory/governing-council',[LandingController::class, 'advisoryCouncil'])->name('landing.advisoryCouncil'); 
Route::get('careers',[LandingController::class, 'careers'])->name('landing.careers'); 
Route::get('contact-us', [LandingController::class, 'contactUs'])->name('landing.contactUs');
Route::post('contact-us/create', [LandingController::class, 'contactusCreate'])->name('contactusCreate');
Route::get('privacy-policy', [LandingController::class, 'privacyPolicy'])->name('landing.privacyPolicy');
Route::get('complaint-policy', [LandingController::class, 'complaintPolicy'])->name('landing.complaintPolicy');
Route::get('environment-social-governance-policy', [LandingController::class, 'esgPolicy'])->name('landing.esgPolicy');
Route::post('newsletter-signup', [LandingController::class, 'newsletterSignup'])->name('newsletterSignup');



// Route::get('all-news', [LandingController::class, 'contactUs']);

Route::prefix('admin')->group(function(){
    Route::get('/advisory/index',[AdvisoryController::class, 'index'])->name('admin.advisory.index');
    Route::get('/advisory/create',[AdvisoryController::class, 'create'])->name('admin.advisory.create');
    Route::post('/advisory/store',[AdvisoryController::class, 'store'])->name('admin.advisory.store');
    Route::get('/advisory/edit/{id}',[AdvisoryController::class, 'edit'])->name('admin.advisory.edit');
    Route::put('/advisory/update/{id}',[AdvisoryController::class, 'update'])->name('admin.advisory.update');
    Route::delete('/advisory/destroy/{id}',[AdvisoryController::class, 'destroy'])->name('admin.advisory.destroy');
});

