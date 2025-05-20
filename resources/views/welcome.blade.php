<x-layout>
<x-navbar />
@if(session('message'))
<div class="alert alert-success">
{{session('message')}}
</div>
@endif


@if(session('denied'))
<div class="alert alert-danger">
{{session('denied')}}
</div>
@endif

<!-- CONTENUTO PAGINA -->
<div>
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-12 d-flex justify-content-center my-4">
                <h1 class="arancio fw-bold">BOOKLOG</h1>
            </div>
            <div class="col-12 d-flex justify-content-center my-4">
            <div class=""><h4 class="guidacustom2">Un sito per tenere traccia dei tuoi libri preferiti. Qui potrai aggiungere nuovi libri e inserire nuove piattaforme in libertà.</h4></div>
            </div>
        </div>
    </div>
</div>

<!-- CONTENUTO PAGINA -->


@guest
<div class="bodyclass">
<div class="container my-5">
    <div class="row">
        <div class="col-12 rounded">
            <h1 class="text-white">CIAO, UTENTE. EFFETTUA IL LOGIN PER VISUALIZZARE LE FUNZIONI.</h1>
        </div>
    </div>
</div>
@endguest

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-6 text-center">
            <livewire:chat />
        </div>
    </div>
</div>

@auth
<div class="container my-5">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <h1 class="text-white">Ciao, <span class="arancio"> {{Auth::user()->name}}!</span></h1>
        </div>
    </div>
</div>
<div class="w-100 d-flex justify-content-center text-center">
    <a class="" href="{{route('book.create')}}"><button class="btn btn-custom">AGGIUNGI UN LIBRO</button></a>
    <a class="ms-2" href="{{route('book.index')}}"><button class="btn btn-custom">LISTA DEI LIBRI</button></a>
    <a class="ms-2" href="{{route('dashboard')}}"><button class="btn btn-custom">VAI AL MIO PROFILO</button></a>
</div>
</div>
@endauth

</x-layout>