<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ExternalPublication;
use App\Models\InternalPublication;


class PublicationController extends Controller
{
    //
    public function index()
    {
        return view('publications.index', [
            'contacts' => Contact::all(),
            'internalpublications' => InternalPublication::all()->sortByDesc('created_at'),
            'externalpublications' => ExternalPublication::all()->sortByDesc('created_at'),

        ]);
    }

    public function show($publication)
    {
        return view('publications.show', [
            'contacts' => Contact::all(),
            'internal_publication' => InternalPublication::where('id', $publication)->firstOrFail(),
        ]);
    }
}
