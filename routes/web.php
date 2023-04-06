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
use App\Http\Controllers\Admin\OptionsController;
use UniSharp\Laravel\LaravelFilemanager\Lfm;


use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\NewsController;





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
        'options' => OptionsController::class,
    ]);
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
         Route::get('/', [IndexController::class, 'homepage'])->name('/');
         Route::get('about', [AboutController::class, 'about'])->name('about');
         Route::get('blogs', [NewsController::class, 'list'])->name('blogs');
         Route::get('blogs/{slug}', [NewsController::class, 'show'])->name('blog');
 });



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    UniSharp\LaravelFilemanager\Lfm::routes();
});


