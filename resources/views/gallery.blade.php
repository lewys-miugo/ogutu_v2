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

    <div class=" h-1/2 lg:h-screen bg-white relative md:z-10">
        <!-- bg-gradient-to-t from-indigo-200  -->


        <!-- Intro content -->

        <!-- Image -->
        <img class="absolute bottom-0 right-0 lg:left-0 mx-auto h-full w-full object-cover"
                
             src="{{url('/images/i8.jpeg')}}"
             alt="">
             <!-- $bio->iimage  -->

        <!-- Animated text -->
        <div
            class="absolute top-1/3 left-5 text-xl sm:left-10 sm:text-4xl md:left-1/4 md:text-6xl lg:left-5 xl:left-38 xl:text-7xl font-bold">
            <span class="text-white">Photos</span>
            <!-- <p class="text-white">Moses</p> -->
            <p class="text-red-500">& Moments</p>
        </div>
    </div>

    <div class="container mx-auto  lg:w-full bg-white ">
                    
            <div class="flex flex-col gap-3 items-center">
                <h1 class="text-indigo-600 font-bold text-2xl">Gallery</h1>
                <p class="w-1/2 text-center text-gray-600">
                    Media on my interactions, places I've been to and things I've been doing.
                </p>
            </div>
                        
            <div class="p-5 sm:p-0 flex flex-wrap justify-between">

                @foreach($gallery as $gallery)
                    <div class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-2">
                        <img class="w-fit sm:items-center"
                                src="{{asset('storage/'.$gallery->image)}}"
                                alt="Moses Ogutu images gallery photos">
                        <!-- <h1 class="font-medium text-lg">Biden' Rally</h1> -->
                        <p class="text-gray-600">{{$gallery->caption}}</p>
                    </div>
                @endforeach
            </div>
        </div> 

@endsection