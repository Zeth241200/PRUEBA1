<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class,'__invoke']);


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);


/*
Route::get('/posts/post-1',function(){
    return "Aqui se mostrara el post 1";
});

Route::get('/posts/{post}',function($post){
    return "Aqui se mostrara el post {$post}";
});
*/
/*
Route::get('/posts/{post}/{category?}',function($post,$category = null){
    if($category){
        return "Aqui se mostrara el post {$post} de la categoria {$category}";
    }
    return "Aqui se mostrara el post {$post}";
});
*/




