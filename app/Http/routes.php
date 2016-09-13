<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/regulament.html', function () { 
    return view('regulament');
});
Route::get('/clasament.html', function () {
    $gDoc = 'https://docs.google.com/spreadsheets/d/1RdHBKhmb5wqn9nNvoLdZdrv8j5mN-rMAOdzcK3KZxUo/pubhtml?gid=0&single=true';
    return redirect($gDoc);
});
Route::get('/turneu.html', function () {
    $gDoc = 'https://docs.google.com/spreadsheets/d/15RfvekijMpMI73ESfYtZz8ZwL9IcNyD7Ikq2_IvKaVI/pubhtml?gid=0&single=true';
    return redirect($gDoc);
});
