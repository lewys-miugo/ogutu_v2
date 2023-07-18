<div>
@section('title') {{'Dashboard Home Banner'}}@endsection
    {{-- Be like water. --}}
    

    <div class="">
    <div class="h-auto bg-gray-100">
        <!-- Navbar -->
        <nav class="bg-blue-500 py-2">
            <div class="container mx-auto px-4">
            <!-- Navbar content -->
                @livewire('admin.admin-dashboard-nav-component')
            </div>
        </nav>

        <!-- Main Content -->
        <!-- <div class="container flex flex-col  justify-center  px-4 py-8">
            Content
            <h1 class="text-3xl font-bold">Welcome to the Page</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            
        </div> -->
    </div>
        <div class="lg:absolute h-full w-full mx-4 px-4">
            <!-- Banner -->
            <div class="grid max-w-screen-4xl md:ml-12 md:mr-14  -mt-12 xl:gap-0 lg:pt-2 lg:grid-cols-12">
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

            <!-- <ul class=" lg:mx-16  text-base font-medium text-center text-gray-900 divide-x divide-gray-200 rounded-lg shadow flex flex-row sm:flex  ">
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
            </ul> -->
            
        </div>
       
        <img src="/images/background_pattern1.png" alt="" class="h-2 lg:w-full lg:h-min invisible lg:visible">

    </div>

    <button class="flex bg-editlink rounded-lg m-4 p-2">
        Edit Home Banner Component
    </button>
</div>
