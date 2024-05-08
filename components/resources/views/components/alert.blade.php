{{-- <div class="alert alert-{{ $validType }}" {{ $attributes }} role="alert">
    {{ $message }}
  </div> --}}


  {{-- extra attribute --}}
  {{-- <div {{ $attributes->merge([class => "alert alert-".$validType ]) }} role="alert">
    {{ $message }}
  </div>
   --}}
  
  <div {{ $attributes->class(['alert-dismissable fade show' => $dismissable])->merge(['class' => "alert alert-".$validType ]) }} role="alert">
    {{ $message }}

    @if ($dismissable)
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
  </div>




