<?php

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

Route::get('/user/{user}', function (App\User $user) {
    Auth::login($user);

    return view('user');
});

Route::get('/admin', function () {
    $user = App\User::find(1);
    Auth::login($user);

    return view('admin');
});

Route::get('/send/{user}', function (App\User $user) {
    $content = request()->content;

    event(new App\Events\OrderShipped($user, $content));

    return "Okay! {$user->name}, {$content}";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
