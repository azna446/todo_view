<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <div id="app">
                    <app></app>
                </div>
                <a href="{{ route('logout') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline log">Logout</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline loglogin">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline logregister">Register</a>
                @endif
            @endauth
        </div>
    @endif

    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>

<style scoped>
    .loglogin{
        padding-top: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .logregister{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .log{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
