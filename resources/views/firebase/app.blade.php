<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{--  Bootstrap CSS  --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Laravel Firebase</title>
        </head>
    <body>

        @include('firebase.inc.navbar')
        <div class="py-3">
            @yield('content')
        </div>

    {{--  Bootstrap JS  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    {{--  jQuery CDN  --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    </body>

</html>
