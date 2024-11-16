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
    <style>
        /* css untuk menggerakan item nya, dengan transform translate x */
        .items {
            display: flex;
            /* transform: translateX(1); */
            transition: transform 1s cubic-bezier(0.550, 0.085, 0.680, 0.530);
            white-space: nowrap;
        }

        .open-button {
            padding: 10px 20px;
            background-color: #2b2b70;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 18px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .open-button:hover {
            background-color: #4444aa;
        }
    </style>
</head>
<body class="bg-pan-left">
    @include('navbar')

    <div class="container ">
        <h1 class="mt-5 mb-5 text-flicker-in-glow text-center">Gambling Games</h1>

        <img class="mx-auto d-flex" src="https://images.linkcdn.cloud/global/banner/nex.jpg" alt="">

        <div class="container mx-auto text-center mt-5">
            <div class="mx-auto bg-black mb-3 d-flex align-items-center justify-content-center overflow-hidden position-relative border border-3" style="height: 150px" >
                <div class="items" id="items">
                    <!-- item gacha -->
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">Knife</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">AK-47</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">M4A1</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">Pistol</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">AWP</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">Sniper</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">Armor</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">Grenade</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">Galil</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">M249</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">RPD</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">MK-2</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">Stun</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">Smoke</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">Karambit</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">Butterfly</div>
                    <div class="item ms-1 d-flex justify-content-center align-items-center fs-3 text-center text-dark rounded" style="width: 100px; height: 100px; background-color: #f5c518;">Defuse</div>

                </div>
            </div>
            <button class="open-button" onclick="openBox()">Open Box</button>
            <div class="fs-4 fw-bold mt-3" style="color: #f5c518" id="result">Press "Open Box" to try your luck!</div>
        </div>
    </div>

    @include('footer')

    <script>
        //berfungsi untuk menggandakan item di dalam items
        document.addEventListener("DOMContentLoaded", function() {
            const itemsContainer = document.getElementById("items");
            const items = itemsContainer.innerHTML; //menyimpan konten html
            itemsContainer.innerHTML += items ;  // code duplikasinya
        });

        function openBox() {
            const itemsContainer = document.getElementById("items");
            const resultDisplay = document.getElementById("result");

            const totalItems = document.querySelectorAll(".item").length / 2; // menghitung total jumlah item asli
            const randomIndex = Math.floor(Math.random() * totalItems); 
            const offset = randomIndex * -80;

            itemsContainer.style.transition = "transform 1s ease-in-out"; //mengatur kecepatan geser
            itemsContainer.style.transform = `translateX(${offset}px)`; //menggeser item sebanyak offsetnya

            //fungsi untuk menampilkan hasil
            setTimeout(() => {
                const selectedItem = document.querySelectorAll(".item")[randomIndex].textContent; //mengambil value dari item yg terpilih secara acak
                resultDisplay.textContent = `You got: ${selectedItem}`;
                itemsContainer.style.transition = "none"; // Disable transisi
                itemsContainer.style.transform = "translateX(0)"; // Reset posisi
            }, 1000);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>