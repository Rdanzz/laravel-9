<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;
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
    return view('home', [
        'users' => [
            [
                'name' => 'John',
                'email' => 'john@example.com',
                'role' => 'admin'
            ],
            [
                'name' => 'Jane',
                'email' => 'jane@example.com',
                'role' => 'user'
            ]
        ]
    ]);
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/students', [StudentController::class, 'index']);
Route::get('/class', [ClassroomController::class, 'index']);









// Basic Routes
// Route::get('/greeting', function () {
//     return 'Hello World';
// });

// Cara 1
// Bisa mengirimkan argumen dan lebih dari 1 argumen
// Route::get('/about', function () {
//     return view('about', ['nama' => 'Zidhan Raffly', 'alamat' => 'Karawang']);
// });

// Cara 2
// Route::view('/about', 'about');


// Route Controller
// Route Redirect
// jadi akan dilempar ke /new-url
// Route::redirect('/old-url', '/new-url');

// Route Parameter
// Route::get('/user/{id}', function ($id) {
    // Cara 1
    // return "User ID: ". $id;

    // Cara 2
//     return "Hai, user ID kamu adalah $id";

// });

// Route::get('/about/{id}', function($id) {
//     return view ('about.detail', ['id' => $id, 'nama' => 'Zidhan Raffly']);
// });

// Route Prefix
// Kode pertama (prefix('admin')) menambahkan admin pada URL, sehingga URL hasil akhirnya adalah /admin/users.
// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         return 'ini adalah user dan admin';
//     });
// });

// Route name prefix

// Kode kedua (prefix('admin.')) menambahkan prefix ke nama rute dan menggunakan penamaan rute (->name('users')), sehingga nama rutenya menjadi admin.users, tapi URL-nya tetap /users.
// Route::name('admin.')->group(function () {
//     Route::get('/users', function () {
//         return 'ini adalah user dan admin';
//     })->name('users');
// });


