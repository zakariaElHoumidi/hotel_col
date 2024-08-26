<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HotelBooking</title>
    @include('platform.components.styles')
</head>
<body>
    @include('platform.components.header')
    @include('platform.components.offcanvas')
    <main>
        @yield('content')
    </main>
    @include('platform.components.footer')

    @include('platform.components.scripts')
</body>
</html>
