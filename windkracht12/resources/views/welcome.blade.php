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
        

        

        @vite(['resources/scss/main.scss', 'resources/js/modal.js', 'resources/css/modal.css'])
        <!-- Styles -->

    </head>
    <body>
        
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
                    <li><a href="">Login</a></li>
                </ul>
            </nav>
            <div>
            <img class="gif" src="{{ asset('img/summer walking GIF - Find & Share on GIPHY.gif') }}" alt="Gif">
            <img class="Wave" src="{{ asset('designs/Vector.svg') }}" alt="Wave">
            </div>
        </header>
        <section>
        <div class="vector">
            <img id="block1" src="{{ asset('designs/VectorDown.svg') }}" alt="vectorDown">
            <img id="block2" src="{{ asset('designs/VectorDown.svg') }}" alt="vectorDown">
            <img id="block3" src="{{ asset('designs/VectorDown.svg') }}" alt="vectorDown">
            </div>
</section>
        <footer></footer>
    </body>
</html>
