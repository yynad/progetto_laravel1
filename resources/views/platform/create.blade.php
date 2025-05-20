<x-layout>
    <x-navbar></x-navbar>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="arancio fw-bold" style="font-family: 'Uncial Antiqua', cursive;">INSERISCI UNA NUOVA PIATTAFORMA</h1>
            </div>
        </div>
    </div>

    <div class="container my-5 d-flex justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-12 col-md-8 col-lg-7 col-xl-6" style="max-width: 900px;">
                <form action="{{ route('platform.store') }}" method="POST" enctype="multipart/form-data" 
                      style="background-color: rgba(0,0,0,0.6); padding: 30px; border: 2px solid goldenrod; border-radius: 15px; font-family: 'Uncial Antiqua', serif; color: #f5deb3;">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label guidacustom2" style="color: #ffae00;">NOME PIATTAFORMA</label>
                        <input type="text" class="form-control" id="name" name="name" 
                               style="background-color: #2f2b24; color: #f5deb3; border: 1px solid goldenrod;">
                    </div>

                    <div class="mb-3">
                        <label for="logo" class="form-label guidacustom2" style="color: #ffae00;">LOGO</label>
                        <input type="file" class="form-control" id="logo" name="logo" 
                               style="background-color: #2f2b24; color: #f5deb3; border: 1px solid goldenrod;">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label guidacustom2" style="color: #ffae00;">DESCRIZIONE</label>
                        <textarea name="description" class="form-control" id="description" 
                                  style="background-color: #2f2b24; color: #f5deb3; border: 1px solid goldenrod;"></textarea>
                    </div>

                    <button type="submit" class="btn btn-custom" style="font-family: 'Uncial Antiqua', cursive;">INSERISCI</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>