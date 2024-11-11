<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body style="background-color: #00043c">
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-light mt-5">Login Form</h2>
            <div class="card my-5">
                {{-- sementara agar halaman home dpt diakses pake action dan get method --}}
              <form class="card-body cardbody-color p-lg-5" action="{{ route('home') }}" method="GET">
                
                {{-- logo --}}
                <div class="text-center">
                  <img src="{{ asset('images/logo dgn tulisan.png') }}" class="img-fluid  my-3"
                    width="300px" alt="profile">
                </div>
                
                {{-- input username --}}
                <div class="mb-3">
                  <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                    placeholder="User Name">
                </div>
                {{-- input password --}}
                <div class="mb-3">
                  <input type="password" class="form-control" id="password" placeholder="password">
                </div>
                {{-- tombol login --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-color px-5 mb-5 w-100 text-light" style="background-color: #2b0b70" >Login</button>
                </div>
                <div id="emailHelp" class="form-text text-center mb-5 text-dark">
                  Tidak terdaftar? 
                  <a href="#" class="text-dark fw-bold"> Buat Akun</a>
                </div>
              </form>
            </div>
    
          </div>
        </div>
      </div>
    
    {{-- <script>
        public function login(Request $request)
        {
            // Logika autentikasi/login, tambahin ndre :v

            return redirect()->route('home'); // jika login berhasil redirect ke home
        }
    </script> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>