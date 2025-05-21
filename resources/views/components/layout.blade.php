<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booklog</title>
    <link href="https://fonts.googleapis.com/css2?family=Uncial+Antiqua&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">
<audio id="fireSound" autoplay loop>
  <source src="{{ asset('fuoco.wav') }}" type="audio/wav">
  Il tuo browser non supporta l'elemento audio.
</audio>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        #background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        body {
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        .content {
            position: relative;
            z-index: 1;
            color: white;
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- video -->
    <video autoplay muted loop id="background-video">
    <source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
    <source src="{{ asset('videos/video.webm') }}" type="video/webm">
    Il tuo browser non supporta il video.
</video>

    <div class="min-vh-100">
        {{$slot}}
    </div>
    <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="deleteAccountLabel">Elimina Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
      </div>
      <div class="modal-body">
        Sei sicuro di voler eliminare il tuo account? Questa operazione è irreversibile.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form id="deleteAccountForm" method="POST" action="{{ route('account.delete') }}">
    @csrf
    <button type="submit" class="btn btn-danger">Elimina definitivamente</button>
</form>
      </div>
    </div>
  </div>
</div>
</body>

<script>
    const fireSound = document.getElementById('fireSound');
    fireSound.volume = 0.1; 
</script>
</html>