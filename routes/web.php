<?php

use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
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


// This is for One to One -->

Route::get('/', function () {
    // $phone=User::find(1)->phone;
    // return $phone;

    $phones=Phone::all();
    
    return view('welcome',compact('phones'));
});

// This is for One to many -->
Route::get('/posts', function () {
    $posts=Post::with('comments')->get();
    // return $posts;
    return view('posts',compact('posts'));
});

// This is for Many to Many -->
Route::get('/category_post', function () {
    // $posts=Post::with('comments')->get();
    
            $posts=Post::with('categories')->get();
            // return $posts;
            return view('category_post',compact('posts'));
});

