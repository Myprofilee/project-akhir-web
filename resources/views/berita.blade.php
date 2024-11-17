<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <title>Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Css_khusus.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body class="bg-pan-left">
    @include('navbar')

    <div class="container mt-3" style="border: 3px solid white">
      <h1 class="text-center mt-3">Berita</h1>

      <main class="container my-5 ">
        <div class="row">
          <!-- Berita Utama -->
          <div class="col-md-8">
            <div class="card mb-4">
              <img src="{{ asset('images/AdminDitangkap.png') }}" class="card-img-top" alt="Berita Utama">
              <div class="card-body">
                <h2 class="card-title">Berita Utama Hari Ini</h2>
                <p class="card-text">Berita sedih datang dari perusahaan kami, salah satu admin kami berinisial A ditangkap oleh polisi jumat ini. Andre Permata Bank diduga berhasil ditangkap karena ada seseorang yang membocorkan lokasinya</p>
                <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
    
          <!-- Berita Terbaru -->
          <div class="col-md-4">
            <h4>Berita Terbaru</h4>
            <ul class="list-group">
              <li class="list-group-item">
                <a href="#">Kami telah membuka situs baru</a>
                <small class="text-muted d-block">1 jam yang lalu</small>
              </li>
              <li class="list-group-item">
                <a href="#">Data penghasilan Urban Slot</a>
                <small class="text-muted d-block">2 jam yang lalu</small>
              </li>
              <li class="list-group-item">
                <a href="#">22 member kami menjadi kaya</a>
                <small class="text-muted d-block">3 jam yang lalu</small>
              </li>
              <li class="list-group-item">
                <a href="#">Dicari Admin baru</a>
                <small class="text-muted d-block">4 jam yang lalu</small>
              </li>
              <li class="list-group-item">
                <a href="#">Menurut riset web kami 100% Gacor</a>
                <small class="text-muted d-block">5 jam yang lalu</small>
              </li>
            </ul>
          </div>
        </div>
    
        <!-- Berita Lainnya -->
        <div class="row mt-4">
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://www.suarasurabaya.net/wp-content/uploads/2024/11/Judi-Online-840x493.webp" class="card-img-top" alt="Berita 1">
              <div class="card-body">
                <h5 class="card-title">Tersangka Judi Online Libatkan Kementerian Komdigi Bertambah Lagi Jadi 22 Orang</h5>
                <p class="card-text">Tersangka kasus judi online yang melibatkan oknum pegawai Kementerian Komunikasi dan Digital kini bertambah lagi tiga orang, sehingga total sudah ada 22 orang yang ditetapkan tersangka oleh Direktorat Reserse Kriminal Umum Polda Metro Jaya.</p>
                <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://media.suara.com/pictures/653x366/2024/11/06/31131-menteri-koperasi-budi-arie-setiadi-suaracomnovian.webp" class="card-img-top" alt="Berita 2">
              <div class="card-body">
                <h5 class="card-title">Istana Persilakan Polisi Periksa Eks Menkominfo Budi Arie di Kasus Judi Online Komdigi</h5>
                <p class="card-text"> Kepolisian mengusut eks Menteri Komunikasi dan Informatika (Menkominfo) Budi Arie Setiadi apabila terlibat judi online. Hal ini dia sampaikan saat menjawab wartawan soal peluang memeriksa pria yang kini menjabat sebagai Menteri Koperasi itu.</p>
                <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://media.suara.com/pictures/653x366/2024/10/21/48242-menteri-komunikasi-dan-digital-menkomdigi-meutya-hafid.webp" class="card-img-top" alt="Berita 3">
              <div class="card-body">
                <h5 class="card-title">Komdigi Gandeng Kejagung Buat Selesaikan Kasus Judi Online</h5>
                <p class="card-text">Jaksa Agung Sanitiar Burhanuddin mengaku berkomitmen dalam menangani kasus tersebut secara serius. Menurutnya, Kejagung akan bersinergi dengan Kemkomdigi untuk menyelesaikan proses hukum kasus judi online.</p>
                <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </main>

    </div>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>