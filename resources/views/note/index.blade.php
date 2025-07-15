<x-layout>

    <div class="container">
        <h1>Notes</h1>
        <a href="{{ route("note.create") }}">Create Note</a>

        @foreach($notes as $note)
            <div class="note">
                <small>{{ Str::words($note->note, 30) }}</small>
                <p>created at: {{ $note->created_at }}</p>
                <button><a href="{{ route('note.edit', $note) }}">edit</a></button>
                <button><a href="{{ route('note.show', $note) }}">show</a></button>


            </div>
            <button><a href="{{ route('note.destroy', $note) }}">delete</a></button>

        @endforeach



    </div>
</x-layout>