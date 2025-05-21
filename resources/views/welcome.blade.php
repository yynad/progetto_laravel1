<x-layout>
<x-navbar />

@if(session('message'))
<div style="background-color: rgba(255, 215, 0, 0.2); border: 2px solid gold; color: gold; padding: 10px; text-align: center; font-family: 'Uncial Antiqua', serif;">
    {{ session('message') }}
</div>
@endif

@if(session('denied'))
<div style="background-color: rgba(128, 0, 0, 0.3); border: 2px solid darkred; color: crimson; padding: 10px; text-align: center; font-family: 'Uncial Antiqua', serif;">
    {{ session('denied') }}
</div>
@endif

<!-- BACKGROUND -->
<style>
    body {
        background-image: url('/storage/background.png');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        font-family: 'Uncial Antiqua', cursive;
        color: #f5deb3;
    }

    .btn-custom {
        background-color: #8b0000;
        color: #fff8dc;
        border: 2px solid #daa520;
        font-weight: bold;
        font-family: 'Uncial Antiqua', cursive;
        padding: 10px 20px;
        margin: 5px;
        transition: 0.3s ease-in-out;
    }

    .btn-custom:hover {
        background-color: #a52a2a;
        transform: scale(1.05);
    }

    .arancio {
        color: #ffae00;
        font-size: 3rem;
        font-family: 'Uncial Antiqua', cursive;
        text-shadow: 2px 2px 4px #000;
    }

    .guidacustom2 {
        font-size: 1.3rem;
        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        border-radius: 10px;
        border: 1px solid goldenrod;
        max-width: 800px;
        font-style: italic;
    }
    
    .bodyclass {
        background-color: rgba(0, 0, 0, 0.6);
        border: 2px solid #8b0000;
        padding: 30px;
        border-radius: 15px;
    }
    </style>

@auth
<div class="container my-5">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <h1 class="text-white">Saluti, <span class="arancio">{{ Auth::user()->name }}</span>!</h1>
        </div>
    </div>
</div>
<div class="w-100 d-flex justify-content-center text-center">
    <a href="{{ route('book.create') }}"><button class="btn btn-custom">📖 AGGIUNGI UN LIBRO</button></a>
    <a class="ms-2" href="{{ route('book.index') }}"><button class="btn btn-custom">📚 LISTA DEI LIBRI</button></a>
    <a class="ms-2" href="{{ route('dashboard') }}"><button class="btn btn-custom">🛡️ VAI AL MIO PROFILO</button></a>
</div>
@endauth
<!-- CONTENUTO PAGINA -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-center my-4">
            <h1 class="arancio fw-bold">Benvenuto al Castello, avventuriero!</h1>
        </div>
        <div class="col-12 d-flex justify-content-center my-4">
            <div><h4 class="guidacustom2">Un grimorio personale dove annotare i tuoi volumi arcani preferiti. Aggiungi nuovi tomi e registra le tue fonti con libertà sovrana.</h4></div>
        </div>
        <div class="col-12 d-flex justify-content-center">
    <div class="guidacustom2 mt-3">
        <h3 class="text-warning">📜 Cronache delle Antiche Biblioteche</h3>
        <p>
            Nelle profondità della <strong>Biblioteca di Alexandria</strong>, si narra che vi fossero:<br> 📖 Tomi incantati che ardevano senza fuoco, scritti con inchiostro d’ombra. Più a nord, nel <em>Scriptorium dell’Abbazia di Noreldor</em>, monaci armigeri trascrivevano le memorie dei draghi, custodendole in volumi sigillati con rune di ferro.
        </p>
        <p>
            🛡️ Il <strong>Paladino della Conoscenza</strong> trasportava sempre con sé il "Codex Ignis", un libro infuocato che conteneva le profezie dei regni caduti. Il suo giuramento: proteggere la conoscenza a costo della vita.
        </p>
        <p>
            📚 I <strong>Custodi di Litharia</strong> viaggiavano di villaggio in villaggio con carovane-librerie, portando le saggezze dei maghi a chiunque fosse disposto ad ascoltare. Ogni libro era un talismano, ogni parola un incantesimo.
        </p>
        <p>
            Oggi, Booklog prosegue quella tradizione: <strong>ogni titolo che aggiungi è un frammento di leggenda, ogni nota un passo verso l’immortalità del sapere.</strong>
        </p>
    </div>
</div>
    </div>
</div>

<div class="container my-5">
  <div class="row justify-content-center g-4">

    <!-- CARD 1 -->
    <div class="col-12 col-md-4">
      <div class="card bg-dark text-white border-gold h-100" style="border: 2px solid goldenrod; font-family: 'Uncial Antiqua', cursive;">
        <img src="{{ asset('tomo.png') }}" class="card-img-top" alt="Biblioteca antica">
        <div class="card-body">
        <h5 class="card-title text-warning">📖 Il Tomo della Nebbia</h5>
<p class="card-text">
    Nelle sale nebbiose del maniero di Eldermoor, v’era un tomo avvolto d’incanti che si manifestava unicamente al plenilunio. Solo colui dal cuore saldo e dallo sguardo puro poteva decifrarne le pagine, ove si disvelavano, come in sogno profetico, frammenti del proprio destino non ancora compiuto.
</p>
        </div>
      </div>
    </div>

    <!-- CARD 2 -->
    <div class="col-12 col-md-4">
      <div class="card bg-dark text-white border-gold h-100" style="border: 2px solid goldenrod; font-family: 'Uncial Antiqua', cursive;">
        <img src="{{ asset('paladino.png') }}" class="card-img-top" alt="Cavaliere antico">
        <div class="card-body">
    <h5 class="card-title text-warning">⚔️ La Saggezza del Paladino</h5>
<p class="card-text">
    Sir Galmor, nobile vessillifero del sapere, custodiva tra le mani un tomo miniato, ardente d’incanto perpetuo. Forgiato nei fuochi sacri di Eldurheim, il volume era copia vivente della Biblioteca Reale, protetto da sigilli d’onore contro fuoco e tradimento. Ovunque egli cavalcasse, la luce del sapere marciava al suo fianco.
</p>
        </div>
      </div>
    </div>

    <!-- CARD 3 -->
    <div class="col-12 col-md-4">
      <div class="card bg-dark text-white border-gold h-100" style="border: 2px solid goldenrod; font-family: 'Uncial Antiqua', cursive;">
        <img src="{{ asset('copisti.png') }}" class="card-img-top" alt="Monaco e libri">
        <div class="card-body">
          <h5 class="card-title text-warning">🕯️ I Copisti delle Ombre</h5>
<p class="card-text">
    Nell’abbazia velata di Durnhollow, monaci ammantati d’ombra trascrivevano, al tenue bagliore di ceri consacrati, pergameni che nessun mortale osava sfiorare. Si narra che le loro penne scorressero guidate da voci d’oltrevelo, spiriti vetusti che sussurravano verità perdute nei meandri del tempo.
</p>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- SEZIONE "I NOSTRI RACCONTI" -->
<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="arancio">📜 I nostri racconti</h1>
        </div>
        <div class="col-12">
            <div class="guidacustom2 mx-auto">
                <h3 class="text-warning">🔥 L’Assalto alla Biblioteca di Tharalion</h3>
                <p>
                    Nell’anno 837 del Calendario delle Stelle, la <strong>Biblioteca di Tharalion</strong> si ergeva come baluardo della conoscenza arcana, costruita con pietre lucenti incise con rune d’eternità. Al suo interno era custodito il <em>“Libram Aeternum”</em>, un tomo incantato capace di rivelare i segreti del tempo.
                </p>
                <p>
                    Nella notte senza luna, dal cielo squarciato da nubi purpuree, <strong>il Drago Ombra di Morghal</strong> discese con un esercito di wyvern minori. Il suo scopo: distruggere la biblioteca e inghiottire il potere del libro. I cieli si riempirono di fuoco e fumo mentre la città chiamava alle armi l’antico ordine dei <em>Cavalieri della Runa Dorata</em>.
                </p>
                <p>
                    Guidati da <strong>Sir Caledor</strong>, un guerriero dal cuore infuocato e dalla spada benedetta da sette stregoni, i cavalieri formarono un cerchio di difesa attorno al Libram. I monaci-bibliotecari, intonando canti in lingua antica, innalzarono barriere mistiche per proteggere i manoscritti sacri.
                </p>
                <p>
                    La battaglia infuriò per ore. Fiamme lambivano pergameni millenari, e ogni parola persa era una ferita alla memoria dell’umanità. Ma quando il drago calò sul cuore della biblioteca, fu affrontato da <strong>la Custode di Inchiostro, Alenya</strong>, una maga cieca che vedeva attraverso le pagine del sapere.
                </p>
                <p>
                    Con un ultimo incantesimo, <em>“Veritas Lux Aeternum”</em>, Alenya sigillò il drago in un vortice di luce e lo intrappolò tra le righe del Libram stesso, trasformando l’antico nemico in leggenda. Il silenzio calò su Tharalion. La biblioteca era salva, ma il prezzo era stato alto.
                </p>
                <p>
                    Ancora oggi, nei sussurri delle biblioteche arcane, si narra che chi legge le parole giuste nel Libram Aeternum, possa sentire l’eco di quella battaglia… e il ruggito imprigionato di Morghal.
                </p>
            </div>
        </div>
    </div>
</div>

@guest
<div class="bodyclass container my-5">
    <div class="row">
        <div class="col-12 rounded text-center">
            <h1 class="text-white">⚠️ O viandante, effettua il <strong>login</strong> per accedere ai poteri del Booklog.</h1>
        </div>
    </div>
</div>
@endguest



<!-- LIVEWIRE CHAT -->
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-6 text-center" style="background-color: rgba(0,0,0,0.6); padding: 20px; border: 1px solid goldenrod; border-radius: 10px;">
            <livewire:chat />
        </div>
    </div>
</div>

</x-layout>