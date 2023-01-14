<?php

use Illuminate\Support\Facades\Route;
use App\Models\Bio;
use App\Models\Position;
use App\Models\Education;
use App\Models\Contact;




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

Route::get('/', function () {

    $bio = Bio::first();
    $position=Position::all();
    $education=Education::all();
    $contact=Contact::all();

    return view('index',[
        'bio' => $bio,
        'position'=>$position,
        'education'=>$education,
        'contact'=>$contact,
    ]);
});

Route::get('about',function() {
    $contact=Contact::all();

    return view('about',[
        'contact'=>$contact,

    ]);
});

Route::get('reflections',function(){
    return view('reflections');
});

Route::get('publications', function(){
    return view('publications');
});

Route::get('currentinterests', function(){
    return view('currentinterests');
});

Route::get('gallery', function(){
    return view('gallery');
});