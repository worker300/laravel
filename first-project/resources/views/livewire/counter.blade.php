<div>

    {{ $surname }}

    <h1>{{ $title  }}</h1>

    {{ count($users) }}

    <br>
    <button wire:click ="createNewUser">
        Create new user!
    </button>
    
</div>