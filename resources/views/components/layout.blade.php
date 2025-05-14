<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booklog</title>
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
</body>
</html>