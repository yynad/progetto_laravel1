<x-layout>
    <x-navbar></x-navbar>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center arancio">
                <h1>INSERISCI UNA NUOVA PIATTAFORMA</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
            <form action="{{route('platform.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
  <div class="mb-3">
    <label for="name" class="form-label guidacustom2">NOME PIATTAFORMA</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="logo" class="form-label guidacustom2">LOGO</label>
    <input type="file" class="form-control" id="logo" name="logo">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label guidacustom2">DESCRIZIONE</label>
    <textarea name="description" class="form-control" id="description"></textarea>
  </div>
  <button type="submit" class="btn btn-custom">INSERISCI</button>
</form>
            </div>
        </div>
    </div>
</x-layout>