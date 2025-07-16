<x-app-layout>
    <div class="create-container px-24">
        <h1>Create Note</h1>

        <form action="{{ route('note.store') }}" method="POST">
            @csrf

            <div class="form-group">

                <label for="note">Note</label>
                <textarea name="note" id="note" required>{{ old('note') }}</textarea>
            </div>

            <div class="form-actions">
                <button type="submit">Create Note</button>
                <a href="{{ route('note.index') }}">Back to Notes</a>
            </div>
        </form>
    </div>

</x-app-layout>