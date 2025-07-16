<x-app-layout>


    <div class="edit-container">
        <h1>Edit Note</h1>

        <form action="{{ route('note.update', $note) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="note">Note</label>
                <textarea name="note" id="note">{{ old('note', $note->note) }}</textarea>
            </div>

            <div class="form-actions">
                <button type="submit">Update Note</button>
                <a href="{{ route('note.index') }}">Back to Notes</a>
            </div>
        </form>
    </div>
</x-app-layout>