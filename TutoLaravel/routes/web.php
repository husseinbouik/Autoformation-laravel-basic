<?php
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/blog', function () {
//     return 'Bonjour hussein';
// });

// Route::get('/blog', function () {
//     return [
//         "article => 'Article 1",
//     ];
// });

// Route::get('/blog', function ( ) {
//     return [
//         "name" => $_GET['name'],
//         "article" => "Article 1"
//     ];
// });


Route::get('/blog', function (Request $request ) {
    return [
        // "name" => $request ->path() ,
        "name" => $request ->url() ,
        "article" => "Article 1"
    ];
});