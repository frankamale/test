<x-app-layout>
    <header>
        <h1>Notes</h1>
    </header>

    <div class="container">

        <a href="{{ route("note.create") }}">
            <h2>Create Note</h2>
        </a>

        <div class="notes-list">
            @foreach($notes as $note)
                <div class="note">
                    <p id="note">{{ Str::words($note->note, 30) }}</p>
                    <p id="created">created at: {{ $note->created_at }}</p>

                    <div class="buttons">
                        <a href="{{ route('note.edit', $note) }}"><button>edit</button></a>
                        <a href="{{ route('note.show', $note) }}"><button>show</button></a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn"
                                style="all: unset; cursor: pointer; padding: 10px 18px; border-radius: 4px; background-color: #dc3545; color: white; font-size: 14px;">Delete</button>
                    </div>

                </div>
            @endforeach

        </div>

        <div class="py-5">
            {{ $notes->links() }}
        </div>

    </div>
</x-app-layout>