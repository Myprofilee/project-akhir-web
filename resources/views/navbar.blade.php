<!--Main Navigation-->
<header>

    <!-- Jumbotron -->
    <div class="p-3 text-center" style="background-color: #00043c">
      <div class="container">
        <div class="row">

          {{-- logo --}}
          <div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-3 mb-md-0">
            <a class="ms-md-2">
              <img src="{{ asset('images/logo dgn tulisan.png') }}" alt=""  height="50">
            </a>
          </div>

  
          <!-- Search elements -->
          <div class="col-md-4 mt-2">
            <h1 id="saldo" style="color:white;">Rp 0.</h1>
          </div>
          <!-- search elements -->
  
          <!-- Right elements -->
          <div class="col-md-4 d-flex justify-content-center justify-content-md-end align-items-center">
            <div class="d-flex">
              <!-- Cart -->
              {{-- <a class="text-reset me-3" href="#">
                <span><i class="fas fa-shopping-cart"></i></span>
                <span class="badge rounded-pill badge-notification bg-danger">1</span>
              </a> --}}
  
              <!-- Notification -->
              <div class="dropdown">
                {{-- <a data-mdb-dropdown-init class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                  role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-bell-fill"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Some news</a></li>
                  <li><a class="dropdown-item" href="#">Another news</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul> --}}
              </div>

              
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary justify-content-end" data-mdb-ripple-color="dark" type="button">
                Download app<i class="fas fa-download ms-2"></i>
              </button>
  
              {{-- <!-- User -->
              <div class="dropdown">
                <a data-mdb-dropdown-init class="text-reset dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                  id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                  <img src="{{ asset('images/logo.png') }}" class="rounded-circle" height="22"
                    alt="" loading="lazy" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink" id="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">My profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </div> --}}
            </div>
          </div>
          <!-- Right elements -->
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg border-bottom" data-bs-theme="dark" style="background-color: #2b0b70">
      
      <!-- Container wrapper -->
      <div class="container justify-content-end">
        <!-- Left links -->
        <div class="navbar-nav">
          <button class="navbar-toggler ml-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <div class="dropdown">
              <a class="nav-link dropsown-toggle" role="button" data-bs-toggle="dropdown">
                <span>Kategori</span>
              </a>
              <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">Arcade</button></li>
                <li><button class="dropdown-item" type="button">Loterry</button></li>
                <li><button class="dropdown-item" type="button">Sport Bet</button></li>
              </ul>
            </div>
            <li class="nav-item active">
              <a class="nav-link" href="#">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Promo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('hubungikami') }}">Hubungi Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
          </ul>
                  
        </div>

      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
     
  </header>
  <!--Main Navigation-->
  
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const balance = 10000;
    const formattedBalance = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(balance);
    document.getElementById("saldo").innerText = formattedBalance;
  });
</script>