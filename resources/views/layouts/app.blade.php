<html>
    <head><title> App - @yield('title')</title>
    </head>
    <body>
        
    @include('includes.navbar')
       
        <div class="container">
            @yield('content')</div>
    </body>
    </html>