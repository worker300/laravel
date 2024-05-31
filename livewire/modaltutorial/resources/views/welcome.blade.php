<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    </head>
    <body class=" px-5  py-5 antialiased ">

        {{-- <x-modal title="test">
            @slot('body')
                <span  class="p-5">Body tag test</span>
            @endslot
        </x-modal> --}}

        
        
        <x-modal name="test" title="modal 2">
            <x-slot:body>
                <span  class="p-5">Body 2</span>
            </x-slot>
        </x-modal>
        
        <button x-data x-on:click="$dispatch('open-modal', { name : 'test' })" class="px-3 py-1 bg-teal-500 text-white rounded ">open modal</button>
    </body>
</html>
