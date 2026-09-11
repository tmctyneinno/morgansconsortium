<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'show'])
    ->defaults('page', 'home')
    ->name('home');

Route::get('/about', [PageController::class, 'show'])
    ->defaults('page', 'about')
    ->name('about');

Route::get('/group', [PageController::class, 'show'])
    ->defaults('page', 'group')
    ->name('group');

Route::get('/institutions', [PageController::class, 'show'])
    ->defaults('page', 'institutions')
    ->name('institutions');

Route::get('/careers', [PageController::class, 'show'])
    ->defaults('page', 'careers')
    ->name('careers');

Route::get('/connect', [PageController::class, 'show'])
    ->defaults('page', 'connect')
    ->name('connect');

Route::get('/advisory-assurance', [PageController::class, 'show'])
    ->defaults('page', 'advisory-assurance')
    ->name('advisory-assurance');

Route::get('/risk-assurance-intelligence', [PageController::class, 'show'])
    ->defaults('page', 'risk-assurance-intelligence')
    ->name('risk-assurance-intelligence');

Route::get('/tmc-institute', [PageController::class, 'show'])
    ->defaults('page', 'tmc-institute')
    ->name('tmc-institute');

Route::get('/oysterchecks-risk-assurance-intelligence', [PageController::class, 'show'])
    ->defaults('page', 'oysterChecks')
    ->name('oysterChecks');

Route::get('/grc-fincrime-prevention-awards-summit', [PageController::class, 'show'])
    ->defaults('page', 'grc-fincrime-prevention-awards-summit')
    ->name('grc-fincrime-prevention-awards-summit');

Route::get('/wgrcfp', [PageController::class, 'show'])
    ->defaults('page', 'wgrcfp')
    ->name('wgrcfp');

Route::get('/portrec-resourcing', [PageController::class, 'show'])
    ->defaults('page', 'portrec-resourcing')
    ->name('portrec-resourcing');

Route::get('/tyneside-innovation', [PageController::class, 'show'])
    ->defaults('page', 'tyneside-innovation')
    ->name('tyneside-innovation');

Route::get('/procurement-supply-chain', [PageController::class, 'show'])
    ->defaults('page', 'procurement-supply-chain')
    ->name('procurement-supply-chain');

Route::get('/real-estate-property-development', [PageController::class, 'show'])
    ->defaults('page', 'real-estate-property-development')
    ->name('real-estate-property-development');

Route::get('/facilities-infrastructure-management', [PageController::class, 'show'])
    ->defaults('page', 'facilities-infrastructure-management')
    ->name('facilities-infrastructure-management');

Route::get('/tyneprints-print-brand-production', [PageController::class, 'show'])
    ->defaults('page', 'tyneprints')
    ->name('tyneprints');
