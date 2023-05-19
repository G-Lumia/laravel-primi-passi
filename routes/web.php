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
    $data = [
        'page_title' => 'Welcome Page',
        'description' => 'Click a link to change page',
        'links' => [
            'contacts',
            'about-us',
            'jerry',
        ]
    ];
    return view('home' , $data);
});
