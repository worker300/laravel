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

    {{-- @php
        $message = 'hi im krutan'
    @endphp --}}

    {{-- <x-alert type='success' message='{{ $message }}'/> --}}
    {{-- <x-alert type='success' id="firstAlert"  class="m-4"  :$message/>

    <x-alert type='danger' dismissable message="this is error message " />
    <x-alert type='info' message="this is info message "/> --}}

    {{-- FOR SLOTS --}}

        <x-alert type='danger'>
            <x-slot:title  class='font-bold'>
                Heading goes here
            </x-slot>
            <p class="mb-0">
                Lorem ipsum dolor sit amet. 
                {{ $component->link('just testing' ,'https://www.yahoobaba.net/') }}
            </p>
        </x-alert>

        {{-- <x-card>

        </x-card> --}}


        @php
            $componentName = "alert"
        @endphp

        <x-dynamic-component :component="$componentName" class="m-4" />

        <x-form action="/somepage" method='PUT' id="fhdjksa">
            <input type="text" name='name'>
            <button type="submit">Save</button>
        </x-form>

</body>
</html>

