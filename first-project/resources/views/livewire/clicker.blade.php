{{-- <div>
    <form  wire:submit.prevent="createnewuser" action="">
        <input wire:model="name" type="text" placeholder="name">
        <input wire:model="email" type="email" placeholder="email">
        <input wire:model="password" type="password" placeholder="password">

        <button type="submit">Create</button>
    </form>

    <hr>
    @foreach ($users as $user)
        <h3>{{ $user->name }}</h3>
    @endforeach
</div> --}}


<div>
    {{-- <script src="{{ asset('/resources/js/app.js') }}"></script> --}}
    {{-- <script src="{{asset('..public/app.js')}}"> </script> --}}


    <script>
        window.addEventListener('alert' , (event) => {
    // console.log(event);
    // console.log(data);
    console.log('hiii')
    let data = event.detail;

    Swal.fire({
        position: data.position,
        icon: data.type,
        title: data.title,
        showConfirmButton: false,
        timer: 1500
      });
    })
    </script>

    @if (session('success'))
        <span class="px-3 py-3 bg-green-600 text-white rounded">{{ session('success') }} </span>
    @endif

    <form  class="p-5" wire:submit.prevent="createnewuser" action="">
        <input class="block rounded border border-gray-100 px-1" wire:model="name" type="text" placeholder="name">
        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        
        <input class="block rounded border border-gray-100 px-1" wire:model="email" type="email" placeholder="email">
        @error('email')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        
        <input class="block rounded border border-gray-100 px-1" wire:model="password" type="password" placeholder="password">
        @error('password')
        <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <label class="mt-3 block text-sm font-medium leading-6 text-grey-900" >Profile Picture</label>
        <input 
            multiple {{--to allow multiple files to upload --}}
            wire:model="image" accept="image/png , image/jpeg" 
            type="file" id="image" 
            class="ring-1 ring-inset ring-grey-300 bg-grey-100 text-grey-900 text-sm rounded block p-md-1"  >
            @error('image')
            <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror

            @if ($image)
                @foreach ($image as $image )
                    <img class="rounded block w-10 h-10 mt-5 " src="{{ $image->temporaryUrl() }}" alt="">
                @endforeach
            @endif

            <div wire:loading wire:target="image">
                <span class="text-green-500"> Uploading... </span>
            </div>

            <div wire:loading >
                <span class="text-green-500"> Sending... </span>
            </div>

        <button @click="$dispatch('reloadlist')" class="block rounded bg-gray-400 px-3 py-1 text-white" type="submit">Create</button>
        <button 
                {{-- wire:click.prevent="reloadlist"    << to reduce network request >> --}}
                @click="$dispatch('reloadlist')"
                class="block rounded bg-teal-400 px-3 py-1 text-white" type="submit">
        Relode</button>
    </form>

    <hr>
    {{-- @foreach ($users as $user)
        <h3>{{ $user->name }}</h3>
    @endforeach

    {{ $users->links() }} --}}
</div>



{{-- wire:poll
wire:poll.10s
wire:poll.keep-alive.10s
wire:poll.visible --}}
