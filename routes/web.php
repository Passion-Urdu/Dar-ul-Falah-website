<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\WadgeController;
use App\Models\Banner;
use Illuminate\Support\Facades\Route;

// Booking Routes Starts Here

Route::get('/{menu_url}/{id}', [PageController::class , 'page_1'])->name('page_1.index');


// Route::get('/10-Day-Umrah', function () {
//     return view('website/10-Day-Umrah');
// });

// Route::get('/15-Day-Umrah', function () {
//     return view('website/15-Day-Umrah');
// });

// Route::get('/21-Day-Umrah', function () {
//     return view('website/21-Day-Umrah');
// });


// Route::get('/28-Day-Umrah', function () {
//     return view('website/28-Day-Umrah');
// });


Route::get('/Package-Calculator-Pro', function () {
    return view('website/Package-Calculator-Pro');
});

Route::get('/Umrah-Info', function () {
    return view('website/Umrah-Info');
});

Route::get('/International', function () {
    return view('website/International');
});


Route::get('/Domestic', function () {
    return view('website/Domestic');
});



Route::get('/Madinah-Hotels', function () {
    return view('website/Madinah-Hotels');
});


Route::middleware('Is_Valid')->group(function(){

    // Dashboard Routes Starts  Here


    Route::get('/dashboard', [DashboardController::class , 'index'])->name('dashboard.index');

    // Menu Routes Starts Here


    Route::get('/dashboard/menus/show' , [MenuController::class , 'show'])->name('menus.show');

    Route::get('/dashboard/menus/create' , [MenuController::class , 'create'])->name('menus.create');

    Route::post('/dashboard/menus/store' , [MenuController::class , 'store'])->name('menus.store');

    Route::get('/dashboard/menus/edit/{id}' , [MenuController::class , 'edit'])->name('menus.edit');

    Route::put('/dashboard/menus/update/{id}' , [MenuController::class , 'update'])->name('menus.update');

    Route::delete('/dashboard/menus/destroy/{id}' , [MenuController::class , 'destroy'])->name('menus.destroy');


    // Slider Routes Starts Here


    Route::get('/dashboard/sliders/show' , [SliderController::class , 'show'])->name('sliders.show');

    Route::get('/dashboard/sliders/create' , [SliderController::class , 'create'])->name('sliders.create');

    Route::post('/dashboard/sliders/store' , [SliderController::class , 'store'])->name('sliders.store');

    Route::get('/dashboard/sliders/edit/{id}' , [SliderController::class , 'edit'])->name('sliders.edit');

    Route::put('/dashboard/sliders/update/{id}' , [SliderController::class , 'update'])->name('sliders.update');

    Route::delete('/dashboard/sliders/destroy/{id}' , [SliderController::class , 'destroy'])->name('sliders.destroy');


    //Banner Route Starts Here


    Route::get('/dashboard/banners/show' , [BannerController::class , 'show'])->name('banners.show');

    Route::get('/dashboard/banners/create' , [BannerController::class , 'create'])->name('banners.create');

    Route::post('/dashboard/banners/store' , [BannerController::class , 'store'])->name('banners.store');

    Route::get('/dashboard/banners/edit/{id}' , [BannerController::class , 'edit'])->name('banners.edit');

    Route::put('/dashboard/banners/update/{id}' , [BannerController::class , 'update'])->name('banners.update');

    Route::delete('/dashboard/banners/destroy/{id}' , [BannerController::class , 'destroy'])->name('banners.destroy');

    //Category Routes Starts Here


    Route::get('/dashboard/categories/show' , [CategoryController::class , 'show'])->name('categories.show');

    Route::get('/dashboard/categories/create' , [CategoryController::class , 'create'])->name('categories.create');

    Route::post('/dashboard/categories/store' , [CategoryController::class , 'store'])->name('categories.store');

    Route::get('/dashboard/categories/edit/{id}' , [CategoryController::class , 'edit'])->name('categories.edit');

    Route::put('/dashboard/categories/update/{id}' , [CategoryController::class , 'update'])->name('categories.update');

    Route::delete('/dashboard/categories/delete/{id}' , [CategoryController::class , 'destroy'])->name('categories.destroy');

    //SubCategory Routes Starts Here


    Route::get('/dashboard/subcategories/show' , [SubCategoryController::class , 'show'])->name('subcategories.show');

    Route::get('/dashboard/subcategories/create' , [SubCategoryController::class , 'create'])->name('subcategories.create');

    Route::post('/dashboard/subcategories/store' , [SubCategoryController::class , 'store'])->name('subcategories.store');

    Route::get('/dashboard/subcategories/edit/{id}' , [SubCategoryController::class , 'edit'])->name('subcategories.edit');

    Route::put('/dashboard/subcategories/update/{id}' , [SubCategoryController::class , 'update'])->name('subcategories.update');

    Route::delete('/dashboard/subcategories/delete/{id}' , [SubCategoryController::class , 'destroy'])->name('subcategories.destroy');
    
    
    //price Routes Starts Here
    
     Route::get('/dashboard/prices/show' , [PriceController::class , 'show'])->name('prices.show');
     
     Route::get('/dashboard/prices/create' , [PriceController::class , 'create'])->name('prices.create');
     
     Route::post('/dashboard/prices/store' , [PriceController::class , 'store'])->name('prices.store');
     
     Route::get('/dashboard/prices/edit/{id}' , [PriceController::class , 'edit'])->name('prices.edit');
     
     Route::put('/dashboard/prices/update/{id}' , [PriceController::class , 'update'])->name('prices.update');
     
      Route::delete('/dashboard/prices/delete/{id}' , [PriceController::class , 'destroy'])->name('prices.destroy');
      
      
     //wadge Routes Starts Here
     
     
     Route::get('/dashboard/wadges/show' , [WadgeController::class , 'show'])->name('wadges.show');
     
     Route::get('/dashboard/wadges/create' , [WadgeController::class , 'create'])->name('wadges.create');
     
     Route::post('/dashboard/wadges/store' , [WadgeController::class , 'store'])->name('wadges.store');
     
     Route::get('/dashboard/wadges/edit/{id}' , [WadgeController::class , 'edit'])->name('wadges.edit');
     
     Route::put('/dashboard/wadges/update/{id}' , [WadgeController::class , 'update'])->name('wadges.update');
     
     Route::delete('/dashboard/wadges/delete/{id}' , [WadgeController::class , 'destroy'])->name('wadges.destroy');
     

    //Assets Route Starts Here


    Route::get('/dashboard/package-assets/show' , [AssetController::class , 'show'])->name('assets.show');

    Route::get('/dashboard/package-assets/create' , [AssetController::class , 'create'])->name('assets.create');

    Route::post('/dashboard/package-assets/store' , [AssetController::class , 'store'])->name('assets.store');

    Route::get('/dashboard/package-assets/edit/{id}' , [AssetController::class , 'edit'])->name('assets.edit');

    Route::put('/dashboard/package-assets/update/{id}' , [AssetController::class , 'update'])->name('assets.update');

    Route::delete('/dashboard/package-assets/delete/{id}' , [AssetController::class , 'destroy'])->name('assets.destroy');
    
    
        
    //Pakage Route Starts Here
    
    Route::get('/dashboard/packages/show', [PackageController::class , 'show'])->name('packages.show');
    
    Route::get('/dashboard/packages/edit/{id}', [PackageController::class , 'edit'])->name('packages.edit');
    
    Route::put('/dashboard/packages/update/{id}', [PackageController::class , 'update'])->name('packages.update');
    
    Route::delete('/dashboard/packages/delete/{id}', [PackageController::class , 'destroy'])->name('packages.destroy');
    

    //User Route Starts Here


    Route::get('/dashboard/users/show' , [UserController::class , 'show'])->name('users.show');

    Route::get('/dashboard/users/create' , [UserController::class , 'create'])->name('users.create');

    Route::post('/dashboard/users/store' , [UserController::class , 'store'])->name('users.store');

    Route::get('/dashboard/users/edit/{id}' , [UserController::class , 'edit'])->name('users.edit');

    Route::put('/dashboard/users/update/{id}' , [UserController::class , 'update'])->name('users.update');

    Route::delete('/dashboard/users/delete/{id}' , [UserController::class , 'destroy'])->name('users.destroy');

});


//Pakage Route Continues Here


Route::get('/Package-Calculator-Client', [PackageController::class , 'index'])->name('packages.index');

Route::post('/Package-Calculator-Client/store' , [PackageController::class , 'store'])->name('packages.store');

//Home Route Starts Here

Route::get('/' , [HomeController::class , 'index'])->name('home.index');

//Hotel Route Starts Here

Route::get('/hotels' , [HotelController::class , 'index'])->name('hotel.index');

Route::get('/hotels/show/{id}' , [HotelController::class , 'show'])->name('hotel.show');

//Login Route Starts Here

Route::get('/login' , [LoginController::class , 'index'])->name('login.index');

Route::post('/login/auth' , [LoginController::class , 'auth'])->name('login.auth');

Route::get('/logout' , [LoginController::class , 'logout'])->name('in.logout');
