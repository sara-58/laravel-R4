<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        @include('includes.header')

        @yield('content')
        @include('includes.footer')
    </div>
    @include('includes.footerscript')
</body>
</html>