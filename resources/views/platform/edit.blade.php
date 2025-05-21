<x-layout>
    <x-navbar></x-navbar>

    <div class="container my-5" style="
        font-family: 'Cloister Black', serif;
        color: #d9c29d;
        background: url('/images/parchment-texture.jpg') no-repeat center center;
        background-size: cover;
        padding: 2rem;
        box-shadow: inset 0 0 25px #7a5c2d;
    ">
        <div class="row">
            <div class="col-12 text-center mb-4" style="
                background-color: rgba(30, 20, 5, 0.85);
                border: 3px solid #a97c50;
                box-shadow: inset 0 0 15px #7a5c2d;
                border-radius: 15px;
                padding: 1rem;
            ">
                <h1 style="
                    font-weight: 900;
                    font-size: 3rem;
                    letter-spacing: 0.15em;
                    text-transform: uppercase;
                    color: #deb887;
                    text-shadow: 1px 1px 2px #3c2f1a;
                ">
                    Modifica Piattaforma
                </h1>
            </div>
        </div>

        @if ($errors->any())
        <div style="background-color: rgba(128, 0, 0, 0.3); border: 2px solid darkred; color: crimson; padding: 10px; max-width: 600px; margin: 0 auto 20px auto; font-family: 'Uncial Antiqua', serif;">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('platform.update', $platform) }}" method="POST" enctype="multipart/form-data" style="
            background-color: rgba(30, 20, 5, 0.85);
            border: 3px solid #a97c50;
            box-shadow: inset 0 0 15px #7a5c2d;
            border-radius: 15px;
            padding: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            font-family: 'Uncial Antiqua', serif;
            color: #deb887;
        ">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" style="color: #ffcc66; font-weight: 700; font-size: 1.3rem;">Nome Piattaforma</label>
                <input type="text" name="name" id="name" value="{{ old('name', $platform->name) }}" required
                    style="
                        width: 100%;
                        padding: 0.5rem;
                        border-radius: 8px;
                        border: 2px solid #a97c50;
                        background-color: #2f2b24;
                        color: #f5deb3;
                        font-family: 'Uncial Antiqua', serif;
                        font-size: 1.1rem;
                    ">
                @error('name')
                    <div style="color: #f28c28; margin-top: 0.25rem;">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" style="color: #ffcc66; font-weight: 700; font-size: 1.3rem;">Descrizione</label>
                <textarea name="description" id="description" rows="5" required
                    style="
                        width: 100%;
                        padding: 0.5rem;
                        border-radius: 8px;
                        border: 2px solid #a97c50;
                        background-color: #2f2b24;
                        color: #f5deb3;
                        font-family: 'Uncial Antiqua', serif;
                        font-size: 1.1rem;
                        font-style: italic;
                    ">{{ old('description', $platform->description) }}</textarea>
                @error('description')
                    <div style="color: #f28c28; margin-top: 0.25rem;">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="logo" style="color: #ffcc66; font-weight: 700; font-size: 1.3rem;">Logo (immagine)</label>
                <input type="file" name="logo" id="logo" accept="image/*" 
                    style="background-color: #2f2b24; color: #f5deb3; border: 2px solid #a97c50; border-radius: 8px; font-family: 'Uncial Antiqua', serif;">
                @if($platform->logo)
                    <div class="mt-2" style="color: #f5deb3;">
                        Logo attuale:
                        <img src="{{ Storage::url($platform->logo) }}" alt="Logo piattaforma" style="max-height: 100px; margin-top: 0.5rem; border: 2px solid #a97c50; border-radius: 8px;">
                    </div>
                @endif
                @error('logo')
                    <div style="color: #f28c28; margin-top: 0.25rem;">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="btn-medieval" style="padding: 0.8rem 2rem; font-size: 1.2rem; font-family: 'Cloister Black', serif;">
                    Salva Modifiche
                </button>
                <a href="{{ route('platform.index') }}" class="btn-medieval" style="background-color: #7a5c2d; margin-left: 1rem; font-family: 'Cloister Black', serif;">
                    Annulla
                </a>
            </div>
        </form>
    </div>

    <style>
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
            display: inline-block;
            text-decoration: none;
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
            text-decoration: none;
        }
    </style>
</x-layout>