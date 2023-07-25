<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\AcademiaComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\InterestComponent;
use App\Http\Livewire\GalleryComponent;
use App\Http\Livewire\ProfileComponent;
use App\Http\Livewire\MaintenanceComponent;
// use App\Http\Livewire\HomeBioComponent;


use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\HomeBannerComponent;
use App\Http\Livewire\Admin\AdminHomeBioComponent;
use App\Http\Livewire\Admin\AdminEditHomeBioComponent;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/',MaintenanceComponent::class)->name('maintenance.index');
// Route::get('/about',MaintenanceComponent::class)->name('maintenance.index');
// Route::get('/academia',MaintenanceComponent::class)->name('maintenance.index');
// Route::get('/blog',MaintenanceComponent::class)->name('maintenance.index');
// Route::get('/interest',MaintenanceComponent::class)->name('maintenance.index');
// Route::get('/gallery',MaintenanceComponent::class)->name('maintenance.index');
// Route::get('/profile',MaintenanceComponent::class)->name('maintenance.index');
// Route::get('/maintenance',MaintenanceComponent::class)->name('maintenance.index');

Route::get('/',HomeComponent::class)->name('home.index');
// Route::get('/home-bio',HomeBioComponent::class)->name('home.bio');
Route::get('/about',AboutComponent::class)->name('about.index');
Route::get('/academia',AcademiaComponent::class)->name('academia.index');
Route::get('/blog',BlogComponent::class)->name('blog.index');
Route::get('/interest',InterestComponent::class)->name('interest.index');
Route::get('/gallery',GalleryComponent::class)->name('gallery.index');
Route::get('/full-profile',ProfileComponent::class)->name('profile.index');
Route::get('/maintenance',MaintenanceComponent::class)->name('maintenance.index');


Route::middleware(['auth','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');

    Route::get('/admin/home-banner',HomeBannerComponent::class)->name('admin.home.banner');

    Route::get('/admin/admin-home-bio',AdminHomeBioComponent::class)->name('admin.home.bio');

    Route::get('/admin/admin-edit-home-bio',AdminEditHomeBioComponent::class)->name('admin.edit.home.bio');
});
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
