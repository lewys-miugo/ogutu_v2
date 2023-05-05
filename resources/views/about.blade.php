

@extends('layout.layout')
@section('title') {{'About'}}@endsection

@section('content')
<section >
    <!-- Banner -->
    <div class="mx-2">
        <div class="bg-bluetange float-left z-05 absolute rounded-b-lg ml-16"> 
            <div class="m-4">
                <p class="text-white"><a class="hover:underline underline-offset-4" href="{{'/'}}">Home</a> <span> /</span> <a class="underline underline-offset-4" href="{{'about'}}"> About Moses Ogutu</a></p>
            </div>
        </div>
        <div class="lg:absolute h-full w-full m-4 p-4">
            <!-- Banner -->
            
            <div class="grid max-w-screen-4xl ml-12 mr-14 pt-8 mx-auto lg:gap-8 xl:gap-0 lg:pt-2 lg:grid-cols-12">
                
                <div class="mr-auto place-self-center lg:col-span-7">
                    <div class="">
                        <img src="/images/box_logo.png" class="mt-8 h-12 w-12" alt="">
                        <div class="ml-12">
                            <h1 class="max-w-2xl mb-4 text-bluetange text-xsitangeh font-extrabold tracking-tight leading-none ">Prof  Moses  Ogutu</h1>
                            <p class="max-w-2xl mb-6 text-bluetange font-semibold lg:mb-8 md:text-lg lg:text-xl dark:text-gray-600">I am a global technocrat and currently serving as Kenya’s Ambassador to Belgium. Previously, I was the Permanent Secretary of Kenya’s Ministry of Information and Communication.</p>
                            <a href="{{'profile'}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-semibold text-center text-bluetange border border-gray-300 rounded-lg bg-orangelink hover:bg-gray-100 focus:ring-4 focus:ring-blue-500">
                                Read Full Profile
                            </a> 
                            <a href="{{''}}" class="inline-flex items-center justify-center px-5 py-3 text-base font-semibold text-center text-bluetange border border-gray-300 rounded-lg bg-orangelink hover:bg-gray-100 focus:ring-4 focus:ring-blue-500">
                                Download Printable Profile
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="h-48 xl:w-full xl:h-full lg:col-span-5 lg:flex">
                    <img src="{{url('/images/profileimg-removebg-preview.png')}}" alt="mockup">
                </div>                
            </div>
        </div>
       
        <img src="/images/background_pattern1.png" alt="" class=" w-full h-min invisible lg:visible">

    </div>

    
    <!-- CARDS section -->
    <div class="m-4 lg:ml-20">
            <img src="/images/box_logo.png" class="h-14 w-14" alt="">
            <h2 class="pb-4 text-sitangeh text-bluetange pl-14 font-extrabold ">Specific Sections</h2>
    </div>
    <div class='flex items-center flex-wrap  justify-center flex-col-2 mt-8 py-4 min-h-screen p-2 m-2 lg:mx-32 from-gray-700 via-gray-800 to-gray-900 bg-gradient-to-br'>
        <!-- Card 1 -->
        <div class="relative w-full group max-w-lg w-lg min-w-0 mx-auto mt-12 mb-12 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-center w-full">
                        <div class="relative">
                            <img src="/images/no_tie_shot.jpg" class="dark:shadow-xl border-blue-400 dark:border-gray-800 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
                        </div>
                    </div>
                </div>
                <div class="mt-2 mt-20 pt-2 text-center">
                    <h3 class="mb-1 font-bold leading-normal text-xxl text-bluetange dark:text-gray-300">Profile</h3>
                    <div class="flex flex-row justify-center w-full mx-auto space-x-2 text-center">
                        
                        <div class="text-base font-normal tracking-tight text-gray-600 font-mono ">
                            <p>
                                Prof. Ndemo has over 20 years of business, finance and technology expertise gained…
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full text-center">
                   <a href="{{'profile'}}" class="underline text-redlink font-semibold text-sm hover:text-orangelink">View More</a>                        
                </div>
            </div>   
        </div>
        <!-- Card2 -->
        <div class="relative w-full group max-w-lg min-w-0 mx-auto mt-12 mb-12 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-center w-full">
                        <div class="relative">
                            <img src="/images/profileimg-removebg-preview.png" class="dark:shadow-xl border-blue-400 dark:border-gray-800 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
                        </div>
                    </div>
                </div>
                <div class="m-2 mt-20 pt-2 text-center">
                    <h3 class="mb-1 font-bold leading-normal text-xxl text-bluetange dark:text-gray-300">Key Experience</h3>
                    <div class="flex flex-row justify-center w-full mx-auto space-x-2 text-center">

                        <div class="text-base font-normal tracking-tight text-gray-600 font-mono ">
                            <p>
                                Prof. Ndemo has over 20 years of business, finance and technology expertise gained…
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="w-full text-center">
                   <a href="#" class="underline text-redlink font-semibold text-sm hover:text-orangelink">View More</a>                        
                </div>
            </div>   
        </div>
        <!-- Card 3 -->
        <div class="relative w-full group max-w-lg min-w-0 mx-auto mt-12 mb-12 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-center w-full">
                        <div class="relative">
                            <img src="/images/tie_shot.jpg" class="dark:shadow-xl border-blue-400 dark:border-gray-800 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
                        </div>
                    </div>
                </div>
                <div class="mt-2 mt-20 pt-2 text-center">
                    <h3 class="mb-1 font-bold leading-normal text-xxl text-bluetange dark:text-gray-300">Membership & Honors</h3>
                    <div class="flex flex-row justify-center w-full mx-auto space-x-2 text-center">
                        <div class="text-base font-normal tracking-tight text-gray-600 font-mono ">
                            <p>
                                Prof. Ndemo has over 20 years of business, finance and technology expertise gained…
                            </p>
                        </div>
                        <!-- End: /typography/_h3.antlers.html -->
                    </div>
                    <div class="w-full text-center">
                        <div class="flex justify-center pt-8 pb-0 lg:pt-4">
                            
                        </div>
                    </div>
                </div>
                <div class="w-full text-center">
                   <a href="#" class="underline text-redlink font-semibold text-sm hover:text-orangelink">View More</a>                        
                </div>
            </div>   
        </div>
        <!-- card 4 -->
        <div class="relative w-full group max-w-lg min-w-0 mx-auto mt-12 mb-12 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-center w-full">
                        <div class="relative">
                            <img src="/images/ruto2.jpeg" class="dark:shadow-xl border-blue-400 dark:border-gray-800 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
                        </div>
                    </div>
                </div>
                <div class="mt-2 mt-20 pt-2 text-center">
                    <h3 class="mb-1 font-bold leading-normal text-xxl text-bluetange dark:text-gray-300">Talks & Conferences</h3>
                    <div class="flex flex-row justify-center w-full mx-auto space-x-2 text-center">
                        <div class="text-base font-normal tracking-tight text-gray-600 font-mono ">
                            <p>
                                Prof. Ndemo has over 20 years of business, finance and technology expertise gained…
                            </p>
                        </div>
                    </div>
                    <div class="w-full text-center">
                        <div class="flex justify-center pt-8 pb-0 lg:pt-4">
                            
                        </div>
                    </div>
                </div>
                <div class="w-full text-center">
                   <a href="#" class="underline text-redlink font-semibold text-sm hover:text-orangelink">View More</a>                        
                </div>
            </div>   
        </div>
    </div>

    <!-- ====== Gallery Section Start -->
        
    <section id="gallery" class="bg-white pt-20 pb-10 lg:pt-[120px] lg:pb-20">

        <div class="m-4 lg:ml-20">
            <img src="/images/box_logo.png" class="h-14 w-14" alt="">
            <h2 class="pb-4 text-sitangeh text-bluetange pl-14 font-extrabold ">Photo Gallery</h2>
        </div>

        <div class="container mx-auto">
            <div class="m-4 flex flex-wrap">
                <!-- 1st card -->
                <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-lg bg-white shadow-xl">
                        <img
                            src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-01.jpg"
                            alt="image"
                            class="w-full"
                        />
                        <div class="p-2 text-center sm:p-2 md:p-2 xl:p-4">
                            <p class="text-body-color  text-base hover:leading-relaxed">
                            Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
                            Lorem consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 1.2 card -->
                <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-lg bg-white shadow-xl">
                        <img
                            src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-03.jpg"
                            alt="image"
                            class="w-full"
                        />
                        <div class="p-2 text-center sm:p-2 md:p-2 xl:p-4">
                            <p class="text-body-color  text-base hover:leading-relaxed">
                            Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
                            Lorem consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 1.3 card -->
                <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-lg bg-white shadow-xl">
                        <img
                            src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-01.jpg"
                            alt="image"
                            class="w-full"
                        />
                        <div class="p-2 text-center sm:p-2 md:p-2 xl:p-4">
                            <p class="text-body-color  text-base hover:leading-relaxed">
                            Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
                            Lorem consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 1.4 card -->
                <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-lg bg-white shadow-xl">
                        <img
                            src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-02.jpg"
                            alt="image"
                            class="w-full"
                        />
                        <div class="p-2 text-center sm:p-2 md:p-2 xl:p-4">
                            <p class="text-body-color  text-base hover:leading-relaxed">
                            Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
                            Lorem consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 1.5 card -->
                <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-lg bg-white shadow-xl">
                        <img
                            src="https://imgs.search.brave.com/qq-asKPD1fMmtTogV3rgmubwpGxP1oen_xQLwc7F-Xc/rs:fit:844:225:1/g:ce/aHR0cHM6Ly90c2U0/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5a/TzRUbVVieE01LVYx/UjdiYkRwTUhRSGFF/SyZwaWQ9QXBp"
                            alt="image"
                            class="w-full"
                        />
                        <div class="p-2 text-center sm:p-2 md:p-2 xl:p-4">
                            <p class="text-body-color  text-base hover:leading-relaxed">
                            Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
                            Lorem consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ====== Cards Section End -->


</section>
<hr style="border: 0; height: 2px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);">

<!-- OLD componet -->
<!-- component -->
    <!-- <div class=" h-1/2 lg:h-screen bg-white relative md:z-10">
        <img class="absolute bottom-0 right-0 lg:left-0 mx-auto h-full shadow-xl w-full object-cover"
             src="{{url('/images/i8.jpeg')}}"
             alt="">

        <div
            class="absolute top-1/3 left-5 text-xl sm:left-10 sm:text-4xl md:left-1/4 md:text-6xl lg:left-5 xl:left-38 xl:text-7xl font-bold">
            <span class="text-white">More</span>
            <p class="text-red-600">About</p>
            <p class="text-white">Me</p>
        </div>
    </div> -->
<!-- New trial section-->

    <!-- New trial layout -->
    <!-- <div class="bg-white pt-6">
        <div class="">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-12">
                <div class="col-span-3 flex flex-col justify-center items-center">
                    <h2 class="font-bold text-indigo-600 text-xl">Education</h2>
                    <ol class="">

                    @foreach($education as $education)
                        <ul class="py-2 text-center px-5 m-5">
                            <li class="font-bold flex flex-row gap-2"><span class=""><ion-icon name="school"></ion-icon></span> {{$education->degree}},{{$education->year_of_completion }} at</li>
                            <li class="px-5 ">{{$education->institution }}</li>
                        </ul>
                    @endforeach 
                        
                        
                    </ol>
                </div>
                <div class="col-span-6 p-5 m-3 flex flex-col justify-center items-center ">
                    <img class="rounded-full"
                         src="{{asset('storage/'. $bio->picture)}}"
                         alt="Profile picture of Moses Ogutu">
                    <p class="m-1 font-black text-2xl pb-3">{{$bio->name}}.</p>
                    
                    @foreach($position as $position)
                    <p class="m-1 font-black text-center p-0">{{$position->title}},</p>
                    <p class="m-1 font-black text-center text-gray-800">{{$position->institution}}.</p>
                    @endforeach
                </div>

                <div class="col-span-3 flex flex-col justify-center items-center">
                    <div class="px-6">
                        <h2 class="font-bold text-indigo-600 flex justify-center items-center text-xl">Interests</h2>

                        <ol class="py-3 list-disc">
                            @foreach($interest as $interest)
                            <li class="text-gray-700">{{$interest->title}}</li> 
                            @endforeach                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- <div class="bg-white">
        <div id="experience" class="py-10 flex flex-col lg:flex-row item-center gap-20 bg-white">
                <div class="lg:w-2/3 px-7 mx-3 my-auto flex flex-col gap-3 ">
                    <h1 class="text-indigo-600 text-center font-bold text-2xl">About Me</h1>

                    <p class="text-gray-600 ">
                        {!!  $bio->about  !!} 
                    </p>
                </div>
              
                </div> 
                <div class="p-5 lg:p-3 lg:w-1/3 flex flex-wrap justify-between">
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
    </div> -->
@endsection
<body>
</body>
</html>