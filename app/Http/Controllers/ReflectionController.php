<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ExternalReflection;
use App\Models\InternalReflection;

class ReflectionController extends Controller
{
    //
    public function index()
    {
        return view('reflections.index', [
            'contacts' => Contact::all(),
            'internalreflections' => InternalReflection::all()->sortByDesc('created_at'),
            'externalreflections' => ExternalReflection::all()->sortByDesc('created_at')
        ]);
    }

    public function show($reflection)
    {
        return view('reflections.show', [
            'contacts' => Contact::all(),
            'internal_reflection' => InternalReflection::where('id', $reflection)->firstOrFail(),
        ]);
    }
}
