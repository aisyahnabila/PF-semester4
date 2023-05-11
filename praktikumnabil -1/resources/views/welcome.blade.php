<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome-Bootstrap</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <h1>Build fast, responsif sites with bootstrap</h1>
    <div class="container m-5">
        {{-- cara mereferensikan gambar didalam file blade dengan menggunakan pendekatan Vite --}}
        <img class="img-main"src={{ Vite::asset('resources/images/main.svg') }} alt="img-first">
        <img class="img-main"src={{ Vite::asset('resources/images/bs-themes.png') }} alt="img-two">

    </div>
    @vite('resources/images/main.svg')
</body>

</html>
