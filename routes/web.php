<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Admin\LienheController;
use App\Http\Controllers\Admin\LoainganhController;
use App\Http\Controllers\Admin\Maincontroller;
use App\Http\Controllers\Admin\QLNDController;
use App\Http\Controllers\Admin\QLNTDController;
use App\Http\Controllers\Admin\ThongtinhosoController;
use App\Http\Controllers\Admin\TinhthanhController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Nguoitimviec\AboutUsController as NguoitimviecAboutUsController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\Nguoitimviec\TaocvController;
use App\Http\Controllers\Nguoitimviec\AuthController;
use App\Http\Controllers\Nguoitimviec\CategoryController as NguoitimviecCategoryController;
use App\Http\Controllers\Nguoitimviec\ContactController as NguoitimviecContactController;
use App\Http\Controllers\Nguoitimviec\HomeController as NguoitimviecHomeController;
use App\Http\Controllers\Nguoitimviec\HosoController;
use App\Http\Controllers\Nguoitimviec\SearchController as NguoitimviecSearchController;
use App\Http\Controllers\Nguoitimviec\UploadController;
use App\Http\Controllers\Nhatuyendung\AuthBusinessController;
use App\Http\Controllers\Nhatuyendung\HomeController as NhatuyendungHomeController;
use App\Http\Controllers\Nhatuyendung\JobController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Nhatuyendung\ContactController as NhatuyendungContactController;
use App\Http\Controllers\Nhatuyendung\AboutUsController as NhatuyendungAboutUstController;
use App\Http\Controllers\Nhatuyendung\CategoryController as NhatuyendungCategoryController;
use App\Http\Controllers\Nhatuyendung\SearchController as NhatuyendungSearchController;

Route::get('/admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/users/login/timviec', [LoginController::class, 'timviec']);

Route::middleware(['auth'])->group(function () {

    Route::prefix('/admin') -> group(function () {

        Route::get('/', [Maincontroller::class, 'index'])->name('admin');
        Route::get('/main}', [Maincontroller::class, 'index']);

        //--------------------------------------------------------
        Route::get('/quanlyntv',[QLNDController::class,'index']);
        Route::get('/quanlyntv/search',[QLNDController::class,'search']);
        Route::get('/delete/{id}', [QLNDController::class, 'destroy']);
        Route::get('/thongtinhosouser/{id}',[ThongtinhosoController::class,'index']);

        //--------------------------------------------------------
        Route::get('/quanlyntd',[QLNTDController::class,'index']);
        Route::get('/quanlyntd/search',[QLNTDController::class,'search']);
        Route::get('/{id}/deleteNTD', [QLNTDController::class, 'destroy']);
        Route::get('/{id}/listbaidang',[QLNTDController::class,'listbaidang']);

        //--------------------------------------------------------
        Route::get('/listlh',[LienheController::class,'index']);
        Route::get('/listlh/search',[LienheController::class,'search']);
        Route::get('/xoalh/{id}',[LienheController::class,'destroy']);
        

        //--------------------------------------------------------
        Route::get('/loainganh',[LoainganhController::class,'index']);
        Route::get('/loainganh/search',[LoainganhController::class,'search']);
        Route::get('/xoanganh/{id}',[LoainganhController::class,'destroy']);
        Route::get('/themnganh',[LoainganhController::class,'create']);
        Route::post('/addnganh',[LoainganhController::class,'store'])->name('addnganh');
        Route::get('/suanganh/{id}',[LoainganhController::class,'edit']);
        Route::post('/updatenganh',[LoainganhController::class,'update']);

        //--------------------------------------------------------
        Route::get('/tinhthanh',[TinhthanhController::class,'index']);
        Route::get('/tinhthanh/search',[TinhthanhController::class,'search']);
        Route::get('/themtinhthanh',[TinhthanhController::class,'create']);
        Route::get('/xoatinhthanh/{id}',[TinhthanhController::class,'destroy']);
        Route::get('/edit/{id}', [TinhthanhController::class, 'edit']);
        Route::post('/updatetinhthanh', [TinhthanhController::class, 'update']);

        //--------------------------------------------------------
        Route::post('/them',[TinhthanhController::class, 'store']);
    
    });
});





//---------------HOME-----------------
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::get('/aboutus', [AboutUsController::class, 'index']);
Route::get('/job', [CategoryController::class, 'index']);
Route::get('/job/detail/{id}', [CategoryController::class, 'show']);
Route::get('/search', [SearchController::class, 'search']);
Route::get('/searchtinhthanh', [HomeController::class, 'searchtinhthanh']);







//-----------------User-------------------

Route::prefix('/user')->group(function (){
    Route::get('/',[NguoitimviecHomeController::class, 'index'])->name('userhome');
    Route::get('/job',[NguoitimviecCategoryController::class, 'index']);
    Route::get('/job/detail/{id}',[NguoitimviecCategoryController::class, 'show']);
    Route::get('/search',[NguoitimviecSearchController::class, 'search']);
    Route::get('/contact',[NguoitimviecContactController::class, 'index']);
    Route::post('/contacts',[NguoitimviecContactController::class, 'store']);
    Route::get('/aboutus',[NguoitimviecAboutUsController::class, 'index']);

    // ----------Apply----------
    Route::post('/apply',[ApplyController::class, 'applyTo']);
    Route::get('/applied',[ApplyController::class, 'listApllied']);
    Route::get('/applied/detail/{id}',[ApplyController::class, 'detail_applied']);
    Route::get('/applied/delete/{id}',[ApplyController::class, 'destroy_cancel']);


    //  --------Auth---------
    Route::get('/login', [AuthController::class, 'index'])->name('userlogin');
    Route::post('user-home', [AuthController::class, 'customLogin'])->name('login.custom');
    Route::get('/register', [AuthController::class, 'registration'])->name('register-user');
    Route::post('/custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
    Route::get('/logout', [AuthController::class, 'logout']);


    //  ------Ho so---------
    Route::prefix('/hoso')->group(function (){
        Route::get('/',[HosoController::class, 'index']);
        
        Route::get('/add',[HosoController::class, 'create']);
        Route::post('/addhoso',[HosoController::class, 'store'])->name('them_hoso');
        Route::get('/detail/{id}',[HosoController::class, 'show']);
        Route::get('/detailcv/{id}',[HosoController::class, 'showcv']);
        Route::get('/edit/{id}', [HosoController::class, 'edit']);
        Route::post('/update', [HosoController::class, 'update']);
        Route::get('/delete/{id}', [HosoController::class, 'destroy']);
        
    });


    // #Upload
    // Route::post('upload/services', [UploadController::class, 'store']);
});







//-----------Business-------------

Route::prefix('/business')->group(function (){
    Route::get('/',[NhatuyendungHomeController::class, 'index'])->name('businesshome');
    Route::get('/home',[NhatuyendungHomeController::class, 'index'])->name('businesshome');

    Route::get('/listjob',[NhatuyendungCategoryController::class, 'index']);
    Route::get('/job/detail/{id}',[NhatuyendungCategoryController::class, 'show']);

    Route::get('/search',[NhatuyendungSearchController::class, 'search']);

    Route::get('/contact',[NhatuyendungContactController::class, 'index']);
    Route::post('/contacts',[NhatuyendungContactController::class, 'store']);
    Route::get('/aboutus',[NhatuyendungAboutUstController::class, 'index']);

    Route::get('/login', [AuthBusinessController::class, 'index'])->name('businesslogin');
    Route::get('/register', [AuthBusinessController::class, 'registration'])->name('register-business');
    Route::get('logout', [AuthBusinessController::class, 'logout'])->name('logout');

    Route::prefix('/job')->group(function (){
        Route::get('/', [JobController::class, 'B_jobList'])->name('joblist');

        Route::get('/add', [jobController::class, 'create']);
        Route::post('/addjob',[jobController::class, 'store'])->name('jobadd');

        Route::get('/{id}/detail', [jobController::class, 'show'])->name('jobdetail');

        Route::get('/{id}/edit', [jobController::class, 'edit']);
        Route::post('/update', [jobController::class, 'update'])->name('jobupdate');

        Route::get('/{id}/delete', [jobController::class, 'destroy']);
    });

    Route::get('/applied',[ApplyController::class, 'listApllying']);
    Route::get('/applied/delete/{id}',[ApplyController::class, 'destroy_applying']);

});

Route::post('/business-home', [AuthBusinessController::class, 'customLogin'])->name('login.business'); 
Route::post('/business-registration', [AuthBusinessController::class, 'customRegistration'])->name('register.business'); 
Route::get('/signout', [AuthBusinessController::class, 'signOut'])->name('signout');



