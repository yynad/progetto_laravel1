<x-layout>
    <x-navbar></x-navbar>
    <header class="d-flex justify-content-center align-items-center">
        <h1 class="text-white">DETTAGLIO DI: <span class="arancio">{{$platform->name}}</span></h1>
        </header>
<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <img src="{{Storage::url($platform->logo)}}" alt="" class="img-fluid">
        </div>
        <div class="col-12 col-md-6">
            <h1 class="text-white guidacustom">Descrizione:</h1>
            <p class="text-white guidacustom"><strong>{{$platform->description}}</strong></p>
            @if (count($platform->books))
            <h1 class="text-white guidacustom">Libri disponibili nella piattaforma:</h1>
            <ul>
                @foreach ($platform->books as $book)
                    <li class="text-white guidacustom">{{$book->title}}</li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</div>
</x-layout>