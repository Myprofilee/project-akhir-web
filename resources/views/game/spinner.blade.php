<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <title>Spin wheel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Css_khusus.css') }}">
</head>
<body class="bg-pan-left">
    @include('navbar')

    <div class="container mt-4">
        <script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer></script>
        <div class="commonninja_component pid-ea916ea5-73b6-41d4-ba52-27b9c2d691e0"></div>

        <p class="mt-4">NOTE : Semua hadiah yang anda dapatkan hanya bersifat fiktif saja, fitur ini semata agar para user tidak stress ketika rungkat dan berujung pada bunuh diri. Udah miskin main slot !!!</p>
    </div>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>
</html>