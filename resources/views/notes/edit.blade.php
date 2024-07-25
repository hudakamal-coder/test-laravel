<div>Edit Note</div>

<form action="{{ route('notes.update', $note->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $note->title }}">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="message">message</label>
        <textarea name="message" id="message">{{ $note->message }}</textarea>
        @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Update</button>
</form>
