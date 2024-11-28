<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <title>Tarik Tunai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Css_khusus.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>
<body class="bg-pan-left">
    @include('navbar')

    <div class="container my-4">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-5">
          <div class="card rounded-3">
            <div class="card-body p-4">

              {{-- judul --}}
              <div class="text-center mb-4">
                <h3>Tarik Tunai</h3>
                <h6>Cash Withdrawal</h6>
              </div>

              {{-- kumpulan form --}}
              <form action="">
                <p class="fw-bold mb-4 pb-2">Pilih Bank/Dompet Digital:</p>
                
                {{-- kumpulan radio button --}}
                <div class="d-flex mb-4 pb-1 flex-wrap">
                  <div class="form-check me-4 d-flex align-items-center gap-2 my-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label border border-3 border-primary p-2 rounded" for="flexRadioDefault1">
                        <img src="https://statis-images.s3.ap-southeast-1.amazonaws.com/global/payment/V2/IDR/bank/bca.webp" alt="" width="90px" height="40px">
                    </label>
                  </div>
                  <div class="form-check me-4 d-flex align-items-center gap-2 my-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label border border-3 border-primary p-2 rounded" for="flexRadioDefault2">
                        <img src="https://statis-images.s3.ap-southeast-1.amazonaws.com/global/payment/V2/IDR/bank/bni.webp" alt="" width="90px" height="40px">
                    </label>
                  </div>
                  <div class="form-check me-4 d-flex align-items-center gap-2 my-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label border border-3 border-primary p-2 rounded" for="flexRadioDefault2">
                        <img src="https://statis-images.s3.ap-southeast-1.amazonaws.com/global/payment/V2/IDR/bank/bri.png" alt="" width="90px" height="40px">
                    </label>
                  </div>
                  <div class="form-check me-4 d-flex align-items-center gap-2 my-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label border border-3 border-primary p-2 rounded" for="flexRadioDefault1">
                        <img src="https://statis-images.s3.ap-southeast-1.amazonaws.com/global/payment/V2/IDR/epayment/gopay_color.webp" alt="" width="90px" height="40px">
                    </label>
                  </div>
                  <div class="form-check me-4 d-flex align-items-center gap-2 my-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label border border-3 border-primary p-2 rounded" for="flexRadioDefault2">
                        <img src="https://statis-images.s3.ap-southeast-1.amazonaws.com/global/payment/V2/IDR/epayment/dana.webp" alt="" width="90px" height="40px">
                    </label>
                  </div>
                  <div class="form-check me-4 d-flex align-items-center gap-2 my-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label border border-3 border-primary p-2 rounded" for="flexRadioDefault2">
                        <img src="https://statis-images.s3.ap-southeast-1.amazonaws.com/global/payment/V2/IDR/bank/mandiri_color.webp" alt="" width="90px" height="40px">
                    </label>
                  </div>
                </div>
    
                <p class="fw-bold mb-4">Masukkan nomor rekening:</p>
                
                {{-- form nomor rekening --}}
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="formControlLgXsd" class="form-control form-control-lg" placeholder="nomor rekening" required/>
                </div>
                
                <p class="fw-bold mb-4">Masukkan nama penarik:</p>

                {{-- form atas nama --}}
                <div data-mdb-input-init class="form-outline">
                  <input type="text" id="formControlLgXM" class="form-control form-control-lg" placeholder="atas nama"/>
                </div>

                {{-- kumpulan logo --}}
                <div class="col-5 my-4">
                  <img src="https://img.icons8.com/color/48/000000/visa.png"/>
                  <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png"/>
                  <img src="https://img.icons8.com/color/48/000000/maestro.png"/>
                </div>

                <p class="fw-bold ">Setiap transaksi/penarikan tunai diawasi oleh :</p>
                
                {{-- kumpulan logo part 2 --}}
                <div class="">
                  <img src="https://elibrary.ojk.go.id/OJK/assets/frontend/images/logo-ojk.png" width="100px" height="50px"/>
                  <img src="data:image/png;base64,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" width="200px" height="100px"/>
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/BPKP_Logo.png/270px-BPKP_Logo.png" width="100px" height="50px"/>
                </div>

                {{-- tombol tarik tunai --}}
                <button class="btn btn-success btn-lg btn-block w-100 mt-4">Tarik tunai</button>
              </form>
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