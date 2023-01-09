<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
<body class="bg-gray-200">
    <!-- flex justify-between mb-6 -->
    <nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between">
        <div class="flex justify-between items-center ">  
            <span class="text-2xl cursor-pointer">
                <a href="#">
                    <img class="h-10 inline" src="https://imgs.search.brave.com/0AQQolYpCoid6wIJGQ4JKqUsQOaBz8a2CSC0am-Quok/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2U0/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5l/bjJOZVZ2LWFTQ09l/Qm84MFdXTVB3SGFI/YSZwaWQ9QXBp">
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
                <a href="{{url('about')}}"class="p-3 hover:text-cyan-500  duration-500">About</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="{{url('reflections')}}"class="p-3 hover:text-cyan-500  duration-500">Reflections</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="{{url('publications')}}"class="p-3 hover:text-cyan-500  duration-500">Publications</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="{{url('currentinterests')}}"class="p-3 hover:text-cyan-500  duration-500">Current Interests</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="{{url('gallery')}}"class="p-3 hover:text-cyan-500  duration-500">Gallery</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#footer"class="p-3 hover:text-cyan-500  duration-500">Contacts</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="/login"class="p-3 hover:text-cyan-500  duration-500">Dashboard</a>
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

<footer aria-label="Site Footer" class="bg-white">
  <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
    <div class="lg:grid lg:grid-cols-2">
      <div
        class="py-8 border-b border-gray-100 lg:order-last lg:border-b-0 lg:border-l lg:py-16 lg:pl-16"
      >
        <div class="block text-teal-600 lg:hidden">
          
        </div>

        <div class="mt-8 space-y-4 lg:mt-0">
          <span class="hidden w-10 h-1 bg-indigo-600 rounded lg:block"></span>

          <div>
            <h2 class="text-2xl font-medium text-gray-900">Email Me</h2>

            <textarea name="" id="" class="block bg-gray-100 p-1 outline-blue-300 w-full"></textarea>
          </div>

          <form class="w-full mt-6">
            <label for="UserEmail" class="sr-only"> Email </label>

            <div
              class="p-2 border border-gray-100 rounded-md focus-within:ring sm:flex sm:items-center sm:gap-4"
            >
              <!-- <input
                type="email"
                id="UserEmail"
                placeholder="john@rhcp.com"
                class="w-full border-none focus:border-transparent focus:ring-transparent sm:text-sm"
              /> -->

              <button
                class="w-full px-6 py-3 mt-1 text-sm font-bold tracking-wide text-white uppercase transition-none bg-indigo-600 rounded hover:bg-teal-600 sm:mt-0 sm:w-auto sm:flex-shrink-0"
              >
                Send
              </button>
            </div>
          </form>
        </div>
      </div>

      <div class="py-8 lg:py-16 lg:pr-16">
        <!-- <div class="hidden text-teal-600 lg:block">
          <svg
            class="h-8"
            viewBox="0 0 118 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
          </svg>
        </div> -->
        <div>
            <span class="text-2xl cursor-pointer">
                <a href="#">
                    <img class="h-10 inline" src="https://imgs.search.brave.com/0AQQolYpCoid6wIJGQ4JKqUsQOaBz8a2CSC0am-Quok/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2U0/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5l/bjJOZVZ2LWFTQ09l/Qm84MFdXTVB3SGFI/YSZwaWQ9QXBp">
                        Ogutu 
                </a> 
            </span>
        </div>

        <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-3">
          <div>
            <p class="font-medium text-gray-900">Links</p>
            <div><span class="hidden w-10 h-1 bg-indigo-600 rounded lg:block"></span></div>

            <nav aria-label="Footer Navigation - Services" class="mt-6">
                
              <ul class="space-y-4 text-sm">
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Home
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    About
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Reflections
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Publications
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Current Interest
                  </a>
                </li>
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Gallery
                  </a>
                </li>
              </ul>
            </nav>
          </div>

          <div>
            <p class="font-medium text-gray-900">Publications & Reflections</p>
            <div><span class="hidden w-13 h-1 bg-indigo-600 rounded lg:block"></span></div>


            <nav aria-label="Footer Navigation - Company" class="mt-6">
              <ul class="space-y-4 text-sm">
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    
                  </a>
                </li>
              </ul>
            </nav>
          </div>

          <div>
            <p class="font-medium text-gray-900">Contact</p>
            <div><span class="hidden w-12 h-1 bg-indigo-600 rounded lg:block"></span></div>

            <nav aria-label="Footer Navigation - Company" class="mt-6">
              <ul class="space-y-4 text-sm">
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    LinkedIn
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Twitter
                  </a>
                </li>

                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75">
                    Live Chat
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="pt-8 mt-8 border-t border-gray-100">
          <!-- <nav aria-label="Footer Navigation - Support">
            <ul class="flex flex-wrap gap-4 text-xs">
              <li>
                <a href="#" class="text-gray-500 transition hover:opacity-75">
                  Terms & Conditions
                </a>
              </li>

              <li>
                <a href="#" class="text-gray-500 transition hover:opacity-75">
                  Privacy Policy
                </a>
              </li>

              <li>
                <a href="#" class="text-gray-500 transition hover:opacity-75">
                  Cookies
                </a>
              </li>
            </ul>
          </nav> -->

          <p class="mt-8 text-xs text-gray-500">
            &copy; 2023. Built by lewys. All rights reserved.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>


    <!-- <footer id="footer" class="bg-[#6495ed] text-white py-4">
        <div class="mx-auto flex flex-col xl:flex-row xl:justify-between xl:w-2/3">
            <ul class="flex flex-row justify-center items-center mb-1 xl:mb-0">
                <a href="/home"><li class="px-2 footer_text--hover">Home</li></a>
                <a href="about"><li class="px-2 footer_text--hover">About</li></a>
                <a href="blog"><li class="px-2 footer_text--hover">Reflections</li></a>
                <a href="#blog"><li class="px-2 footer_text--hover">Publications</li></a>
                <a href="{{url('currentinterests')}}"><li class="px-2 footer_text--hover">Current Interests</li></a>
                <a href="#gallery"><li class="px-2 footer_text--hover">Gallery</li></a>

            </ul>

            <div class="mt-1 xl:mt-0">
                <ul class="flex flex-row justify-center items-center">
                    <li class="p-2 footer_text--hover"><a href=""><ion-icon name="logo-linkedin"></ion-icon></a></li>
                    <li class="p-2 footer_text--hover"><a href=""><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li class="p-2 footer_text--hover"><a href=""><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li class="p-2 footer_text--hover"><a href=""><ion-icon name="logo-whatsapp"></ion-icon></a></li>
                    <li class="p-2 footer_text--hover"><a href=""><ion-icon name="mail"></ion-icon> Ogutu@gmail.com</a></li>

                </ul>
            </div>
        </div>
        <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4  sm:border-gray-200 sm:py-2 sm:mt-0 mt-4 flex justify-center">
            © 2022  made by:
            <a href="#" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">
                lewis
            </a>
        </p>
    </footer> -->


    <script>
        function Menu(e){
            let list = document.querySelector('ul');
            e.name === 'menu' ? (e.name ="close", list.classList.add('top-[80px]'), list.classList.add('opacity-100') ): (e.name ="menu", list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
        }
    </script>
</body>
</html>