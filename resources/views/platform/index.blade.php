<x-layout>
    <x-navbar></x-navbar>

    <div class="col-md-8 text-center my-3">
        @if(session('message'))
            <div class="alert alert-success" style="
                background-color: #3c2f1a; 
                color: #deb887; 
                border: 2px solid #a97c50;
                font-family: 'Cloister Black', serif;
                box-shadow: inset 0 0 10px #7a5c2d;">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div class="container my-5" style="
        font-family: 'Cloister Black', serif; 
        color: #d9c29d; 
        background: url('/images/parchment-texture.jpg') no-repeat center center; 
        background-size: cover; 
        padding: 2rem; 
        box-shadow: inset 0 0 25px #7a5c2d;">
        
        <div class="row">
            <div class="col-12 text-center arancio border-black rounded p-3 bg-black-fade" style="
                background-color: rgba(30, 20, 5, 0.85);
                border: 3px solid #a97c50;
                box-shadow: inset 0 0 15px #7a5c2d;">
                <h1 style="
                    font-weight: 900; 
                    font-size: 3rem; 
                    letter-spacing: 0.15em; 
                    text-transform: uppercase; 
                    color: #deb887;
                    text-shadow: 1px 1px 2px #3c2f1a;">
                    LISTA PIATTAFORME DISPONIBILI
                </h1>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-4">
            @forelse($platforms as $platform)
                <div class="col-12 col-md-3 my-3">
                    <div style="
                        background-color: rgba(30, 20, 5, 0.85);
                        border: 3px solid #a97c50;
                        border-radius: 15px;
                        box-shadow: 0 0 20px #7a5c2d inset;
                        height: 100%;
                        display: flex;
                        flex-direction: column;
                        ">
                        <img src="{{ Storage::url($platform->logo) }}" alt="{{ $platform->name }}" style="
                            width: 100%; 
                            height: 180px; 
                            object-fit: contain; 
                            border-bottom: 3px solid #a97c50;
                            border-radius: 15px 15px 0 0;">
                        <div style="padding: 1rem; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <h5 style="
                                    font-family: 'Cloister Black', serif; 
                                    color: #deb887; 
                                    font-weight: 900; 
                                    font-size: 1.5rem; 
                                    margin-bottom: 0.5rem; 
                                    text-shadow: 1px 1px 2px #3c2f1a;">
                                    {{ $platform->name }}
                                </h5>
                                <p style="
                                    font-family: 'Uncial Antiqua', serif;
                                    color: #d9c29d;
                                    font-style: italic;
                                    font-size: 1rem;
                                    line-height: 1.4;">
                                    {{ $platform->description }}
                                </p>
                            </div>
                            <a href="{{ route('platform.show', $platform) }}" class="btn btn-medieval" style="align-self: flex-start; margin-top: 1rem;">
                                DETTAGLI
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center my-5" style="color: #deb887; font-family: 'Cloister Black', serif;">
                    <h2><strong>Non sono state ancora aggiunte delle piattaforme.</strong></h2>
                    <a href="{{ route('platform.create') }}" style="
                        font-family: 'Cloister Black', serif; 
                        color: #a97c50; 
                        text-decoration: none; 
                        font-weight: 900; 
                        font-size: 1.2rem;
                        border-bottom: 2px solid #a97c50;
                        transition: color 0.3s ease;">
                        AGGIUNGINE UNA!
                    </a>
                </div>
            @endforelse
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
            display: inline-block;
            text-decoration: none;
        }

        .btn-medieval:hover, .btn-medieval:focus {
            background-color: #866533;
            color: #e1cca3;
            box-shadow:
                inset 1px 1px 3px #a97c50,
                inset -1px -1px 3px #5c462a,
                4px 4px 0 #4b3a21;
            transform: translate(1px, 1px);
            text-decoration: none;
        }
    </style>
</x-layout>