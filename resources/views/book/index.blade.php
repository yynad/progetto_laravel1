<x-layout>
    <x-navbar></x-navbar>
<div class="container my-4">
        <div class="row">
            <div class="col-12 d-flex justify-content-center arancio bg-white rounded">
                <h1>LIBRERIA</h1>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            @forelse($books as $book)
            <div class="col-12 col-md-3 my-2">
            <div class="card" style="width: 18rem;">
  <img src="{{Storage::url($book->cover)}}" class="card-img-top" alt="">
  <div class="card-body card-custom">
    <h5 class="card-title guidacustom"><strong>Titolo libro: </strong>{{$book->title}}</h5>
    <p class="card-text guidacustom"><strong>Trama: </strong>{{$book->plot}}</p>
    <a href="{{route('book.show', $book)}}" class="btn btn-custom">DETTAGLI</a>
  </div>
</div>
            </div>
            @empty
            <div class="col-12 text-center my-5">
                <h1><strong>Non sono stati ancora aggiunti dei libri.</strong></h1>
                <a href="{{route('book.create')}}" class="text-black">AGGIUNGINE UNO!</a>
            @endforelse
        </div>
    </div>
</x-layout>