<x-layout>
<x-navbar></x-navbar>
<!-- SEZIONE H1 -->
    <div class="container my-4">
        <div class="row">
            <div class="col-12 d-flex justify-content-center p-2">
                <h1 class="arancio">INSERISCI UN NUOVO LIBRO</h1>
            </div>
        </div>
    </div>
<!-- FINE SEZIONE H1 -->

    <!-- SEZIONE ERRORE DI COMPILAZIONE FORM -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- FINE SEZIONE ERRORE DI COMPILAZIONE FORM -->


<!-- SEZIONE FORM CON GLI ATTRIBUTI -->
    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-md-6">
            <form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
  <div class="mb-3">
    <label for="title" class="form-label guidacustom2">TITOLO</label>
    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{old('title')}}">
</div>

<div class="mb-3">
    <label for="genre" class="form-label guidacustom2">GENERE</label>
    <input type="text" class="form-control" id="genre" aria-describedby="emailHelp" name="genre"value="{{old('genre')}}">
</div>

<div class="mb-3">
    <label for="img" class="form-label guidacustom2">COPERTINA</label>
    <input type="file" class="form-control" id="img" aria-describedby="emailHelp" name="cover">
</div>

<div class="mb-3">
    <label for="plot" class="form-label guidacustom2">TRAMA</label>
   <textarea name="plot" id="plot" class="form-control">{{old('plot')}}</textarea>
</div>

<div class="mb-3">
    <label class="form-label guidacustom2">DISPONIBILE SU:</label><br>
    @foreach($platforms as $platform)
    <input type="checkbox" class="form check-input" value="{{$platform->id}}" id="{{$platform->id}}" name="platforms[]">
    <label for="{{$platform->id}}" class="guidacustom2">{{$platform->name}}</label>
@endforeach
</div>

 <button type="submit" class="btn btn-custom">INVIA</button>
</form>
            </div>
        </div>
    </div>
<!-- FINE SEZIONE FORM CON GLI ATTRIBUTI + TASTO INVIO -->
</x-layout>