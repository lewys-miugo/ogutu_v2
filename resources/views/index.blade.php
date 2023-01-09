<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Ogutu</title>
</head>
@extends('layout.layout')
@section('content')
<!-- <img src="{{url('/images/i6.jpeg')}}" alt="Image"/> -->

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
            <span class="text-white">Prof.</span>
            <p class="text-white">Moses</p>
            <p class="text-white">Ogutu</p>
        </div>
    </div>

    <div class="px-10  bg-white">
        <div class="container mx-auto py-14 flex flex-col md:flex-col-reverse lg:flex-row items-center gap-20">
            <!-- Left -->
            <div class=" lg:w-1/3">
                <div class="flex flex-col justify-center items-center">
                    <!-- h-fit w-fit object-fit  -->
                    <img class="rounded-full"
                         src="{{ url('/images/p.jpg')}}"
                         alt="">
                    <p class="m-1 font-black">International Business & Trade Specialist,</p>
                    <p class="m-1 font-black text-gray-500">Econalis Group LLC.</p>
                    <p class="m-1 font-black">Assistant Prof. International Business & Trade,</p>
                    <p class="m-1 font-black text-gray-500">African Leadership University.</p>

                    <div class="flex flex-col text-center gap-6 py-3">
                        <!-- <div class="px-6">
                            <h2 class="font-bold text-xl">Interests</h2>
                        </div> -->

                        <div class="px-6">
                            <h2 class="font-bold text-indigo-600 text-xl">Education</h2>
                            <ol class="l-auto">
                                    <ul class="py-0 m-0">
                                        <li class="font-bold flex flex-row gap-2"><span class=""><ion-icon name="school"></ion-icon></span> MA Political Science,2016</li>
                                        <li class="px-5 ">University of Nairobi</li>
                                    </ul>
                                    <ul class="py-3">
                                        <li class="font-bold flex flex-row gap-2"><span><ion-icon name="school"></ion-icon></span>MA Political Science,2016</li>
                                        <li class="px-5 ">University of Nairobi</li>
                                    </ul>
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right -->
            <div  class=" lg:w-2/3 my-auto flex flex-col gap-3">
                <h1 class="text-indigo-600 text-center font-bold text-2xl">About Me</h1>

                <p class="text-gray-600">
                 I am an International Development Professional, Public Policy Specialist, Social Innovator and Entrepreneur. I am a Scholar and Practitioner whose research and work centres around:  the Global Political Economy; Global Sustainability; Trade and Sustainable Development; Social Innovation and Entrepreneurship; Education; and Leadership Development in Africa. 
                </p>

                <p class="text-gray-600">I have researched, designed strategies, and managed programs in multiple sectors including: trade and investment policies, education, healthcare, circular economy, blue economy, social entrepreneurship, inclusive innovation, digital technology, regional integration in Africa, governance in Africa, and private sector development.</p>

                <p class="text-gray-600">Over the last ten years, I have worked as an International Business & Trade Specialist supporting public and private sector stakeholders to design and implement trade-related research and economic development projects in Africa, Asia, Caribbean, and the Pacific (ACP).  I have worked as an expert consultant on projects commissioned by the EU, Commonwealth Secretariat, UNDP, African Union, the UK’s Foreign, Commonwealth & Development Office (FCDO), German International Development Agency (GIZ), the East African Community (EAC), Alliance for a Green Revolution in Africa (AGRA), and Trademark East Africa (TMEA), and various governments and think tanks in Africa and Europe.</p>

                <p class="text-gray-600">
                    My work and leadership have been recognised through various prestigious international awards and scholarships including being selected as a Christine Mirzayan Science and Technology Policy Graduate Fellowship Program (2023 Finalist) by the National Academies of Sciences, Engineering, and Medicine; a Dalai Lama Fellow (2019) by the Contemplative Sciences Centre at the University of Virginia; Mandela Rhodes Scholar (2017) by the Mandela Rhodes Foundation; a Bertha Scholar (2020), by the Bertha Centre for Social Innovation and Entrepreneurship; and a Mauritius Africa Scholar (2013). 

                </p>

                <p class="text-gray-600">Originally from Kenya, I have strong international experience gained from studying, living, and working in the USA,  Brazil, South Africa, Kenya, Rwanda, Mauritius, and travelling to over 20 countries across Africa, Latin America, and the Caribbean. In addition to gaining wide perspectives, these improved my intercultural awareness, empathy and provided an opportunity to understand the world and expand my networks.</p>

                <p class="text-gray-600">I graduated with a Master of Philosophy (MPhil) in Inclusive Innovation (2022) and an MA in International Relations (2018), both from the University of Cape Town, and a Bachelor of Science (honours) Political Science from the University of Mauritius. I was also a Graduate Fellow at the University of Massachusetts, Amherst where I studied Political Economy, Negotiations, and Global Health. </p>
            </div>
        </div>


        
            <!-- Download CV -->
        <div class="max-w-md mx-auto flex justify-center py-10">
            <button
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
            </button>
        </div>
        </div>
    </div>

@endsection

<body>
</body>
</html>
