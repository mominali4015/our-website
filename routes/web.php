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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('get-quote', function () {
    return view('pages/get-quote');
})->name('get-quote');

Route::get('services', function () {
    return view('pages.services');
})->name('all-services');


Route::get('web-development', function () {
    return view('pages.web-development');
})->name('web-development');


Route::get('graphic-designing', function () {
    return view('pages.graphic-designing');
})->name('graphic-design');


Route::get('qa-services', function () {
    return view('pages.qa--services');
})->name('qa-services');


Route::get('seo-services', function () {
    return view('pages.seo-services');
})->name('seo-services');


Route::get('networking-services', function () {
    return view('pages.networking-services');
})->name('networking-services');


Route::get('iOS-development', function () {
    return view('pages.ios-app-development');
})->name('ios-development');


Route::get('android-development', function () {
    return view('pages.android-app-development');
})->name('android-development');


Route::get('blogs', function () {
    return view('pages.blogs');
})->name('blogs');


Route::get('team', function () {
    return view('pages.team');
})->name('team');


Route::get('about-us', function () {
    return view('pages.about');
})->name('about');


Route::get('testimonials', function () {
    return view('pages.testimonials');
})->name('testimonials');


Route::get('contact-us', function () {
    return view('pages.contact');
})->name('contact');


