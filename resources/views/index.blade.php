@extends('layout.layout')
@section('title') {{'Home'}}@endsection
@section('content')
    <!-- <img src="{{url('/images/i6.jpeg')}}" alt="Image"/> -->

    <!-- <section>
        <div class=" h-1/2 lg:h-screen bg-white relative md:z-10">
            <img class="absolute bottom-0 right-0 lg:left-0 mx-auto h-full w-full object-cover"
                src="{{url('/images/i8.jpeg')}}"
                alt="">

            <div
                class="absolute top-1/3 left-5 text-xl sm:left-10 sm:text-4xl md:left-1/4 md:text-6xl lg:left-5 xl:left-38 xl:text-7xl font-bold">
                <span class="text-white">Moses</span>
                <p class="text-white">Ogutu</p>
            </div>
        </div>

        <div class="px-10  bg-white">
            <div class="container mx-auto py-14 flex flex-col md:flex-col lg:flex-row items-center gap-20">
                <div class=" lg:w-1/3">
                    <div class="flex flex-col justify-center items-center">
                        <img class="rounded-full"
                            src="{{asset('storage/'. $bio->picture)}}"
                            alt="">
                        <p class="m-1 font-black text-center text-2xl pb-3 ">{{$bio->name}}</p>

                        @foreach($position as $position)
                            <p class="m-1 font-black text-center p-0">{{$position->title}},</p>
                            <p class="m-1 font-black text-center text-gray-800">{{$position->institution}}.</p>
                        @endforeach


                        <div class="flex flex-col text-center gap-6 py-3">
                            

                            <div class="px-6">
                                <h2 class="font-bold text-indigo-600 text-xl">Education</h2>
                                <ol class="l-auto">

                                    @foreach($education as $education)
                                        <ul class="py-0 m-0">
                                            <li class="font-bold flex flex-row gap-2"><span class=""><ion-icon
                                                        name="school"></ion-icon></span> {{$education->degree}}
                                                ,{{$education->year_of_completion}}</li>
                                            <li class="px-auto ">{{$education->institution}}</li>
                                        </ul>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" lg:w-2/3 my-auto flex flex-col gap-3">
                    <h1 class="text-indigo-600 text-center font-bold text-2xl">About Me</h1>
                    <p class="text-gray-600">
                        {!! $bio->about !!}
                    </p>
                </div>
            </div>


            <div class="max-w-md mx-auto flex justify-center py-10">
                <a download="" href="{{ asset('storage/'.$resume->cv) }}"
                class="relative group overflow-hidden pl-6 h-14 flex space-x-6 items-center bg-blue-500 rounded-full ">
                    <span class="relative uppercase text-base text-white">Download CV</span>
                    <div aria-hidden="true"
                        class="w-14 bg-blue-600 transition duration-300 -translate-y-7 group-hover:translate-y-7">
                        <div class="h-14 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 m-auto fill-white"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="h-14 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 m-auto fill-white"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </section> -->

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
                    <a href="#" class="inline-block w-full p-4  text-white bg-bluetange text-lg hover:text-orangelink rounded-r-lg focus:ring-4 focus:outline-none focus:ring-blue-300">Gallery</a>
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

@endsection

<body>
</body>
</html>
