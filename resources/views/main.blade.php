<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="cache-control" content="no-cache">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ url(mix('assets/css/boxicons.css')) }}" />
    <link rel="stylesheet" href="{{ url(mix('assets/css/main.css')) }}" />

    <title>{{ !empty($title) ? 'Armazem | ' . $title : 'Armazem' }}</title>
  </head>
  <body>

    @yield('content')

    <script src="{{ url(mix('assets/js/libs.js')) }}"></script>
    <script src="{{  url(mix('assets/js/main.js')) }}"></script>

    @yield('js')
  </body>
</html>
