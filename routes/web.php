<?php
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', [PostController::class, 'index'])->name('home');

Route ::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get ('categories/{category:slug}', function (Category $category){
  return view ('posts',[
    'posts'=> $category->posts ,
    'categories'=> Category::all()

]);
});

Route::get ('authors/{author:username}', function (User $author){
  return view ('posts',[
    'posts'=> $author->posts
]);
});

Route::get ('register', [ RegisterController::class, 'create']);
Route::post('register', [ RegisterController::class, 'store']) ;