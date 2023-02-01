@extends('layout.layout')
@section('content')
    <!-- <img src="{{url('/images/i6.jpeg')}}" alt="Image"/> -->

    <div class=" h-1/2 lg:h-screen bg-white relative md:z-10">
        <!-- bg-gradient-to-t from-indigo-200 -->
        <img class="absolute bottom-0 right-0 lg:left-0 mx-auto h-full w-full object-cover"
             src="{{url('/images/i8.jpeg')}}"
             alt="">

        <!-- Animated text -->
        <div
            class="absolute top-1/3 left-5 text-xl sm:left-10 sm:text-4xl md:left-1/4 md:text-6xl lg:left-5 xl:left-38 xl:text-7xl font-bold">
            <span class="text-white">Moses</span>
            <!-- <p class="text-white">Moses</p> -->
            <p class="text-white">Ogutu</p>
        </div>
    </div>

    <div class="px-10  bg-white">
        <div class="container mx-auto py-14 flex flex-col md:flex-col lg:flex-row items-center gap-20">
            <!-- Left -->
            <div class=" lg:w-1/3">
                <div class="flex flex-col justify-center items-center">
                    <!-- h-fit w-fit object-fit  -->
                    <img class="rounded-full"
                         src="{{asset('storage/'. $bio->picture)}}"
                         alt="">
                    <p class="m-1 font-black text-center text-2xl pb-3 ">{{$bio->name}}</p>

                    @foreach($position as $position)
                        <p class="m-1 font-black text-center p-0">{{$position->title}},</p>
                        <p class="m-1 font-black text-center text-gray-800">{{$position->institution}}.</p>
                    @endforeach


                    <div class="flex flex-col text-center gap-6 py-3">
                        <!-- <div class="px-6">
                            <h2 class="font-bold text-xl">Interests</h2>
                        </div> -->

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

            <!-- Right -->
            <div class=" lg:w-2/3 my-auto flex flex-col gap-3">
                <h1 class="text-indigo-600 text-center font-bold text-2xl">About Me</h1>
                <p class="text-gray-600">
                    {!! $bio->about !!}
                </p>
            </div>
        </div>


        <!-- Download CV -->
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

@endsection

<body>
</body>
</html>
