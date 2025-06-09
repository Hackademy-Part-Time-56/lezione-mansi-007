<x-main>
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($books as $book)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="img-fluid"
                                src="{{ is_null($book->image) ? '/images/book-default.png' : Storage::url($book->image) }}"
                                alt="Immagine">
                            <div class="card-body">
                                <p class="card-text">{{ $book->name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Stampo i libri

    Stampo Autori
    <ul>
        @foreach ($authors as $author)
            <li>{{ $author->firstname . ' ' . $author->lastname }}</li>
        @endforeach

    </ul> --}}
</x-main>
