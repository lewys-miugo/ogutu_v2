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
            <span class="text-white">About</span>
            <!-- <p class="text-white">Moses</p> -->
            <p class="text-red-500">Me</p>
        </div>
    </div>

    <div class="container mx-auto  lg:w-full bg-white ">
                    
            <div class="flex flex-col gap-3 items-center">
                <h1 class="text-indigo-600 font-bold text-2xl">Gallery</h1>
                <p class="w-1/2 text-center text-gray-600">
                    Media on my interactions, places I've been to and showcasing my work.
                </p>
            </div>
                        
            <div class="p-5 sm:p-0 flex flex-wrap justify-between">
                
                <div class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-2">
                    <img class="w-fit sm:items-center"
                            src="https://imgs.search.brave.com/LUVfQoQ64vsjW0PdbA-GI5RHyrxIlOTr0iF9GslALmM/rs:fit:711:225:1/g:ce/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5Y/S1FLaHcwWlJpc242/bkVDQURiZEpnSGFF/OCZwaWQ9QXBp"
                            alt="">
                    <h1 class="font-medium text-lg">Biden' Rally</h1>
                    <p class="text-gray-600">In a workshop with the guest being bidden</p>
                </div>

                <div class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-2">
                    <img class="w-fit sm:items-center"
                            src="https://media.istockphoto.com/id/1353371843/photo/portrait-of-smiling-mature-male-tutor-in-busy-university-or-college-building-with-students.jpg?b=1&s=170667a&w=0&k=20&c=lki1qxxh5c4PhKCf_JDXSyfw-y_F4PEEox_9QBlznTk="
                            alt="">
                    <h1 class="font-medium text-lg">School hallway</h1>
                    <p class="text-gray-600">Heading to a sessio with my students.</p>
                </div>

                <div class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-2">
                    <img class="w-fit sm:items-center"
                            src="https://cdn.pixabay.com/photo/2016/08/16/09/53/international-conference-1597531__340.jpg"
                            alt="">
                    <h1 class="font-medium text-lg">Conference</h1>
                    <p class="text-gray-600">In a conference of WEF </p>
                </div>
            </div>
        </div> 

@endsection