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
            <span class="text-white">Current</span>
            <!-- <p class="text-white">Moses</p> -->
            <p class="text-red-500">Interests</p>
        </div>
    </div>

    <div class="bg-white">
        <div id="experience" class="container mx-auto py-10 flex flex-col lg:flex-row item-center gap-20 bg-white">
            
            <div class="lg:w-2/3 my-auto flex flex-col gap-3 ">
                <h1 class="text-indigo-600 text-center font-bold text-2xl">Interests</h1>
                <!-- <h1 class="text-3xl font-medium">Associate Professor</h1>
                <h1 class="text-3xl font-medium">Convent university</h1>  -->
                <ol class="py-4 ml-20 list-disc flex flex-col  ">
            
                    @foreach($interest as $interest)
                        <li>
                            <h2 class="font-medium text-gray-900">{{$interest->title}}</h2>
                            <p class="px-4 mt-4 leading-relaxed text-gray-700">{{$interest->content}}</p>
                        </li>  
                    @endforeach                    
                </ol>                 
            </div>

            <div class="p-5 lg:p-0 lg:w-1/3 flex flex-wrap justify-between">
                <div class="w-full shadow-xl rounded-lg p-5 my-3 md:my-3 flex flex-col gap-2">
                    @foreach($gallery->slice(0,2) as $gallery)
                        <div class="w-full shadow-xl rounded-lg p-5 my-3 md:my-3 flex flex-col gap-2">

                            <img class="w-fit sm:items-center"
                                    src="{{asset('storage/'.$gallery->image)}}"
                                    alt="">
                            <p class="text-gray-600">{{$gallery->caption}}</p>
                        </div>
                    @endforeach    
                </div>       
            </div>

        </div>
    </div>

@endsection