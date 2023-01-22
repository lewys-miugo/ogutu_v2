

@extends('layout.layout')
@section('content')
    <div class="m-auto bg-white w-max-">
        <div class="relative">
            <img
                class="w-full h-52 object-cover"
                src="{{ asset("storage/{$internal_reflection->image}") }}"
                alt="reflection image"
            >
            <div class="absolute top-2 left-2 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18"/>
                </svg>
            </div>
        </div>
        <div class="content-area p-3 md:max-w-2xl md:mx-auto lg:max-w-6xl">
            <h1 class="font-bold font text-2xl mb-2">{{$internal_reflection->title}}</h1>
            <time class="block text-xs text-gray-500">{{$internal_reflection->time}}</time>
            <div class="mt-4">
                {!!  $internal_reflection->content !!}
            </div>
        </div>
    </div>

@endsection
