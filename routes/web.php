<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Product As Product;
use App\Http\Controllers\Admin\Dashboard As Dashboard;
use App\Http\Controllers\Admin\Customer AS Customer;
use App\Http\Controllers\Admin\Category As Category;
use App\Http\Controllers\Admin\Order As Order;
use App\Http\Controllers\Admin\Sweety As Sweety;
use App\Http\Controllers\Admin\Topping As Topping;
// use App\Http\Controllers\Promote\index As index;
use App\Http\Controllers\Promote\promote As promote;



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
    return view('promote.index');
});

//route promote
//route index
Route::get('/index',[promote::class, 'index'])->name('promote.index');
//route menu
Route::get('/promote/menu', [promote::class, 'menu'])->name('promote.menu');
//route order
Route::get('/promote/order', [promote::class, 'order'])->name('promote.order');
//route contact
Route::get('/promote/contact', [promote::class, 'contact'])->name('promote.contact');
Route::get('/promote/detail', [promote::class, 'detail'])->name('promote.detail');



// });
// Route::get('/api/data', [Product::class, 'getdata'])->name('getdata');

Route::prefix('api')->name('api.')->group(function(){

    Route::get('/', function () {return view('welcome');});
    Route::get('data', [Product::class, 'getdata'])->name('getdata');
});



Route::prefix ('admin')->name('admin.') ->group (function (){

    //route dashboard
    Route::get('/',[Dashboard::class, 'index'])->name('index');

    //customer
    Route::prefix('customer')->name('customer.')->group(function(){

        Route::get('/',[Customer::class, 'index'])->name('index');
        Route::get('add', [Product::class, 'add'])->name('add');
        Route::get('edit', [Product::class, 'edit'])->name('edit');

    });

    //product
    Route::prefix ('product')->name('product.') ->group (function (){

        Route::get('/', [Product::class, 'index'])->name('index');

        Route::get('add', [Product::class, 'add'])->name('add');
        Route::post('add', [Product::class, 'insert'])->name('insert');

        Route::get('edit/{id}', [Product::class, 'edit'])->name('edit');
        Route::post('edit/{id}', [Product::class, 'update'])->name('update');

        Route::get('delete/{id}', [Product::class, 'delete'])->name('delete');




    });

    //category
    Route::prefix('category')->name('category.')->group(function(){

        Route::get('/', [Category::class, 'index'])->name('index');

        Route::get('add', [Category::class, 'add'])->name('add');
        Route::post('add', [Category::class, 'insert'])->name('insert');

        Route::get('edit/{id}', [Category::class, 'edit'])->name('edit');
        Route::post('edit/{id}', [Category::class, 'update'])->name('update');

        Route::get('delete/{id}', [Category::class, 'delete'])->name('delete');
    });

    //order
    Route::prefix('order')->name('order.')->group(function(){

        route::get('/',[Order::class,'index'])->name('index');
        route::get('add',[Order::class,'add'])->name('add');

    });

    //sweety
    Route::prefix('sweety')->name('sweety.')->group(function(){

        route::get('/',[Sweety::class,'index'])->name('index');
        route::get('add',[Sweety::class,'add'])->name('add');
        route::get('edit',[Sweety::class,'edit'])->name('edit');

    });

    //topping
    Route::prefix('topping')->name('topping.')->group(function(){

        route::get('/',[Topping::class,'index'])->name('index');

        Route::get('add', [Topping::class, 'add'])->name('add');
        Route::post('add', [Topping::class, 'insert'])->name('insert');

        Route::get('edit/{id}', [Topping::class, 'edit'])->name('edit');
        Route::post('edit/{id}', [Topping::class, 'update'])->name('update');

        Route::get('delete/{id}', [Topping::class, 'delete'])->name('delete');

    });


});

//route login
Route::get('/login', [AuthenticatedSessionController::class, 'login'])->name('login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
