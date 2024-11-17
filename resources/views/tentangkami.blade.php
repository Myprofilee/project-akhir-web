<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <title>Tentang Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Css_khusus.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body class="bg-pan-left">
    @include('navbar')

      <!-- Company profile -->
    <section class=" p-5 text-center">
      <h1 class="text-flicker-in-glow mb-4">Tentang Kami</h1>
      <p class="lead">Perusahaan kami berdiri sejak tahun 2024 dan berfokus pada layanan digital untuk memenuhi kebutuhan pelanggan. Perusahaan kami saat ini memiliki 3 cabang dibidang yang berbeda yaitu e-commerce dengan Urban Store, hiburan Urban Games, dan 
        dibidang ekonomi Urban Slot. Salah satu cabang kami yaitu Urban Slot berada dibawah naungan Urban Corporation yang terletak di Kota Surabaya, saat ini pengguna layanan kami telah mencapai 10.000 orang dan terus bertambah setiap tahunnya, oleh karena 
        itu Kami berkomitmen untuk memberikan layanan berkualitas dengan tim yang berpengalaman. 
      </p>

      <img class="mt-3" src="https://ikado.ac.id/berkas_berita/a7bc5d93-6763-41de-bd26-65d09ed1e289.jpg" alt="" width="600px" height="300px">
    </section>

    <!-- visi misi -->
    <section class="container my-5">
      <div class="row">
        <div class="col-md-6">
          <h2>Visi Kami</h2>
          <p>Menjadi pemimpin di industri Judi Online dengan inovasi yang berkelanjutan dan layanan berkualitas tinggi serta menjadi platform Slot terdepan yang menyenangkan, Gacor, dan Anti rungkat, yang memberikan pengalaman seru dan kepuasan kepada pemain di seluruh dunia..</p>
        </div>
        <div class="col-md-6">
          <h2>Misi Kami</h2>
          <ul>
            <li>Mengutamakan keamanan dan keadilan dalam setiap undian dan transaksi.</li>
            <li>Membangun komunitas pengguna yang aktif dan terlibat melalui event, kolaborasi, dan interaksi berkala.</li>
            <li>Memberikan dukungan pelanggan yang cepat dan responsif untuk memastikan kepuasan dan kenyamanan pengguna dalam setiap pengalaman bermain.</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Vendors -->
    <section class=" py-5">
      <div class="container text-center">
        <h2 class="mb-5">Supported By</h2>
        <div class="row">
          <div class="col-md-3">
            <img src="data:image/png;base64,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" alt="Vendor 1" class="img-fluid mb-2">
          </div>
          <div class="col-md-3 my-auto">
            <img src="https://ikado.ac.id/images/LogoIKADO3.png" alt="Vendor 2" class="img-fluid mb-2">
          </div>
          <div class="col-md-3">
            <img src="https://academy.alterra.id/blog/wp-content/uploads/2022/03/Laravel.png" alt="Vendor 3" class="img-fluid mb-2">
          </div>
          <div class="col-md-3">
            <img src="https://media.licdn.com/dms/image/D4D12AQFOc8cljr4dsQ/article-cover_image-shrink_600_2000/0/1690532289682?e=2147483647&v=beta&t=WUYaiNudn4UOf8oFX1lk7dZIX-xZfjkNGuh8e0etGNY" alt="Vendor 4" class="img-fluid mb-2">
          </div>
        </div>
      </div>
    </section>

    <!-- Products -->
    <section class="container my-4">
      <h2 class="text-center mb-4">Produk Kami</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="https://images.linkcdn.cloud/global/banner/paramatic_20play.jpg" class="card-img-top" alt="Produk 1">
            <div class="card-body">
              <h5 class="card-title">Slot Gacor</h5>
              {{-- <p class="card-text">Deskripsi singkat produk 1 yang menjelaskan manfaat dan fitur produk ini.</p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="https://images.linkcdn.cloud/global/banner/afb88.jpg" class="card-img-top" alt="Produk 2">
            <div class="card-body">
              <h5 class="card-title">Judi Bola</h5>
              {{-- <p class="card-text">Deskripsi singkat produk 2 yang menjelaskan manfaat dan fitur produk ini.</p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="https://images.linkcdn.cloud/global/banner/playstar.jpg" class="card-img-top" alt="Produk 3">
            <div class="card-body">
              <h5 class="card-title">Game Gacha</h5>
              {{-- <p class="card-text">Deskripsi singkat produk 3 yang menjelaskan manfaat dan fitur produk ini.</p> --}}
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section>
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8 text-center">
          <h3 class="mb-4">Kata Pelanggan</h3>
          <p class="mb-4 pb-2 mb-md-5 pb-md-0">
            Berikut adalah testimoni dari pelanggan kami yang rata-rata merasa puas akan layanan dan produk yang kami berikan.
          </p>
        </div>
      </div>
    
      <div class="row text-center">
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/EVANXSTORM.png') }}" class="rounded-circle shadow-1-strong" width="150" height="150">
          </div>
          <h5 class="mb-3">EVANXSTORM</h5>
          <h6 class="text-primary mb-3">Game Developer</h6>
          <p class="px-xl-3">
            <i class="pe-2"></i>Saya sudah 10 tahun menggunakan web ini untuk bermain Judol, dan saya selalu Gacor parah terima kasih Urban slot
          </p>
          <ul class="list-unstyled d-flex justify-content-center mb-0">
            <li>
              <i class="bi bi-star text-warning"></i>
            </li>
            <li>
              <i class="bi bi-star text-warning"></i>
            </li>
            <li>
              <i class="bi bi-star text-warning"></i>
            </li>
            <li>
              <i class="bi bi-star text-warning"></i>
            </li>
            <li>
              <i class="bi bi-star text-warning"></i>
            </li>
          </ul>
        </div>
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('images/Ivan.png') }}"
              class="rounded-circle shadow-1-strong" width="150" height="150" />
          </div>
          <h5 class="mb-3">Ivan Viktor</h5>
          <h6 class="text-primary mb-3">Mahasiswa</h6>
          <p class="px-xl-3">
            <i class=" pe-2"></i>Saya telah mengalami rungkat sebanyak 10.000.000, namun saya tetap bermain dan pantang menyerah sehingga saya mendapat 1.000.000. Salam Gacor !
          </p>
          <ul class="list-unstyled d-flex justify-content-center mb-0">
            <li>
              <i class="bi bi-star text-warning"></i>
            </li>
            <li>
              <i class="bi bi-star text-warning"></i>
            </li>
            <li>
              <i class="bi bi-star text-warning"></i>
            </li>
            <li>
              <i class="bi bi-star text-warning"></i>
            </li>
            <li>
              <i class="bi bi-star "></i>
            </li>
          </ul>
        </div>
        <div class="col-md-4 mb-0">
          <div class="d-flex justify-content-center mb-4">
            <img src="https://d22gwcrfo2de51.cloudfront.net/wp-content/uploads/2022/07/BUDI_ARIE_SETIADI_DI_ISTANA_NEGARA-502x800.jpg"
              class="rounded-circle shadow-1-strong" width="150" height="150" />
          </div>
          <h5 class="mb-3">Budie Arie Setiadi</h5>
          <h6 class="text-primary mb-3">Ketua Kominfo</h6>
          <p class="px-xl-3">
            <i class="pe-2"></i>Saya janji akan memberantas judi online dan memperkuat keamanan cyber, tapi boong wkwkwkkwk. Salam Rungkat !!!
          </p>
          <ul class="list-unstyled d-flex justify-content-center mb-0">
            <li>
              <i class="bi bi-star text-warning"></i>
            </li>
            <li>
              <i class="bi bi-star text-warning"></i>
            </li>
            <li>
              <i class="bi bi-star text-warning"></i>
            </li>
            <li>
              <i class="bi bi-star text-warning"></i>
            </li>
            <li>
              <i class="bi bi-star text-warning"></i>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Team Profiles -->
    <section class="container my-5">
      <h2 class="text-center mb-4">Tim Kami</h2>
      <div class="row">
        <div class="col-md-3 text-center">
          <img src="{{ asset('images/Albert.png') }}" class="rounded-circle mb-2" alt="Profil Pegawai 1">
          <h5>Albertus Matthew</h5>
          <p>Back End</p>
        </div>
        <div class="col-md-3 text-center">
          <img src="{{ asset('images/Patrick.png') }}" class="rounded-circle mb-2" alt="Profil Pegawai 2">
          <h5>Christian Patrick</h5>
          <p>Front End</p>
        </div>
        <div class="col-md-3 text-center">
          <img src="{{ asset('images/Andre.png') }}" class="rounded-circle mb-2" alt="Profil Pegawai 3">
          <h5>Andre Permana Putra</h5>
          <p>Full Stack</p>
        </div>
        <div class="col-md-3 text-center">
          <img src="https://media.licdn.com/dms/image/C5103AQFzpCdv0798bw/profile-displayphoto-shrink_200_200/0/1554798091389?e=2147483647&v=beta&t=gO0A3r4Q9GdmhAhpc7DL74mzK9-IjV9Q7jtI0XJiAkM" class="rounded-circle mb-2" alt="Profil Pegawai 4">
          <h5>David Saputra Octadianto Soedargo</h5>
          <p>Pembimbing Proyek web</p>
        </div>
      </div>
    </section>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>