<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\CropDiagnosisController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketplaceController;

// Route for the home page
Route::get('/', function () {
    return view('welcome');
});

// Route for the dashboard, protected by auth and verified middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/weather-forecast-advisory', function () {
        return view('weather-forecast-advisory');
    })->name('weather.forecast.advisory');

    Route::get('/mobile-app-integration', function () {
        return view('mobile-app-integration');
    })->name('mobile.app.integration');

    Route::get('/digital-marketplace', function () {
        return view('digital-marketplace');
    })->name('digital.marketplace');

    Route::get('/farm-management-tools', function () {
        return view('farm-management-tools');
    })->name('farm.management.tools');

    Route::get('/educational-resources-training', function () {
        return view('educational-resources-training');
    })->name('educational.resources.training');

    Route::get('/crop-disease-diagnosis', function () {
        return view('crop-disease-diagnosis');
    })->name('crop.disease.diagnosis');

    Route::get('/community-networking-collaboration', function () {
        return view('community-networking-collaboration');
    })->name('community.networking.collaboration');

    Route::get('/financial-services-access', function () {
        return view('financial-services-access');
    })->name('financial.services.access');

    // Crop Disease Diagnosis Routes
    Route::post('/upload-diagnosis', [CropDiagnosisController::class, 'uploadDiagnosis'])->name('upload.diagnosis');

    // Consultation Booking Route
    Route::post('/book-consultation', [ConsultationController::class, 'bookConsultation'])->name('book.consultation');

   // Order Management Routes
Route::get('/order-management', [OrderController::class, 'index'])->name('order.management'); // To display the orders and products
Route::post('/order', [OrderController::class, 'store'])->name('order.store'); // To store a new order
Route::get('/order/{id}/update', [OrderController::class, 'update'])->name('order.update'); // To update the order status
Route::get('/order', [OrderController::class, 'index'])->name('orders.index'); // Optional, if you want a separate route for viewing orders


   // Product Management Routes
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

// This is the route for showing a single product. Keep the naming consistent ('products' plural).
//Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.details');
 Route::get('/products/{product}', 'ProductController@show')->name('product.details');
    

// Routes for authentication
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Route to handle fetching weather data
Route::post('/get-weather', [WeatherController::class, 'getWeather'])->name('get.weather');
Route::get('/digital-marketplace', [MarketplaceController::class, 'index'])->name('digital.marketplace');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
// Include Laravel's default authentication routes
require __DIR__.'/auth.php';
