<x-layout>
    <x-navbar></x-navbar>
<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center guidacustom2">
            <h1><strong>PROFILO UTENTE DI <span class="arancio">{{Auth::user()->name}}</strong></span></h1>
</div>
</div>
</div>
<div class="container border-black rounded shadow-sm guidacustom2 p-4 mb-5 bg-black-fade">
        <div class="row d-flex justify-content-center mb-4">
            <div class="col-12 col-md-6">
                <h4><strong>USERNAME: </strong><span class="arancio">{{Auth::user()->name}}</span></h2>
                <h4><strong>EMAIL: </strong> <span class="arancio">{{Auth::user()->email}}</span></h2>
                <h4><strong>LIBRI AGGIUNTI: </strong> <span class="arancio">{{ Auth::user()->books->count() }}</span></h2>
                <h4><strong>REGISTRATO IL: </strong> <span class="arancio"> {{ Auth::user()->created_at->format('d/m/Y')}} </span> alle <span class="arancio">{{ Auth::user()->created_at->format('h:i') }}</span></h2>
            </div>
        </div>
    </div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="arancio"><strong>LIBRI INSERITI DALL'UTENTE:</strong></h1>
        </div>
    </div>
<div class="container my-4">
        <div class="row d-flex justify-content-center">
            @foreach(Auth::user()->books as $book)
            <div class="col-12 col-md-3 my-2">
            <div class="card card-custom h-100">
  <img src="{{Storage::url($book->cover)}}" class="card-img-top" alt="">
  <div class="card-body guidacustom2">
    <h5 class="card-title"><strong>TITOLO: </strong>{{$book->title}}</h5>
    <p class="card-text"><strong>TRAMA: </strong>{{$book->plot}}</p>
    <a href="{{route('book.show', $book)}}" class="btn btn-custom">DETTAGLI</a>
  </div>
</div>
            </div>
            @endforeach

</div>
</x-layout>