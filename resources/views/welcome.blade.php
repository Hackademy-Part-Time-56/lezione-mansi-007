<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>

<body>
    Stampo i libri
    <ul>
        @foreach ($books as $book)
            <li><img height="20"
                    src="{{ is_null($book->image) ? 'https://platform.text.com/resource-center/text-platform-regex-example.jpg' : Storage::url($book->image) }}"
                    alt="Immagine">-{{ $book->name }}</li>
            {{-- <li><img src="{{ $book->image == 'regola' ? Storage::url($book->image) : $book->image }}"
                    alt="Immagine">-{{ $book->name }}</li> --}}
        @endforeach
    </ul>
    <hr>
    Stampo Autori
    <ul>
        @foreach ($authors as $author)
            <li>{{ $author->firstname . ' ' . $author->lastname }}</li>
        @endforeach

    </ul>
</body>

</html>
