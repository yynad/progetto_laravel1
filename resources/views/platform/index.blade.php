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
        Piattaforme del Gran Archivio
      </h1>
      <p class="mt-3 fst-italic" style="font-size: 1.3rem; max-width: 720px; margin-left: auto; margin-right: auto; line-height: 1.6;">
        Valorosi studiosi, qui trovate le antiche piattaforme da cui attingere i tomi e i saperi perduti. Ogni portale digitale è un portale magico, custode di conoscenze e segreti arcani. Scegliete saggiamente dove inoltrarvi.
      </p>
    </header>

    <section class="row g-4 justify-content-center">

      @forelse($platforms as $platform)
        <article class="col-12 col-sm-6 col-md-4 col-lg-3" style="
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
            <img src="{{ Storage::url($platform->logo) }}" alt="Logo della piattaforma {{ $platform->name }}" style="width: 100%; border-radius: 14px; box-shadow: 0 0 12px #7a5c2d;">
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
              {{ $platform->name }}
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
            {{ Str::limit($platform->description, 160, '...') }}
          </div>

          <div class="text-center mb-4">
            <a href="{{ route('platform.show', $platform) }}" class="btn btn-gold btn-lg" style="
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
              Scopri la piattaforma
            </a>
            <a href="{{ route('platform.edit', $platform) }}" class="btn btn-gold btn-lg mt-2" style="
              font-family: 'Cloister Black', serif;
              background-color: #7a5c2d;
              border-color: #5c462a;
              color: #deb887;
              box-shadow: 0 0 10px #5c462a;
              padding: 0.5rem 1.5rem;
              letter-spacing: 0.08em;
              text-transform: uppercase;
              transition: all 0.3s ease;
              ">
              Modifica
            </a>
          </div>
        </article>
      @empty
        <div class="col-12 text-center" style="color: #d9c29d; font-family: 'Cloister Black', serif;">
          <h2 style="font-size: 2rem; letter-spacing: 0.1em; margin-bottom: 1rem;">
            Nessuna piattaforma è stata ancora evocata nell’Archivio.
          </h2>
          <a href="{{ route('platform.create') }}" class="btn btn-gold btn-lg mt-4" style="
            font-family: 'Cloister Black', serif;
            background-color: #a97c50;
            border-color: #7a5c2d;
            color: #2b1f0a;
            box-shadow: 0 0 10px #7a5c2d;
            padding: 0.75rem 1.75rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            ">
            Evoca la prima piattaforma
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
        Ricordate, saggi viandanti, che ogni piattaforma è una porta verso mondi di conoscenza e mistero. Siate degni di varcarla con cuore aperto e mente pronta.
      </p>
      <p class="mt-3 fst-italic" style="font-size: 1rem;">
        «Attraversare è imparare; esplorare è crescere.»
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