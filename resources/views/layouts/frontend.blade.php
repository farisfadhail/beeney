<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Beeney</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="container">
            <div class="row">
                <!-- As you can see, this is navbar -->
                @include('components.navbar')

                @yield('content')
            </div>
        </div>

        @include('components.footer')
    </body>
</html>
