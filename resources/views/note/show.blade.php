<x-layout>
    <h1>
        view note
    </h1>
    // Display the note content
    <div class="note-content">
        <p>{{ $note->note }}</p>
        <p>Created at: {{ $note->created_at }}</p>
    </div>
    <button><a href="{{ route('note.edit', $note) }}">Edit</a>
    </button>
    <button><a href="{{ route('note.destroy', $note) }}">Delete</a></button>
    <button><a href="{{ route('note.index') }}">Back to Notes</a></button>
    </div>
</x-layout>