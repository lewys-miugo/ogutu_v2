@extends('layout.layout')
@section('title') {{'Home'}}@endsection
@section('content')
<section class="">
    <!-- Banner -->
    <div class="">
        <div class="lg:absolute h-full w-full m-4 p-4">
            <!-- Banner -->
            <div class="grid max-w-screen-4xl md:ml-12 md:mr-14 pt-8 md:mx-auto lg:gap-8 xl:gap-0 lg:pt-2 lg:grid-cols-12">
                <div class="md:mr-auto place-self-center lg:col-span-7">
                    <div class="">
                        <img src="/images/box_logo.png" class="h-12 w-12" alt="">
                        <div class="lg:ml-12 ">
                            <h1 class="max-w-2xl mb-4 text-bluetange text-xsitangeh font-extrabold tracking-tight leading-none ">Prof  Moses  Ogutu</h1>
                            <p class="max-w-2xl mb-6 text-bluetange font-semibold lg:mb-8 md:text-lg lg:text-xl dark:text-gray-600">I am a global technocrat and currently serving as Kenya’s Ambassador to Belgium. Previously, I was the Permanent Secretary of Kenya’s Ministry of Information and Communication.</p>
                            <a href="{{'about'}}" class="inline-flex items-center justify-center mt-2 px-5 py-3 mr-3 text-base font-semibold text-center text-bluetange border border-gray-300 rounded-lg bg-orangelink hover:bg-gray-100 focus:ring-4 focus:ring-blue-500">
                                About Moses Ogutu
                            </a> 
                            <a href="{{'blog'}}" class="inline-flex items-center justify-center mt-2 px-5 py-3 text-base font-semibold text-center text-bluetange border border-gray-300 rounded-lg bg-orangelink hover:bg-gray-100 focus:ring-4 focus:ring-blue-500">
                                Blogs & Publication
                            </a> 
                        </div>
                    </div>
                </div>
                <div class=" lg:col-span-5 lg:flex">
                    <img src="{{url('/images/profileimg-removebg-preview.png')}}" class="" alt="mockup">
                </div>                
            </div>

             <!-- navigation Tabs -->

            <ul class=" lg:mx-16  text-base font-medium text-center text-gray-900 divide-x divide-gray-200 rounded-lg shadow flex flex-row sm:flex  ">
                <li class="w-full">
                    <a href="{{'profile'}}" class="inline-block  w-full p-4 text-white bg-bluetange text-lg hover:text-orangelink  rounded-l-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">Profile</a>
                </li>
                <li class="w-full">
                    <a href="{{url('academia')}}" class="inline-block w-full p-4 text-white bg-bluetange text-lg hover:text-orangelink  focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Academia</a>
                </li>
                <li class="w-full">
                    <a href="{{'profile'}}#interest" class="inline-block w-full p-4 text-white bg-bluetange text-lg hover:text-orangelink  focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Interests</a>
                </li>
                <li class="w-full">
                    <a href="{{'about'}}#gallery" class="inline-block w-full p-4  text-white bg-bluetange text-lg hover:text-orangelink rounded-r-lg focus:ring-4 focus:outline-none focus:ring-blue-300">Gallery</a>
                </li>
            </ul>
            
        </div>
       
        <img src="/images/background_pattern1.png" alt="" class="h-2 lg:w-full lg:h-min invisible lg:visible">

    </div>

    <!-- Biography -->
    <div class="m-4 lg:ml-20">
        <img src="/images/box_logo.png" class="h-14 w-14" alt="">
        <div class="">
            <h2 class="text-sitangeh text-bluetange font-extrabold ml-14 ">Biography</h2>

            <div class="flex items-center flex-col pt-4 px-4">
                <p class="my-4 lg:mx-16 text-sitange text-bluetange">Moses Ogutu is Professor of Entrepreneurship at the University of Nairobi’s Business School. His research centers on the link between ICTs and small and medium enterprises with emphasis on how ICTs influence economic development in Africa.</p>
                
                <p class="my-4 lg:mx-16 text-sitange text-bluetange"> Prof. Ndemo Chaired the Kenya Distributed Ledgers and Artificial Intelligence Taskforce that developed the country’s a road map for digital transformation. He is an advisor and Board member to several organizations including Safaricom one of the leading telecommunication company in Africa, a member of the OECD Expert Panel for Blockchain, World Economic Forum Global Blockchain Council (part of the World Economic Forum’s Global Fourth Industrial Revolution Councils).</p>

                <p class="my-4 lg:mx-16 text-lg text-bluetange">Besides having been a Permanent Secretary of Kenya’s Ministry of Information and Communication where he was credited with facilitating many transformative ICT projects, a Senior advisor to UN’s Global Pulse (Big Data initiatives) and the UNCDF’s Better than Cash Alliance and UNICEF’s Innovation Council. He is an Open Data/Big Data evangelist and dedicated to simplification (visualization) of data for ordinary citizens to consume. He writes two columns every week for the Business Daily and Nation on-line.</p>

                
            </div>
        </div>
    </div>
    <!--  -->

    <!-- BLOG -->
    <div>
        <div class="m-4 lg:ml-20">
            <img src="/images/box_logo.png" class="h-14 w-14" alt="">
            <h2 class="pb-4 text-sitangeh text-bluetange pl-14 font-extrabold ">Blog</h2>
        </div>

        <div class="lg:mx-32 ">
            <div class="lg:m-8 flex flex-col items-center md:flex-row flex-wrap">  
                <!-- BLOG 1 -->
                <div class="my-4 p-4 w-2/3 md:w-1/3 xl:w-1/4 max-h-80">
                    <!-- blog 1 -->
                    <a href="" class="flex items-center flex-col ">
                        <div class="">
                            <img src="/images/ruto.jpeg" alt="" class="rounded-lg max-h-60">
                        </div>
                        <div>
                            <h2 class="px-2 text-bluetange text-blog font-semibold" >Chandarana Foodplus Marketing Goof: a Lesson from Condoleezza Rice on Political Risk Through Social Activism</h2>
                            <p class="text-sm font-semibold pl-2 text-left text-bloglink underline underline-offset-2">Read More</p>

                        </div>
                    </a>
                </div>

                <!-- Blog 2 -->
                <div class="my-4 p-4 w-2/3 md:w-1/3 xl:w-1/4 max-h-80">
                    <!-- blog 1 -->
                    <a href="" class="flex items-center flex-col ">
                        <div class="">
                            <img src="/images/ruto.jpeg" alt="" class="rounded-lg max-h-60">
                        </div>
                        <div>
                            <h2 class="px-2 text-bluetange text-blog font-semibold" >Chandarana Foodplus Marketing Goof: a Lesson from Condoleezza Rice on Political Risk Through Social Activism</h2>
                            <p class="text-sm font-semibold pl-2 text-left text-bloglink underline underline-offset-2">Read More</p>

                        </div>
                    </a>
                </div>

                <!-- Blog 3 -->
                <div class="my-4 p-4 w-2/3 md:w-1/3 xl:w-1/4 max-h-80">
                    <!-- blog 1 -->
                    <a href="" class="flex items-center flex-col ">
                        <div class="">
                            <img src="/images/ruto.jpeg" alt="" class="rounded-lg max-h-60">
                        </div>
                        <div>
                            <h2 class="px-2 text-bluetange text-blog font-semibold" >Chandarana Foodplus Marketing Goof: a Lesson from Condoleezza Rice on Political Risk Through Social Activism</h2>
                            <p class="text-sm font-semibold pl-2 text-left text-bloglink underline underline-offset-2">Read More</p>

                        </div>
                    </a>
                </div>

                <!-- Blog 4 -->
                <div class="my-4 p-4 w-2/3 md:w-1/3 xl:w-1/4 max-h-80">
                    <!-- blog 1 -->
                    <a href="" class="flex items-center flex-col ">
                        <div class="">
                            <img src="/images/ruto.jpeg" alt="" class="rounded-lg max-h-60">
                        </div>
                        <div>
                            <h2 class="px-2 text-bluetange text-blog font-semibold" >Chandarana Foodplus Marketing Goof: a Lesson from Condoleezza Rice on Political Risk Through Social Activism</h2>
                            <p class="text-sm font-semibold pl-2 text-left text-bloglink underline underline-offset-2">Read More</p>

                        </div>
                    </a>
                </div>
            </div>
            <div class="text-right  md:ml-96">
                <a href="{{'blog'}}" class="bg-orangelink p-2 rounded-lg font-xl font-semibold">View All Articles</a>
            </div>
        </div>
    </div>
    <!-- About -->
    <div class="m-4 lg:ml-20">
        <img src="/images/box_logo.png" class="h-14 w-14" alt="">
        <div class="">
            <h2 class="text-sitangeh text-bluetange font-extrabold ml-14 ">About Moses Ogutu</h2>

            <div class="flex flex-col pt-4  lg:ml-16 lg:max-w-[60%]">
                <p class="my-4 text-lg text-sitange">Prior to this, he was the Permanent Secretary in the Ministry of Information and Communication where he initiated various transformative projects, including development of the undersea cables into East Africa and the development of the Kenya Open Data Initiative. He sits on several Boards including Safaricom, Mpesa Foundation and Research ICT Africa. He is a senior advisor to the UNCDF’s Better than Cash Alliance and the UN Global Pulse. </p>
            </div>
        </div>
    </div>
    <!-- CARDS section -->
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
                   <a href="#" class="underline text-redlink font-semibold text-sm hover:text-orangelink">View More</a>                        
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


</section>
<hr style="border: 0; height: 2px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);">

@endsection

