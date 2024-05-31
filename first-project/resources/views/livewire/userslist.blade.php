<div class="px-5 mx-auto max-w-md">
    <h2 class="text-2xl mb-3">User List</h2>

    <input wire:model.live="search" type="text" placeholder="Search..." class="p-2 ring-1 ring-inset ring-grey-300 bg-grey-300 text-grey-900 text-sm rounded">
    <button wire:click="update" type="button" class="block mt-3 px-4 py-2 bg-teal-500">Search</button>

    <div role="status" class="my-3 p-4 border border-grey divide-y divide-grey-100 rounded shadow">
        @foreach ($this->users as $user)
        <div wire:key="{{ $user->id }}"  class="flex items-center justify-between">
            <div class="text-grey-900 rounded-full dark:bg-grey-600 w-24 mb-23 truncate">
                {{ $user->name }}</div>
        </div>
        @endforeach
    </div>

    <hr>

    {{-- {{ $users->links() }} --}}
</div>


{{-- 
wire:model.live0  
wire:model.live.blur
wire:model.live.debounce.300ms
wire:model.live.throttle.300ms
 --}}