<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
    <title>Moses Ogutu</title>
</head>
<body class="bg-gray-200">
<!-- flex justify-between mb-6 -->
<nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
    <span class="text-2xl cursor-pointer">
      <a href="/">
        <img class="h-10 inline"
             src="https://imgs.search.brave.com/0AQQolYpCoid6wIJGQ4JKqUsQOaBz8a2CSC0am-Quok/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2U0/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5l/bjJOZVZ2LWFTQ09l/Qm84MFdXTVB3SGFI/YSZwaWQ9QXBp">
          Ogutu
      </a>
    </span>

        <span class="text-3xl cursor-pointer mx-2 md:hidden block">
      <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
    </span>
    </div>

    <ul class="md:flex md:items-center z-[-1] z-30 md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        <li class="mx-4 my-6 md:my-0">
            <a href="/" class="p-3 hover:text-cyan-500  duration-500">Home</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="{{url('about')}}" class="p-3 hover:text-cyan-500  duration-500">About</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="{{url('/reflections')}}" class="p-3 hover:text-cyan-500  duration-500">Reflections</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="{{url('/publications')}}" class="p-3 hover:text-cyan-500  duration-500">Publications</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="{{url('/currentinterests')}}" class="p-3 hover:text-cyan-500  duration-500">Current Interests</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="{{url('/gallery')}}" class="p-3 hover:text-cyan-500  duration-500">Gallery</a>
        </li>
    </ul>

</nav>

@yield('content')
<!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

<footer aria-label="Site Footer" id="footer" class="bg-white">
    <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2">
            <div class="py-8 border-b border-gray-100 lg:order-last lg:border-b-0 lg:border-l lg:py-16 lg:pl-16">


                <div class="mt-8 space-y-4 lg:mt-0">
                    @foreach($contacts as $contact)
                        @if($contact->type === 'email')
                            <span class="hidden w-10 h-1 bg-indigo-600 rounded lg:block"></span>
                            <div>
                                <h2 class="text-2xl font-medium text-gray-900">Contact me via Email</h2>
                            </div>
                            <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">


                                <form target="_blank"

                                      action="https://formsubmit.co/{{$contact->value}}"
                                      method="POST">
                                    <div class="form-group mb-6">
                                        <input type="text"
                                               class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                               id="name" name="name"
                                               placeholder="Name">
                                    </div>
                                    <div class="form-group mb-6">
                                        <input type="email" name="email"
                                               class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                               id="exampleInput8"
                                               placeholder="Email address" required>
                                    </div>
                                    <div class="form-group mb-6">
                            <textarea name="message"
                                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700
                              bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                      id="exampleFormControlTextarea13"
                                      rows="3"
                                      placeholder="Message"
                            ></textarea>
                                    </div>
                                    <button type="submit" class="
                            w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                            active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Send
                                    </button>
                                </form>
                                @endif
                                @endforeach


                            </div>
                </div>
            </div>

            <div class="py-8 lg:py-16 lg:pr-16">
                <div>
            <span class="text-2xl cursor-pointer">
                <a href="#">
                    <img class="h-10 inline"
                         src="https://imgs.search.brave.com/0AQQolYpCoid6wIJGQ4JKqUsQOaBz8a2CSC0am-Quok/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2U0/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5l/bjJOZVZ2LWFTQ09l/Qm84MFdXTVB3SGFI/YSZwaWQ9QXBp">
                </a>
            </span>
                </div>

                <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-3">
                    <div>
                        <p class="font-medium text-gray-900">Links</p>
                        <div><span class="hidden w-10 h-1 bg-indigo-600 rounded lg:block"></span></div>

                        <nav aria-label="Footer Navigation - Services" class="mt-6">

                            <ul class="space-y-4 text-sm">
                                <li><a href="{{url('/')}}" class="text-gray-700 transition hover:opacity-75">Home</a>
                                </li>
                                <li><a href="{{url('/about')}}"
                                       class="text-gray-700 transition hover:opacity-75">About</a></li>
                                <li><a href="{{url('/reflections')}}" class="text-gray-700 transition hover:opacity-75">Reflections</a>
                                </li>
                                <li><a href="{{url('/publications')}}"
                                       class="text-gray-700 transition hover:opacity-75">Publications</a>
                                </li>
                                <li><a href="{{url('/currentinterests')}}"
                                       class="text-gray-700 transition hover:opacity-75">Current Interest</a></li>
                                <li><a href="{{url('/gallery')}}" class="text-gray-700 transition hover:opacity-75">Gallery</a>
                                </li>
                                <li><a href="/admin" class="text-gray-700 transition hover:opacity-75">Dashboard</a>
                                </li>
                            </ul>
                        </nav>
                    </div>


                    <div>
                        <p class="font-medium text-gray-900">Contacts</p>
                        <div><span class="hidden w-12 h-1 bg-indigo-600 rounded lg:block"></span></div>

                        <nav aria-label="Footer Navigation - Company" class="mt-6">
                            <ul class="space-y-4 text-sm">
                                @foreach($contacts as $contact)
                                    <li>
                                        @if($contact->type=="social")
                                            <a href="{{$contact->value}}"
                                               class="text-gray-700 transition hover:opacity-75">{{$contact->name}}
                                            </a>

                                        @endif
                                    </li>
                                    <li>
                                        @if($contact->type=="phone_number")
                                            <a href="{{$contact->value}}"
                                               class="text-gray-700 transition hover:opacity-75">{{$contact->name}}
                                            </a>

                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="pt-8 mt-8 border-t border-gray-100">

                    <p class="mt-8 text-xs text-gray-500">
                        &copy; 2023. Built by <a href="#">lewys</a>. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script>
    function Menu(e) {
        let list = document.querySelector('ul');
        e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
    }
</script>
</body>
</html>
