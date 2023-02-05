<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ù, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guest vue</title>
</head>
<body>
    @yield('content')


    {{-- inseriamo gli script js della cartella public per vue --}}
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
