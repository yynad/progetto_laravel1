<x-layout>
  <x-navbar />

  <div class="container my-5 d-flex justify-content-center">
    <div class="row w-100 justify-content-center">
      <div class="col-12 text-center">
        <h1 style="
          font-family: 'Uncial Antiqua', cursive; 
          font-size: 3.5rem; 
          font-weight: 700; 
          color: #ffae00; 
          text-shadow: 2px 2px 5px #4a370d;">
          Modifica il tomo antico
        </h1>
        <p style="
          font-family: 'Uncial Antiqua', serif; 
          font-style: italic; 
          color: #deb887; 
          font-size: 1.3rem;
          max-width: 600px;
          margin: 0.5rem auto 2rem auto;
          text-shadow: 1px 1px 2px #3c2f1a;">
          Qui plasmerai il destino del libro, affinché i suoi segreti possano perdurare nei secoli.
          Compila con cura ogni campo sotto la luce della saggezza.
        </p>
      </div>
    </div>
  </div>

  @if ($errors->any())
  <div style="
    background-color: rgba(128, 0, 0, 0.4);
    border: 2px solid darkred;
    color: crimson;
    padding: 1rem 1.5rem;
    max-width: 650px;
    margin: 0 auto 2rem auto;
    font-family: 'Uncial Antiqua', serif;
    box-shadow: inset 0 0 10px darkred;">
    <h3 style="margin-bottom: 0.75rem; font-weight: 900; text-align: center;">⚠️ Avviso del Sommo Saggio ⚠️</h3>
    <ul style="margin: 0; padding-left: 1.3rem;">
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="container my-4 d-flex justify-content-center">
    <div class="row w-100 justify-content-center">
      <div class="col-12 col-md-8 col-lg-7 col-xl-6" style="
        max-width: 900px;
        background-color: rgba(30, 20, 5, 0.9);
        padding: 2.5rem 3rem;
        border: 3px double #a97c50;
        border-radius: 18px;
        box-shadow: inset 0 0 20px #7a5c2d;
        font-family: 'Uncial Antiqua', serif;
        color: #f5deb3;
      ">
        <form action="{{ route('book.update', $book) }}" method="POST" enctype="multipart/form-data" novalidate>
          @csrf
          @method('PUT')

          <div class="mb-4">
            <label for="title" style="color: #ffae00; font-weight: 700; letter-spacing: 0.1em;">
              📜 Titolo del tomo antico
            </label>
            <input type="text" id="title" name="title" value="{{ $book->title }}" placeholder="Inserisci il titolo sacro"
              style="
                width: 100%;
                background-color: #2f2b24;
                color: #f5deb3;
                border: 2px solid #a97c50;
                border-radius: 8px;
                padding: 0.5rem 0.75rem;
                font-family: 'Uncial Antiqua', serif;
                font-size: 1.1rem;
              " required>
            <small style="color: #deb887; font-style: italic;">
              Il nome col quale il tomo sarà ricordato nelle sale del sapere.
            </small>
          </div>

          <div class="mb-4">
            <label for="genre" style="color: #ffae00; font-weight: 700; letter-spacing: 0.1em;">
              🏷️ Genere del manoscritto
            </label>
            <input type="text" id="genre" name="genre" value="{{ $book->genre }}" placeholder="Es: Storia, Magia, Leggende"
              style="
                width: 100%;
                background-color: #2f2b24;
                color: #f5deb3;
                border: 2px solid #a97c50;
                border-radius: 8px;
                padding: 0.5rem 0.75rem;
                font-family: 'Uncial Antiqua', serif;
                font-size: 1.1rem;
              " required>
            <small style="color: #deb887; font-style: italic;">
              Indica la categoria arcana a cui il libro appartiene.
            </small>
          </div>

          
          <div class="mb-4">
            <label for="img" style="color: #ffae00; font-weight: 700; letter-spacing: 0.1em;">
              🖼️ Copertina del tomo (nuova immagine)
            </label>
            <input type="file" id="img" name="cover"
            style="
                width: 100%;
                background-color: #2f2b24;
                color: #f5deb3;
                border: 2px solid #a97c50;
                border-radius: 8px;
                padding: 0.3rem 0.5rem;
                font-family: 'Uncial Antiqua', serif;
              " accept="image/*">
            <small style="color: #deb887; font-style: italic;">
              Scegli un'immagine che rappresenti il tomo, o lascia questa inalterata.
            </small>
          </div>
          
          <div class="mb-4">
            <label style="color: #ffae00; font-weight: 700; letter-spacing: 0.1em;">
              📚 Copertina attuale del tomo
            </label><br>
            <img src="{{ Storage::url($book->cover) }}" alt="Copertina attuale del libro" class="img-fluid" style="
              border: 3px solid #a97c50;
              border-radius: 12px;
              max-width: 100%;
              box-shadow: 0 0 15px #7a5c2d inset;">
          </div>
          
          <div class="mb-3">
            <label for="plot" style="color: #ffae00; font-weight: 700; letter-spacing: 0.1em;">
              🖋️ Trama del libro
            </label>
            <textarea id="plot" name="plot" rows="6" placeholder="Racconta il mistero custodito nel tomo..."
            style="
                width: 100%;
                background-color: #2f2b24;
                color: #f5deb3;
                border: 2px solid #a97c50;
                border-radius: 8px;
                padding: 0.75rem;
                font-family: 'Uncial Antiqua', serif;
                font-size: 1.1rem;
                resize: vertical;
              " required>{{ $book->plot }}</textarea>
            <small style="color: #deb887; font-style: italic;">
              Narrazione breve e incantata del contenuto segreto del tomo.
            </small>
          </div>
          <div class="mb-4">
            <label style="color: #ffae00; font-weight: 700; letter-spacing: 0.1em;">
              🏰 Piattaforme su cui si può trovare il tomo
            </label><br>
            @foreach($platforms as $platform)
            <div style="margin-bottom: 0.35rem;">
              <input type="checkbox" id="platform-{{ $platform->id }}" name="platforms[]" value="{{ $platform->id }}"
                @if($book->platforms->contains($platform->id)) checked @endif
                style="transform: scale(1.25); margin-right: 0.4rem;">
              <label for="platform-{{ $platform->id }}" style="font-family: 'Uncial Antiqua', serif; color: #f5deb3; font-weight: 600;">
                {{ $platform->name }}
              </label>
            </div>
            @endforeach
            <small style="color: #deb887; font-style: italic;">
              Seleziona i portali magici dove il tomo sarà rinvenibile.
            </small>
          </div>
          
          <div class="text-center">
            <button type="submit" class="btn" style="
    background-color: #a97c50;
    color: #2b1f0a;
    font-family: 'Uncial Antiqua', cursive;
    font-weight: 900;
    padding: 0.75rem 2.5rem;
    font-size: 1.25rem;
    border-radius: 12px;
    border: 3px solid #7a5c2d;
    box-shadow:
      inset 2px 2px 5px #7a5c2d,
      3px 3px 0 #5c462a;
    text-transform: uppercase;
    cursor: pointer;
    user-select: none;
    transition: all 0.3s ease;
  " 
  onmouseover="this.style.backgroundColor='#866533'; this.style.color='#e1cca3'; this.style.boxShadow='inset 1px 1px 3px #a97c50, inset -1px -1px 3px #5c462a, 4px 4px 0 #4b3a21';"
  onmouseout="this.style.backgroundColor='#a97c50'; this.style.color='#2b1f0a'; this.style.boxShadow='inset 2px 2px 5px #7a5c2d, 3px 3px 0 #5c462a';">
    Invoca il tomo
  </button>
  
  <a href="{{ route('book.index') }}" class="btn" style="
    background-color: #7a5c2d;
    color: #deb887;
    font-family: 'Uncial Antiqua', cursive;
    font-weight: 900;
    padding: 0.75rem 2rem;
    font-size: 1.25rem;
    border-radius: 12px;
    border: 3px solid #5c462a;
    box-shadow:
      inset 2px 2px 5px #5c462a,
      3px 3px 0 #4b3a21;
    text-transform: uppercase;
    cursor: pointer;
    user-select: none;
    margin-left: 1rem;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
  "
  onmouseover="this.style.backgroundColor='#5c462a'; this.style.color='#f0d8a8'; this.style.boxShadow='inset 1px 1px 3px #7a5c2d, inset -1px -1px 3px #4b3a21, 4px 4px 0 #3a2d19';"
  onmouseout="this.style.backgroundColor='#7a5c2d'; this.style.color='#deb887'; this.style.boxShadow='inset 2px 2px 5px #5c462a, 3px 3px 0 #4b3a21';">
    Annulla
  </a>
</div>
          </div>

        </form>
      </div>
    </div>
  </div>

</x-layout>