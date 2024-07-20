  <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 </head>
 <body>
  <a href="{{ route('story') }}">create data</a>
    <div style="">
        @foreach ($infos as $row)
        <h2>{{ $row['title'] }}</h2></h2>
        <h5>{{ $row['message'] }}</h5>
        <a href="{{ route('index.edit', $row['id']) }}">EDIT</a>
        <form action="{{ route('index.destroy', $row['id']) }}" method="POST">
            @csrf
            @method('DELETE')
            
            <BUtton>DELETE</BUtton>
         </form>
        @endforeach
    

    </div>
 </body>
 </html>