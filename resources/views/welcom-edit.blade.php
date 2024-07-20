<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('index.update',$infos['id']) }}" method="POST">
        @csrf
        @method('PUT')
     <div>
        <label for="">TITLE</label><br>
        <input type="text" name="title" value="{{ $infos['title'] }}">
     </div>
     <div>
       <label for="">MESSAGE</label><br>
       <textarea name="message" value="{{ $infos['message'] }}" id="" cols="30" rows="10" ></textarea>
     </div>
     <button>SEND</button>
    </form>

</body>
</html>