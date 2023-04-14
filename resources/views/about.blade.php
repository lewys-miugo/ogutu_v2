

@extends('layout.layout')

@section('content')


<!-- OLD componet -->
<!-- component -->
    <!-- <div class=" h-1/2 lg:h-screen bg-white relative md:z-10">
        <img class="absolute bottom-0 right-0 lg:left-0 mx-auto h-full shadow-xl w-full object-cover"
             src="{{url('/images/i8.jpeg')}}"
             alt="">

        <div
            class="absolute top-1/3 left-5 text-xl sm:left-10 sm:text-4xl md:left-1/4 md:text-6xl lg:left-5 xl:left-38 xl:text-7xl font-bold">
            <span class="text-white">More</span>
            <p class="text-red-600">About</p>
            <p class="text-white">Me</p>
        </div>
    </div> -->
<!-- New trial section-->

    <!-- New trial layout -->
    <!-- <div class="bg-white pt-6">
        <div class="">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-12">
                <div class="col-span-3 flex flex-col justify-center items-center">
                    <h2 class="font-bold text-indigo-600 text-xl">Education</h2>
                    <ol class="">

                    @foreach($education as $education)
                        <ul class="py-2 text-center px-5 m-5">
                            <li class="font-bold flex flex-row gap-2"><span class=""><ion-icon name="school"></ion-icon></span> {{$education->degree}},{{$education->year_of_completion }} at</li>
                            <li class="px-5 ">{{$education->institution }}</li>
                        </ul>
                    @endforeach 
                        
                        
                    </ol>
                </div>
                <div class="col-span-6 p-5 m-3 flex flex-col justify-center items-center ">
                    <img class="rounded-full"
                         src="{{asset('storage/'. $bio->picture)}}"
                         alt="Profile picture of Moses Ogutu">
                    <p class="m-1 font-black text-2xl pb-3">{{$bio->name}}.</p>
                    
                    @foreach($position as $position)
                    <p class="m-1 font-black text-center p-0">{{$position->title}},</p>
                    <p class="m-1 font-black text-center text-gray-800">{{$position->institution}}.</p>
                    @endforeach
                </div>

                <div class="col-span-3 flex flex-col justify-center items-center">
                    <div class="px-6">
                        <h2 class="font-bold text-indigo-600 flex justify-center items-center text-xl">Interests</h2>

                        <ol class="py-3 list-disc">
                            @foreach($interest as $interest)
                            <li class="text-gray-700">{{$interest->title}}</li> 
                            @endforeach                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- <div class="bg-white">
        <div id="experience" class="py-10 flex flex-col lg:flex-row item-center gap-20 bg-white">
                <div class="lg:w-2/3 px-7 mx-3 my-auto flex flex-col gap-3 ">
                    <h1 class="text-indigo-600 text-center font-bold text-2xl">About Me</h1>

                    <p class="text-gray-600 ">
                        {!!  $bio->about  !!} 
                    </p>
                </div>
              
                </div> 
                <div class="p-5 lg:p-3 lg:w-1/3 flex flex-wrap justify-between">
                        @foreach($gallery->slice(0,2) as $gallery)
                            <div class="w-full shadow-xl rounded-lg p-5 my-3 md:my-3 flex flex-col gap-2">

                                <img class="w-fit sm:items-center"
                                        src="{{asset('storage/'.$gallery->image)}}"
                                        alt="">
                                <p class="text-gray-600">{{$gallery->caption}}</p>
                            </div>
                        @endforeach                   

                </div>    
            </div>

        </div>
    </div> -->
@endsection
<body>
</body>
</html>