<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\form;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\pro;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', function () {
    return view('avinash.index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/avinash', function () {
    return view('avinash.avinash');
});

Route::get("users/{id}", [User::class, 'index']);
Route::get("users", [User::class, 'show']);

// Route::fallback(function() {
//     return view("This Page Is Under construction 🛑");
// });

Route::redirect('/about', '/contact');

Route::get('/product/{name}/{brand?}', function ($name,$brand='Dummy') {
    $products = [
        ["name" => "laptop", "brand" => "Hp", "Price" => "$250"],
        ["name" => "laptop", "brand" => "Dell", "Price" => "$350"],
        ["name" => "Mobile", "brand" => "Apple", "Price" => "$950"],
        ["name" => "Mobile", "brand" => "Assus", "Price" => "$150"],
    ];

    return view('product', [
        'products' => $products, 'n' => $name, 'b' => $brand,
    ]);
});

Route::get('/about', function () {
    $name=request('n');
    $code=request('c');

    return view('about',['name'=>$name,'code'=>$code]);
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/form', [Form::class, 'showForm'])->name('show.form');
Route::post('/form', [Form::class, 'processForm'])->name('process.form');

Route::get('/noaccess', function () {
    return view('noaccess');
});

Route::get('/checkAge', function () {
    return view('checkAge');
});

Route::get('/user', function () {
    return view('user');
});

Route::group(['middleware'=>['protectPage']],function(){
    Route::view('user','user');
});

Route::post('user', [usercontroller::class, 'getData']);
Route::view('profile', 'profile');
Route::get('/logout', function () {
    if (session()->has('user')) {
        session()->pull('user', null);
    }
    return redirect('login');
});

Route::get('/login', function () {
    if (session()->has('user')) {
        return redirect('profile');
    }

    $username = null;

    return view('user', compact('username'));
});

Route::name('linkedin')->get('linkedin', 'SocialController@linkedin');
Route::name('github')->get('github', 'SocialController@github');
Route::name('twitter')->get('twitter', 'SocialController@twitter');
Route::name('instagram')->get('instagram', 'SocialController@instagram');
Route::name('youtube')->get('youtube', 'SocialController@youtube');
Route::name('discord')->get('discord','SocialController@discord');
Route::name('code1')->get('code1','SocialController@code1');

Route::get('/skill', function () {
    return view('skill');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/work', function () {
    return view('work');
});

Route::get('/experience', function () {
    return view('experience');
});

Route::get('/pro', function () {
    $pros = [
        ["Id" => "1", "Name" => "Hp", "Descriptions" => "This is descriptions", "Describe" => "This is describe"],
        ["Id" => "2", "Name" => "Lenovo", "Descriptions" => "This is descriptions", "Describe" => "This is describe"],
        ["Id" => "3", "Name" => "Dell", "Descriptions" => "This is descriptions", "Describe" => "This is describe"],
        ["Id" => "4", "Name" => "Apple", "Descriptions" => "This is descriptions", "Describe" => "This is describe"],
        ["Id" => "5", "Name" => "Assus", "Descriptions" => "This is descriptions", "Describe" => "This is describe"]
    ];

    return view('pro', [
        'pros' => $pros,
    ]);
});

Route::get("pro", [User::class, 'pro']);

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);