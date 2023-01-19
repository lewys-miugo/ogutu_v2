<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\InternalReflection;

class ReflectionController extends Controller
{
    //
    public function index()
    {
        return view('reflections.index', [
            'contact' => Contact::all(),
            'internalreflections' => InternalReflection::all()->sortByDesc('created_at'),
        ]);
    }

    public function show($reflection)
    {
        return view('reflections.show', [
            'contact' => Contact::all(),
            'internal_reflection' => InternalReflection::where('id', $reflection)->firstOrFail(),
        ]);
    }
}
