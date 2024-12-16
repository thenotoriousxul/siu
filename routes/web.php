<?php
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReporteVentasController;



Route::get('/rolempleado', function () {
    return view('rolempleado');
})->middleware('auth', 'role:empleado'); 


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register-employee', function () {
    return view('employees.create');
});

Route::get('/register-customer', function () {
    return view('customers.create');
});

Route::get('/register-territory', function () {
    return view('territories.create');
});


Route::get('/orders/create', [RegistrationController::class, 'createOrderForm'])->name('orders.create');
Route::post('/orders', [RegistrationController::class, 'registerOrder'])->name('orders.store');

Route::post('/register-employee', [RegistrationController::class, 'registerEmployee']);
Route::post('/register-customer', [RegistrationController::class, 'registerCustomer']);
Route::post('/register-territory', [RegistrationController::class, 'registerTerritory']);


Route::middleware(['role:admin'])->get('/reporte-ventas', [ReporteVentasController::class, 'index'])->name('reporte-ventas');

