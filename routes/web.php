<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', function () {
            return view('welcome');
        });
        Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');
        Route::get('/whatsapp', function () {
            $number = config('services.whatsapp.number');

            return redirect()->away("https://wa.me/{$number}");
        })->name('whatsapp.redirect');
        Route::get('/resume/download', function () {
            return response()->download(
                storage_path('app/public/resume/Mostafa Henidy.pdf'),
                'Mostafa_Henidy_Resume.pdf'
            );
        })->name('resume.download');
    }
);
