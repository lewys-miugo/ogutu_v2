<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
    <title>Ogutu</title>
</head>

@extends('layout.layout')

@section('content')
    <div class="page-header bg-white">
        {{--    Banner--}}
        <div class=" h-1/2 lg:h-screen bg-white relative md:z-10">
            <!-- Image -->
            <img class="w-full h-52 md:h-80 lg:h-full object-cover "
                 src="{{url('/images/i5.jpeg')}}"
                 alt="Photo of Ogutu"
            >
            <div
                class="absolute bottom-0 left-2 text-xl sm:left-10 sm:text-4xl  md:text-6xl xl:text-7xl font-bold">
                <span class="text-white">My</span>
                <!-- <p class="text-black">My</p> -->
                <p class="text-red-500">Reflections</p>
            </div>
        </div>

        <!-- ARTICLES -->
        {{--        Reflections container--}}
        <div class="flex flex-col mt-3 md:flex-row md:flex-wrap justify-center items-center">
            @foreach($internalreflections as $internalreflection)
                <a href="{{route('reflections.show', $internalreflection->id)}}"
                   class="transition duration-200 ease-out transform hover:scale-105 my-2 w-5/6 h-64 rounded shadow-2xl md:w-2/5 lg:w-2/5 mx-2">
                    <img
                        class="w-full h-4/5 object-cover rounded-t"
                        src={{ asset("storage/{$internalreflection->image}") }} alt="">
                    <div class="flex justify-between items-center mr-2">
                        <p class="p-2 font-bold">{{ $internalreflection->title }}</p>
                        <p class="rounded-3xl text-white bg-red-600 px-2">{{ $internalreflection->tag }}</p>
                    </div>
                </a>
            @endforeach

        </div>
@endsection
