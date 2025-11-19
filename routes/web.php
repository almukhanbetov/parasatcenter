<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CommentController;

Route::middleware("guest")->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_store', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_store');

    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_store', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_store');
});
Route::middleware('auth')->group(function () {
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::get('/student', [SiteController::class, 'student'])->name('site.student');
    Route::get('/studentShow/{student}', [SiteController::class, 'studentShow'])->name('site.student.show');
});
Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/about', [SiteController::class, 'about'])->name('site.about');
Route::get('/service', [SiteController::class, 'service'])->name('site.service');
Route::get('/site/service/{service}', [SiteController::class, 'serviceDesc'])->name('site.service.desc');
Route::get('/course/{kind}', [SiteController::class, 'courseKind'])->name('site.course.kind');
Route::get('/course', [SiteController::class, 'course'])->name('site.course');
Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');
Route::get('/search', [SiteController::class, 'search'])->name('site.search');

// Route::get('/document', [\App\Http\Controllers\ProgramController::class, 'index'])->name('document.index')->middleware('auth');
// Route::delete('/programs/{document}', [\App\Http\Controllers\ProgramController::class, 'destroy'])->name('programs.destroy')->middleware('auth','is_admin');
// Route::post('/document/{document}/comments', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');
// Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy')->middleware('auth');
// Удаление (добавляем метод destroy в тот же контроллер)



Route::group(['prefix' => 'admin'], function () {
    Route::get('/', \App\Http\Controllers\Admin\IndexController::class)->name('admin.index');

    Route::group(['prefix' => 'course'], function () {
        Route::get('/', App\Http\Controllers\Admin\Course\IndexController::class)->name('admin.course.index');
        Route::post('/', App\Http\Controllers\Admin\Course\StoreController::class)->name('admin.course.store');
        Route::get('/create', App\Http\Controllers\Admin\Course\CreateController::class)->name('admin.course.create');
        Route::get("/{course}", \App\Http\Controllers\Admin\Course\ViewController::class)->name('admin.course.view');
        Route::get("/{course}/edit", \App\Http\Controllers\Admin\Course\EditController::class)->name('admin.course.edit');
        Route::patch("/{course}", \App\Http\Controllers\Admin\Course\UpdateController::class)->name('admin.course.update');
        Route::delete("/{course}", \App\Http\Controllers\Admin\Course\DeleteController::class)->name('admin.course.destroy');
    });

    Route::group(['prefix' => 'service'], function () {
        Route::get('/', App\Http\Controllers\Admin\Service\IndexController::class)->name('admin.service.index');
        Route::post('/', App\Http\Controllers\Admin\Service\StoreController::class)->name('admin.service.store');
        Route::get('/create', App\Http\Controllers\Admin\Service\CreateController::class)->name('admin.service.create');
        Route::get("/{service}", \App\Http\Controllers\Admin\Service\ViewController::class)->name('admin.service.view');
        Route::get("/{service}/edit", \App\Http\Controllers\Admin\Service\EditController::class)->name('admin.service.edit');
        Route::patch("/{service}", \App\Http\Controllers\Admin\Service\UpdateController::class)->name('admin.service.update');
        Route::delete("/{service}", \App\Http\Controllers\Admin\Service\DeleteController::class)->name('admin.service.destroy');
    });


    Route::group(['prefix' => 'user'], function () {
        Route::get('/', App\Http\Controllers\Admin\User\IndexController::class)->name('admin.user.index');
        Route::post('/', App\Http\Controllers\Admin\User\StoreController::class)->name('admin.user.store');
        Route::get('/create', App\Http\Controllers\Admin\User\CreateController::class)->name('admin.user.create');
        Route::get("/{user}", \App\Http\Controllers\Admin\User\ViewController::class)->name('admin.user.view');
        Route::get("/{user}/edit", \App\Http\Controllers\Admin\User\EditController::class)->name('admin.user.edit');
        Route::patch("/{user}", \App\Http\Controllers\Admin\User\UpdateController::class)->name('admin.user.update');
        Route::delete("/{user}", \App\Http\Controllers\Admin\User\DeleteController::class)->name('admin.user.delete');
    });
    Route::group(['prefix' => 'student'], function () {
        Route::get('/', App\Http\Controllers\Admin\Student\IndexController::class)->name('admin.student.index');
        Route::post('/', App\Http\Controllers\Admin\Student\StoreController::class)->name('admin.student.store');
        Route::get('/create', App\Http\Controllers\Admin\Student\CreateController::class)->name('admin.student.create');
        Route::get("/{student}", \App\Http\Controllers\Admin\Student\ViewController::class)->name('admin.student.view');
        Route::get("/{student}/edit", \App\Http\Controllers\Admin\Student\EditController::class)->name('admin.student.edit');
        Route::patch("/{student}", \App\Http\Controllers\Admin\Student\UpdateController::class)->name('admin.student.update');
        Route::delete("/{student}", \App\Http\Controllers\Admin\Student\DeleteController::class)->name('admin.student.destroy');
    });
    Route::group(['prefix' => 'firm'], function () {
        Route::get('/', App\Http\Controllers\Admin\Firm\IndexController::class)->name('admin.firm.index');
        Route::post('/', App\Http\Controllers\Admin\Firm\StoreController::class)->name('admin.firm.store');
        Route::get('/create', App\Http\Controllers\Admin\Firm\CreateController::class)->name('admin.firm.create');
        Route::get("/{firm}", \App\Http\Controllers\Admin\Firm\ViewController::class)->name('admin.firm.view');
        Route::get("/{firm}/edit", \App\Http\Controllers\Admin\Firm\EditController::class)->name('admin.firm.edit');
        Route::patch("/{firm}", \App\Http\Controllers\Admin\Firm\UpdateController::class)->name('admin.firm.update');
        Route::delete("/{firm}", \App\Http\Controllers\Admin\Firm\DeleteController::class)->name('admin.firm.delete');
    });
});
