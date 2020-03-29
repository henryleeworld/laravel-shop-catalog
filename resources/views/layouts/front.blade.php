<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>{{ trans('shop.shop_catalog') }}</title>
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/shop-homepage.css') }}" rel="stylesheet">
  @yield('head')
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">{{ trans('shop.shop_catalog') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
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

  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  @yield('scripts')
</body>
</html>
