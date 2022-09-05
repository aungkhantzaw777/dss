<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReplyController;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/register', [AuthController::class, 'createUser']);
Route::post('/login', [AuthController::class, 'loginUser'])->name('postLogin');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::patch('/post/update/{post}', [PostController::class, 'update']);
    Route::post('/post', [PostController::class, 'store']);
    Route::get('/getPost', [PostController::class, 'index']);
    Route::delete('/post/delete/{post}', [PostController::class, 'destroy']);

    # comment
    Route::post('/comment', [CommentController::class, 'store']);
    
    # reply
    Route::post('/reply', [ReplyController::class, 'store']);
});

Route::get( '/auth-fail', function () {
    return [
        'status' => '401 unauthorized!'
    ];
}
)->name('login');

