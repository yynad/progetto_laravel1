<x-layout>
    <x-navbar></x-navbar>

    <div class="container my-5" style="font-family: 'Cloister Black', 'Uncial Antiqua', serif; color: #d9c29d; background: url('/images/parchment-texture.jpg') no-repeat center center; background-size: cover; border: 5px double #a97c50; padding: 3rem; box-shadow: 0 0 25px #7a5c2d inset;">

        <header class="text-center mb-5" style="text-shadow: 2px 2px 5px #3c2f1a;">
            <h1 style="font-size: 4rem; letter-spacing: 0.3em; text-transform: uppercase; border-bottom: 3px solid #a97c50; display: inline-block; padding-bottom: 0.5rem;">
                La Gran Libraria degli Antichi Tomi
            </h1>
            <p class="mt-3 fst-italic" style="font-size: 1.25rem; max-width: 700px; margin-left: auto; margin-right: auto;">
                Nel cuore delle lande oscure e dei castelli perduti, si celano le reliquie della conoscenza. Ognuno di questi tomi racconta leggende dimenticate, incantesimi perduti e storie di valorosi cavalieri e saggi monaci.
            </p>
        </header>

        <section class="mb-5" style="border: 2px solid #a97c50; padding: 2rem; background-color: rgba(30, 20, 5, 0.75); box-shadow: inset 0 0 10px #7a5c2d;">
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem; border-bottom: 2px solid #a97c50; padding-bottom: 0.5rem;">Storie dalla Libraria</h2>
            <p style="font-size: 1.1rem; line-height: 1.8;">
                Ascoltate, viandanti e studiosi, le cronache delle librerie itineranti, carovane di sapienti che portavano volumi rari tra terre selvagge, rischiando la furia di briganti e bestie magiche. Ogni pergamena è un frammento di un mondo arcano, dove la conoscenza si intreccia con il mistero.
            </p>
            <p style="font-size: 1.1rem; line-height: 1.8;">
                Nel <strong>Castello di Eldrath</strong>, la biblioteca nascosta custodisce tomi maledetti, protetti da rune antiche e magie proibite. Solo i più coraggiosi osano sfidare i segreti delle sue stanze oscure.
            </p>
        </section>

        <section class="row g-4 justify-content-center">
            @forelse($books as $book)
                <article class="col-12 col-sm-6 col-md-4 col-lg-3" style="background-color: rgba(40, 25, 5, 0.9); border: 3px solid #a97c50; border-radius: 15px; box-shadow: 0 0 15px #6f5b27;">
                    <figure style="margin: 0; padding: 1rem; border-bottom: 2px solid #a97c50;">
                        <img src="{{ Storage::url($book->cover) }}" alt="Copertina del libro {{ $book->title }}" style="width: 100%; border-radius: 10px; box-shadow: 0 0 10px #7a5c2d;">
                        <figcaption style="margin-top: 0.75rem; font-weight: bold; font-size: 1.3rem; color: #deb887; text-align: center; text-shadow: 1px 1px 2px #3c2f1a;">
                            {{ $book->title }}
                        </figcaption>
                    </figure>
                    <div style="padding: 1rem; color: #d9c29d; font-style: italic; font-size: 0.95rem; height: 8rem; overflow: hidden; text-overflow: ellipsis;">
                        {{ Str::limit($book->plot, 125, '...') }}
                    </div>
                    <div class="text-center mb-3">
                        <a href="{{ route('book.show', $book) }}" class="btn btn-gold btn-lg" style="font-family: 'Cloister Black', serif; background-color: #a97c50; border-color: #7a5c2d; color: #2b1f0a; box-shadow: 0 0 8px #7a5c2d;">
                            Scopri il tomo
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-12 text-center" style="color: #d9c29d; font-family: 'Cloister Black', serif;">
                    <h2>Nessun tomo è stato ancora aggiunto alle collezioni.</h2>
                    <a href="{{ route('book.create') }}" class="btn btn-gold btn-lg mt-4" style="font-family: 'Cloister Black', serif; background-color: #a97c50; border-color: #7a5c2d; color: #2b1f0a; box-shadow: 0 0 8px #7a5c2d;">
                        Aggiungi il primo tomo
                    </a>
                </div>
            @endforelse
        </section>

    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Uncial+Antiqua&display=swap');


        @font-face {
            font-family: 'Cloister Black';
            src: url('/fonts/CloisterBlack.ttf') format('truetype'); 
        }

        .btn-gold {
            transition: all 0.3s ease;
        }
        .btn-gold:hover {
            background-color: #deb887 !important;
            color: #3c2f1a !important;
            box-shadow: 0 0 15px #deb887 !important;
        }
    </style>

</x-layout>