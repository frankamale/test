<x-layout>
    <div class="container">
        <h1>Edit Note</h1>
        <form action="{{ route('note.update', $note) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group
                <label for=" note">Note</label>
                <textarea name="note" id="note" class="form-control">{{ old('note', $note->note) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Note</button>
        </form>
        <a href="{{ route('note.index') }}" class="btn btn-secondary">Back to
            Notes</a>
    </div>
</x-layout>