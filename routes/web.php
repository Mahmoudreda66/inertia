<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', function () {
    return inertia('Users/Index', [
        'users' => User::take(50)->latest()->get()
    ]);
});

Route::get('/users/create', function () {
    return inertia('Users/Create');
});

Route::post('/users/create', function (Request $request) {
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8'
    ]);

    User::create($request->all());

    return back()->with('success', 'User Created Successfully');
});

Route::get('/', function () {
    return inertia('Index');
});
