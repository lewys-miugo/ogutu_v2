<div>
    @section('title') {{'Profile'}}@endsection
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
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
            
            <!-- aside -->
            <aside class="absolute lg:relative lg:flex  lg:flex-col-4 lg:sticky lg:top-0 lg:left-0 lg:w-64 lg:h-full invisible sm:invisible lg:visible " aria-label="Sidenav">
                <div class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200">
                    <ul class="space-y-2">
                        <li>
                            <p class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg group">
                                <span class="ml-3 text-xl text-bluetange font-bold">Jump to:</span>
                            </p>
                        </li>
                        
                    </ul>

                    <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200">
                        <li class="">
                            <a href="#biography" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 hover:underline underline-offset-4 hover:text-orangelink group">
                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                <span class="ml-3 ">Biography</span>
                            </a>
                        </li>
                        <li>
                            <a href="#publications" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 hover:underline underline-offset-4 hover:text-orangelink group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>

                                <span class="ml-3">Publication</span>
                            </a>
                        </li>
                        <li>
                            <a href="#articles" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 hover:underline underline-offset-4 hover:text-orangelink group">
                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
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

                    <p class="mb-4">I am an International Development Professional, Public Policy Specialist, Social Innovator and Entrepreneur. I am a Scholar and Practitioner whose research and work centres around:  the Global Political Economy; Global Sustainability; Trade and Sustainable Development; Social Innovation and Entrepreneurship; Education; and Leadership Development in Africa. </p>

                    <p class="mb-4">I have researched, designed strategies, and managed programs in multiple sectors including: trade and investment policies, education, healthcare, circular economy, blue economy, social entrepreneurship, inclusive innovation, digital technology, regional integration in Africa, governance in Africa, and private sector development. </p>

                    <p class="mb-4">Over the last ten years, I have worked as an International Business & Trade Specialist supporting public and private sector stakeholders to design and implement trade-related research and economic development projects in Africa, Asia, Caribbean, and the Pacific (ACP).  I have worked as an expert consultant on projects commissioned by the EU, Commonwealth Secretariat, UNDP, African Union, the UK’s Foreign, Commonwealth & Development Office (FCDO), German International Development Agency (GIZ), the East African Community (EAC), Alliance for a Green Revolution in Africa (AGRA), and Trademark East Africa (TMEA), and various governments and think tanks in Africa and Europe. My work and leadership have been recognised through various prestigious international awards and scholarships including being selected as a Christine Mirzayan Science and Technology Policy Graduate Fellowship Program (2023 Finalist) by the National Academies of Sciences, Engineering, and Medicine; a Dalai Lama Fellow (2019) by the Contemplative Sciences Centre at the University of Virginia; Mandela Rhodes Scholar (2017) by the Mandela Rhodes Foundation; a Bertha Scholar (2020), by the Bertha Centre for Social Innovation and Entrepreneurship; and a Mauritius Africa Scholar (2013). </p>

                    <p class="mb-4">Originally from Kenya, I have strong international experience gained from studying, living, and working in the USA,  Brazil, South Africa, Kenya, Rwanda, Mauritius, and travelling to over 20 countries across Africa, Latin America, and the Caribbean. In addition to gaining wide perspectives, these improved my intercultural awareness, empathy and provided an opportunity to understand the world and expand my networks. I graduated with a Master of Philosophy (MPhil) in Inclusive Innovation (2022) and an MA in International Relations (2018), both from the University of Cape Town, and a Bachelor of Science (honours) Political Science from the University of Mauritius. I was also a Graduate Fellow at the University of Massachusetts, Amherst where I studied Political Economy, Negotiations, and Global Health. </p>


                    <p class="mb-4">Below is a sample of my notable achievements :</p>
                    <hr style="border: 0; height: 2px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);" class="mt-4 mb-4">
                </div>
                <!-- Key Achievements -->
                <div>
                    <img src="/images/box_logo.png" class="h-12 w-12" alt="">
                    <h2 class=" text-bluetange text-sitangeh font-extrabold ml-12 mb-4">Key Achievements</h2>
                    <ul class="list-disc ml-4">
                        <li class="mb-2">Selected as a Christine Mirzayan Science and Technology Policy Graduate Fellowship Program (2023 Finalist) by the National Academies of Sciences, Engineering, and Medicine</li>
                        <li class="mb-2">Dalai Lama Fellow (2019) by the Contemplative Sciences Centre at the University of Virginia</li>
                        <li class="mb-2">Mandela Rhodes Scholar (2017) by the Mandela Rhodes Foundation</li>
                        <li class="mb-2">Bertha Scholar (2020), by the Bertha Centre for Social Innovation and Entrepreneurship</li>
                        <li class="mb-2">Mauritius Africa Scholar (2013)</li>
                        <li class="mb-2">Member of World Economic Forum’s Blockchain Council</li>
                    </ul>
                    <hr style="border: 0; height: 2px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);" class="mt-4 mb-4">
                </div>
                <!-- Education -->
                <div>
                    <img src="/images/box_logo.png" class="h-12 w-12" alt="">
                    <h2 class=" text-bluetange text-sitangeh font-extrabold ml-12 mb-4">Education</h2>
                    <ul class="list-disc ml-4">
                        <li class="mb-2">Master of Philosophy, Inclusive Innovation, Graduate School of Business, University of Cape Town, 2022.</li>
                        <li class="mb-2">Master of Arts, International Relations, University of Cape Town, 2018.</li>
                        <li class="mb-2">Graduate Fellowship (Political Economy), University of Massachusetts Amherst, 2018.</li>
                        <li class="mb-2">Bachelor of Science (honours), Political Science, University of Mauritius, 2016.</li>
                    </ul>
                    <hr style="border: 0; height: 2px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);" class="mt-4 mb-4">
                </div>
                <!-- Interests -->
                <div>
                    <img src="/images/box_logo.png" class="h-12 w-12" alt="">
                    <h2 class=" text-bluetange text-sitangeh font-extrabold ml-12 mb-4">Areas Of Interests / Experties </h2>
                    <ul class="list-disc ml-4">
                        <li class="mb-2">The Global Political Economy</li>
                        <li class="mb-2">Global Sustainability</li>
                        <li class="mb-2">Trade and Sustainable Development</li>
                        <li class="mb-2">Social Innovation and Entrepreneurship</li>
                        <li class="mb-2">Education in Africa</li>
                        <li class="mb-2">Leadership Development in Africa</li>
                        <li class="mb-2">Regional Integration in Africa</li>
                        <li class="mb-2">US / EU  – Africa Relations.</li>
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
                                    <h3 class="text-bluetange text-lg font-semibold">Proffessor of Business, African Leadership University</h3>
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
                                    <h3 class="text-bluetange text-lg font-semibold">Founder & CEO Econalis Group</h3>
                                </div>
                                <div>
                                    <p class="text-sm font-light">2021 - to date</p>
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
                        <!-- Book 1 -->
                        <div class="flex mb-4 flex-cols-12">
                            <div class="flex flex-cols-3 h-full items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                    <path d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
                                </svg>

                            </div>
                            <div class="flex flex-cols-9 ml-4">
                                <div >
                                    <div class="">
                                        <h3 class="text-bluetange text-lg font-semibold">Ogutu, M. and Githinji. E. (forthcoming 2022/2023). Gender Matching in Venture Capital:</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">An Empirical study of Female-Founded East African Startups in the Climate Change Industry. Frontiers in Sustainability: Circular Economy.</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Book 2 -->
                        <div class="flex mb-4 flex-cols-12">
                            <div class="flex flex-cols-3 h-full items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                                    <path d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
                                </svg>

                            </div>
                            <div class="flex flex-cols-9 ml-4">
                                <div >
                                    <div class="">
                                        <h3 class="text-bluetange text-lg font-semibold">Ogutu, M. & Okello, H. (forthcoming 2022/2023). Impact of Sustainability on Brand Perception, and Purchasing Behavior: </h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">A Case Study of Kenyan consumers. European Journal of Development Studies (Target journal)</p>
                                    </div>
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
                                        <h3 class="text-bluetange text-lg font-semibold">Book Chapter: Naval Power, Institutional Cooperation, and Sustainability of the Seas:</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">Case Study of Kenya Somalia Maritime Dispute.</p>
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
                                        <h3 class="text-bluetange text-lg font-semibold"> (forthcoming 2022/2023). Regional Trade Agreements and the Promotion of Environmental Security:</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">How African trade agreements could promote environmental security and sustainability.</p>
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
                                        <h3 class="text-bluetange text-lg font-semibold">Ogutu, M. (2021). The Indian Ocean Rim Association:</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">Lessons from this regional cooperation model, South African Journal of International Affairs, 28:1, 71-92. </p>
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
                                        <h3 class="text-bluetange text-lg font-semibold">Ogutu, M. (2018). “Informal Cross -border Networks"</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">The Building Blocks to Regional Integration in Africa”, New Agenda, South African Journal of Social and Economic Policy, Issue 69, p 38 – 42.</p>
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
                                        <h3 class="text-bluetange text-lg font-semibold">Ogutu, M. (2015). Political Economy of Multilateral Trade Negotiations.</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base">International Trade and Investment Review. Issue No. 2. 2015.</p>
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
                                        <h3 class="text-bluetange text-lg font-semibold">Caught between Africa and the West:</h3>
                                    </div>
                                    <div>
                                        <p class="text-sm font-base"> Kenya’s proposed US free trade agreement. </p>
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
</div>
