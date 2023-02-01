

@extends('layout.layout')

@section('content')
    <div class="page-header bg-white">
        {{--    Banner--}}
        <div class=" h-1/2 lg:h-screen bg-white relative md:z-10">
            <img class="absolute bottom-0 right-0 lg:left-0 mx-auto h-full w-full object-cover"
                src="{{url('/images/i8.jpeg')}}"
                alt="">

            <!-- Animated text -->  
            <div
                class="absolute top-1/3 left-5 text-xl sm:left-10 sm:text-4xl md:left-1/4 md:text-6xl lg:left-5 xl:left-38 xl:text-7xl font-bold">
                <span class="text-white">My</span>
                <p class="text-red-600">Publications</p>
                <!-- <p class="text-white">Me</p> -->
            </div>
        </div>

        <!-- ARTICLES -->
        {{--     global_sustainability Publication container--}}
        <h2 class="text-2xl mt-4 text-indigo-600 font-bold text-center">Global Sustainability Publications</h2>
        <div class="flex flex-col mt-3 md:flex-row md:flex-wrap justify-center items-center">
            
            @foreach($internalpublications as $internalpublication)
                @if($internalpublication->type=="global_sustainability")
                <a target="_blank" href="{{route('publications.show', $internalpublication->id)}}"
                   class="transition duration-200 ease-out transform hover:scale-105 my-2 w-5/6 h-auto rounded shadow-2xl md:w-2/5 lg:w-2/5 mx-2">
                    <img
                        class="w-full h-4/5 object-cover rounded-t"
                        src={{ asset("storage/{$internalpublication->image}") }} alt="">
                    <div class="flex justify-between items-center mr-2">
                        <div class="flex flex-col">
                            <time class="text-xs pl-2 text-gray-500">{{$internalpublication->time}}</time>
                            <p class="p-2 font-bold">{{ $internalpublication->title }}</p>
                        </div>
                        <p class="rounded-3xl text-white bg-green-600 px-2 ">{{ $internalpublication->tag }}</p>
                    </div>
                </a>
                @endif
            @endforeach
        </div>

        <div class="flex flex-col mt-3 md:flex-row md:flex-wrap justify-center items-center">
            @foreach($externalpublications as $externalpublication)
                @if($externalpublication->type=="global_sustainability")
                <a target="_blank" href="{{$externalpublication->link}}"
                   class="transition duration-200 ease-out transform hover:scale-105 my-2 w-5/6 h-auto rounded shadow-2xl md:w-2/5 lg:w-2/5 mx-2">
                    <img
                        class="w-full h-4/5 object-cover rounded-t"
                        src={{ asset("storage/{$externalpublication->image}") }} alt="">
                    <div class="flex justify-between items-center mr-2">
                        <div class="flex flex-col">
                            <time class="text-xs pl-2 text-gray-500">{{$externalpublication->time}}</time>
                            <p class="p-2 font-bold">{{ $externalpublication->title }}</p>
                        </div>
                        <p class="rounded-3xl text-white bg-green-600 px-2">{{ $externalpublication->tag }}</p>
                    </div>
                </a>
                @endif
            @endforeach
        </div>

        {{--     global_trade Publication container--}}

        <h2 class="text-2xl mt-4 text-indigo-600 bg-white font-bold text-center">Global Trade and Investments</h2>
        <div class="flex flex-col mt-3 md:flex-row md:flex-wrap justify-center items-center">
            
            @foreach($internalpublications as $internalpublication)
                @if($internalpublication->type=="global_trade")
                <a target="_blank" href="{{route('publications.show', $internalpublication->id)}}"
                   class="transition duration-200 ease-out transform hover:scale-105 my-2 w-5/6 h-auto rounded shadow-2xl md:w-2/5 lg:w-2/5 mx-2">
                    <img
                        class="w-full h-4/5 object-cover rounded-t"
                        src={{ asset("storage/{$internalpublication->image}") }} alt="">
                    <div class="flex justify-between items-center mr-2">
                        <div class="flex flex-col">
                            <time class="text-xs pl-2 text-gray-500">{{$internalpublication->time}}</time>
                            <p class="p-2 font-bold">{{ $internalpublication->title }}</p>
                        </div>
                        
                        <p class="rounded-3xl text-white bg-red-600 px-2 ">{{ $internalpublication->tag }}</p>
                    </div>
                </a>
                @endif
            @endforeach
        </div>

        <div class="flex flex-col mt-3 md:flex-row md:flex-wrap justify-center items-center">
            @foreach($externalpublications as $externalpublication)
                @if($externalpublication->type=="global_trade")
                <a target="_blank" href="{{$externalpublication->link}}"
                   class="transition duration-200 ease-out transform hover:scale-105 my-2 w-5/6 h-auto rounded shadow-2xl md:w-2/5 lg:w-2/5 mx-2">
                    <img
                        class="w-full h-4/5 object-cover rounded-t"
                        src={{ asset("storage/{$externalpublication->image}") }} alt="">
                    <div class="flex justify-between items-center mr-2">
                        <div class="flex flex-col">
                            <time class="text-xs pl-2 text-gray-500">{{$externalpublication->time}}</time>
                            <p class="p-2 font-bold">{{ $externalpublication->title }}</p>
                        </div>
                        <p class="rounded-3xl text-white bg-red-600 px-2">{{ $externalpublication->tag }}</p>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
    </div>
@endsection
<body>
</body>
</html>