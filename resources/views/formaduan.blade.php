<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <title>Daftar Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/Css_khusus.css') }}">

</head>
<body class="bg-pan-left">

    @include('navbar')

    <div class="container">
        <div class="row">
            <h2 class="text-center  mt-5 text-flicker-in-glow">Report Form</h2>
            <div class=" d-flex justify-content-center align-items-center">
                
                <div class="card my-5" style="width: 60rem">
                    {{-- sementara agar halaman home dpt diakses pake action dan get method --}}
                    <form class="card-body cardbody-color p-lg-5" action="{{ route('home') }}" method="GET">
                        
                        {{-- logo --}}
                        <div class="text-center">
                        <img src="{{ asset('images/logo dgn tulisan.png') }}" class="img-fluid  "
                            width="300px" alt="profile">
                        </div>
                        
                        {{-- input username --}}
                        <div class="mb-3 mt-5">
                            <input type="text" class="form-control" id="Username" placeholder="User Name" required>
                        </div>

                        {{-- Kepada siapa --}}
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Kepada">
                        </div>

                        {{-- Keluhan --}}
                        <div class="mb-3">
                            <textarea type="text" class="form-control" placeholder="Keluhan atau hal yang ingin disampaikan"></textarea>
                        </div>

                        {{-- tombol submit --}}
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-color px-5 w-100 text-light" style="background-color: #2b0b70" >Kirim ke Developer</button>
                        </div>

                        <div class="text-center mt-5">
                            <h1 class="fs-4">Atau Hubungi Kami Lewat</h1>
                        </div>

                        <div class="container mt-5">
                            <div class="row">
                                <!-- Card pertama -->
                                <div class="col-md-4 mb-3">
                                    <div class="card" style="width: 15rem">
                                        <!-- Card Image -->
                                        <div class="position-relative">
                                            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="Card image">
                                            <!-- Profile Image -->
                                            <img src="https://m.media-amazon.com/images/I/419FPIrdjzL._AC_SY580_.jpg" alt="profile-image" class="rounded-circle position-absolute top-100 start-50 translate-middle border border-white" style="width: 100px; height: 100px;">
                                        </div>
                                        <div class="card-body text-center pt-5">
                                            <h5 class="card-title mt-4">꧁⁣༒™Ꭾᴀᴛʀ𝕚ᴄᴋ༒꧂</h5>
                                            <div>
                                                <a href="#" class="me-2"><i class="bi bi-facebook"></i></a>
                                                <a href="#" class="me-2"><i class="bi bi-instagram"></i></a>
                                                <a href="#"><i class="bi bi-whatsapp"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card kedua -->
                                <div class="col-md-4 mb-3">
                                    <div class="card" style="width: 15rem">
                                        <div class="position-relative">
                                            <img src="https://asset-2.tstatic.net/batam/foto/bank/images/Permata-Bank.jpg" class="card-img-top" alt="Card image">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3EPHc7B4zu7bbTnJrTKelUCEXWTmn7EAJNQ&s" alt="profile-image" class="rounded-circle position-absolute top-100 start-50 translate-middle border border-white" style="width: 100px; height: 100px;">
                                        </div>
                                        <div class="card-body text-center pt-5">
                                            <h5 class="card-title mt-4">Andre Permata Bank</h5>
                                            <h5 class="card-title mt-4">jangan lupa ambil KTM nya</h5>
                                            <div>
                                                <a href="#" class="me-2"><i class="bi bi-facebook"></i></a>
                                                <a href="#" class="me-2"><i class="bi bi-instagram"></i></a>
                                                <a href="#"><i class="bi bi-whatsapp"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card ketiga -->
                                <div class="col-md-4 mb-3">
                                    <div class="card" style="width: 15rem">
                                        <div class="position-relative">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6IuSddbFEe8LmbdMiVfV6JR9CGVw5lkNZfw&s" class="card-img-top" alt="Card image">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2BLsQG142z_68vA5JyyBiinnhRMJxP6W6qA&s" alt="profile-image" class="rounded-circle position-absolute top-100 start-50 translate-middle border border-white" style="width: 100px; height: 100px;">
                                        </div>
                                        <div class="card-body text-center pt-5">
                                            <h5 class="card-title mt-4">Albertus Matthew</h5>
                                            <div>
                                                <a href="#" class="me-2"><i class="bi bi-facebook"></i></a>
                                                <a href="#" class="me-2"><i class="bi bi-instagram"></i></a>
                                                <a href="#"><i class="bi bi-whatsapp"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
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