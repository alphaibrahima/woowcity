<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', env('APP_NAME'))</title>
    </head>
    <body >
        
        @yield('content')

        <footer>
            @if(! Route :: is('about'))
                <p>
                    &copy; Copyright {{date('Y')}} &middot; 
                    <a href=" {{ route('about')}} ">
                        About Us
                    </a> 
                </p>
            @endif
        </footer>
        
    </body>
</html>
