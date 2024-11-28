<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title', 'Gestione Libreria')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>
<body class="min-h-screen">
<div>
    <div class="flex justify-between items-center mb-6 bg-base-200 py-3 px-48">
        <div role="tablist" class="tabs tabs-bordered">
            <a role="tab" href="{{ route('book.index') }}"
               class="tab {{ Request::is('/') || Request::is('book*') ? 'tab-active' : '' }}">
                Libri
            </a>
            <a role="tab" href="{{ route('author.index') }}"
               class="tab {{ Request::is('author*') ? 'tab-active' : '' }}">
                Autori
            </a>
            <a role="tab" href="{{ route('category.index') }}"
               class="tab {{ Request::is('category*') ? 'tab-active' : '' }}">
                Categorie
            </a>
        </div>

        <div>@yield('add_button')

            <div class="dropdown">
                <div tabindex="0" role="button" class="btn m-1">
                    Theme<i class="bi bi-caret-down"></i>
                </div>
                <ul tabindex="0"
                    class="dropdown-content bg-base-300 rounded-box z-[1] w-52 p-2 shadow-2xl h-[25rem] max-h-[calc(100vh-15rem)] overflow-y-auto">
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Light"
                               value="light"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Dark"
                               value="dark"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                               aria-label="Cupcake" value="cupcake"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                               aria-label="Bumblebee" value="bumblebee"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                               aria-label="Emerald" value="emerald"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                               aria-label="Corporate" value="corporate"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                               aria-label="Synthwave" value="synthwave"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Retro"
                               value="retro"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                               aria-label="Cyberpunk" value="cyberpunk"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                               aria-label="Valentine" value="valentine"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                               aria-label="Halloween" value="halloween"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Garden"
                               value="garden"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Forest"
                               value="forest"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Aqua"
                               value="aqua"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Lofi"
                               value="lofi"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Pastel"
                               value="pastel"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                               aria-label="Fantasy" value="fantasy"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                               aria-label="Wireframe" value="wireframe"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Black"
                               value="black"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Luxury"
                               value="luxury"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                               aria-label="Dracula" value="dracula"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="CMYK"
                               value="cmyk"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Autumn"
                               value="autumn"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                               aria-label="Business" value="business"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Acid"
                               value="acid"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start"
                               aria-label="Lemonade" value="lemonade"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Night"
                               value="night"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Coffee"
                               value="coffee"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Winter"
                               value="winter"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Dim"
                               value="dim"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Nord"
                               value="nord"/>
                    </li>
                    <li>
                        <input type="radio" name="theme-dropdown"
                               class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Sunset"
                               value="sunset"/>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <div class="container mx-auto my-5">
        <h2 class="text-2xl font-bold mb-4">@yield('title')</h2>

        @yield('content')
    </div>
</div>
<script src="{{ asset('js/theme.js') }}"></script>
</body>
</html>
