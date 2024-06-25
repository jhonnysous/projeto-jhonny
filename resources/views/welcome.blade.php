<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bliblioteca Virtual</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="./css/style.css">

        
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div id="cabecalho" class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
            <div id="titulo">
                <h1>Biblioteca Virtual</h1>
            </div>
           <div id="opcoes">
            @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <a
                         href="{{ url('/dashboard') }}"
                        class="btn-custom"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="btn-custom"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="btn-custom"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
        </div>
        </div>
    </body>
</html>

