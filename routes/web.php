<?php

use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Middleware\IsAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome']);

//Admin Middleware
Route::middleware([IsAdmin::class])->group(function () {
    Route::prefix('/continent')->group(function () {
        Route::get('list', [App\Http\Controllers\ContinentController::class, 'liste'])->name('continent.list');
        Route::post('save', [App\Http\Controllers\ContinentController::class, 'store'])->name('store.continent');
    });


    Route::prefix('/pays')->group(function () {
        Route::get('list', [App\Http\Controllers\PaysController::class, 'liste'])->name('pays.list');
        Route::post('save', [App\Http\Controllers\PaysController::class, 'store'])->name('store.pays');
    });


    Route::prefix('/region')->group(function () {
        Route::get('list', [App\Http\Controllers\RegionController::class, 'liste'])->name('region.list');
        Route::post('save', [App\Http\Controllers\RegionController::class, 'store'])->name('store.region');
    });



    Route::prefix('/departement')->group(function () {
        Route::get('list', [App\Http\Controllers\DepartementController::class, 'liste'])->name('departement.list');
        Route::post('save', [App\Http\Controllers\DepartementController::class, 'store'])->name('store.departement');
    });

    Route::prefix('/commune')->group(function () {
        Route::get('list', [App\Http\Controllers\CommuneController::class, 'liste'])->name('commune.list');
        Route::post('save', [App\Http\Controllers\CommuneController::class, 'store'])->name('store.commune');
    });



    Route::prefix('/quartier')->group(function () {
        Route::get('list', [App\Http\Controllers\QuartierController::class, 'liste'])->name('quartier.list');
        Route::post('save', [App\Http\Controllers\QuartierController::class, 'store'])->name('store.quartier');
    });


    Route::prefix('/garniture')->group(function () {
        Route::get('list', [App\Http\Controllers\GarnitureController::class, 'liste'])->name('garniture.list');
        Route::post('save', [App\Http\Controllers\GarnitureController::class, 'store'])->name('store.garniture');
    });



    Route::prefix('/status')->group(function () {
        Route::get('list', [App\Http\Controllers\StatusController::class, 'liste'])->name('status.list');
        Route::post('save', [App\Http\Controllers\StatusController::class, 'store'])->name('store.status');
    });


    Route::prefix('/type')->group(function () {
        Route::get('list', [App\Http\Controllers\TypeController::class, 'liste'])->name('type.list');
        Route::post('save', [App\Http\Controllers\TypeController::class, 'store'])->name('store.type');
    });

    Route::prefix('/usertype')->group(function () {
        Route::get('list', [App\Http\Controllers\TypeUserController::class, 'liste'])->name('usertype.list');
        Route::post('save', [App\Http\Controllers\TypeUserController::class, 'store'])->name('store.usertype');
    });

    Route::prefix('/user')->group(function () {
        Route::get('list', [App\Http\Controllers\UserController::class, 'index'])->name('user.list');
    });


    Route::prefix('/role')->group(function () {
        Route::get('list', [App\Http\Controllers\RoleController::class, 'liste'])->name('role.list');
        Route::post('save', [App\Http\Controllers\RoleController::class, 'store'])->name('store.role');
    });

    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');



    Route::prefix('/roleUser')->group(function () {
        Route::get('list', [App\Http\Controllers\RoleController::class, 'role'])->name('userrole.list');
        Route::post('save', [App\Http\Controllers\RoleController::class, 'save'])->name('store.userRole');
    });


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
//End Admin Middleware

Route::get('/users', [App\Http\Controllers\UtilisateurController::class, 'index'])->name('user.home');

Auth::routes();
