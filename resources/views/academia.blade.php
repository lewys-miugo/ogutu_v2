@extends('layout.layout')
@section('title') {{'Academia'}}@endsection

@section('content')
<div class="w-screen">
    <!-- Banner -->
    <div class="">
        <div class="bg-bluetange float-left z-05 absolute rounded-b-lg ml-16"> 
            <div class="m-4">
                <p class="text-white"><a class="hover:underline underline-offset-4" href="{{'/'}}">Home</a> <span> /</span> <a href="{{'academia'}}" class="underline underline-offset-4"> Academia</a></p>
            </div>
        </div>
        <div class="lg:absolute h-full w-full m-4 p-4">
            <!-- Banner -->
            
            <div class="grid max-w-screen-4xl ml-12 mr-14 pt-8 mx-auto lg:gap-8 xl:gap-0 lg:pt-2 lg:grid-cols-12">
                
                <div class="mr-auto place-self-center lg:col-span-7">
                    <div class="">
                        <img src="/images/box_logo.png" class="mt-8 h-12 w-12" alt="">
                        <div class="ml-12">
                            <h1 class="max-w-2xl mb-4 text-bluetange text-xsitangeh font-extrabold tracking-tight leading-none ">Academia</h1>
                            <p class="max-w-2xl mb-6 text-bluetange text-sitange lg:mb-8 md:text-lg lg:text-xl dark:text-gray-600">Prof. Moses Ogutu is an ICT specialist and an Associate professor in Entrepreneurship. He also teaches Research Methods and Management at the School of Business, University of Nairobi. Prior to this, he was the Permanent Secretary in the Ministry of Information and Communication where he initiated various transformative projects, including development of the undersea cables into East Africa and the development of the Kenya Open Data Initiative. </p>
                            <a href="#academia-cards" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-semibold text-center text-bluetange border border-gray-300 rounded-lg bg-orangelink hover:bg-gray-100 focus:ring-4 focus:ring-blue-500">
                                Explore 
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                                    </svg>

                                </span>
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

    <div id="academia-cards" class="bg-gray-200">

        <div class="px-12 ml-12 pt-8 md:px-18 lg:px-32">
            <img src="/images/box_logo.png" class="h-12 w-12" alt="">

            <h2 class=" text-bluetange text-sitangeh font-extrabold ml-12 mb-8 mt-2">Education History</h2>
            <!-- Special 1 -->
            <div class="flex mb-4 flex-cols-12">
                <div class="flex flex-cols-3 h-full items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>

                </div>
                <div class="flex flex-cols-9 ml-2">
                    <div >
                        <div class="">
                            <h3 class="text-bluetange text-lg font-semibold">Member, Board of Directors, Safaricom Limited</h3>
                        </div>
                        <div>
                            <p class="text-sm font-light">2018 - to date</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Special 2 -->
            <div class="flex mb-4 flex-cols-12">
                <div class="flex flex-cols-3 h-full items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>
                </div>
                <div class="flex  flex-cols-9 ml-2">
                    <div >
                        <div class="">
                            <h3 class="text-bluetange text-lg font-semibold">Chairman, Kenya Government Taskforce on Distributed Ledgers & Artificial Intelligence</h3>
                        </div>
                        <div>
                            <p class="text-sm font-light">2021 - to date</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Special 3 -->
            <div class="flex mb-4 flex-cols-12">
                <div class="flex flex-cols-3 h-full items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>
                </div>
                <div class="flex flex-cols-9 ml-2">
                    <div >
                        <div class="">
                            <h3 class="text-bluetange text-lg font-semibold">Head, University-Industry Relationship committee, University of Nairobi</h3>
                        </div>
                        <div>
                            <p class="text-sm font-light">2018 - 2021</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Special 4 -->
            <div class="flex  mb-4 flex-cols-12">
                <div class="flex flex-cols-3 h-full items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>
                </div>
                <div class="flex flex-cols-9 ml-2">
                    <div >
                        <div class="">
                            <h3 class="text-bluetange text-lg font-semibold">Chairman, Global Alliance for Affordable Internet</h3>
                        </div>
                        <div>
                            <p class="text-sm font-light">2020 - to date</p>
                        </div>
                    </div>
                    
                </div>
            </div>

            <hr style="border: 0; height: 2px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);" class="mt-4 mb-4">
        </div>

        <div class="px-12 ml-12 pt-8 md:px-18 lg:px-32">
            <img src="/images/box_logo.png" class="h-12 w-12" alt="">

            <h2 class=" text-bluetange text-sitangeh font-extrabold ml-12 mb-8 mt-2">Career History</h2>
            <!-- Special 1 -->
            <div class="flex mb-4 flex-cols-12">
                <div class="flex flex-cols-3 h-full items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>
                </div>
                <div class="flex flex-cols-9 ml-2">
                    <div >
                        <div class="">
                            <h3 class="text-bluetange text-lg font-semibold">Member, Board of Directors, Safaricom Limited</h3>
                        </div>
                        <div>
                            <p class="text-sm font-light">2018 - to date</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Special 2 -->
            <div class="flex mb-4 flex-cols-12">
                <div class="flex flex-cols-3 h-full items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>
                </div>
                <div class="flex  flex-cols-9 ml-2">
                    <div >
                        <div class="">
                            <h3 class="text-bluetange text-lg font-semibold">Chairman, Kenya Government Taskforce on Distributed Ledgers & Artificial Intelligence</h3>
                        </div>
                        <div>
                            <p class="text-sm font-light">2021 - to date</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Special 3 -->
            <div class="flex mb-4 flex-cols-12">
                <div class="flex flex-cols-3 h-full items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>
                </div>
                <div class="flex flex-cols-9 ml-2">
                    <div >
                        <div class="">
                            <h3 class="text-bluetange text-lg font-semibold">Head, University-Industry Relationship committee, University of Nairobi</h3>
                        </div>
                        <div>
                            <p class="text-sm font-light">2018 - 2021</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Special 4 -->
            <div class="flex  mb-4 flex-cols-12">
                <div class="flex flex-cols-3 h-full items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>
                </div>
                <div class="flex flex-cols-9 ml-2">
                    <div >
                        <div class="">
                            <h3 class="text-bluetange text-lg font-semibold">Chairman, Global Alliance for Affordable Internet</h3>
                        </div>
                        <div>
                            <p class="text-sm font-light">2020 - to date</p>
                        </div>
                    </div>
                    
                </div>
            </div>

            <hr style="border: 0; height: 2px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);" class="mt-4 mb-4">
        </div>
        
    </div>
</div>
@endsection