<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Laravel - relations</title>

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <br>
            @include('partials.header')
            <br><br>
            @yield('content')
            <br><br>
            @include('partials.footer')
        </div>
    </body>
</html>
