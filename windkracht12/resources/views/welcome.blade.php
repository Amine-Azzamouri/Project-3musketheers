<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">  
        <link rel="shortcut icon" href="{{ asset('img/Windkracht-logo.png') }}" type="image/x-icon">      
        

        

        @vite(['resources/scss/main.scss', 'resources/js/tab.js', 'resources/js/modal.js',  'resources/scss/modal.scss'])
        <!-- Styles -->

    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="">Over ons</a></li>
                    <li><a href="">Reserveren</a></li>
                    <li id="windkrachtlogo">
                        <a href="">Powered by 
                            <img src="{{ asset('img/MBO-Logo 1.png') }}" alt="MBO Logo">
                        </a>
                    </li>
                    <li><a href="">Contact</a></li>
                    <li>
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <!-- Trigger/Open The Modal -->
                                <x-secondary-button id="myBtn">Login</x-secondary-button>
    
                                <!-- The Modal -->
                                <div id="myModal" class="modal" style="display:none">
    
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    @include('auth.login')
                                </div>
                            </div>
                        @endauth
                            </div>
                        @endif
                    </li>
                </ul>
            </nav>
            <div>
            <img class="gif" src="{{ asset('img/summer walking GIF - Find & Share on GIPHY.gif') }}" alt="Gif">
            <img class="Wave" src="{{ asset('designs/Wave.png') }}" alt="Wave">
            </div>
        </header>
        <section>
</section>
        <footer></footer>
    </body>
</html>



             <!-- <div id="buttons">
                            <div class="tabs">
                                <span class="button-tab active" data-target="work">Work</span>
                                <span class="button-tab" data-target="Personal">Personal</span>
                            </div>
        
                            <div class="button-group-tab active" id="work">
                                <div class="row">
                                    <div class="col button">
                                        <a href="https://mboutrecht.onderwijsonline.nl/">
                                            <i class="bx bx-hash" style="background: #009fe0"></i>
                                            <span class="desc">Onderwijs Online</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
        
                            <div class="button-group-tab" id="Personal">
                                <div class="row">
                                    <div class="col button">
                                        <a href="https://www.youtube.com">
                                            <i class="bx bxl-youtube" style="background: #ff00ff"></i>
                                            <span class="desc">youtube</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </header>
        <section>
</section>
        <footer></footer>
    </body>
</html>
