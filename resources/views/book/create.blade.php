<x-layout>
<x-navbar></x-navbar>

<!-- SEZIONE H1 -->
<div class="container my-4">
    <div class="row">
        <div class="col-12 d-flex justify-content-center p-2">
            <h1 class="arancio fw-bold" style="font-family: 'Uncial Antiqua', cursive; text-shadow: 2px 2px 4px #000;">
                INSERISCI UN NUOVO LIBRO
            </h1>
        </div>
    </div>
</div>
<!-- FINE SEZIONE H1 -->

<!-- SEZIONE ERRORE DI COMPILAZIONE FORM -->
@if ($errors->any())
<div style="background-color: rgba(128, 0, 0, 0.3); border: 2px solid darkred; color: crimson; padding: 10px; max-width: 600px; margin: 0 auto 20px auto; font-family: 'Uncial Antiqua', serif;">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- FINE SEZIONE ERRORE -->

<!-- SEZIONE FORM -->
<div class="container my-4 d-flex justify-content-center">
    <div class="row">
        <div class="col-12 wh-100" style="max-width: 700px;">
            <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data" style="background-color: rgba(0,0,0,0.6); padding: 20px; border: 2px solid goldenrod; border-radius: 15px; font-family: 'Uncial Antiqua', serif; color: #f5deb3;">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label guidacustom2" style="color: #ffae00;">TITOLO</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" style="background-color: #2f2b24; color: #f5deb3; border: 1px solid goldenrod;">
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label guidacustom2" style="color: #ffae00;">GENERE</label>
                    <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre') }}" style="background-color: #2f2b24; color: #f5deb3; border: 1px solid goldenrod;">
                </div>

                <div class="mb-3">
                    <label for="img" class="form-label guidacustom2" style="color: #ffae00;">COPERTINA</label>
                    <input type="file" class="form-control" id="img" name="cover" style="background-color: #2f2b24; color: #f5deb3; border: 1px solid goldenrod;">
                </div>

                <div class="mb-3">
                    <label for="plot" class="form-label guidacustom2" style="color: #ffae00;">TRAMA</label>
                    <textarea name="plot" id="plot" class="form-control" style="background-color: #2f2b24; color: #f5deb3; border: 1px solid goldenrod;">{{ old('plot') }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label guidacustom2" style="color: #ffae00;">DISPONIBILE SU:</label><br>
                    @foreach($platforms as $platform)
                    <input type="checkbox" class="form-check-input" value="{{ $platform->id }}" id="platform-{{ $platform->id }}" name="platforms[]">
                    <label for="platform-{{ $platform->id }}" class="guidacustom2" style="color: #f5deb3;">{{ $platform->name }}</label><br>
                    @endforeach
                </div>

                <button type="submit" class="btn btn-custom" style="font-family: 'Uncial Antiqua', cursive;">INVIA</button>
            </form>
        </div>
    </div>
</div>
<!-- FINE FORM -->

</x-layout>