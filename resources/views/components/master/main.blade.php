<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <title>MS Form</title>

        <!-- Fonts and Icons -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/style.css">
        <link rel="icon" type="image/x-icon" href="/logoms.svg">

        <!-- Styles -->
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('styles') --}}
        <link rel="stylesheet" type="text/css" href="/style.css">
    </head>
    <body>
        <main class="page-wrapper">
            @component('components.master.header')
            @endcomponent

            @yield('content')
            
            {{-- @component('components.master.footer')
            @endcomponent --}}
        </main>
    </body>
</html>