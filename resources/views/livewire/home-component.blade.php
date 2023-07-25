<div>
@section('title') {{'Home'}}@endsection
    {{-- Because she competes with no one, no one can compete with her. --}}
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
                            <p class="max-w-2xl mb-6 text-bluetange font-semibold lg:mb-8 md:text-lg lg:text-xl">I am an International Development Professional, Public Policy Specialist, Social Innovator and Entrepreneur; currently serving as International Business & Trade Specialist, Econalis Group LLC and Assistant Prof., International Business & Trade, African Leadership University.
                            </p>
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
                    <a href="{{'profile'}}" class="inline-block  w-full p-4 text-white bg-bluetange text-lg hover:text-orangelink  rounded-l-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none" aria-current="page">Profile</a>
                </li>
                <li class="w-full">
                    <a href="{{url('academia')}}" class="inline-block w-full p-4 text-white bg-bluetange text-lg hover:text-orangelink  focus:ring-4 focus:ring-blue-300 focus:outline-none">Academia</a>
                </li>
                <li class="w-full">
                    <a href="{{'profile'}}#interest" class="inline-block w-full p-4 text-white bg-bluetange text-lg hover:text-orangelink  focus:ring-4 focus:ring-blue-300 focus:outline-none">Interests</a>
                </li>
                <li class="w-full">
                    <a href="{{'about'}}#gallery" class="inline-block w-full p-4  text-white bg-bluetange text-lg hover:text-orangelink rounded-r-lg focus:ring-4 focus:outline-none focus:ring-blue-300">Gallery</a>
                </li>
            </ul>
            
        </div>
       
        <img src="/images/background_pattern1.png" alt="" class="h-2 lg:w-full lg:h-min invisible lg:visible">

    </div>

    <!-- Biography -->
    @livewire('home-bio-component')
    

    <!-- BLOG -->
    <div>
        <div class="m-4 lg:ml-20">
            <img src="/images/box_logo.png" class="h-14 w-14" alt="">
            <h2 class="pb-4 text-sitangeh text-bluetange pl-14 font-extrabold ">Blog</h2>
        </div>

        <div class="lg:mx-32 ">
            <div class="lg:m-8 flex flex-col items-center md:flex-row-reverse flex-wrap">  
                <!-- BLOG 1 -->
                <div class="my-4 p-4 w-2/3 md:w-1/3 xl:w-1/4 max-h-80">
                    <!-- blog 1 -->
                    <a href="https://land-locked.org/multilateral-trade-negotiations-and-lldcs-a-handbook-for-negotiators-and-practitioners-of-lldcs-is-available-now/" class="flex items-center flex-col h-fit">
                        <div class="">
                            <img src="https://land-locked.org/wp-content/uploads/2016/02/b5-220-nuur-e1454484187662-668x377.jpg" alt="" class="rounded-lg max-h-60">
                        </div>
                        <div>
                            <h2 class="px-2 text-bluetange text-blog font-semibold" >Multilateral Trade Negotiations and LLDCs: A handbook for negotiators and practitioners of LLDCs.</h2>
                            <p class="text-sm font-semibold pl-2 text-left text-bloglink underline underline-offset-2">Read More</p>

                        </div>
                    </a>
                </div>

                <!-- Blog 2 -->
                <div class="my-4 p-4 w-2/3 md:w-1/3 xl:w-1/4 max-h-80">
                    
                    <a href="https://www.tandfonline.com/doi/full/10.1080/10220461.2021.1915863" class="flex items-center flex-col ">
                        <div class="">
                            <img src="https://www.tandfonline.com/action/showCoverImage?doi=10.1080/rsaj20.v028.i01" alt="" class="rounded-lg max-h-60">
                        </div>
                        <div>
                            <h2 class="px-2 text-bluetange text-blog font-semibold" >The Indian Ocean Rim Association: Lessons from this regional cooperation model.</h2>
                            <p class="text-sm font-semibold pl-2 text-left text-bloglink underline underline-offset-2">Read More</p>

                        </div>
                    </a>
                </div>

                <!-- Blog 3 -->
                <div class="my-4 p-4 w-2/3 md:w-1/3 xl:w-1/4 max-h-80">
                    
                    <a href="https://books.thecommonwealth.org/e-commerce-and-digital-trade-paperback">
                        <div class="flex justify-center">
                            <img src="https://books.thecommonwealth.org/sites/default/files/styles/small/public/images/products/front-cover/E-commerce_and_Digital_Trade.jpg?itok=Bvu_P4hI" alt="" class="rounded-lg max-h-60">
                        </div>
                        <div>
                            <h2 class="px-2 text-bluetange text-blog font-semibold" >E-commerce and Digital Trade: A Policy Guide for Least Developed Countries, Small States and Sub-Saharan Africa</h2>
                            <p class="text-sm font-semibold pl-2 text-left text-bloglink underline underline-offset-2">Read More</p>

                        </div>
                    </a>
                </div>

                <!-- Blog 4 -->
                <div class="my-4 p-4 w-2/3 md:w-1/3 xl:w-1/4 max-h-80">
                    <!-- blog 1 -->
                    <a href="https://www.frontiersin.org/articles/10.3389/frsus.2023.1092107/full" class="flex items-center flex-col ">
                        <div class="">
                            <img src="https://www.frontiersin.org/files/special%20topics/46390/thumb_400.jpg" alt="" class="rounded-lg max-h-60">
                        </div>
                        <div>
                            <h2 class="px-2 text-bluetange text-blog font-semibold" >Implementing circular economy and sustainability policies in Rwanda: Experiences of Rwandan manufacturers with the plastic ban policy</h2>
                            <p class="text-sm font-semibold pl-2 text-left text-bloglink underline underline-offset-2">Read More</p>

                        </div>
                    </a>
                </div>
            </div>
            <div class="text-right mt-20  md:ml-96">
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
                <p class="my-4 text-lg text-sitange"> Originally from Kenya, I have strong international experience gained from studying, living, and working in the USA,  Brazil, South Africa, Kenya, Rwanda, Mauritius, and travelling to over 20 countries across Africa, Latin America, and the Caribbean. In addition to gaining wide perspectives, these improved my intercultural awareness, empathy and provided an opportunity to understand the world and expand my networks.I graduated with a Master of Philosophy (MPhil) in Inclusive Innovation (2022) and an MA in International Relations (2018), both from the University of Cape Town, and a Bachelor of Science (honours) Political Science from the University of Mauritius. I was also a Graduate Fellow at the University of Massachusetts, Amherst where I studied Political Economy, Negotiations, and Global Health.</p>
            </div>
        </div>
    </div>
    <!-- CARDS section -->
    <div class='flex items-center flex-wrap  justify-center flex-col-2 mt-8 py-4 min-h-screen p-2 m-2 lg:mx-32 from-gray-700 via-gray-800 to-gray-900 bg-gradient-to-br'>
        <!-- Card 1 -->
        <div class="relative w-full group max-w-lg w-lg min-w-0 mx-auto mt-12 mb-12 break-words bg-white border shadow-2xl md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-center w-full">
                        <div class="relative">
                            <img src="/images/no_tie_shot.jpg" class="dark:shadow-xl border-blue-400 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
                        </div>
                    </div>
                </div>
                <div class="mt-2 mt-20 pt-2 text-center">
                    <h3 class="mb-1 font-bold leading-normal text-xxl text-bluetange">Profile</h3>
                    <div class="flex flex-row justify-center w-full mx-auto space-x-2 text-center">
                        
                        <div class="text-base font-normal tracking-tight text-gray-600 font-mono ">
                            <p>
                                Moses Ogutu has over 20 years of business, finance and technology expertise gained…
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
        <div class="relative w-full group max-w-lg min-w-0 mx-auto mt-12 mb-12 break-words bg-white border shadow-2xl md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-center w-full">
                        <div class="relative">
                            <img src="/images/profileimg-removebg-preview.png" class="dark:shadow-xl border-blue-400 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
                        </div>
                    </div>
                </div>
                <div class="m-2 mt-20 pt-2 text-center">
                    <h3 class="mb-1 font-bold leading-normal text-xxl text-bluetange">Key Experience</h3>
                    <div class="flex flex-row justify-center w-full mx-auto space-x-2 text-center">

                        <div class="text-base font-normal tracking-tight text-gray-600 font-mono ">
                            <p>
                                Moses Ogutu has over 20 years of business, finance and technology expertise gained…
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
        <div class="relative w-full group max-w-lg min-w-0 mx-auto mt-12 mb-12 break-words bg-white border shadow-2xl md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-center w-full">
                        <div class="relative">
                            <img src="/images/tie_shot.jpg" class="dark:shadow-xl border-blue-400 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
                        </div>
                    </div>
                </div>
                <div class="mt-2 mt-20 pt-2 text-center">
                    <h3 class="mb-1 font-bold leading-normal text-xxl text-bluetange">Membership & Honors</h3>
                    <div class="flex flex-row justify-center w-full mx-auto space-x-2 text-center">
                        <div class="text-base font-normal tracking-tight text-gray-600 font-mono ">
                            <p>
                                Moses Ogutu has over 20 years of business, finance and technology expertise gained…
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
        <div class="relative w-full group max-w-lg min-w-0 mx-auto mt-12 mb-12 break-words bg-white border shadow-2xl md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-center w-full">
                        <div class="relative">
                            <img src="/images/ruto2.jpeg" class="dark:shadow-xl border-blue-400 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
                        </div>
                    </div>
                </div>
                <div class="mt-2 mt-20 pt-2 text-center">
                    <h3 class="mb-1 font-bold leading-normal text-xxl text-bluetange">Talks & Conferences</h3>
                    <div class="flex flex-row justify-center w-full mx-auto space-x-2 text-center">
                        <div class="text-base font-normal tracking-tight text-gray-600 font-mono ">
                            <p>
                                Moses Ogutu has over 20 years of business, finance and technology expertise gained…
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
    <hr style="border: 0; height: 2px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);">
</div>
