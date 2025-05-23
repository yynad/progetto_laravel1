<x-layout>
    <x-navbar></x-navbar>

    <div class="container my-5" style="font-family: 'Cloister Black', 'Uncial Antiqua', serif; color: #d9c29d;">

        <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
                @if (session('message'))
                    <div class="alert alert-success" style="background-color: #3c2f1a; color: #deb887; border: 2px solid #a97c50; font-style: italic; font-weight: 600;">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger" style="background-color: #3c2f1a; color: #f08080; border: 2px solid #a97c50; font-style: italic; font-weight: 600;">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>

        <article class="row justify-content-center">
            <div class="col-md-8" style="background-color: rgba(30, 20, 5, 0.85); border: 3px solid #a97c50; border-radius: 20px; box-shadow: 0 0 20px #7a5c2d; padding: 2rem;">

                <header class="text-center my-4" style="text-shadow: 1.5px 1.5px 3px #3c2f1a;">
                    <h1 style="font-size: 3.8rem; letter-spacing: 0.2em; font-weight: 900; text-transform: uppercase; font-family: 'Cloister Black', serif;">
                        {{ $book->title }}
                    </h1>
                    <p style="font-family: 'Uncial Antiqua', cursive; color: #ffdd99; font-size: 1.2rem; margin-top: 0.3rem;">
                        Un tomo antico che racchiude storie da scoprire...
                    </p>
                </header>

                <div class="text-center mb-5">
                    <img src="{{ Storage::url($book->cover) }}" alt="Copertina del libro {{ $book->title }}" 
                         style="width: 360px; height: 420px; border: 6px solid #a97c50; border-radius: 18px; box-shadow: 0 0 20px #7a5c2d;">
                </div>

                <section class="px-4 mb-4" style="color: #deb887; font-style: italic; font-size: 1.15rem; line-height: 1.8; font-family: 'Uncial Antiqua', serif;">
                    <p><strong>Genere:</strong> <span style="color: #ffcc66;">{{ $book->genre }}</span></p>
                    <p><strong>Trama:</strong> <br>{{ $book->plot }}</p>
                    <p><strong>Inserito da:</strong> <em>{{ $book->user->name ?? 'Un ospite misterioso' }}</em></p>
                </section>

                <section class="px-4 mb-5">
                    <h3 style="color: #a97c50; border-bottom: 3px double #a97c50; padding-bottom: 0.5rem; font-family: 'Uncial Antiqua', serif; font-size: 1.8rem;">
                        Piattaforme disponibili
                    </h3>
                    <ul style="color: #d9c29d; font-style: italic; list-style-type: square; padding-left: 2rem; font-size: 1.1rem;">
                        @foreach ($book->platforms as $platform)
                            <li>{{ $platform->name }}</li>
                        @endforeach
                    </ul>
                </section>

                @if (Auth::user() && Auth::user()->id == $book->user_id)
                <section class="text-center mb-4" style="font-family: 'Cloister Black', serif;">
                    <p style="color: #f5deb3; font-style: italic; margin-bottom: 1rem;">
                        Custodisci questo tomo con cura o modifica i suoi segreti...
                    </p>
                    <a href="{{ route('book.index') }}" 
                       class="btn btn-medieval me-3" 
                       style="font-family: 'Cloister Black', serif;">
                        Torna alla lista
                    </a>
                    <a href="{{ route('book.edit', $book) }}" 
                       class="btn btn-medieval me-3"
                       style="font-family: 'Cloister Black', serif;">
                        Modifica
                    </a>
                    <form action="{{ route('book.delete', $book) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-medieval-danger" style="font-family: 'Cloister Black', serif;">
                            Elimina libro
                        </button>
                    </form>
                </section>
                @endif

            </div>
        </article>

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
            padding: 0.6rem 1.8rem;
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

        .btn-medieval:hover, .btn-medieval:focus {
            background-color: #866533;
            color: #e1cca3;
            box-shadow:
                inset 1px 1px 3px #a97c50,
                inset -1px -1px 3px #5c462a,
                4px 4px 0 #4b3a21;
            transform: translate(1px, 1px);
        }

        .btn-medieval-danger {
            background-color: #8b1a1a;
            color: #f0d9d9;
            border: 3px solid #5c1212;
            border-radius: 12px;
            padding: 0.6rem 1.8rem;
            text-transform: uppercase;
            font-weight: 900;
            letter-spacing: 0.12em;
            box-shadow:
                inset 2px 2px 5px #5c1212,
                3px 3px 0 #3f0d0d;
            transition: all 0.25s ease;
            text-shadow: 1px 1px 2px #400808;
            cursor: pointer;
            user-select: none;
        }

        .btn-medieval-danger:hover, .btn-medieval-danger:focus {
            background-color: #631313;
            color: #f7e6e6;
            box-shadow:
                inset 1px 1px 3px #a83232,
                inset -1px -1px 3px #4b1a1a,
                4px 4px 0 #3f0d0d;
            transform: translate(1px, 1px);
        }
    </style>
</x-layout>