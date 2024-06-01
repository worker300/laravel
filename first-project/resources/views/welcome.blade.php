<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    {{-- @livewire('counter') --}}
    {{-- @livewire('clicker') --}}
    
    <div class="flex">
        <div class="w-2/4">
            @livewire('clicker')
        </div>
        <div class="w-2/4">
            @livewire('userslist' , ['lazy' => true])
        </div>
    </div>

    

</body>
</html>

