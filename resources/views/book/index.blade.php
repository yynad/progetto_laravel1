<x-layout>
    <x-navbar></x-navbar>
<div class="container my-4">
        <div class="row">
            <div class="col-12 d-flex justify-content-center arancio rounded border-black p-2">
                <h1>LIBRERIA</h1>
            </div>
        </div>
    </div>
<div class="container-fluid my-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @forelse($books as $book)
            <div class="col">
                <div class="card-custom border-black bg-black-fade guidacustom2 h-100 rounded">
                    <div class="card-img-container p-1">
                        <img src="{{ Storage::url($book->cover) }}" class="card-img-top img-fluid rounded" alt="Copertina libro">
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title"><strong>Titolo libro: </strong>{{ $book->title }}</h5>
                        <p class="card-text"><strong>Trama: </strong>{{ $book->plot }}</p>
                        <a href="{{ route('book.show', $book) }}" class="btn btn-custom">DETTAGLI</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center my-5">
                <h1><strong>Non sono stati ancora aggiunti dei libri.</strong></h1>
                <a href="{{ route('book.create') }}" class="text-black">AGGIUNGINE UNO!</a>
            </div>
        @endforelse
    </div>
</div>
</x-layout>