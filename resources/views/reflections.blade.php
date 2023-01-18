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
<div class="bg-white">

    <div class=" h-1/2 lg:h-screen bg-white relative md:z-10">
        <!-- bg-gradient-to-t from-indigo-200  -->


        <!-- Intro content -->

        <!-- Image -->
        <img class="absolute bottom-0 right-0 lg:left-0 mx-auto h-full w-full object-cover"
                
            src="{{url('/images/i5.jpeg')}}"
            alt="">
            <!-- $bio->iimage  -->

        <!-- Animated text  top-1/3 -->
        <div
            class="absolute top-1/3 left-5 text-xl sm:left-10 sm:text-4xl md:left-1/4 md:text-6xl lg:left-5  xl:left-38 xl:text-7xl font-bold">
            <span class="text-white">My</span>
            <!-- <p class="text-black">My</p> -->
            <p class="text-red-500">Reflections</p>
        </div>
    </div>

    <!-- ARTICLES -->

    <div class="p-4">
        <h2 class="text-2xl mt-4 text-gray-500 font-bold text-center">Social Change Leadership in Africa</h2>
		<div class="flex grid h-full grid-cols-12 gap-10 pb-10 mt-8 sm:mt-16">
            

            <div class="grid grid-cols-12 col-span-12 gap-7">
                <div class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">
                    <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                        <img class="object-cover w-full shadow-sm h-full" src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80">
                    </a>
                    <div class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                        <div class="bg-indigo-400 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Math</span>
                        </div>
                        <h2 class="text-base text-gray-500 font-bold sm:text-lg md:text-xl"><a href="#_">Leadership Development in Africa: Programs</a></h2>
                    </div>
                </div>

                @foreach($internalreflection as $internalreflection)
                    <div class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">
                        <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                            <img class="lg:h-64 lg:max-w-lg" src="{{asset('storage/'.$internalreflection->image)}}" alt="">
                        <div class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                            <!-- <div class="bg-indigo-400 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white inline-block">
                                <span>Math</span>
                            </div> -->
                            <h2 class="text-base text-gray-500 font-bold sm:text-lg md:text-xl"><a href="#_">{{$internalreflection->title}}</a></h2>
                        </div>
                    </div>

                @endforeach

                <div class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">
                    <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                        <img class="object-cover w-full shadow-sm h-full" src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80">
                    </a>
                    <div class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                        <div class="bg-red-400 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Economics</span>
                        </div>
                        <h2 class="text-base text-gray-500 font-bold sm:text-lg md:text-xl"><a href="#_">Inflation and it's Effects</a></h2>
                        <!-- <p class="mt-2 text-sm text-gray-500">Learn how to authenticate users to your web application by sending secure links to their email box.</p> -->
                    </div>
                </div>

                <div class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">
                    <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                        <img class="object-cover w-full shadow-sm h-full" src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80">
                    </a>
                    <div class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                        <div class="bg-purple-500 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Politics</span>
                        </div>
                        <h2 class="text-base text-gray-500 font-bold sm:text-lg md:text-xl"><a href="#_">Winners and Loosers mid-term elections</a></h2>
                        <!-- <p class="mt-2 text-sm text-gray-500">Learn how to authenticate users to your application using flask and mysql db.</p> -->
                    </div>
                </div>
            </div>

        </div>


    </div>


    <div class="bg-white p-4">
        <h2 class="text-2xl mt-4 text-gray-500 bg-white font-bold text-center">Global Sustainability</h2>
		<div class="flex grid h-full bg-white grid-cols-12 gap-10 pb-10 mt-8 sm:mt-16">
            

            <div class="grid grid-cols-12 col-span-12 gap-7">
                <div class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">
                    <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                        <img class="object-cover w-full shadow-sm h-full" src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80">
                    </a>
                    <div class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                        <div class="bg-indigo-400 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Math</span>
                        </div>
                        <h2 class="text-base text-gray-500 font-bold sm:text-lg md:text-xl"><a href="#_">Pfaffian was wrong!</a></h2>
                    </div>
                </div>

                <div class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">
                    <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                        <img class="object-cover w-full shadow-sm h-full" src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80">
                    </a>
                    <div class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                        <div class="bg-red-400 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Economics</span>
                        </div>
                        <h2 class="text-base text-gray-500 font-bold sm:text-lg md:text-xl"><a href="#_">Inflation and it's Effects</a></h2>
                        <!-- <p class="mt-2 text-sm text-gray-500">Learn how to authenticate users to your web application by sending secure links to their email box.</p> -->
                    </div>
                </div>

                <div class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">
                    <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                        <img class="object-cover w-full shadow-sm h-full" src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80">
                    </a>
                    <div class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                        <div class="bg-purple-500 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white inline-block">
                            <span>Politics</span>
                        </div>
                        <h2 class="text-base text-gray-500 font-bold sm:text-lg md:text-xl"><a href="#_">Winners and Loosers mid-term elections</a></h2>
                        <!-- <p class="mt-2 text-sm text-gray-500">Learn how to authenticate users to your application using flask and mysql db.</p> -->
                    </div>
                </div>
            </div>

        </div>
</div>
@endsection