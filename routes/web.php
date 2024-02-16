<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Counter;
use App\Http\Livewire\Register;
use App\Http\Livewire\Login;
use App\Http\Livewire\Gallery;
use App\Http\Livewire\About;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Logout;
use App\Http\Livewire\ShowMessages;
use App\Http\Livewire\Users;
use App\Http\Livewire\Upload;
use App\Http\Livewire\EditProfile;
use App\Http\Livewire\AddProducts;
use App\Http\Livewire\ShowProducts;
use App\Http\Livewire\EditProduct;
use App\Http\Livewire\Purchase;



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

Route::get('/', Counter::class)->name("home");

// Route::get('/counter', Counter::class)->name("home");

// register, login, and logout
Route::get('/register', Register::class)->name("register")->middleware("already_login");
Route::get('/login', Login::class)->name("login")->middleware("already_login");
Route::get('/logout', Logout::class)->name("logout")->middleware("islogin");

// pages
Route::get('/gallery', Gallery::class)->name("gallery");
Route::get('/about', About::class)->name("about");
Route::get('/contact', Contact::class)->name("contact");

// dashboard
Route::get('/dashboard', Dashboard::class)->name("dashboard")->middleware("islogin");

// all users, contact page messages and all products
Route::get('/users', Users::class)->name("users")->middleware("isadmin");
Route::get('/show-messages', ShowMessages::class)->name("show-messages")->middleware("isadmin");
Route::get('/show-products', ShowProducts::class)->name("show-products")->middleware("isadmin");

// file Upload
Route::get('/upload', Upload::class)->name("upload")->middleware("islogin");

// edit profile
Route::get('/edit-profile', EditProfile::class)->name("edit-profile")->middleware("islogin");

// add products route
Route::get('/add-products', AddProducts::class)->name("add-products")->middleware("isadmin");

// edit product
Route::get('/edit-product/{id}', EditProduct::class)->name("edit-product");

// purchase product
Route::get('/purchase', Purchase::class)->name("purchase");
