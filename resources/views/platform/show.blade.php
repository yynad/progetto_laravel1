<x-layout>
    <x-navbar></x-navbar>

    <header class="d-flex justify-content-center align-items-center my-4" style="
        background-color: rgba(30, 20, 5, 0.85);
        border: 3px solid #a97c50;
        box-shadow: inset 0 0 15px #7a5c2d;">
        <h1 style="
            font-family: 'Cloister Black', serif;
            color: #deb887;
            font-weight: 900;
            font-size: 2.8rem;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            text-shadow: 1.5px 1.5px 3px #3c2f1a;
            margin: 1rem;">
            DETTAGLIO DI: <span style="color: #a97c50;">{{ $platform->name }}</span>
        </h1>
    </header>

    <div class="container my-5" style="
        font-family: 'Uncial Antiqua', serif;
        color: #deb887;
        background: url('/images/parchment-texture.jpg') no-repeat center center;
        background-size: cover;
        padding: 2rem;
        box-shadow: inset 0 0 25px #7a5c2d;">
        <div class="row">
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-4 mb-md-0">
                <img src="{{ Storage::url($platform->logo) }}" alt="Logo di {{ $platform->name }}" style="
                    max-width: 100%;
                    height: auto;
                    border: 5px solid #a97c50;
                    border-radius: 15px;
                    box-shadow: 0 0 15px #7a5c2d;">
            </div>
            <div class="col-12 col-md-6">
                <h2 style="
                    font-family: 'Cloister Black', serif;
                    color: #a97c50;
                    font-weight: 900;
                    font-size: 2rem;
                    text-shadow: 1px 1px 2px #3c2f1a;
                    margin-bottom: 1rem;">
                    Descrizione:
                </h2>
                <p style="
                    font-style: italic;
                    font-size: 1.1rem;
                    line-height: 1.6;">
                    <strong>{{ $platform->description }}</strong>
                </p>

                @if(count($platform->books))
                    <h2 style="
                        font-family: 'Cloister Black', serif;
                        color: #a97c50;
                        font-weight: 900;
                        font-size: 2rem;
                        margin-top: 2rem;
                        margin-bottom: 1rem;
                        text-shadow: 1px 1px 2px #3c2f1a;">
                        Libri disponibili nella piattaforma:
                    </h2>
                    <ul style="
                        list-style-type: square;
                        padding-left: 1.5rem;
                        font-style: italic;
                        font-size: 1.1rem;
                        line-height: 1.5;">
                        @foreach($platform->books as $book)
                            <li style="margin-bottom: 0.4rem;">{{ $book->title }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>

    <style>
        @font-face {
            font-family: 'Cloister Black';
            src: url('/fonts/CloisterBlack.ttf') format('truetype');
        }
        @import url('https://fonts.googleapis.com/css2?family=Uncial+Antiqua&display=swap');
    </style>
</x-layout>