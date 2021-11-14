<?php

use App\Http\Livewire\Admin\Year;
use App\Http\Livewire\Admin\Admin;
use App\Http\Livewire\Admin\Batch;
use App\Http\Livewire\Admin\Course;
use App\Http\Livewire\Admin\AboutUs;
use App\Http\Livewire\Admin\Session;
use App\Http\Livewire\Admin\Teacher;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\HeadQuote;
use App\Http\Livewire\Admin\SiteConfig;

Route::middleware(['auth', 'verified', 'admin'])->get('/', Admin::class)->name('dashboard');
Route::get('/site-config', SiteConfig::class)->name('siteconfig');
Route::get('/about-us', AboutUs::class)->name('aboutus');
Route::get('/head-quote', HeadQuote::class)->name('headquote');
Route::get('/year', Year::class)->name('year');
Route::get('/session', Session::class)->name('session');
Route::get('/batch', Batch::class)->name('batch');
Route::get('/course', Course::class)->name('course');
Route::get('/teacher', Teacher::class)->name('teacher');
