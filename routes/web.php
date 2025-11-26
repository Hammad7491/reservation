<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;





Route::get('/', [PagesController::class, 'index'])
         ->name('index');


Route::get('/aboutus', [PagesController::class, 'aboutus'])
         ->name('aboutus');
         



         Route::get('/privacy', [PagesController::class, 'privacy'])
         ->name('privacy');


         Route::get('/terms', [PagesController::class, 'terms'])
         ->name('terms');