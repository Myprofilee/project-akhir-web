<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <title>Sport-Bet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Css_khusus.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    {{-- Spot Bet Styling --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
      .match {
        margin-bottom: 15px;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;

      }
      .match h3 {
        margin: 0;
      }
      .match p {
        margin: 5px 0;
      }
    </style>
</head>
<body class="bg-pan-left">
    @include('navbar')

    <div class="container mb-4">
        <h1 class="text-white text-center mt-5 mb-5 text-flicker-in-glow">Sport Betting</h1>
        <img src="https://images.linkcdn.cloud/global/banner/sbobet.jpg" class="img-fluid mx-auto d-flex" alt="">
        {{-- tempat buat jadwal pertandingan --}}
        <div class="row mt-4">
            <div class="text-center d-flex justify-content-center " style="background-color: #00043c">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                      <h1 class="display-7">Jadwal Pertandingan</h1>
                    </div>
                    {{-- List Sport-Bet --}}
                    <div id="score-list">
                        Loading scores...
                      </div>
                </div>
            </div>
        </div>

        {{-- sistem betting --}}
        <div class="container mt-5 border border-3 p-3 rounded-4 mb-5" style="background-color: #00043c">
            <h2 class="mb-4 text-center">Betting</h2>
            <form>
                <!-- Pilih Perlombaan -->
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="competition" class="form-label">Pilih Perlombaan</label>
                        <select class="form-select" id="competition" required>
                            <option selected disabled>Pilih perlombaan</option>
                            <option value="liga-champions">Liga Champions</option>
                            <option value="afc">AFC</option>
                            <option value="liga-inggris">Liga Inggris</option>
                            <option value="serie-a">Serie A</option>
                        </select>
                    </div>
        
                    <!-- Pilih Tim -->
                    <div class="col-6 mb-3">
                        <label for="team" class="form-label">Pilih Tim</label>
                        <select class="form-select" id="team" required>
                            <option selected disabled>Pilih tim yang bertanding</option>
                            <option value="real-madrid">Real Madrid</option>
                            <option value="manchester-city">Manchester City</option>
                            <option value="bayern-munich">Bayern Munich</option>
                            <option value="paris-saint-germain">Paris Saint-Germain</option>
                        </select>
                    </div>
                </div>
                
                <!-- Input Skor -->
                <div class="mb-3">
                    <label for="score" class="form-label">Masukkan Skor</label>
                    <input type="number" class="form-control" id="score" placeholder="Masukkan skor" required>
                </div>
    
                <!-- Pilih Babak -->
                <div class="mb-3">
                    <label class="form-label me-3">Pilih Babak :</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="firstHalf">
                        <label class="form-check-label" for="firstHalf">Babak 1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="secondHalf">
                        <label class="form-check-label" for="secondHalf">Babak 2</label>
                    </div>
                </div>
    
                <!-- Input Nominal Uang -->
                <div class="mb-3">
                    <label for="money" class="form-label">Nominal Uang</label>
                    <input type="number" class="form-control" id="money" placeholder="Masukkan nominal uang" required>
                </div>

                {{-- range keuntungan --}}
                
                <label for="customRange1" class="form-label d-flex justify-content-between align-items-center">
                    <span>Range Keuntungan</span>
                    <span id="rangeValue">Rp 0</span>
                  </label>
                <input type="range" class="form-range" id="customRange1" min="0" max="1000000" step="1000">

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="container mb-4 border border-3 rounded-4" style="background-color: #00043c">
            <!-- Navigation Buttons -->
            <div class="d-flex justify-content-center gap-3 mb-4 p-3 border-bottom">
                <button class="btn btn-secondary">TARUHAN</button>
                <button class="btn btn-secondary">LAPORAN</button>
                <button class="btn btn-secondary">HASIL</button>
            </div>

            <div class="table-responsive">
                <h1 class="fs-5">Taruhan</h1>
                <table class="table table-bordered text-center table-primary">
                    <thead class="table-header">
                        <tr>
                            <th>TANGGAL</th>
                            <th>PERTANDINGAN</th>
                            <th>RINCIAN</th>
                            <th>JUMLAH</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-row">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-end">0.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
<<<<<<< HEAD

    <script>
    const range = document.getElementById('customRange1');
    const rangeValue = document.getElementById('rangeValue');

    function formatRupiah(angka) {
      return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR'
      }).format(angka);
    }

    rangeValue.textContent = formatRupiah(range.value);

    range.addEventListener('input', function() {
      rangeValue.textContent = formatRupiah(range.value);
    });
    </script>

    <script>
        // Setting Sport Bet API From football.api-sports.io
        var settings = {
          "url": "https://v3.football.api-sports.io/fixtures?live=all", 
          "method": "GET",
          "timeout": 0,
          "headers": {
            "x-rapidapi-key": "4e68115b540776889b262d93f088fe4c",
            "x-rapidapi-host": "v3.football.api-sports.io"
          },
        };
    
        // Menampilkan Hasil Dari API Diatas Memanggil menggunakan id `score-list`
        $.ajax(settings).done(function (response) {
          const matches = response.response;
          const scoreList = document.getElementById('score-list');
          scoreList.innerHTML = '';
    
          if (matches.length === 0) {
            scoreList.innerHTML = '<p>No live matches at the moment.</p>';
            return;
          }
    
          matches.forEach(match => {
            const homeTeam = match.teams.home.name;
            const awayTeam = match.teams.away.name;
            const homeScore = match.goals.home !== null ? match.goals.home : '-';
            const awayScore = match.goals.away !== null ? match.goals.away : '-';
            const league = match.league.name;
            const status = match.fixture.status.elapsed ? `${match.fixture.status.elapsed}'` : 'Not started';
    
            const matchDiv = document.createElement('div');
            matchDiv.className = 'match';
    
            // Output API Menggunakan content HTML
            matchDiv.innerHTML = `
             <h3><a href="/game/sport-bet/${match.fixture.id}">${homeTeam} vs ${awayTeam}</a></h3>
              <p>League: ${league}</p>
              <p>Score: ${homeScore} - ${awayScore}</p>
              <p>Status: ${status}</p>
            `;
    
            scoreList.appendChild(matchDiv);
          });
        }).fail(function (error) {
            //  Menampilkan Pesan ERROR saat load data api
          document.getElementById('score-list').innerText = 'Failed to load scores. Please try again.';
          console.error('Error:', error);
        });
      </script>
=======
>>>>>>> f5f90488971c6a3ec81fa5126d6ed4bc06446f1f
</body>
</html>