<!DOCTYPE html>
<html>
    <head>
        <title>The Amazing Web</title>
    </head>
    <body>
        <header>
            {{ $page->title }}
        </header>

        <div>{{ $page->filename }}, {{ $ }}</div>

        @yield('contents')

        <footer>
            <p>©2016 Awesome Co</p>
        </footer>
    </body>
</html>