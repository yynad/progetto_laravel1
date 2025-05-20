<x-layout>
    <x-navbar></x-navbar>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container my-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow d-flex justify-content-center align-items-center card-custom rounded">
                    <h1 class="card-title text-center my-2 guidacustom2 fw-bold">{{ $book->title }}</h1>
                    <img src="{{ Storage::url($book->cover) }}" class="card-img-top text-center rounded" alt="Copertina" style="width: 250px; height: 400px;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <p class="guidacustom2"><strong>Genere:</strong> {{ $book->genre }}</p>
                        <p class="guidacustom2"><strong>Trama:</strong> {{($book->plot)}}</p>
                        <p class="guidacustom2"><strong>Inserito da:</strong> {{ $book->user->name ?? 'Ospite' }}.</p>

                        <h4 class="guidacustom2">Piattaforme disponibili:</h4>
                        <ul>
                            @foreach ($book->platforms as $platform)
                                <li class="guidacustom2">{{ $platform->name }}</li>
                            @endforeach
                        </ul>


                        <div>
                        @if (Auth::user() && Auth::user()->id == $book->user_id)
                            <a href="{{ route('book.index') }}" class="btn mt-3 btn-custom">Torna alla lista</a>
                            <a href="{{ route('book.edit', $book) }}" class="btn mt-3 ms-4 btn-custom">Modifica</a>
                            <form action="{{ route('book.delete', $book) }}" method="POST"
                                class="d-inline-block mt-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-custom2 mt-3 ms-4">Elimina libro</button>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>