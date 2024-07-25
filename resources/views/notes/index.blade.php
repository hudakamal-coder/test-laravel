<div>
    <h1>Notes</h1>
    <a href="{{ route('notes.create') }}" class="btn btn-primary">Create</a>

    @for ($i = 0; $i < count($notes); $i++)
        <div>
            <h2>{{ $notes[$i]->title }}</h2>
            <p>{{ $notes[$i]->message }}</p>
            <a href="{{ route('notes.show', $notes[$i]->id) }}" class="btn btn-primary">Show</a>
            <a href="{{ route('notes.edit', $notes[$i]->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('notes.destroy', $notes[$i]->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    @endfor
</div>
