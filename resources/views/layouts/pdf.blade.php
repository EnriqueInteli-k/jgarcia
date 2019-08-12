<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csfr-token" content="{{ csrf_token() }}">
        <title>J.Garcia</title>
        <!-- plugins:css -->
         <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
         <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <!-- endinject -->
       </head>

<body>
 
    @yield('content')
    @yield('footer')

 </body>
</html>