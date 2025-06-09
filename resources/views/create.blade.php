 <x-main>
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
 </x-main>
