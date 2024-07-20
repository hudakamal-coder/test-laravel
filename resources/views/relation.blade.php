 @foreach ($data as $row)
    {{ $row->title }} <br>
    <br>
   
    <p>{{ $row->category?->name }}</p>
 
 @endforeach
 