<x-layout>
  <x-navbar />

  <div class="container my-5 p-5" style="
      font-family: 'Cloister Black', 'Uncial Antiqua', serif;
      color: #d9c29d;
      background: url('/images/parchment-texture.jpg') no-repeat center center;
      background-size: cover;
      border: 5px double #a97c50;
      box-shadow: 0 0 25px #7a5c2d inset;
      min-height: 90vh;
    ">
    
    <header class="text-center mb-5" style="text-shadow: 2px 2px 5px #3c2f1a;">
      <h1 style="
          font-size: 4rem;
          letter-spacing: 0.35em;
          text-transform: uppercase;
          border-bottom: 3px solid #a97c50;
          display: inline-block;
          padding-bottom: 0.5rem;
        ">
        I Sacri Tomi del Gran Archivio
      </h1>
      <p class="mt-3 fst-italic" style="font-size: 1.3rem; max-width: 720px; margin-left: auto; margin-right: auto; line-height: 1.6;">
        O nobili spiriti e studiosi ardenti, vi invitiamo ad addentrarvi nelle pagine antiche e polverose di questi volumi rari. Ogni tomo, figlio di mani sapienti e cuori valorosi, racchiude sapere arcano, saggezza dimenticata e leggende di epoche ormai passate. Lasciatevi avvolgere dal profumo dell’antico inchiostro e dall’eco delle voci che narrano di maghi, cavalieri e monasteri nascosti.
      </p>
    </header>

    <section class="row g-4 justify-content-center">

      @forelse($books as $book)
        <article class="col-12 col-sm-6 col-md-4 col-lg-3 me-4" style="
          background-color: rgba(40, 25, 5, 0.95);
          border: 4px double #a97c50;
          border-radius: 18px;
          box-shadow: 0 0 20px #6f5b27;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          min-height: 460px;
        ">
          <figure style="margin: 0; padding: 1.5rem; border-bottom: 3px solid #a97c50;">
            <img src="{{ Storage::url($book->cover) }}" alt="Copertina del tomo {{ $book->title }}" style="width: 100%; border-radius: 14px; box-shadow: 0 0 12px #7a5c2d;">
            <figcaption style="
              margin-top: 1rem;
              font-weight: 700;
              font-size: 1.45rem;
              color: #deb887;
              text-align: center;
              text-shadow: 2px 2px 4px #3c2f1a;
              letter-spacing: 0.05em;
              font-family: 'Uncial Antiqua', serif;
              ">
              {{ $book->title }}
            </figcaption>
          </figure>

          <div style="
            padding: 1.25rem 1.5rem 1.5rem 1.5rem;
            color: #d9c29d;
            font-style: italic;
            font-size: 1rem;
            line-height: 1.7;
            overflow: hidden;
            height: 10rem;
            text-overflow: ellipsis;
            font-family: 'Uncial Antiqua', serif;
            ">
            {{ Str::limit($book->plot, 160, '...') }}
          </div>

          <div class="text-center mb-4">
            <a href="{{ route('book.show', $book) }}" class="btn btn-gold btn-lg" style="
              font-family: 'Cloister Black', serif;
              background-color: #a97c50;
              border-color: #7a5c2d;
              color: #2b1f0a;
              box-shadow: 0 0 10px #7a5c2d;
              padding: 0.75rem 1.75rem;
              letter-spacing: 0.08em;
              text-transform: uppercase;
              transition: all 0.3s ease;
              ">
              Scopri il tomo
            </a>
          </div>
        </article>
      @empty
        <div class="col-12 text-center" style="color: #d9c29d; font-family: 'Cloister Black', serif;">
          <h2 style="font-size: 2rem; letter-spacing: 0.1em; margin-bottom: 1rem;">
            Nessun tomo è stato ancora incantato nel nostro Archivio.
          </h2>
          <a href="{{ route('book.create') }}" class="btn btn-gold btn-lg mt-4" style="
            font-family: 'Cloister Black', serif;
            background-color: #a97c50;
            border-color: #7a5c2d;
            color: #2b1f0a;
            box-shadow: 0 0 10px #7a5c2d;
            padding: 0.75rem 1.75rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            ">
            Incanta il primo tomo
          </a>
        </div>
      @endforelse

    </section>

    <section class="mt-5" style="
      font-family: 'Uncial Antiqua', serif;
      color: #deb887;
      max-width: 720px;
      margin: 3rem auto 0 auto;
      background-color: rgba(30, 20, 5, 0.85);
      border: 2px solid #a97c50;
      padding: 2rem;
      border-radius: 15px;
      box-shadow: inset 0 0 15px #7a5c2d;
      text-align: center;
      font-size: 1.1rem;
      line-height: 1.7;
      letter-spacing: 0.03em;
    ">
      <p>
        Sappiate, valorosi lettori, che ogni tomo qui custodito è il frutto di menti illuminate e cuori ardenti. Immergetevi con animo devoto nelle parole scritte, perché solo attraverso la conoscenza delle antiche cronache si possono forgiare nuovi destini e risvegliare l’anima del vero cavaliere del sapere.
      </p>
      <p class="mt-3 fst-italic" style="font-size: 1rem;">
        «Chi legge, cavalca il tempo; chi apprende, forgia il futuro.»
      </p>
    </section>

  </div>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Uncial+Antiqua&display=swap');

    @font-face {
      font-family: 'Cloister Black';
      src: url('/fonts/CloisterBlack.ttf') format('truetype');
    }

    .btn-gold {
      font-weight: 700;
      transition: all 0.3s ease;
      box-shadow: 0 0 8px #7a5c2d;
      border-width: 3px !important;
      border-style: double !important;
    }
    .btn-gold:hover {
      background-color: #deb887 !important;
      color: #3c2f1a !important;
      box-shadow: 0 0 20px #deb887 !important;
      transform: scale(1.05);
    }
  </style>

</x-layout>