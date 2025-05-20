<x-layout>
<x-navbar></x-navbar>

<div class="container my-5 d-flex justify-content-center">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <h1 class="arancio fw-bold" style="font-family: 'Uncial Antiqua', cursive; text-shadow: 2px 2px 4px #000;">
                Modifica libro
            </h1>
        </div>
    </div>
</div>

@if ($errors->any())
<div style="background-color: rgba(128, 0, 0, 0.3); border: 2px solid darkred; color: crimson; padding: 10px; max-width: 600px; margin: 0 auto 20px auto; font-family: 'Uncial Antiqua', serif;">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container my-4 d-flex justify-content-center">
    <div class="row w-100 justify-content-center">
        <div class="col-12 col-md-8 col-lg-7 col-xl-6" style="max-width: 900px;">
            <form action="{{ route('book.update', $book) }}" method="POST" enctype="multipart/form-data" style="background-color: rgba(0,0,0,0.6); padding: 30px; border: 2px solid goldenrod; border-radius: 15px; font-family: 'Uncial Antiqua', serif; color: #f5deb3;">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label guidacustom2" style="color: #ffae00;">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" style="background-color: #2f2b24; color: #f5deb3; border: 1px solid goldenrod;">
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label guidacustom2" style="color: #ffae00;">Genere</label>
                    <input type="text" class="form-control" id="genre" name="genre" value="{{ $book->genre }}" style="background-color: #2f2b24; color: #f5deb3; border: 1px solid goldenrod;">
                </div>

                <div class="mb-3">
                    <label for="platforms" class="form-label guidacustom2" style="color: #ffae00;">Piattaforme disponibili:</label><br>
                    @foreach($platforms as $platform)
                    <input type="checkbox" class="form-check-input" value="{{ $platform->id }}" id="platform-{{ $platform->id }}" name="platforms[]"
                        @if ($book->platforms->contains($platform->id)) checked @endif>
                    <label for="platform-{{ $platform->id }}" class="guidacustom2" style="color: #f5deb3;">{{ $platform->name }}</label><br>
                    @endforeach
                </div>

                <div class="mb-3">
                    <label for="img" class="form-label guidacustom2" style="color: #ffae00;">Copertina</label>
                    <input type="file" class="form-control" id="img" name="cover" style="background-color: #2f2b24; color: #f5deb3; border: 1px solid goldenrod;">
                </div>

                <div class="mb-3">
                    <label class="guidacustom2" style="color: #ffae00;">Copertina attuale</label><br>
                    <img src="{{ Storage::url($book->cover) }}" class="img-fluid" style="border: 2px solid goldenrod; border-radius: 8px; max-width: 100%;">
                </div>

                <div class="mb-3">
                    <label for="plot" class="form-label guidacustom2" style="color: #ffae00;">Trama</label>
                    <textarea name="plot" id="plot" class="form-control" style="background-color: #2f2b24; color: #f5deb3; border: 1px solid goldenrod;">{{ $book->plot }}</textarea>
                </div>

                <button type="submit" class="btn btn-custom" style="font-family: 'Uncial Antiqua', cursive;">INVIA</button>
            </form>
        </div>
    </div>
</div>
</x-layout>