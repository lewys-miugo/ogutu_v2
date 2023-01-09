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
<!-- component -->
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
<!-- New trial section-->

    <!-- New trial layout -->
    <div class="bg-white pt-6">
        <div class="">
            <h1 class="text-indigo-600 text-center pb-6 font-bold text-2xl">About Me</h1>

        </div>

        <div class="">
            <div class="max-w-7xl mx-auto grid grid-cols-12">
                <div class="col-span-3 flex flex-col justify-center items-center">
                    <h2 class="font-bold text-indigo-600 text-xl">Education</h2>
                            <ol class="">
                                
                                <ul class="py-3">
                                    <li class="font-bold text-gray-700"><span><ion-icon name="school"></ion-icon></span> 
                                    MA in Political Science,2007
                                    </li>
                                    <li class="px-5 ">UON</li>
                                </ul>
                                <ul class="py-3">
                                    <li class="font-bold text-gray-700"><span><ion-icon name="school"></ion-icon></span> 
                                    MA in Political Science,2007
                                    </li>
                                    <li class="px-5 ">UON</li>
                                </ul>
                                <ul class="py-3">
                                    <li class="font-bold text-gray-700"><span><ion-icon name="school"></ion-icon></span> 
                                    MA in Political Science,2007
                                    </li>
                                    <li class="px-5 ">UON</li>
                                </ul>
                                <ul class="py-3">
                                    <li class="font-bold text-gray-700"><span><ion-icon name="school"></ion-icon></span> 
                                    MA in Political Science,2007
                                    </li>
                                    <li class="px-5 ">UON</li>
                                </ul>
                                
                            </ol>
                </div>
                <div class="col-span-6 flex flex-col justify-center items-center ">
                    <img class="h-96 w-96 rounded-full"
                         src="{{ url('/images/i3.jpeg')}}"
                         alt="">
                    <p class="m-1 font-black">International Business & Trade Specialist,</p>
                    <p class="m-1 font-black">Econalis Group LLC.</p>
                    <p class="m-1 font-black">Assistant Prof. International Business & Trade,</p>
                    <p class="m-1 font-black">African Leadership University.</p>
                </div>
                <div class="col-span-3 flex flex-col justify-center items-center">
                    <div class="px-6">
                            <h2 class="font-bold text-indigo-600  text-xl">Interests</h2>

                            <ol class="py-3 list-disc">
                                
                                <li class="text-gray-700">The Global Political Economy</li> 
                                <li class="text-gray-700">Global Sustainability</li>
                                <li class="text-gray-700">Trade and Sustainable Development</li>
                                <li class="text-gray-700">Social Innovation and Entrepreneurship</li>
                                <li class="text-gray-700">Education in Africa</li>
                                <li class="text-gray-700">Leadership Development in Africa</li>
                                <li class="text-gray-700">Regional Integration in Africa</li>
                                <li class="text-gray-700">US / EU  – Africa Relations.</li>
                                <li class="text-gray-700">Hiking </li>
                                
                            </ol>
                        </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white">
        <div id="experience" class="container mx-auto py-10 flex flex-col lg:flex-row item-center gap-20 bg-white">
                <!-- Left -->
                <div class="lg:w-2/3 my-auto flex flex-col gap-3 ">
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

                
                <!-- <div class="my-auto flex justify-center item-center lg:w-1/3">
                    
                    
                    
                </div> -->
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

                <div class="w-full  shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-2">
                    <img class="w-fit sm:items-center"
                            src="https://imgs.search.brave.com/LUVfQoQ64vsjW0PdbA-GI5RHyrxIlOTr0iF9GslALmM/rs:fit:711:225:1/g:ce/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5Y/S1FLaHcwWlJpc242/bkVDQURiZEpnSGFF/OCZwaWQ9QXBp"
                            alt="">
                    <h1 class="font-medium text-lg">Biden' Rally</h1>
                    <p class="text-gray-600">In a workshop with the guest being bidden</p>
                </div>
            </div>

        </div>
    </div>
@endsection