<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;

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

// Route::get('/', function () {
//     $posts = App\Models\Post::latest('published_at')->get();
//     // dd($posts);
//     return view('welcome',compact('posts'));
// });
// Route::get('/posts',function(){
//     return App\Models\Post::all();
// });
// Route::get('/', function(){
//     return view("admin/layout");
// })->middleware("auth");



// Route::get('/admin',[App\Http\Controllers\PagesController::class,'home']);
Route::group([
    'prefix'=>'admin',
    'namespace'=>'Admin',
    'middleware'=>'auth'
],function(){
    Route::get('/',[App\Http\Controllers\Admin\AdminController::class,'index'])->name('dashboard');
    Route::get('/posts',[PostController::class,'index'])->name("admin.posts.index");
    Route::get('/posts/create',[PostController::class,'create'])->name("admin.posts.create");

});
// Route::get('/dashboard',function(){
//     return view("admin/dashboard");
// });

Auth::routes(['login', 'logout', 'reset', 'confirm']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::auth();
