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
                <!-- Left -->
                <div class="lg:w-2/3 my-auto flex flex-col gap-3 ">
                    <h1 class="text-indigo-600 text-center font-bold text-2xl">Interests</h1>
                    <!-- <h1 class="text-3xl font-medium">Associate Professor</h1>
                    <h1 class="text-3xl font-medium">Convent university</h1>  -->
                    <ol class="py-4 ml-20 list-disc flex flex-col  ">
                
                        <li>The Global Political Economy</li> 
                        <li>Global Sustainability</li>
                        <li>Trade and Sustainable Development</li>
                        <li>Social Innovation and Entrepreneurship</li>
                        <li>Education in Africa</li>
                        <li>Leadership Development in Africa</li>
                        <li>Regional Integration in Africa</li>
                        <li>US / EU  – Africa Relations.</li>
                        <li>Hiking </li>

                    </ol>
                    

                

                </div>

                <div class="p-5 lg:p-0 lg:w-1/3 flex flex-wrap justify-between">
                
                <div class="w-full  shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-2">
                    <img class="w-fit sm:items-center"
                            src="https://cdn.pixabay.com/photo/2016/08/16/09/53/international-conference-1597531__340.jpg"
                            alt="">
                    <h1 class="font-medium text-lg">Conference</h1>
                    <p class="text-gray-600">In a conference of WEF </p>
                </div>
                <div class="w-full  shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-2">
                    <img class="w-fit sm:items-center"
                            src="https://media.istockphoto.com/id/1353371843/photo/portrait-of-smiling-mature-male-tutor-in-busy-university-or-college-building-with-students.jpg?b=1&s=170667a&w=0&k=20&c=lki1qxxh5c4PhKCf_JDXSyfw-y_F4PEEox_9QBlznTk="
                            alt="">
                    <h1 class="font-medium text-lg">School hallway</h1>
                    <p class="text-gray-600">Heading to a sessio with my students.</p>
                </div>
            </div>

        </div>
    </div>

@endsection