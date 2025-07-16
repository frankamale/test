<x-app-layout>


    <div class="note-container">
        <h1>View Note</h1>

        <div class="note-content">
            <p>{{ $note->note }}</p>
            <p><strong>Created at:</strong> {{ $note->created_at->format('F j, Y g:i A') }}</p>
        </div>

        <div class="note-actions">
            <a href="{{ route('note.edit', $note) }}">Edit</a>

            <form action="{{ route('note.destroy', $note) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-btn"
                    style="all: unset; cursor: pointer; padding: 10px 18px; border-radius: 4px; background-color: #dc3545; color: white; font-size: 14px;">Delete</button>
            </form>

            <a href="{{ route('note.index') }}" class="back-btn">Back to Notes</a>
        </div>
    </div>
</x-app-layout>