<?php

use App\Models\Property;
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
    return view('layout');
});

Route::prefix('admin')->group(function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/property_management', function () {
        
        return view('admin.property.index');
    });
    
    Route::get('/property_management/edit', function () {
        
        return view('admin.property.edit');
    });
    
    Route::get('/property_data', function(){
        $properties = Property::all();

        return response()->json(['data' => $properties]);
    })->name('properties.data');

});