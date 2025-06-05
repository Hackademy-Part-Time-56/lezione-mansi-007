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
            <li>{{ $book->name }}</li>
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
