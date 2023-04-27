<?php

use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ReflectionController;
use App\Models\Bio;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Gallery;
use App\Models\Interest;
use App\Models\Position;
use Illuminate\Support\Facades\Route;


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
// Route::get('about',function () {
//     return view('about');
// });

Route::get('profile',function () {
    $bio = Bio::first();
    $position = Position::all();
    $education = Education::all();
    $contacts = Contact::all();
    $gallery = Gallery::all();
    $interest = Interest::all();

    return view('profile',[
        'bio' => $bio,
        'position' => $position,
        'education' => $education,
        'contacts' => $contacts,
        'gallery' => $gallery,
        'interest' => $interest,
    ]);
});

Route::get('blog',function () {
    $contacts = Contact::all();

    return view('blog',[
        'contacts' => $contacts,

    ]);
});

Route::get('academia',function() {
    $contacts = Contact::all();

    return view('academia',[
        'contacts'=> $contacts,
    ]);
});

Route::get('/', function () {

    $bio = Bio::first();
    $position = Position::all();
    $education = Education::all();
    $contacts = Contact::all();
    $gallery = Gallery::all();
    $resume = \App\Models\Resume::first();

    return view('index', [
        'bio' => $bio,
        'position' => $position,
        'education' => $education,
        'contacts' => $contacts,
        'gallery' => $gallery,
        'resume' => $resume,
    ]);
});

Route::get('about', function () {
    $bio = Bio::first();
    $position = Position::all();
    $education = Education::all();
    $contacts = Contact::all();
    $gallery = Gallery::all();
    $interest = Interest::all();

    return view('about', [
        'bio' => $bio,
        'position' => $position,
        'education' => $education,
        'contacts' => $contacts,
        'gallery' => $gallery,
        'interest' => $interest,
    ]);
});


Route::get('/reflections', [ReflectionController::class, 'index'])->name('/reflections.index');
Route::get('/reflections/{reflection}', [ReflectionController::class, 'show'])->name('reflections.show');

Route::get('/publications', [PublicationController::class, 'index'])->name('publications.index');
Route::get('/publications/{reflection}', [PublicationController::class, 'show'])->name('publications.show');


// Route::get('publications', function () {
//     return view('publications');
// });

Route::get('/currentinterests', function () {
    $gallery = Gallery::all();
    $contacts = Contact::all();
    $interest = Interest::all();

    return view('/currentinterests', [
        'interest' => $interest,
        'gallery' => $gallery,
        'contacts' => $contacts,

    ]);
});

Route::get('gallery', function () {
    $gallery = Gallery::all();
    $contacts = Contact::all();


    return view('gallery', [
        'contacts' => $contacts,
        'gallery' => $gallery,
    ]);
});

Route::get('postview', function () {

    $contacts = Contact::all();

    return view('postview', [
        'contact' => $contacts,
    ]);
});

//Add this to bluehost
//Route::get("/storage/{extra}", function ($extra) {
//    return redirect("/public/storage/$extra");
//})->where('extra', '.*');

// Use this to run the storage link artisan command.
// Route::get('/foo', function () {
//     Artisan::call('storage:link');
// });
