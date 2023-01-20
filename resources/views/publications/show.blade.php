
@extends('layout.layout')
@section('content')
    <div class="m-auto bg-white w-max-">
        <div class="relative">
            <img
                class="w-full h-52 object-cover lg:mx-auto lg:max-w-6xl"
                src="{{ asset("storage/{$internal_publication->image}") }}"
                alt="reflection image"
            >
            <div class="absolute top-2 left-2 text-black lg:left-7">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18"/>
                </svg>
            </div>
        </div>
        <div class="content-area p-3 md:max-w-2xl md:mx-auto lg:max-w-6xl">
            <h1 class="font-bold font text-2xl mb-2">{{$internal_publication->title}}</h1>
            <div>
                {!!  $internal_publication->content !!}
            </div>
        </div>
    </div>

@endsection