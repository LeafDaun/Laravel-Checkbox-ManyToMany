<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Page..' }}</title>
    @vite(['resources/sass/app.scss','resources/js/app.js']) 
</head>
<body>
    
    <x-navbar/>

    
    <x-header>{{ $judul}}</x-header>
   

    <div class="container mt-4">
        {{ $slot }}
    </div>

</body>
</html>