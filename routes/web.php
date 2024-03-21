<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/{lang}', function ($lang) {
    $validLanguages = ['id', 'en'];
    if (!array_key_exists($lang, $validLanguages)) {
        App::setLocale(config('app.fallback_locale'));
    }
    App::setLocale($lang);
    return view('index');
});


Route::fallback(function () {
    return redirect()->to('/id');
});