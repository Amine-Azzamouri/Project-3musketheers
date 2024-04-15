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
        
         <!-- Styles -->
        @vite(['resources/scss/main.scss', 'resources/scss/tab.scss',  'resources/scss/modal.scss'])
          <!-- scripts  -->
          @vite(['resources/js/modal.js', 'resources/js/tab.js',])

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
                            <div>
                            @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <!-- Trigger/Open The Modal -->
                                <a href="#" id="myBtn">Login</a>

                                <div class="content">
                                     <!-- The Modal -->
                                    <div id="myModal" class="modal" style="display:none">
                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <span class="close">&times;</span>
                                            
                                            <div class="mainTab">
                                                <div class="tab">
                                                  <button class="tablinks" onclick="tab(event, 'login')" id="defaultOpen">Login</button>
                                                  <button class="tablinks" onclick="tab(event, 'signup')">Registreer</button>
                                                </div>
                                    
                                                <div id="login" class="tabcontent">
                                                  @include('auth.login')
                                                </div>
                                    
                                                <div id="signup" class="tabcontent">
                                                  @include('auth.invite')
                                                </div>
                                    
                                            </div>
                                        </div>
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