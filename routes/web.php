<?php

use App\Http\Livewire\Profile;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile',[Profile::class,'render'])->middleware('auth')->name('profile');
});
