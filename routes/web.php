<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PublicBeritaController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Admin\RegistrationsController;
use App\Http\Controllers\DashboardChartController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/redaksi', function () {
    return view('redaksi');
})->name('redaksi');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/template', function () {
    return view('template');
})->name('template');

Route::get('/registrasi', function () {
    return view('registrasi');
})->name('registrasi');

Route::get('/ebook', function () {
    return view('public.landing.ebook');
})->name('ebook');

Route::get('/artikel', function () {
    return view('public.landing.artikel');
})->name('artikel');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('berita', \App\Http\Controllers\Admin\BeritaController::class);
    Route::delete('admin/berita/{berita}', [BeritaController::class, 'destroy'])->name('berita.destroy');

    Route::get('/registrations', [RegistrationsController::class, 'index'])->name('admin.registrations.index');

    Route::patch('/admin/registrations/{id}/status', [RegistrationsController::class, 'updateStatus'])
        ->name('admin.registrations.status');

    Route::delete('/admin/registrations/{id}', [RegistrationsController::class, 'destroy'])
        ->name('admin.registrations.destroy');

    Route::get('/admin/chart-data', [DashboardChartController::class, 'data'])->name('admin.chart.data');
    Route::get('/admin/dashboard', [DashboardChartController::class, 'index'])->name('admin.dashboard');
});

Route::get('/', [LandingPageController::class, 'index'])->name('home');


Route::name('public.')->group(function () {
    Route::get('/berita', [PublicBeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/{id}', [PublicBeritaController::class, 'show'])->name('berita.show');
    Route::get('/registration', [RegistrationController::class, 'showForm'])->name('registration.form');
    Route::post('/registration', [RegistrationController::class, 'store'])->name('registration.store');
});

require __DIR__ . '/auth.php';
