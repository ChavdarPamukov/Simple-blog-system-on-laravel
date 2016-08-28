<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>
    <body>
        @include('partials._nav')

        <main class="container">
            @include('partials._messages')
            @yield('content')
        </main>

        <footer>
            @include('partials._footer')
        </footer>

        @include('partials._javascript')

        @yield('scripts')
    </body>
</html>