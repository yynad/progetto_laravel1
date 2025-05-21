<x-layout>
    <x-navbar></x-navbar>

    <!-- SEZIONE H1 -->
    <div class="container my-4">
        <div class="row">
            <div class="col-12 d-flex justify-content-center p-3">
                <h1 style="font-family: 'Cloister Black', serif; font-size: 3.8rem; color: #a97c50; text-shadow: 2px 2px 5px #3c2f1a; letter-spacing: 0.15em; text-transform: uppercase;">
                    INSERISCI UN NUOVO LIBRO
                </h1>
            </div>
        </div>
    </div>
    <!-- FINE SEZIONE H1 -->

    <!-- SEZIONE ERRORE DI COMPILAZIONE FORM -->
    @if ($errors->any())
    <div style="background-color: rgba(139, 26, 26, 0.6); border: 2px solid #5c1212; color: #f08080; padding: 15px 20px; max-width: 700px; margin: 0 auto 25px auto; font-family: 'Uncial Antiqua', serif; border-radius: 10px; box-shadow: 0 0 10px #7a2c2c;">
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
            <div class="col-12" style="max-width: 700px;">
                <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data"
                    style="background-color: rgba(30, 20, 5, 0.9); padding: 30px 25px; border: 3px solid #a97c50; border-radius: 20px; font-family: 'Uncial Antiqua', serif; color: #deb887; box-shadow: 0 0 25px #7a5c2d;">
                    @csrf
                    <div class="mb-4">
                        <label for="title" style="color: #ffcc66; font-weight: 700; font-size: 1.3rem;">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                            style="background-color: #2f2b24; color: #f5deb3; border: 2px solid #a97c50; border-radius: 8px; font-family: 'Uncial Antiqua', serif;">
                    </div>

                    <div class="mb-4">
                        <label for="genre" style="color: #ffcc66; font-weight: 700; font-size: 1.3rem;">Genere</label>
                        <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre') }}"
                            style="background-color: #2f2b24; color: #f5deb3; border: 2px solid #a97c50; border-radius: 8px; font-family: 'Uncial Antiqua', serif;">
                    </div>

                    <div class="mb-4">
                        <label for="img" style="color: #ffcc66; font-weight: 700; font-size: 1.3rem;">Copertina</label>
                        <input type="file" class="form-control" id="img" name="cover"
                            style="background-color: #2f2b24; color: #f5deb3; border: 2px solid #a97c50; border-radius: 8px; font-family: 'Uncial Antiqua', serif;">
                    </div>

                    <div class="mb-4">
                        <label for="plot" style="color: #ffcc66; font-weight: 700; font-size: 1.3rem;">Trama</label>
                        <textarea name="plot" id="plot" class="form-control" rows="5"
                            style="background-color: #2f2b24; color: #f5deb3; border: 2px solid #a97c50; border-radius: 8px; font-family: 'Uncial Antiqua', serif;">{{ old('plot') }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label" style="color: #ffcc66; font-weight: 700; font-size: 1.3rem; margin-bottom: 0.5rem;">Disponibile su:</label><br>
                        @foreach($platforms as $platform)
                        <div class="form-check" style="margin-bottom: 0.4rem;">
                            <input type="checkbox" class="form-check-input" value="{{ $platform->id }}"
                                id="platform-{{ $platform->id }}" name="platforms[]"
                                style="cursor: pointer;">
                            <label for="platform-{{ $platform->id }}" style="color: #deb887; cursor: pointer;">
                                {{ $platform->name }}
                            </label>
                        </div>
                        @endforeach
                    </div>

                    <button type="submit" class="btn btn-medieval"
                        style="font-family: 'Cloister Black', serif; font-size: 1.3rem; padding: 0.7rem 2.2rem;">
                        INVIA
                    </button>
                </form>
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Uncial+Antiqua&display=swap');

        @font-face {
            font-family: 'Cloister Black';
            src: url('/fonts/CloisterBlack.ttf') format('truetype');
        }

        .btn-medieval {
            background-color: #a97c50;
            color: #2b1f0a;
            border: 3px solid #7a5c2d;
            border-radius: 12px;
            text-transform: uppercase;
            font-weight: 900;
            letter-spacing: 0.12em;
            box-shadow:
                inset 2px 2px 5px #7a5c2d,
                3px 3px 0 #5c462a;
            transition: all 0.25s ease;
            text-shadow: 1px 1px 2px #3c2f1a;
            cursor: pointer;
            user-select: none;
        }

        .btn-medieval:hover,
        .btn-medieval:focus {
            background-color: #866533;
            color: #e1cca3;
            box-shadow:
                inset 1px 1px 3px #a97c50,
                inset -1px -1px 3px #5c462a,
                4px 4px 0 #4b3a21;
            transform: translate(1px, 1px);
        }
    </style>
</x-layout>