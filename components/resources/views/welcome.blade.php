<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Component</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    @php
        $message = 'hi im krutan'
    @endphp

    {{-- <x-alert type='success' message='{{ $message }}'/> --}}
    <x-alert type='success' id="firstAlert"  class="m-4"  :$message/>

    <x-alert type='danger' dismissable message="this is error message " />
    <x-alert type='info' message="this is info message "/>
</body>
</html>

