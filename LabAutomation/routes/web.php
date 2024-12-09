<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PDFcontroller;
use App\Http\Controllers\PDFtestingcontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\TestingDetailsController;
use App\Http\Controllers\TestingTypeController;
use App\Http\Controllers\TestingTypesController;
use App\Models\TestingType;

// HomeControllerRoutes
Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about']);
Route::get('test', [HomeController::class, 'test']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('product', [HomeController::class, 'product']);

// AdminControllerRoutes
Route::resource('products', ProductController::class);
Route::get('productedit/{id}', [ProductController::class, 'edit']);
Route::post('productupdate/{item}', [ProductController::class, 'updateproducts'])->name('items.update');
Route::get('products/assign/{id}', [ProductController::class, 'assignProduct']);
Route::post('product/assign/{id}', [ProductController::class, 'assignProductPost']);
Route::get('productsearch',[ProductController::class,'data_search']);
Route::get('productrefresh',[ProductController::class,'productrefresh']);
Route::get('download-PDF/{id}',[PDFcontroller::class,'generatePDF']);
// Admin productcontrollerRoute end //

// Admin testingtypecontrollerRoute //
Route::resource('testingtypes', TestingTypeController::class);
Route::get('edit/{id}', [TestingTypeController::class, 'edit'])->name('edit');
Route::post('testingtypeupdate/{id}', [TestingTypeController::class, 'updatetestingtypes'])->name('items.updates');
Route::get('Download-testing/{id}',[PDFtestingcontroller::class,'PDFtesting']);
Route::get('testingsearch',[TestingTypecontroller::class,'testing_search']);
Route::get('testingrefresh',[TestingTypecontroller::class,'testingrefresh']);
// Admin testingtypecontrollerRoute end //

// testingdetailcontrollerRoute //
Route::resource('testingdetails', TestingDetailsController::class);
Route::get('approve/{id}', [TestingDetailsController::class, 'approve']);
Route::get('reject/{id}', [TestingDetailsController::class, 'reject']);
Route::get('approvetesting', [TestingDetailsController::class, 'testingapprove']);
Route::get('rejecttesting', [TestingDetailsController::class, 'testingreject']);

//Route::get('dashboard',[AdminController::class, 'index']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});
