<!DOCTYPE html>
<html lang="en">
    <head>
      @include('front.app.top')
      @yield('css')
    </head>
    <body>
        @include('front.app.header')

        @yield('content')

        @yield('model')


        @include('front.app.footer')
        @include('front.app.bottom')
        @yield('jspage')
    </body>
</html>
