<x-layout>
    <x-navbar />

    <style>
        body {
            background-image: url('/storage/background.png');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            font-family: 'Uncial Antiqua', cursive;
            color: #f5deb3;
        }

        .epitafio {
            background-color: rgba(0, 0, 0, 0.7);
            border: 2px solid darkred;
            border-radius: 15px;
            padding: 40px;
            max-width: 800px;
            margin: auto;
            text-align: center;
            margin-top: 80px;
        }

        .epitafio h1 {
            color: crimson;
            font-size: 3rem;
            text-shadow: 2px 2px 5px #000;
        }

        .epitafio p {
            font-size: 1.3rem;
            font-style: italic;
        }

        .citazione {
            margin-top: 30px;
            padding: 20px;
            border-left: 4px solid goldenrod;
            font-size: 1.2rem;
            color: #f0e68c;
            background-color: rgba(128, 0, 0, 0.2);
        }

        .btn-ombra {
            background-color: #4b0000;
            color: #fff8dc;
            border: 2px solid #8b0000;
            font-family: 'Uncial Antiqua', cursive;
            padding: 10px 20px;
            margin-top: 20px;
            transition: all 0.3s ease-in-out;
        }

        .btn-ombra:hover {
            background-color: #8b0000;
            transform: scale(1.05);
        }
    </style>

    <div class="epitafio">
        <h1>⚔️ Il Viaggio è Terminato ⚰️</h1>
        <p>
            Il tuo nome è stato cancellato dagli annali del Regno.<br>
            I tuoi tomi, le tue cronache, ogni runa da te tracciata… bruciati nel Fuoco dell’Oblio.<br><br>
            <em>Le stelle non cantano più il tuo nome, viandante.</em>
        </p>

        <div class="citazione">
            "Solo coloro che nulla lasciano dietro di sé possono sfuggire al giudizio del Tempo."
            <br><strong>— Detto dell'Ordine degli Scrivani Neri</strong>
        </div>

        <a href="{{ route('homepage') }}">
            <button class="btn btn-ombra mt-4">🏰 Torna al Castello</button>
        </a>
    </div>
</x-layout>