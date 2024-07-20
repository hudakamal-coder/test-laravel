<form action="{{ route('index.store') }}" method="POST">
    @csrf
 <div>
    <label for="">TITLE</label><br>
    <input type="text" name="title">
 </div>
 <div>
   <label for="">MESSAGE</label><br>
   <textarea name="message" id="" cols="30" rows="10"></textarea>
 </div>
 <button>SEND</button>
</form>
