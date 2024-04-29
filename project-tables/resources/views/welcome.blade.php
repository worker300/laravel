<h1>All students Data</h1>

@foreach ($students as $data)

<h3>{{ $data->id }} |
    {{ $data->name }} |
    {{ $data->email }} |
    {{ $data->city }} </h3>
    
@endforeach