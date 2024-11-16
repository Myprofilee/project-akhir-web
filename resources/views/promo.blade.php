<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <title>Promo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Css_khusus.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body class="bg-pan-left">
    @include('navbar')

    <div class="container">
        <h1 class="text-white text-center mt-5 mb-5 text-flicker-in-glow">Promo Hari Ini</h1>
        
        <div class="row">
            <!-- the cols in this div change the number of cards per row depending on screen size and the mb-4 adds space below cards if they spill over into the next row-->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
              <div class="card">
                <img class="card-img-top" src="{{ asset('images/1.png') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Bagi seluruh pengguna Urban Slot, kami memberikan gratis biaya admin untuk game kita dalam rangka opening web kami.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
              <div class="card">
                <img class="card-img-top" src="{{ asset('images/2.png') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">"Saksikan Live Streaming Sepak Bola Terbaik! Jangan lewatkan aksi seru dari tim favorit Anda di setiap pertandingan besar. Dukung tim jagoan Anda dengan betting sebanyak-banyaknya"</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
              <div class="card">
                <img class="card-img-top" src="{{ asset('images/3.png') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Urban slot x GO-Pay ! kami telah bekerjasama dengan pihak gopay untuk memberika cashback bagi mereka yang mengisi saldo dengan GO-Pay</p>
                </div>
              </div>
            </div>
          </div>
    </div>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>