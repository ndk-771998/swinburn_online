<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PostListController;

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


Route::get('/', 'Web\HomeController');
Route::get('/apply', 'Web\ApplyController');
Route::get('/contact-us', 'Web\ContactUsController');
Route::get('/loading-more', 'Ajax\LoadMoreController@loadMore');

// Route::get('/cac-cau-hoi-thuong-gap', function(){
//     return view('pages.questions');
// });

// Route::get('/graduation-swinburne', function(){
//     return view('pages.graduation-swinburne');
// });

// Route::get('/technical-swinburne', function(){
//     return view('pages.technical-swinburne');
// });

// Route::get('/college-swinburne', function(){
//     return view('pages.college-swinburne');
// });

Route::get('/services', 'Web\PagesController@services');

Route::get('/support', 'Web\PagesController@support');

Route::get('/flexible-study', 'Web\PagesController@pagesFlexible');

Route::get('/study-journey', 'Web\PagesController@pagesStudyjourney');
