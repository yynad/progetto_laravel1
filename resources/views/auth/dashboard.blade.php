<x-layout>
    <x-navbar></x-navbar>
<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center bg-white rounded">
            <h1><strong>PROFILO UTENTE DI <span class="arancio">{{Auth::user()->name}}</strong></span></h1>
</div>
</div>
</div>
<div class="container border rounded shadow-sm bg-light p-4 mb-5">
        <div class="row d-flex justify-content-center mb-4">
            <div class="col-12 col-md-6">
                <h4><strong>USERNAME: </strong> {{Auth::user()->name}}</h2>
                <h4><strong>EMAIL: </strong> {{Auth::user()->email}}</h2>
                <h4><strong>LIBRI AGGIUNTI: </strong> {{ Auth::user()->books->count() }}</h2>
                <h4><strong>REGISTRATO IL: </strong> {{ Auth::user()->created_at->format('d/m/Y')}} alle {{ Auth::user()->created_at->format('h:i') }}.</h2>
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
        <div class="row">
            @foreach(Auth::user()->books as $book)
            <div class="col-12 col-md-3 my-2">
            <div class="card" style="width: 18rem;">
  <img src="{{Storage::url($book->cover)}}" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title"><strong>TITOLO: </strong>{{$book->title}}</h5>
    <p class="card-text"><strong>TRAMA: </strong>{{$book->plot}}</p>
    <a href="{{route('book.show', $book)}}" class="btn btn-custom">DETTAGLI</a>
  </div>
</div>
            </div>
            @endforeach

</div>
</x-layout>