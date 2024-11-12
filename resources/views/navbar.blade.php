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
              <a class="nav-link" href="#">Hubungi Kami</a>
            </li>
          </ul>
                  
        </div>

      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
     
  
    {{-- <!-- Sidenav -->
    <div id="sidenav-1" data-mdb-sidenav-init class="sidenav" role="navigation" data-mdb-hidden="true" data-mdb-accordion="true">
      <ul class="sidenav-menu">
        <li class="sidenav-item">
          <a class="sidenav-link"><i class="fas fa-layer-group pe-3"></i><span>Categories</span></a>
          <ul class="sidenav-collapse show">
            <li class="sidenav-item">
              <a class="sidenav-link">Dresses</a>
            </li>
            <li class="sidenav-item">
              <a class="sidenav-link">Shirts</a>
            </li>
            <li class="sidenav-item">
              <a class="sidenav-link">Jeans</a>
            </li>
            <li class="sidenav-item">
              <a class="sidenav-link">Shoes</a>
            </li>
            <li class="sidenav-item">
              <a class="sidenav-link">Accessories</a>
            </li>
            <li class="sidenav-item">
              <a class="sidenav-link">Jewelry</a>
            </li>
          </ul>
        </li>
        <li class="sidenav-item">
          <a class="sidenav-link"><i class="fas fa-gem pe-3"></i><span>Brands</span></a>
          <ul class="sidenav-collapse">
            <li class="sidenav-item">
              <a class="sidenav-link">Brand 1</a>
            </li>
            <li class="sidenav-item">
              <a class="sidenav-link">Brand 2</a>
            </li>
            <li class="sidenav-item">
              <a class="sidenav-link">Brand 3</a>
            </li>
            <li class="sidenav-item">
              <a class="sidenav-link">Brand 4</a>
            </li>
          </ul>
        </li>
        <li class="sidenav-item">
          <a class="sidenav-link"><i class="fas fa-gift pe-3"></i><span>Discounts</span></a>
          <ul class="sidenav-collapse">
            <li class="sidenav-item">
              <a class="sidenav-link">-70%</a>
            </li>
            <li class="sidenav-item">
              <a class="sidenav-link">-50%</a>
            </li>
            <li class="sidenav-item">
              <a class="sidenav-link">Any</a>
            </li>
          </ul>
        </li>
        <li class="sidenav-item">
          <a class="sidenav-link"><i class="fas fa-fire-alt pe-3"></i><span>Popular</span></a>
          <ul class="sidenav-collapse">
            <li class="sidenav-item">
              <a class="sidenav-link">Jewelry</a>
            </li>
            <li class="sidenav-item">
              <a class="sidenav-link">Snickers</a>
            </li>
          </ul>
        </li>
        <li class="sidenav-item">
          <a class="sidenav-link"><i class="fab fa-hotjar pe-3"></i><span>Today's bestseller</span></a>
          <div class="card mx-3">
            <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/shoes%20(3).jpg"
                class="w-100" />
              <a href="#!">
                <div class="mask">
                  <div class="d-flex justify-content-start align-items-end h-100">
                    <h5><span class="badge bg-danger ms-2">-10%</span></h5>
                  </div>
                </div>
                <div class="hover-overlay">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </div>
              </a>
            </div>
            <div class="card-body">
              <a href="" class="text-reset">
                <p class="mb-2">Pink snickers</p>
              </a>
              <p class="mb-0">
                <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
              </p>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <!-- Sidenav --> --}}
  
    {{-- <!-- Background image -->
    <div id="intro"
         class="bg-image shadow-1-strong"
         style="background-image: url(https://mdbootstrap.com/img/new/slides/310.jpg); height: 500px;">
      <div class="mask text-white" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Autumn sale</h1>
            <h4 class="mb-4">Promotions up to 70%!</h4>
            <a data-mdb-ripple-init class="btn btn-outline-light btn-lg mb-3" href="#!" role="button">See the promotional offer
              <i class="fas fa-gem ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image --> --}}
  </header>
  <!--Main Navigation-->
  
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const balance = 10000;
    const formattedBalance = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(balance);
    document.getElementById("saldo").innerText = formattedBalance;
  });
</script>