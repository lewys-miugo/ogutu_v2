@extends('layout.layout')
@section('title') {{'Profile'}}@endsection

@section('content')
    <!-- Banner -->
    <section>
        <div class="flex max-w-screen-xl">
            <div class="bg-blue-900 float-left z-05 absolute rounded-b-lg ml-16"> 
                <div class="m-4">
                    <p class="text-white"><a class="hover:underline underline-offset-4" href="{{'/'}}">Home</a> <span> /</span> <a class="hover:underline underline-offset-4" href="{{'about'}}"> About Moses Ogutu</a> <span> /</span> <a class="underline underline-offset-4" href="">Profile</a></p>
                </div>
            </div>               
        </div>
        <!-- Banner -->
        <div id="top" class="mt-20 flex flex-col items-center m-8 ">
            <div class="w-1/3">
                <img src="/images/tie_shot.jpg" class="rounded-full border-bluetange border-8 " alt="">                
            </div>
            <div>
                <div>
                    <p class="text-sitangeh text-bluetange font-bold">Moses Ogutu</p>
                </div>

                <!-- Occupation 1 -->
                <div class="flex my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-1/4 h-8 pt-2 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                    </svg>

                    <div>
                        <h3 class="text-bluetange text-sitange font-bold">Proffessor Of Business,</h3>
                        <p class="text-base">African Leadership University</p>
                    </div>
                </div>

                <!-- Occupation 2 -->
                <div class="flex my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-1/4 h-8 pt-2 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                    </svg>

                    <div class="">
                        <h3 class="text-bluetange text-sitange font-bold">Founder & CEO,</h3>
                        <p class="text-base">Econalis Group</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Body -->
    <section>
        <!-- Back to top button -->

                <div class="top-0 sticky mr-4 float-right rounded-full w-10 flex items-center justify-center h-10 border-bluetange border-2 ">
                    <div class=" items-center justify-center text-center">
                        <a href="#top" class="content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                            </svg>
                        </a>
                    </div>
                </div>
        <div class="m-8 lg:m-12 flex lg:flex-col-12 ">
            
            <aside class="absolute lg:relative lg:flex  lg:flex-col-4 lg:sticky lg:top-0 lg:left-0 lg:w-64 lg:h-full invisible sm:invisible lg:visible " aria-label="Sidenav">
                <div class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <ul class="space-y-2">
                        <li>
                            <p class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white dark:hover:bg-gray-700 group">
                                <span class="ml-3 text-xl text-bluetange font-bold">Jump to:</span>
                            </p>
                        </li>
                        
                    </ul>

                    <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
                        <li class="">
                            <a href="#biography" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 hover:underline underline-offset-4 hover:text-orangelink dark:hover:bg-gray-700 dark:text-white group">
                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                <span class="ml-3 ">Biography</span>
                            </a>
                        </li>
                        <li>
                            <a href="#publications" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 hover:underline underline-offset-4 hover:text-orangelink dark:hover:bg-gray-700 dark:text-white group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>

                                <span class="ml-3">Publication</span>
                            </a>
                        </li>
                        <li>
                            <a href="#articles" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 hover:underline underline-offset-4 hover:text-orangelink dark:hover:bg-gray-700 dark:text-white group">
                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
                                <span class="ml-3">Articles</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <div class="m-8 w-full">
                <!-- PROFESSIONAL PROFILE SECTIONS -->
                <div>
                    <img src="/images/box_logo.png" class="h-12 w-12" alt="">
                    <h2 id="biography" class=" text-bluetange text-sitangeh font-extrabold ml-12 mb-4">Professional Profile</h2>
                    <p class="mb-4">I am a global technocrat and currently serving as Kenya’s Ambassador to the Kingdom of Belgium. Previously, I was the Professor of Entrepreneurship at the University of Nairobi School of Business. I am also an advocate of development strategies leveraging emergent technologies and social enterprise in Africa. I sit on boards of several high-profile organizations such as East Africa’s most profitable company – Safaricom – and a senior advisor three UN agencies and other non-governmental institutions.</p>
                    <p class="mb-4">My skills, capabilities and experience are varied. They include over 8 years’ CEO-equivalent experience as Permanent Secretary in Ministry of Information and Communications for the Government of Kenya, high-level policy development and public administration, university-level teaching, academic research and graduate supervision, design and implementation of curriculum, academic leadership and administration, innovation management and public speaking to mention but a few.</p>
                    <p class="mb-4">I have over 30 years of business, finance and technology expertise gained from my years in Government, Higher Education and the Private Sector. I am widely published in refereed academic journals and I am also a leading public intellectual offering my expertise as a columnist and commentator in high-quality, cross-cutting media platforms.</p>
                    <p class="mb-4">Below is a sample of my notable achievements :</p>
                    <hr style="border: 0; height: 2px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);" class="mt-4 mb-4">
                </div>
                <!-- Interests -->
                <div>
                    <img src="/images/box_logo.png" class="h-12 w-12" alt="">
                    <h2 class=" text-bluetange text-sitangeh font-extrabold ml-12 mb-4">Interests</h2>
                    <ul class="list-disc ml-4">
                        <li class="mb-2">Professor of Entrepreneurship</li>
                        <li class="mb-2">Associate Professor at the School of Business, University of Nairobi, where he supervised over 7 PhDs with 5 others at an advanced stage.</li>
                        <li class="mb-2">Senior Advisor to UNCDF’s Better than Cash Alliance</li>
                        <li class="mb-2">Member of Global Learning Coun</li>
                        <li class="mb-2">Senior Advisor to Research ICT Africa</li>
                        <li class="mb-2">Member of World Economic Forum’s Blockchain Council</li>
                    </ul>
                    <hr style="border: 0; height: 2px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);" class="mt-4 mb-4">
                </div>
                <!-- Key Achievements -->
                <div>
                    <img src="/images/box_logo.png" class="h-12 w-12" alt="">
                    <h2 class=" text-bluetange text-sitangeh font-extrabold ml-12 mb-4">Key Achievements</h2>
                    <ul class="list-disc ml-4">
                        <li class="mb-2">Professor of Entrepreneurship</li>
                        <li class="mb-2">Associate Professor at the School of Business, University of Nairobi, where he supervised over 7 PhDs with 5 others at an advanced stage.</li>
                        <li class="mb-2">Senior Advisor to UNCDF’s Better than Cash Alliance</li>
                        <li class="mb-2">Member of Global Learning Coun</li>
                        <li class="mb-2">Senior Advisor to Research ICT Africa</li>
                        <li class="mb-2">Member of World Economic Forum’s Blockchain Council</li>
                    </ul>
                    <hr style="border: 0; height: 2px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);" class="mt-4 mb-4">
                </div>

                <!-- SPECIAL ASSIGNMENTS AND LEADERSHIP -->
                <div>
                    <img src="/images/box_logo.png" class="h-12 w-12" alt="">

                    <h2 class=" text-bluetange text-sitangeh font-extrabold ml-12 mb-8 mt-8">Special Assignments and Leadership</h2>
                    <!-- Special 1 -->
                    <div class="flex mb-4 flex-cols-12">
                        <div class="flex flex-cols-3 h-full items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
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
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
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
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
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
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
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

                <!-- Publications -->
                <div id="publications">
                    <img src="/images/box_logo.png" class="h-12 mt-8 w-12" alt="">
                    <h2 class=" text-bluetange text-sitangeh font-extrabold ml-12 mb-8 ">Publications</h2>
                    <!-- BOOKS -->
                    <div>
                        <h3 class=" text-bluetange text-xl font-extrabold mb-4">Books</h3>
                        <div class="flex mb-4 flex-cols-12">
                        <div class="flex flex-cols-3 h-full items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                <path d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
                            </svg>

                        </div>
                        <div class="flex flex-cols-9 ml-4">
                            <div >
                                <div class="">
                                    <h3 class="text-bluetange text-lg font-semibold">Moses O. and Weiss T. (2016): Digital Kenya</h3>
                                </div>
                                <div>
                                    <p class="text-sm font-base">An Entrepreneurial Revolution in the Making. Landmark Publication featuring Key Experts from Kenya’s startup scene. </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- BOOK CHAPTERS -->
                    <div>
                        <h3 class=" text-bluetange text-xl font-extrabold mb-8 mt-8">Book Chapters</h3>
                        
                        <!-- Book chapter 1 -->

                        <div class="flex mb-4 flex-cols-12">
                            <div class="flex flex-cols-3 h-full items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                            </div>
                            <div class="flex flex-cols-9 ml-4">
                                <div >
                                    <div class="">
                                        <h3 class="text-bluetange text-lg font-semibold">Ndemo, B. (2020). "The role of mobile technologies and inclusive innovation policies in SME development in Sub Saharan Africa".</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">In A Research Agenda for Entrepreneurship Policy. Cheltenham, UK: Edward Elgar Publishing. doi: https://doi.org/10.4337/9781786430946.00018</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <!-- Book Chapter 2 -->
                        <div class="flex mb-4 flex-cols-12">
                            <div class="flex flex-cols-3 h-full items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                            </div>
                            <div class="flex flex-cols-9 ml-4">
                                <div >
                                    <div class="">
                                        <h3 class="text-bluetange text-lg font-semibold">Ndemo, B. (2020). "The role of mobile technologies and inclusive innovation policies in SME development in Sub Saharan Africa".</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">In A Research Agenda for Entrepreneurship Policy. Cheltenham, UK: Edward Elgar Publishing. doi: https://doi.org/10.4337/9781786430946.00018</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <!-- Book Chapter 3 -->
                        <div class="flex  mb-4  flex-cols-12">
                            <div class="flex flex-cols-3 h-full items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                            </div>
                            <div class="flex flex-cols-9 ml-4">
                                <div >
                                    <div class="">
                                        <h3 class="text-bluetange text-lg font-semibold">Ndemo, B. (2020). "The role of mobile technologies and inclusive innovation policies in SME development in Sub Saharan Africa".</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">In A Research Agenda for Entrepreneurship Policy. Cheltenham, UK: Edward Elgar Publishing. doi: https://doi.org/10.4337/9781786430946.00018</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <!-- Book Chapter 4 -->
                        <div class="flex mb-4 flex-cols-12">
                            <div class="flex flex-cols-3 h-full items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                            </div>
                            <div class="flex flex-cols-9 ml-4">
                                <div >
                                    <div class="">
                                        <h3 class="text-bluetange text-lg font-semibold">Ndemo, B. (2020). "The role of mobile technologies and inclusive innovation policies in SME development in Sub Saharan Africa".</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">In A Research Agenda for Entrepreneurship Policy. Cheltenham, UK: Edward Elgar Publishing. doi: https://doi.org/10.4337/9781786430946.00018</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Other book chapters and reports -->
                    <div>
                        <h3 class=" text-bluetange text-lg font-extrabold mb-8 mt-8">Other Book Chapters & Reports</h3>
                        <!-- Other book chapter 1 -->
                        <div class="flex mb-4 flex-cols-12">
                            <div class="flex flex-cols-3 h-full items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M6 3a3 3 0 00-3 3v12a3 3 0 003 3h12a3 3 0 003-3V6a3 3 0 00-3-3H6zm1.5 1.5a.75.75 0 00-.75.75V16.5a.75.75 0 001.085.67L12 15.089l4.165 2.083a.75.75 0 001.085-.671V5.25a.75.75 0 00-.75-.75h-9z" clip-rule="evenodd" />
                                </svg>

                            </div>
                            <div class="flex flex-cols-9 ml-4">
                                <div >
                                    <div class="">
                                        <h3 class="text-bluetange text-lg font-semibold">Ndemo, B. (2020). "The role of mobile technologies and inclusive innovation policies in SME development in Sub Saharan Africa".</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">In A Research Agenda for Entrepreneurship Policy. Cheltenham, UK: Edward Elgar Publishing. doi: https://doi.org/10.4337/9781786430946.00018</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Other book chapter 2 -->
                        <div class="flex mb-4 flex-cols-12">
                            <div class="flex flex-cols-3 h-full items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M6 3a3 3 0 00-3 3v12a3 3 0 003 3h12a3 3 0 003-3V6a3 3 0 00-3-3H6zm1.5 1.5a.75.75 0 00-.75.75V16.5a.75.75 0 001.085.67L12 15.089l4.165 2.083a.75.75 0 001.085-.671V5.25a.75.75 0 00-.75-.75h-9z" clip-rule="evenodd" />
                                </svg>

                            </div>
                            <div class="flex flex-cols-9 ml-4">
                                <div >
                                    <div class="">
                                        <h3 class="text-bluetange text-lg font-semibold">Ndemo, B. (2020). "The role of mobile technologies and inclusive innovation policies in SME development in Sub Saharan Africa".</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">In A Research Agenda for Entrepreneurship Policy. Cheltenham, UK: Edward Elgar Publishing. doi: https://doi.org/10.4337/9781786430946.00018</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Other Bokk Chapter 3 -->
                        <div class="flex mb-4 flex-cols-12">
                            <div class="flex flex-cols-3 h-full items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M6 3a3 3 0 00-3 3v12a3 3 0 003 3h12a3 3 0 003-3V6a3 3 0 00-3-3H6zm1.5 1.5a.75.75 0 00-.75.75V16.5a.75.75 0 001.085.67L12 15.089l4.165 2.083a.75.75 0 001.085-.671V5.25a.75.75 0 00-.75-.75h-9z" clip-rule="evenodd" />
                                </svg>

                            </div>
                            <div class="flex flex-cols-9 ml-4">
                                <div >
                                    <div class="">
                                        <h3 class="text-bluetange text-lg font-semibold">Ndemo, B. (2020). "The role of mobile technologies and inclusive innovation policies in SME development in Sub Saharan Africa".</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">In A Research Agenda for Entrepreneurship Policy. Cheltenham, UK: Edward Elgar Publishing. doi: https://doi.org/10.4337/9781786430946.00018</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <!-- Articles -->
                    <div id="articles">
                        <img src="/images/box_logo.png" class="h-8 mt-8 w-8" alt="">

                        <h3 class=" text-bluetange text-xxl font-extrabold ml-8  mb-8">Articles</h3>
                        <!-- Article 1 -->
                        <div class="flex mb-4 flex-cols-12">
                            <div class="flex flex-cols-3 h-full items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                    <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" />
                                    <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="flex flex-cols-9 ml-4">
                                <div >
                                    <div class="">
                                        <h3 class="text-bluetange text-lg font-semibold">Ndemo, B. (2020). "The role of mobile technologies and inclusive innovation policies in SME development in Sub Saharan Africa".</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">In A Research Agenda for Entrepreneurship Policy. Cheltenham, UK: Edward Elgar Publishing. doi: https://doi.org/10.4337/9781786430946.00018</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Article 2 -->
                        <div class="flex mb-4 flex-cols-12">
                            <div class="flex flex-cols-3 h-full items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                    <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" />
                                    <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="flex flex-cols-9 ml-4">
                                <div >
                                    <div class="">
                                        <h3 class="text-bluetange text-lg font-semibold">Ndemo, B. (2020). "The role of mobile technologies and inclusive innovation policies in SME development in Sub Saharan Africa".</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">In A Research Agenda for Entrepreneurship Policy. Cheltenham, UK: Edward Elgar Publishing. doi: https://doi.org/10.4337/9781786430946.00018</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Article 3 -->
                        <div class="flex mb-4 flex-cols-12">
                            <div class="flex flex-cols-3 h-full items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                    <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" />
                                    <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="flex flex-cols-9 ml-4">
                                <div >
                                    <div class="">
                                        <h3 class="text-bluetange text-lg font-semibold">Ndemo, B. (2020). "The role of mobile technologies and inclusive innovation policies in SME development in Sub Saharan Africa".</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">In A Research Agenda for Entrepreneurship Policy. Cheltenham, UK: Edward Elgar Publishing. doi: https://doi.org/10.4337/9781786430946.00018</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Article 4 -->
                        <div class="flex mb-4 flex-cols-12">
                            <div class="flex flex-cols-3 h-full items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                    <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" />
                                    <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="flex flex-cols-9 ml-4">
                                <div >
                                    <div class="">
                                        <h3 class="text-bluetange text-lg font-semibold">Ndemo, B. (2020). "The role of mobile technologies and inclusive innovation policies in SME development in Sub Saharan Africa".</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">In A Research Agenda for Entrepreneurship Policy. Cheltenham, UK: Edward Elgar Publishing. doi: https://doi.org/10.4337/9781786430946.00018</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
    </section>
    <section>
        <hr style="border: 0; height: 2px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);" class="mt-4 mb-4">
    </section>
@endsection