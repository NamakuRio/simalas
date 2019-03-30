
<!DOCTYPE html>
<html lang="en">
<head>
    @include('landing._templates._partials.head')
</head>

<body class="">

    @include('landing._templates._partials.navbar')

    @yield('content')

    @include('landing._templates._partials.footer')

    @include('landing._templates._partials.js')

    </body>
</html>
