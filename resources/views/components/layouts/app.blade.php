<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title ?? '' }}</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="icon" href="{{ asset('/img/favicon/favicon.png') }}" type="image/png">
  <link href="{{ asset('css/layout/app-styles.css') }}" rel="stylesheet">
  <link href="{{ asset($link) }}" rel="stylesheet">
  {{-- nav-styles --}}
  <link rel="stylesheet" href="{{ asset('css/layout/nav-styles.css') }}">
  {{-- footer-styles --}}
  <link rel="stylesheet" href="{{ asset('css/layout/footer-styles.css') }}">
</head>
<body>

  <x-layouts.nav/>

  {{ $slot }}

  <x-layouts.footer />

  <script src="{{ asset($script ?? '') }}"></script>
  <script src="javascript/nav.js"></script>
</body>
</html>