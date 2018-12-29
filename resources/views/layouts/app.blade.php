<!DOCTYPE html>
<html>
    <head>
        <title>
            ToDo 1
        </title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
    @include('includes.navbar')
    @include('includes.messages')
    <div class="container">
        @yield('content')
    </div>
    <footer id="footer" class="text-center">
        Copy &copy; 2018
    </footer>
    </body>
</html>