<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Beeney</title>
        <link rel="icon" href="../../images/Logo.png">
        @vite('resources/css/app.css')

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container flex flex-col min-h-screen">
            <div class="row">
                <!-- As you can see, this is navbar -->
                @include('components.navbar')

                <div class="flex-grow">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('components.footer')
    </body>
</html>
