<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\InternalPublication;
use App\Models\ExternalPublication;


class PublicationController extends Controller
{
    //
    public function index()
    {
        return view('publications.index',[
            'contact'=> Contact::all(),
            'internalpublications' => InternalPublication::all()->sortByDesc('created_at'),
            'externalpublications' => ExternalPublication::all()->sortByDesc('created_at'),

        ]);
    }

    public function show($publication)
    {
        return view('publications.show',[
            'contact'=>Contact::all(),
            'internal_publication'=>InternalPublication::where('id', $publication)->firstOrFail(),
        ]);
    }
}
