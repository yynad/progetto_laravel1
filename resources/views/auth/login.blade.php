<x-layout>
  <x-navbar></x-navbar>

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <h1 class="text-center mb-4" style="
          font-family: 'Cloister Black', serif;
          color: #d4af37;
          text-shadow: 1px 1px 2px #4b3a16;">
          ACCEDI
        </h1>
        <form method="post" action="{{route('login')}}" class="p-4 border rounded shadow-sm" style="
          background: url('/images/parchment-texture.jpg') no-repeat center center;
          background-size: cover;
          border: 3px solid #a97c50;
          border-radius: 1rem;
          box-shadow: inset 0 0 20px #7a5c2d;
          font-family: 'Uncial Antiqua', serif;
          color: #deb887;">
          @csrf

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="
              font-family: 'Uncial Antiqua', serif;
              color: #a97c50;
              font-weight: 600;
              text-shadow: 1px 1px 0 #3c2f1a;">
              EMAIL
            </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" style="
              background-color: rgba(255, 248, 220, 0.8);
              border: 2px solid #a97c50;
              border-radius: 0.5rem;
              font-family: 'Uncial Antiqua', serif;
              color: #5c4411;">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="
              font-family: 'Uncial Antiqua', serif;
              color: #a97c50;
              font-weight: 600;
              text-shadow: 1px 1px 0 #3c2f1a;">
              PASSWORD
            </label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" style="
              background-color: rgba(255, 248, 220, 0.8);
              border: 2px solid #a97c50;
              border-radius: 0.5rem;
              font-family: 'Uncial Antiqua', serif;
              color: #5c4411;">
          </div>

          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" style="cursor: pointer;">
            <label class="form-check-label" for="exampleCheck1" style="
              font-family: 'Uncial Antiqua', serif;
              color: #a97c50;
              cursor: pointer;">
              RICORDATI
            </label>
          </div>

          <button type="submit" class="btn btn-custom" style="
            background-color: #a97c50;
            color: #f4d79c;
            font-family: 'Uncial Antiqua', serif;
            border: 2px solid #7a5c2d;
            text-transform: uppercase;
            box-shadow: 0 0 8px #7a5c2d;
            transition: background-color 0.3s ease;
            width: 100%;">
            ACCEDI
          </button>
        </form>

        <div class="text-center mt-3" style="
          font-family: 'Uncial Antiqua', serif;
          color: #a97c50;
          font-size: 1.1rem;">
          Non hai un account? 
          <a href="{{ route('register') }}" style="
            color: #a97c50; 
            text-decoration: underline;
            font-weight: 700;
            transition: color 0.3s ease;">
            Registrati
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