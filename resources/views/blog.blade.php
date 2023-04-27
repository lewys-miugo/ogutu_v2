@extends('layout.layout')
@section('title') {{'Blog'}}@endsection

@section('content')

    <section>
        <div class="bg-blue-900 float-left z-05 absolute rounded-b-lg ml-16"> 
            <div class="m-4">
                <p class="text-white">
                    <a class="hover:underline underline-offset-4" href="{{'/'}}">Home</a> 
                    <!-- <span> /</span> 
                    <a class="hover:underline underline-offset-4" href="{{'about'}}"> About Moses Ogutu</a> -->
                    
                    <span> /</span> <a class="underline underline-offset-4" href="">Blog & Publications</a>
                </p>
            </div>
        </div>
    </section>
    
    <section class="mt-12 mx-8 lg:m-24">
        <div class="h-8 w-8">
            <img src="/images/box_logo.png" alt="">
        </div>
        <section class="px-8">
            <h2 class="text-xsitangeh font-extrabold text-bluetange">Blog</h2>
            <div class="flex flex-cols my-10 lg:h-48 lg:w-full ">
                <a href="#" class="bg-blue-500 m-8 p-4 lg:p-20 text-white hover:bg-bluetange hover:text-gray-800 rounded-lg lg:w-full text-center">                
                    <p class="lg:text-xxl">Reflections</p>                
                </a>
                <a href="#" class="bg-blue-500 m-8 p-4 lg:p-20 text-white hover:bg-bluetange hover:text-gray-800 rounded-lg lg:w-full text-center">                
                    <p class="lg:text-xxl">Publications</p>                
                </a>
            </div>
        </section>
    </section>

    <section class="mx-8 lg:m-32">
        
        <img src="/images/box_logo.png" class="h-12 w-12" alt="">
        
        <div class="ml-12">
            <h2 class="text-xsitangeh font-extrabold text-bluetange">Blog Articles</h2>

            <div class="">
                <div class="lg:m-8 flex flex-col items-center md:flex-row flex-wrap">  
                    <!-- BLOG 1 -->
                    <div class="my-4 w-auto p-4 w-2/3 md:w-1/3 xl:w-1/4 max-h-80">
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
                    <div class="my-4 w-auto p-4 w-2/3 md:w-1/3 xl:w-1/4 max-h-80">
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
                    <div class="my-4 w-auto p-4 w-2/3 md:w-1/3 xl:w-1/4 max-h-80">
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
                    <div class="my-4 w-auto p-4 w-2/3 md:w-1/3 xl:w-1/4 max-h-80">
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
            </div>

        </div>
    </section>

@endsection