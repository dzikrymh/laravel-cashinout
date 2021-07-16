<?php

use Illuminate\Support\Facades\{Route, Auth};

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
