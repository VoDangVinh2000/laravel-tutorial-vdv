@foreach ($ten as $array)
    <p>This is {{ $array }}</p>
@endforeach

@forelse ($ten as $array)
    <p>This is {{ $array }}</p>
@empty
    <p>Name is empty</p>
@endforelse
