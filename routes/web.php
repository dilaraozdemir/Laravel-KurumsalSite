<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/about', [HomeController::class, 'aboutus'])->name('home_aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('home_references');
Route::get('/academic', [HomeController::class, 'academic'])->name('home_academic');
Route::get('/contact', [HomeController::class, 'contact'])->name('home_contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/research', [HomeController::class, 'research'])->name('home_research');
Route::get('/faq', [HomeController::class, 'faq'])->name('home_faq');
Route::get('/content/{id}', [HomeController::class, 'content'])->name('content');
Route::get('/categoryproduct/{id}', [HomeController::class, 'categoryproduct'])->name('categoryproduct');
Route::get('/icerik/{id}', [HomeController::class, 'icerik'])->name('icerik');
Route::post('/getcontent', [HomeController::class, 'getcontent'])->name('getcontent');
Route::get('/contentlist/{search}', [HomeController::class, 'contentlist'])->name('contentlist');

//Admin

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::get('menu', [\App\Http\Controllers\Admin\MenuController::class, 'index'])->name('admin_menu');
    Route::get('menu/add', [\App\Http\Controllers\Admin\MenuController::class, 'add'])->name('admin_menu_add');
    Route::post('menu/create', [\App\Http\Controllers\Admin\MenuController::class, 'create'])->name('admin_menu_create');
    Route::post('menu/update{id}', [\App\Http\Controllers\Admin\MenuController::class, 'update'])->name('admin_menu_update');
    Route::get('menu/edit{id}', [\App\Http\Controllers\Admin\MenuController::class, 'edit'])->name('admin_menu_edit');
    Route::get('menu/delete/{id}', [\App\Http\Controllers\Admin\MenuController::class, 'destroy'])->name('admin_menu_delete');
    Route::get('menu/show', [\App\Http\Controllers\Admin\MenuController::class, 'show'])->name('admin_menu_show');

    //Content
    Route::prefix('content')->group(function () {


        Route::get('/', [\App\Http\Controllers\Admin\ContentController::class, 'index'])->name('admin_content');
        Route::get('create', [\App\Http\Controllers\Admin\ContentController::class, 'create'])->name('admin_content_add');
        Route::post('store', [\App\Http\Controllers\Admin\ContentController::class, 'store'])->name('admin_content_store');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'update'])->name('admin_content_update');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'edit'])->name('admin_content_edit');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ContentController::class, 'destroy'])->name('admin_content_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ContentController::class, 'show'])->name('admin_content_show');

    });

    //Image
    Route::prefix('image')->group(function () {

        Route::get('create/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });
    //Review
    Route::prefix('review')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
    });

    //Message
    Route::prefix('messages')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_image_show');
    });

    //Setting
    Route::get('seting', [\App\Http\Controllers\Admin\SetingController::class, 'index'])->name('admin_seting');
    Route::post('seting/update', [\App\Http\Controllers\Admin\SetingController::class, 'update'])->name('admin_seting_update');

    //Faq
    Route::prefix('faq')->group(function () {


        Route::get('/', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
        Route::get('create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
        Route::post('store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
        Route::get('show', [\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');

    });
});
//User
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){

    Route::get('/profile', [UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}', [UserController::class, 'destroymyreview'])->name('user_review_delete');

});
//User Profile
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {

    Route::get('/profile', [UserController::class, 'index'])->name('userprofile');

    //Content
    Route::prefix('content')->group(function () {


        Route::get('/', [\App\Http\Controllers\ContentController::class, 'index'])->name('user_content');
        Route::get('create', [\App\Http\Controllers\ContentController::class, 'create'])->name('user_content_add');
        Route::post('store', [\App\Http\Controllers\ContentController::class, 'store'])->name('user_content_store');
        Route::post('update/{id}', [\App\Http\Controllers\ContentController::class, 'update'])->name('user_content_update');
        Route::get('edit/{id}', [\App\Http\Controllers\ContentController::class, 'edit'])->name('user_content_edit');
        Route::get('delete/{id}', [\App\Http\Controllers\ContentController::class, 'destroy'])->name('user_content_delete');
        Route::get('show', [\App\Http\Controllers\ContentController::class, 'show'])->name('user_content_show');

    });
    //Image
    Route::prefix('image')->group(function () {

        Route::get('create/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('user_image_add');
        Route::post('store/{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('user_image_store');
        Route::get('delete/{id}{content_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('user_image_show');
    });
});



//Login
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('admin_logout');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
