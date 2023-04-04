<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\CooperationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\RefineryController;
use UniSharp\Laravel\LaravelFilemanager\Lfm;





Auth::routes();

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:admin'])->prefix('dashboard')->group(static function () {
    Route::get('/', [HomeController::class, 'index'])->name('homeAdmin');
    Route::resources([
        'slider' => SliderController::class,
        'page' => PageController::class,
        'article' => ArticleController::class,
        'partner' => PartnerController::class,
        'cooperation' => CooperationController::class,
        'service' => ServiceController::class,
        'refinery' => RefineryController::class,
    ]);
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
         /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
 });



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    UniSharp\LaravelFilemanager\Lfm::routes();
});


