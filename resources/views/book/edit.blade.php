<x-layout>
<x-navbar></x-navbar>
<div class="container my-5 d-flex justify-content-center">
    <div class="row">
        <div class="col-12">
            <h1 class="arancio">Modifica libro</h1>
        </div>
    </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container my-4">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-6">
            <form action="{{route('book.update', $book)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
  <div class="mb-3">
    <label for="title" class="form-label guidacustom2">Titolo</label>
    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{$book->title}}">
</div>

<div class="mb-3">
    <label for="genre" class="form-label guidacustom2">Genere</label>
    <input type="text" class="form-control" id="genre" aria-describedby="emailHelp" name="genre"value="{{$book->genre}}">
</div>

<div class="mb-3">
    <label for="name" class="form-label guidacustom2">Piattaforme disponibili:</label><br>
    @foreach($platforms as $platform)
    <input type="checkbox" class="form-check-input" value="{{$platform->id}}" id="{{$platform->id}}" name="platforms[]"
    @if ($book->platforms->contains($platform->id))
    checked 
    @endif>
    <label for="{{$platform->id}}" class=" guidacustom2">{{$platform->name}}</label>
    @endforeach
  </div>

<div class="mb-3">
    <label for="img" class="form-label guidacustom2">Copertina</label>
    <input type="file" class="form-control" id="img" aria-describedby="emailHelp" name="cover">
</div>

<div class="mb-3">
    <label for="" class="guidacustom2">Copertina attuale</label>
   <img src="{{Storage::url($book->cover)}}" class="img-fluid">
</div>

<div class="mb-3">
    <label for="plot" class="form-label  guidacustom2">Trama</label>
   <textarea name="plot" id="plot" class="form-control">{{$book->plot}}"</textarea>
</div>



 <button type="submit" class="btn btn-custom">INVIA</button>
</form>
            </div>
        </div>
    </div>
</x-layout>