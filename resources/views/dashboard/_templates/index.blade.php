<!DOCTYPE html>
<html lang="en">
    <head>
        @include('dashboard._templates._partials.head')
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
                @include('dashboard._templates._partials.nav')

                @include('dashboard._templates._partials.sidebar')

                @yield('main-content')
      
                @include('dashboard._templates._partials.footer')
            </div>
        </div>

        @include('dashboard._templates._partials.js')

    </body>
</html>
