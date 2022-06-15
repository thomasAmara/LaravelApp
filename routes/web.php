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
    return view('listings', [
        'heading' => 'Latest Listing',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem isup ooo nwsi swciiw bdwiu'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem isup ooo nwsi swciiw bdwiu'
            ]
        ]
    ]);
});

Route::get('/hello', function () {
    return 'welcome';
});