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
    $articles=DB::table('articles')->where('id',1)->update(['title'=>'articles 3']);
    dd($articles);
    return view('welcome');
});

/*Route::prefix('/sajad')->group(function(){
    Route::get('/{a}', function ($a) {
        return $a;
    });
    Route::get('/admin/{a}', function ($a) {
        return $a;
    });
    Route::get('/users/a/{a}', function ($a) {
        return $a;
    });
});*/