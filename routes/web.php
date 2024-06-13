<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();


Route::any('/auth', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('user.login');
Route::any('/login', [App\Http\Controllers\Auth\LoginController::class, 'signin'])->name('user44.login');
Route::any('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('user.logout');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
  
    Route::get('/home', [App\Http\Controllers\Admin\AdminHomeController::class, 'index'])->name('home');
   
    Route::any('/advocate', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('advocate');
    Route::any('/add/advocate', [App\Http\Controllers\Admin\ContactController::class, 'addAdvocate'])->name('add.advocate');
    Route::any('/edit/advocate', [App\Http\Controllers\Admin\ContactController::class, 'editAdvocate'])->name('edit.advocate');
    Route::any('/remove/advocate', [App\Http\Controllers\Admin\ContactController::class, 'removeAdvocate'])->name('remove.advocate');
    //   about
    Route::any('/about', [App\Http\Controllers\Admin\AboutController::class, 'index'])->name('about');
    Route::any  ('/add/about', [App\Http\Controllers\Admin\AboutController::class, 'addAbout'])->name('add.about');

    Route::any('/', [App\Http\Controllers\Admin\MainDetailController::class, 'index'])->name('main');
    Route::any('/maindetail', [App\Http\Controllers\Admin\MainDetailController::class, 'index'])->name('maindetail');
    Route::any('/add/maindetail', [App\Http\Controllers\Admin\MainDetailController::class, 'addDetails'])->name('add.maindetail');
    
    Route::any('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category');
    Route::any('/add/category', [App\Http\Controllers\Admin\CategoryController::class, 'addCategory'])->name('add.category');
    Route::any('/edit/category', [App\Http\Controllers\Admin\CategoryController::class, 'editCategory'])->name('edit.category');
    Route::any('/remove/category', [App\Http\Controllers\Admin\CategoryController::class, 'removeCategory'])->name('remove.category');
    
    Route::any('/review', [App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('review');
    Route::any('/add/review', [App\Http\Controllers\Admin\ReviewController::class, 'addReview'])->name('add.review');
    Route::any('/edit/review', [App\Http\Controllers\Admin\ReviewController::class, 'editReview'])->name('edit.review');
    Route::any('/remove/review', [App\Http\Controllers\Admin\ReviewController::class, 'removeReview'])->name('delete.review');

    Route::any('/qr', [App\Http\Controllers\Admin\QrController::class, 'index'])->name('qr');
    Route::any('/add/qr', [App\Http\Controllers\Admin\QrController::class, 'insert'])->name('add.qr');
    
    Route::any('/address', [App\Http\Controllers\Admin\AddressController::class, 'index'])->name('address');
    Route::any('/add/address', [App\Http\Controllers\Admin\AddressController::class, 'insert'])->name('add.address');
    Route::any('/edit/address', [App\Http\Controllers\Admin\AddressController::class, 'edit'])->name('edit.address');
    Route::any('/remove/address', [App\Http\Controllers\Admin\AddressController::class, 'delete'])->name('remove.address');

    Route::any('/iconsetting', [App\Http\Controllers\Admin\IconSetingController::class, 'index'])->name('iconsetting');
    Route::any('/add/icon-setting', [App\Http\Controllers\Admin\IconSetingController::class, 'add'])->name('add.iconsetting');
    Route::any('/fill/icon-setting', [App\Http\Controllers\Admin\IconSetingController::class, 'fill'])->name('fill.iconsetting');
   
    Route::any('/firmdetails', [App\Http\Controllers\Admin\FirmDetailController::class, 'index'])->name('firmdetails');
    Route::any('/add/firmdetails', [App\Http\Controllers\Admin\FirmDetailController::class, 'insert'])->name('add.firmdetails');
  
    Route::any('/firmimg', [App\Http\Controllers\Admin\FirmImgController::class, 'index'])->name('firmimg');
    Route::any('/add/firmimg', [App\Http\Controllers\Admin\FirmImgController::class, 'insert'])->name('add.firmimg');

    Route::any('/socialmedia', [App\Http\Controllers\Admin\SocialMediaController::class, 'index'])->name('socialmedia');
    Route::any('/add/socialmedia', [App\Http\Controllers\Admin\SocialMediaController::class, 'insert'])->name('add.socialmedia');
  
});

// Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
// Route::get('/', function () {
//     return view('layouts.content');
// });

Route::any('/', [App\Http\Controllers\ContentController::class, 'index'])->name('content');

// Route::get('pdfview',array('as'=>'pdfview','uses'=>'ItemController@pdfview'));

Route::any('/pdf/download', [App\Http\Controllers\DownloadController::class, 'download'])->name('pdf.download');


