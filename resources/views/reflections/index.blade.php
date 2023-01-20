

@extends('layout.layout')

@section('content')
    <div class="page-header bg-white">
        {{--    Banner--}}
        <!-- <div class=" h-1/2 lg:h-screen bg-white relative md:z-10">
            
            <img class="w-full h-52 md:h-80 lg:h-full object-cover "
                 src="{{url('/images/i5.jpeg')}}"
                 alt="Photo of Ogutu"
            >
            <div
                class="absolute bottom-0 left-2 text-xl sm:left-10 sm:text-4xl  md:text-6xl xl:text-7xl font-bold">
                <span class="text-white">My</span>
                <p class="text-red-500">Reflections</p>
            </div>
        </div> -->
        <div class=" h-1/2 lg:h-screen bg-white relative md:z-10">
            <img class="absolute bottom-0 right-0 lg:left-0 mx-auto h-full w-full object-cover"
                src="{{url('/images/i8.jpeg')}}"
                alt="">

            <!-- Animated text -->  
            <div
                class="absolute top-1/3 left-5 text-xl sm:left-10 sm:text-4xl md:left-1/4 md:text-6xl lg:left-5 xl:left-38 xl:text-7xl font-bold">
                <span class="text-white">More</span>
                <p class="text-red-600">About</p>
                <p class="text-white">Me</p>
            </div>
        </div>

        <!-- ARTICLES -->
        {{--        Reflections container--}}
        <div class="flex flex-col mt-3 md:flex-row md:flex-wrap justify-center items-center">
            @foreach($internalreflections as $internalreflection)
                <a href="{{route('reflections.show', $internalreflection->id)}}"
                   class="transition duration-200 ease-out transform hover:scale-105 my-2 w-5/6 h-64 rounded shadow-2xl md:w-2/5 lg:w-2/5 mx-2">
                    <img
                        class="w-full h-4/5 object-cover rounded-t"
                        src={{ asset("storage/{$internalreflection->image}") }} alt="">
                    <div class="flex justify-between items-center mr-2">
                        <p class="p-2 font-bold">{{ $internalreflection->title }}</p>
                        <p class="rounded-3xl text-white bg-red-600 px-2">{{ $internalreflection->tag }}</p>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="flex flex-col mt-3 md:flex-row md:flex-wrap justify-center items-center">
            @foreach($externalreflections as $externalreflection)
                <a href="{{$externalreflection->link}}"
                   class="transition duration-200 ease-out transform hover:scale-105 my-2 w-5/6 h-64 rounded shadow-2xl md:w-2/5 lg:w-2/5 mx-2">
                    <img
                        class="w-full h-4/5 object-cover rounded-t"
                        src={{ asset("storage/{$externalreflection->image}") }} alt="">
                    <div class="flex justify-between items-center mr-2">
                        <p class="p-2 font-bold">{{ $externalreflection->title }}</p>
                        <p class="rounded-3xl text-white bg-red-600 px-2">{{ $externalreflection->tag }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
<body>
</body>
</html>