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

Route::get('/', function () {
    // $phone=User::find(1)->phone;
    // return $phone;

    $phones=Phone::all();
    
    return view('welcome',compact('phones'));
});
Route::get('/posts', function () {
    $posts=Post::with('comments')->get();
    // return $posts;
    return view('posts',compact('posts'));
});
