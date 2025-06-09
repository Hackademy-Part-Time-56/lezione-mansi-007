<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/salva-libro" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Nome Libro</label>
            <input type="text" name="name" required value="{{ old('name') }}">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label>Numero di Pagine</label>
            <input type="text" name="pages" required value="{{ old('pages') }}">
            @error('pages')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label>Anno di Uscita</label>
            <input type="text" name="year" value="{{ old('year') }}">
        </div>
        <div>
            <label>Copertina</label>
            <input type="file" name="image" accept="image">
            @error('image')
                {{ $message }}
            @enderror
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
