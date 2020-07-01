<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    return redirect(app()->getLocale());
});

Route::group([
    'prefix' => '{locale}', 
    'where' => ['locale' => '[a-zA-Z]{2}']], function() {
    
    // Default route
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/home', 'HomeController@index')->name('home');
    

    // Connexion routes 
    Auth::routes();
    

    // Accounts routes
    Route::get('/account', 'AccountsController@index')->name('account');

    Route::get('/account/edit', 'AccountsController@edit')->name('account.edit');

    Route::post('/account/edit', 'AccountsController@update')->name('account.update');


    // Surveys routes
    Route::resource('surveys', 'SurveysController');

    Route::resource('questions', 'QuestionsController');

    Route::resource('answers', 'AnswersController');

    Route::get('/about', function(){
        return view('about');
    })->name('about');
    
    Route::get('/legalnotice', function(){
        return view('legalnotice');
    })->name('legalnotice');

    Route::get('/contact', function(){
        return view('contact');
    })->name('contact');

    Route::get('/send', function(){
        return view('send');
    })->name('send');

    Route::get('/access', function(){
        return view('notaccess');
    })->name('access');

    Route::get('/already', function(){
        return view('already');
    })->name('already');
});