<div>
    {{-- The best athlete wants his opponent at his best. --}}
        <!-- BANNER -->
        <div class=" h-1/2 lg:h-screen bg-white relative md:z-10">
        <img class="absolute bottom-0 right-0 lg:left-0 mx-auto shadow-xl h-full w-full object-cover"
             src="{{url('/images/i8.jpeg')}}"
             alt="">

         Animated text   
        <div
            class="absolute top-1/3 left-5 text-xl sm:left-10 sm:text-4xl md:left-1/4 md:text-6xl lg:left-5 xl:left-38 xl:text-7xl font-bold">
            <span class="text-white">Photos</span>
            <p class="text-white">&</p>
            <p class="text-white">Media</p>
        </div>
    </div>
    <div class="bg-white">
        <div class="container mx-auto  lg:w-full bg-white ">
                        
            <div class="flex flex-col gap-3 items-center">
                <h1 class="text-indigo-600 font-bold text-2xl">Gallery</h1>
                <p class="w-1/2 text-center text-gray-600">
                    Media on my interactions, places I've been to and things I've been doing.
                </p>
            </div>
                            
            <div class="p-5 sm:p-0 flex flex-wrap justify-between">
                <div class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-2">
                        <img class="w-fit sm:items-center"
                                src="{{-- asset('storage/'.$gallery->image) --}}"
                                alt="Moses Ogutu image gallery photo {{-- $gallery->caption -- }}">
                        <p class="text-gray-600">{{-- $gallery->caption --}}</p>
                </div>
                 
            </div>
        </div> 
    </div>
</div>
