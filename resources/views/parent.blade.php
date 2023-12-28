{{-- <div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->

</div> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('Css/style.css') }}">
    
    <title>
         @yield('title') </title>
</head>
<body>
    @include('menu')
    <div>
        @yield('content')
    </div>
</body>
</html>
