<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
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

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/about-us', function () {
//     return '<h1>About Page</h1>';
// });

// Route::get('/user/{id}', function ($id) {
//     return "<h1>User Page id : $id </h1>";
// })->name('users');

// Route::redirect("/test", "/about-us");


// Route::get('/home', function () {
//     $courses = [
//         [
//             'name'=> 'web development',
//             'description'=> 'web development course'
//         ],
//         [
//             'name'=> 'web design',
//             'description'=> 'web design course'
//         ],
//         [
//             'name'=> 'laravel',
//             'description'=> 'laravel course'
//         ]
//         ];

//     return view('home', compact('courses'));
// });


//rotalarin gruplandirilmasi
///////////////

// Route::get('/products',function(){
// return "<h1>Product List</h1>" ;
// });

// Route::get('/product/create',function(){
// return "<h1>Product Create</h1>" ;
// });

// Route::get('/product/delete',function(){
// return "<h1>Product Delete</h1>" ;
// });

// Route::group(['prefix' => 'product'], function () {
//     Route::get('/', function () {
//         return "<h1>Product List</h1>";
//     });

//     Route::get('/create', function () {
//         return "<h1>Product Create</h1>";
//     });

//     Route::get('/delete', function () {
//         return "<h1>Product Delete</h1>";
//     });
// });

// Route::get('/create', function () {
//     $newCreate = 'Create Page';
//     return view('info.create', ['newCreate' => $newCreate]);
// });

// Route::get('/user', function () {
//     $userId = 5;
//     $userName = 'John';
//     return view('test', compact('userId', 'userName'));
// });

// Route::get('/test', function () {
//     $products = ['Laptop', 'Phone', 'Tablet', 'Desktop'];
//     $productId = "5";
//     return view('test', compact('products', 'productId'));
//     // return view('test', ['products' => $products, 'productId' => $productId]);
// });
Route::get('/home', function () {
    return view('home');
});

Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/blog', [BlogController::class, 'newBlog']);
