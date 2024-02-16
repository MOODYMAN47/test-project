<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsresController;

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
    return view('welcome');
});
Route::get('/about',function(){
    return view('moodey');
});

//ROUTE WITH WITH $
// Route::get('/posts',function(){
//     $post ="first post";
//     return view('posts',compact('post'));
// });
// Route::get('posts',[PostsController::class,'showPosts']);
// Route::get('posts/create',[PostsController::class,'createPosts']);
// Route::get('posts/edit/{id}',[PostsController::class,'editPosts']);
// Route::get('posts/update/{id}',[PostsController::class,'updatePosts']);
// Route::get('posts/delete/{id}',[PostsController::class,'deletPosts']);

// -----------------------------------------------------------------------------------------

// Route::controller(PostsController::class)->group(function(){
//     Route::get('posts','showPosts');
//     Route::get('posts/create','createPost');
//     Route::get('posts/edit/{id}','editPost');
//     Route::get('posts/update/{id}','updatePost');
//     Route::get('posts/delete/{id}','deletPost');
// });
// -----------------------------------------------------------------------------------------
// Route::resource('users',UsresController::class);


