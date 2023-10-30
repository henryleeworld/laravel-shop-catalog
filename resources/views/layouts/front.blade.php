<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ trans('shop.shop_catalog') }}</title>
        @vite(['resources/sass/app.scss'])
        <link href="{{ asset('css/shop-homepage.css') }}" rel="stylesheet" />
        @yield('head')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">{{ trans('shop.shop_catalog') }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">{{ trans('shop.laravel.blade_version') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('vue') }}">{{ trans('shop.laravel.vue_version') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <footer class="footer py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">{!! trans('shop.copyright') !!} {{ date('Y') }}</p>
            </div>
        </footer>
        <!-- Scripts -->
        @vite(['resources/js/app.js'])
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @yield('scripts')
    </body>
</html>
