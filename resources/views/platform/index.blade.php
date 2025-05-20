<x-layout>
    <x-navbar></x-navbar>
    <div class="col-md-8 text-center">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center arancio border-black rounded p-2 bg-black-fade">
                <h1 class="fw-bold">LISTA PIATTAFORME DISPONIBILI</h1>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row  d-flex justify-content-center">
            @forelse($platforms as $platform)
            <div class="col-12 col-md-3 my-2">
            <div class="card card-custom h-100">
  <img src="{{Storage::url($platform->logo)}}" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title guidacustom2"><strong>{{$platform->name}}</strong></h5>
    <p class="card-text guidacustom2"><strong>{{$platform->description}}</strong></p>
    <a href="{{route('platform.show', $platform)}}" class="btn btn-custom">DETTAGLI</a>
  </div>
</div>
            </div>
            @empty
            <div class="col-12 text-center my-5">
                <h2><strong>Non sono state ancora aggiunte delle piattaforme.</strong></h2>
                <a href="{{route('platform.create')}}" class="text-black">AGGIUNGINE UNA!</a>
            @endforelse
</x-layout>