<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $packages = \App\Models\Package::all();
    return view('home', compact('packages'));
});
Route::get('/community', function () {
    return view('community');
});
Route::get('/partner', function () {
    return view('partner');
});
Route::get('/elearning', function () {
    return view('elearning');
});
Route::get('/applypartner', function () {
    return view('applypartner');
});Route::get('/find', function () {
    return view('find');
});
Route::get('/job', function () {
    return view('job');
});
Route::get('/partner', function () {
    return view('partner');
});
Route::get('/learning', function () {
    return view('learning');
});
Route::get('/community', function () {
    return view('community');
});
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PackageController;

Route::get('/home', function () {
    $packages = \App\Models\Package::all();
    return view('home', compact('packages'));
});

// Admin Auth Routes
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Dashboard Routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    // Redirect /admin to /admin/packages
    Route::get('/', function () {
        return redirect()->route('admin.packages.index');
    });

    // Package Resource Routes
    Route::resource('packages', PackageController::class);
});

// Helper Route to Serve Storage Files securely (bypasses Nginx static file 404 intercept on Hostinger)
Route::get('/file-serve', function (\Illuminate\Http\Request $request) {
    $path = $request->query('path');
    if (!$path) abort(404);
    
    $filePath = \Illuminate\Support\Facades\Storage::disk('public')->path($path);
    if (!file_exists($filePath)) {
        abort(404, 'File not found');
    }
    
    return response()->file($filePath);
})->name('file.serve');