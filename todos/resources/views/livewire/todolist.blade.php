<div>
    @if (session('error'))
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">Error!</span> {{ session('error') }}
      </div>
    @endif

        @include('livewire.include.create-todo-box')
        @include('livewire.include.search-box')
        
        <div id="todos-list">
            @foreach ($todos as $todo)
                @include('livewire.include.todo-card')
            @endforeach

            <div class="my-2">
                {{ $todos->links() }}
            </div>
        </div>
    </div>
</div>
