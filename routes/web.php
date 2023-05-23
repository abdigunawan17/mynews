<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\NewsPostController;
use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\Subcategory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


*/

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', [UserController::class, 'UserDashboard'])->name('dashboard');
    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    Route::post('/user/profile', [UserController::class, 'UserProfileStore'])->name('user.profile.store');
});// end middleware


Route::get('/', [IndexController::class, 'Index'])->name('admin.profile');

Route::middleware(['auth', 'role:admin'])->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    Route::post('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
});// end middleware



Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->middleware(RedirectIfAuthenticated::class)->name('admin.login');

Route::get('/admin/logout/page', [AdminController::class, 'AdminLogoutPage'])->name('admin.logout.page');

Route::middleware(['auth', 'role:admin'])->group(function() {
    Route::controller(CategoryController::class)->group(function() {
        Route::get('/all/category', 'AllCategory')->name('all.category');
        Route::get('/add/category', 'AddCategory')->name('add.category');
        Route::post('/store/category', 'StoreCategory')->name('store.category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/update/category', 'UpdateCategory')->name('update.category');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');

        Route::get('/subcategory/ajax/{category_id}', 'GetSubCategory');
    });// end category


    Route::controller(SubcategoryController::class)->group(function() {
        Route::get('/all/subcategory', 'AllSubCategory')->name('all.subcategory');
        Route::get('/add/subcategory', 'AddSubCategory')->name('add.subcategory');
        Route::post('/store/subcategory', 'StoreSubCategory')->name('store.subcategory');
        Route::get('/edit/subcategory/{id}', 'EditSubCategory')->name('edit.subcategory');
        Route::post('/update/subcategory', 'UpdateSubCategory')->name('update.subcategory');
        Route::get('/delete/subcategory/{id}', 'DeleteSubCategory')->name('delete.subcategory');
    });// end subcategory


    Route::controller(NewsPostController::class)->group(function() {
        Route::get('/all/news/post', 'AllNewsPost')->name('all.news.post');
        Route::get('/add/news/post', 'AddNewsPost')->name('add.news.post');

        Route::post('/store/news/post', 'StoreNewsPost')->name('store.news.post');
        Route::get('/edit/news/post/{id}', 'EditNewsPost')->name('edit.news.post');
        Route::post('/update/news/post', 'UpdateNewsPost')->name('update.news.post');
        
        Route::get('/delete/news/post/{id}', 'DeleteNewsPost')->name('delete.news.post');

        Route::get('/inactive/news/post/{id}', 'InactiveNewsPost')->name('inactive.news.post');
        Route::get('/active/news/post/{id}', 'ActiveNewsPost')->name('active.news.post');


    });// end category
});

//access for all
Route::get('/news/details/{id}/{slug}', [IndexController::class, 'NewsDetail']);

Route::get('/news/categories/{id}/{slug}', [IndexController::class, 'CatWiseNews']);
