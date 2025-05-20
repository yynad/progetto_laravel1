<x-layout>
  <x-navbar></x-navbar>

  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-12 text-center">
        <h1 class="mb-4" style="
          font-family: 'Cloister Black', serif;
          color: #d4af37;
          text-shadow: 1px 1px 2px #4b3a16;">
          REGISTRATI
        </h1>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <form method="POST" action="{{ route('register') }}" class="p-4 border rounded shadow-sm" style="
          background: url('/images/parchment-texture.jpg') no-repeat center center;
          background-size: cover;
          border: 3px solid #a97c50;
          border-radius: 1rem;
          box-shadow: inset 0 0 20px #7a5c2d;
          font-family: 'Uncial Antiqua', serif;
          color: #deb887;">
          @csrf

          <div class="mb-3">
            <label for="name" class="form-label" style="
              font-family: 'Uncial Antiqua', serif;
              color: #a97c50;
              font-weight: 600;
              text-shadow: 1px 1px 0 #3c2f1a;">
              USERNAME
            </label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
              class="form-control @error('name') is-invalid @enderror" style="
                background-color: rgba(255, 248, 220, 0.8);
                border: 2px solid #a97c50;
                border-radius: 0.5rem;
                font-family: 'Uncial Antiqua', serif;
                color: #5c4411;">
            @error('name')
              <span class="invalid-feedback d-block" role="alert" style="font-family: 'Uncial Antiqua', serif;">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="email" class="form-label" style="
              font-family: 'Uncial Antiqua', serif;
              color: #a97c50;
              font-weight: 600;
              text-shadow: 1px 1px 0 #3c2f1a;">
              EMAIL
            </label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
              class="form-control @error('email') is-invalid @enderror" style="
                background-color: rgba(255, 248, 220, 0.8);
                border: 2px solid #a97c50;
                border-radius: 0.5rem;
                font-family: 'Uncial Antiqua', serif;
                color: #5c4411;">
            @error('email')
              <span class="invalid-feedback d-block" role="alert" style="font-family: 'Uncial Antiqua', serif;">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label" style="
              font-family: 'Uncial Antiqua', serif;
              color: #a97c50;
              font-weight: 600;
              text-shadow: 1px 1px 0 #3c2f1a;">
              PASSWORD
            </label>
            <input id="password" type="password" name="password" required
              class="form-control @error('password') is-invalid @enderror" style="
                background-color: rgba(255, 248, 220, 0.8);
                border: 2px solid #a97c50;
                border-radius: 0.5rem;
                font-family: 'Uncial Antiqua', serif;
                color: #5c4411;">
            @error('password')
              <span class="invalid-feedback d-block" role="alert" style="font-family: 'Uncial Antiqua', serif;">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password_confirmation" class="form-label" style="
              font-family: 'Uncial Antiqua', serif;
              color: #a97c50;
              font-weight: 600;
              text-shadow: 1px 1px 0 #3c2f1a;">
              CONFERMA PASSWORD
            </label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
              class="form-control" style="
                background-color: rgba(255, 248, 220, 0.8);
                border: 2px solid #a97c50;
                border-radius: 0.5rem;
                font-family: 'Uncial Antiqua', serif;
                color: #5c4411;">
          </div>

          <div>
            <button type="submit" class="btn btn-custom w-100" style="
              background-color: #a97c50;
              color: #f4d79c;
              font-family: 'Uncial Antiqua', serif;
              border: 2px solid #7a5c2d;
              text-transform: uppercase;
              box-shadow: 0 0 8px #7a5c2d;
              transition: background-color 0.3s ease;">
              REGISTRATI
            </button>
          </div>
        </form>

        <div class="text-center mt-3" style="
          font-family: 'Uncial Antiqua', serif;
          color: #a97c50;
          font-size: 1.1rem;">
          Hai già un account? 
          <a href="{{ route('login') }}" style="
            color: #a97c50; 
            text-decoration: underline;
            font-weight: 700;
            transition: color 0.3s ease;">
            Accedi
          </a>
        </div>
      </div>
    </div>
  </div>

  <style>
    @font-face {
      font-family: 'Cloister Black';
      src: url('/fonts/CloisterBlack.ttf') format('truetype');
    }
    @import url('https://fonts.googleapis.com/css2?family=Uncial+Antiqua&display=swap');

    .form-control:focus {
      background-color: #fff8dc !important;
      border-color: #7a5c2d !important;
      box-shadow: 0 0 8px #7a5c2d !important;
      color: #5c4411 !important;
      font-weight: 700;
    }

    .btn-custom:hover {
      background-color: #7a5c2d !important;
      color: #deb887 !important;
      border-color: #a97c50 !important;
      box-shadow: 0 0 12px #a97c50 !important;
    }

    a:hover {
      color: #deb887 !important;
      text-decoration: none;
    }
  </style>
</x-layout>