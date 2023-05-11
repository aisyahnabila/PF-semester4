<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Function_;

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
//

Route::get('/routing', function () {
    return view('routing');
});

// tugas(Bootstrap Clone)
Route::get('/cloning', function () {
    return view('cloning');
});

// 1
Route::get('/basic_routing', function () {
    return ('Hello World');
});

// 3
Route::get('/controller_route', [RouteController::class, 'index']);

// 5
Route::get('/user/{id}', function ($id) {
    return "User Id: " . $id;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return "Post Id: " . $postId . ", Comment Id: " . $commentId;
});

// 6
Route::get('/username/{name}', function ($name = null) {
    return 'username:' . $name;
});

// 7
Route::get('/title/{title}', function ($title) {
    return 'Title: ' . $title;
})->where('title', '[A-Za-z\ - ]+');

// 8
Route::get('/profile/{profileId}', [RouteController::class, 'profile'])->name('profileRouteName');

// 9
Route::get('/route_priority/{rpId}', function ($rpId) {
    return "This is Route One";
});
Route::get('/route_priority/user', function () {
    return "This is Route 1";
});
Route::get('/route_priority/user', function () {
    return "This is Route 2";
});
// 2
Route::view('/view_route', 'view_route');
Route::view('/view_route', 'view_route', ['name' => 'human']);

// 4
Route::redirect('/', '/routing');

// 10
Route::fallback(function () {
    return 'Fallback Route';
});

// 11
route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return "admin dashboard";
    })->name('dashboard');
    Route::get('/users', function () {
        return "user data on admin page";
    })->name('users');
    Route::get('/items', function () {
        return "Item data on admin page";
    })->name('items');

});

// 12
Route::get('/list_route', function () {
    return view('list_route');
});