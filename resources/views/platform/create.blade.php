<x-layout>
    <x-navbar></x-navbar>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center p-3">
                <h1 style="font-family: 'Cloister Black', serif; font-size: 3.5rem; color: #a97c50; text-shadow: 2px 2px 4px #3c2f1a; letter-spacing: 0.15em; text-transform: uppercase;">
                    INSERISCI UNA NUOVA PIATTAFORMA
                </h1>
            </div>
        </div>
    </div>

    <div class="container my-5 d-flex justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-12 col-md-8 col-lg-7 col-xl-6" style="max-width: 900px;">
                <form action="{{ route('platform.store') }}" method="POST" enctype="multipart/form-data"
                      style="background-color: rgba(30, 20, 5, 0.9); padding: 30px 25px; border: 3px solid #a97c50; border-radius: 20px; font-family: 'Uncial Antiqua', serif; color: #deb887; box-shadow: 0 0 25px #7a5c2d;">
                    @csrf

                    <div class="mb-4">
                        <label for="name" style="color: #ffcc66; font-weight: 700; font-size: 1.3rem;">Nome Piattaforma</label>
                        <input type="text" class="form-control" id="name" name="name"
                               style="background-color: #2f2b24; color: #f5deb3; border: 2px solid #a97c50; border-radius: 8px; font-family: 'Uncial Antiqua', serif;">
                    </div>

                    <div class="mb-4">
                        <label for="logo" style="color: #ffcc66; font-weight: 700; font-size: 1.3rem;">Logo</label>
                        <input type="file" class="form-control" id="logo" name="logo"
                               style="background-color: #2f2b24; color: #f5deb3; border: 2px solid #a97c50; border-radius: 8px; font-family: 'Uncial Antiqua', serif;">
                    </div>

                    <div class="mb-4">
                        <label for="description" style="color: #ffcc66; font-weight: 700; font-size: 1.3rem;">Descrizione</label>
                        <textarea name="description" class="form-control" id="description" rows="5"
                                  style="background-color: #2f2b24; color: #f5deb3; border: 2px solid #a97c50; border-radius: 8px; font-family: 'Uncial Antiqua', serif;"></textarea>
                    </div>

                    <button type="submit" class="btn btn-medieval"
                            style="font-family: 'Cloister Black', serif; font-size: 1.3rem; padding: 0.7rem 2.2rem;">
                        INSERISCI
                    </button>
                </form>
            </div>
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

        .btn-medieval:hover,
        .btn-medieval:focus {
            background-color: #866533;
            color: #e1cca3;
            box-shadow:
                inset 1px 1px 3px #a97c50,
                inset -1px -1px 3px #5c462a,
                4px 4px 0 #4b3a21;
            transform: translate(1px, 1px);
        }
    </style>
</x-layout>