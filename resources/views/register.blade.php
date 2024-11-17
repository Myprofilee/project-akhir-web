<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <title>Daftar Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Css_khusus.css') }}">
</head>
<body class="bg-pan-left">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mt-5 text-flicker-in-glow">Registration Form</h2>
                <div class="card my-5" style="background-color: whitesmoke">
                    {{-- sementara agar halaman home dpt diakses pake action dan get method --}}
                    <form class="card-body cardbody-color p-lg-5" action="{{ route('home') }}" method="GET" id="registrationForm">
                        @csrf
                        
                        {{-- logo --}}
                        <div class="text-center">
                        <img src="{{ asset('images/logo dgn tulisan.png') }}" class="img-fluid  "
                            width="300px" alt="profile">
                        </div>
                        
                        {{-- input username --}}
                        <div class="mb-3 mt-5">
                            <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="User Name" required>
                        </div>

                        {{-- input password --}}
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" placeholder="password" required minlength="8" maxlength="15">
                        </div>

                        {{-- Konfirmasi password --}}
                        <div class="mb-3">
                            <input type="password" class="form-control" id="konfirmasi_password" placeholder="Konfirmasi password" required >
                        </div>

                        {{-- input Nomor tel --}}
                        <div class="mb-3">
                            <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="Nomor Telp" required minlength="8" maxlength="12">
                        </div>

                        {{-- input rekening bank --}}
                        <div class="mb-3">
                            <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="No Rekening Bank" required minlength="10" maxlength="16">
                        </div>

                        {{-- input nama rekening bank --}}
                        <div class="mb-3">
                            <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="Nama Rekening Bank" required>
                        </div>

                        {{-- input Email --}}
                        <div class="mb-3">
                            <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="Email @gmail.com">
                        </div>

                        {{-- tombol login --}}
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-color px-5 w-100 text-light" style="background-color: #2b0b70" >Buat Akun</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("registrationForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Mencegah form dari submit otomatis

            // Mengambil nilai dari form password
            var password = document.getElementById("password").value;
            // mengambil nilai dari form konfirmasi password
            var konfirmasiPassword = document.getElementById("konfirmasi_password").value;

            // Mengecek apakah password dan konfirmasi password cocok
            if (password !== konfirmasiPassword) 
            {
                alert("Password dan konfirmasi password tidak cocok!");
            } 
            else 
            {
                this.submit(); // Submit form jika password dan konfirmasi pass cocok
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>
</html>