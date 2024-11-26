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
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <style>
<<<<<<< HEAD

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .banner img {
            width: 100%;
            border-radius: 10px;
        }

        .grid-container {
            position: relative;
            margin: 20px 0;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
        }

        .selector {
            width: 3px;
            background: white;
            left: 50%;
            height: 75px;
            transform: translate(-50%);
            position: absolute;
            z-index: 999;
        }

        .box {
            padding: 20px 0;
            font-size: 1.5rem;
            font-weight: bold;
            background-color: #333;
            border-radius: 10px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 2;
        }

        .box.red {
            background-color: #e74c3c;
        }

        .box.green {
            background-color: #2ecc71;
        }

        button {
            background-color: #4caf50;
            color: white;
=======
        .open-button {
            padding: 10px 20px;
            background-color: #2b2b70;
            color: #fff;
>>>>>>> f5f90488971c6a3ec81fa5126d6ed4bc06446f1f
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            color: yellow;
            font-size: 1rem;
            margin-top: 20px;
        }
/* 
        .roulette-wrapper{
        position:relative;
        display:flex;
        justify-content:center;
        width:100%;
        margin:0 auto;
        overflow:hidden;
        } */

        .selector{
            width:3px;
            background:grey;
            left:50%;
            height:155px;
            transform:translate(-50%);
            position:absolute;
            z-index:2;
        }

        .roulette-wrapper .wheel{
        display:flex;
        }

        .roulette-wrapper .wheel .kolom{
        display:flex;
        }

        .roulette-wrapper .wheel .kolom .card{
        height:150px;
        width:200px;
        margin:3px;
        border-radius:8px;
        border-bottom:3px solid rgba(0,0,0,0.2);
        display:flex;
        align-items:center;
        justify-content:center;
        color:white;
        font-size:1.5em;
        }

        .roulette-wrapper .wheel .kolom .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
        }

        .card.red{
        background:#F95146;
        }

        .card.black{
        background:#2D3035;
        }

        .card.green{
        background:#00C74D;
        }

        *{
        box-sizing:border-box;
        }
    </style>
</head>
<body class="bg-pan-left">
    @include('navbar')

    <div class="container">
        <h1 class="mt-5 mb-5 text-flicker-in-glow text-center">Gambling Games</h1>
        <img class="mx-auto d-flex" src="https://images.linkcdn.cloud/global/banner/nex.jpg" alt="">

<<<<<<< HEAD
        

        <div class="container mx-auto text-center mt-5">
            <div class="selector"></div>
            <div class="grid-container">
                <div class="grid">
                    <div class="box red">3</div>
                    <div class="box">12</div>
                    <div class="box red">4</div>
                    <div class="box green">0</div>
                    <div class="box">11</div>
                    <div class="box red">5</div>
                    <div class="box">10</div>
                </div>
                <div class="middle-line"></div>
            </div>
            <button id="spinBtn">Spin</button>
            <p>Press "Open Box" to try your luck!</p>
=======
        <div class="container mx-auto text-center mt-5">
            <div class="roulette-wrapper p-relative d-flex justify-content-center w-100 overflow-hidden mx-auto" >
                {{-- garis tengah --}}
                <div class="selector"></div>
                <div class="wheel"></div>
            </div>
            <div class="mt-4">
                <button class="open-button">Spin</button>
                {{-- <button class="open-button" onclick="resetWheel()">Reset</button> --}}
                <div class="fs-4 fw-bold mt-3" style="color: #f5c518" id="result">Press "Open Box" to try your luck!</div>
            </div>
>>>>>>> f5f90488971c6a3ec81fa5126d6ed4bc06446f1f
        </div>
    </div>

    @include('footer')

    <script>
<<<<<<< HEAD
        const spinBtn = document.getElementById("spinBtn");
        const boxes = document.querySelectorAll(".box");

        spinBtn.addEventListener("click", () => {
            boxes.forEach((box) => {
                const randomNumber = Math.floor(Math.random() * 20);
                box.textContent = randomNumber;

                if (randomNumber % 2 === 0) {
                    box.className = "box green";
                } else if (randomNumber < 5) {
                    box.className = "box red"; 
                } else {
                    box.className = "box";
                }
            });

            const middleBox = boxes[Math.floor(boxes.length / 2)];
            const middleBoxValue = middleBox.textContent;

            setTimeout(() => {
                alert(`Congratulations! You won: ${middleBoxValue}`);
            }, 500);
        });
=======
        $(document).ready(function() {
            //setup multiple rows of colours, can also add and remove while spinning but overall this is easier.
            initWheel();
        
            $('button').on('click', function(){
                var outcome = parseInt($('input').val());
                spinWheel(outcome);
            });
        });

        function initWheel(){
            var $wheel = $('.roulette-wrapper .wheel'),
                row = "";
            
                row += "<div class='kolom'>";
                row += "  <div class='card red'>1<\/div>";
                row += "  <div class='card black'>14<\/div>";
                row += "  <div class='card red'>2<\/div>";
                row += "  <div class='card black'>13<\/div>";
                row += "  <div class='card red'>3<\/div>";
                row += "  <div class='card black'>12<\/div>";
                row += "  <div class='card red'>4<\/div>";
                row += "  <div class='card green'>0<\/div>";
                row += "  <div class='card black'>11<\/div>";
                row += "  <div class='card red'>5<\/div>";
                row += "  <div class='card black'>10<\/div>";
                row += "  <div class='card red'>6<\/div>";
                row += "  <div class='card black'>9<\/div>";
                row += "  <div class='card red'>7<\/div>";
                row += "  <div class='card black'>8<\/div>";
                row += "<\/div>";
        
            for(var x = 0; x < 29; x++){
                $wheel.append(row);
            }
        }

        function spinWheel(roll) {
            var $wheel = $('.roulette-wrapper .wheel'),
                order = [0, 11, 5, 10, 6, 9, 7, 8, 1, 14, 2, 13, 3, 12, 4],
                position = order.indexOf(roll);
                        
            // Tentukan posisi tujuan dimana roda akan berhenti
            var rows = 12,
                card = 75 + 3 * 2,
                landingPosition = (rows * 15 * card) + (position * card);
            
            // Mengacak posisi untuk memberikan efek acak pada roda
            var randomize = Math.floor(Math.random() * 75) - (75 / 2);
            landingPosition = landingPosition + randomize;
            
            // Tentukan efek kecepatan dengan cubic-bezier
            var object = {
                x: Math.floor(Math.random() * 50) / 100,
                y: Math.floor(Math.random() * 20) / 100
            };
            
            // Berikan animasi baru untuk spin
            setTimeout(function() {
                $wheel.css({
                    'transition': 'transform 6s cubic-bezier(0,' + object.x + ',' + object.y + ',1)', // Setel kembali transisi
                    'transform': 'translate3d(-' + landingPosition + 'px, 0px, 0px)' // Terapkan posisi baru
                });
            }, 50); // Delay sedikit sebelum menerapkan animasi
        }

        // // Fungsi untuk mereset posisi roda
        // function resetWheel() {
        //     var $wheel = $('.roulette-wrapper .wheel');

        //     // Reset posisi roda dan animasi
        //     $wheel.css({
        //         'transition': 'none', // Menghapus animasi transisi
        //         'transform': 'translate3d(0, 0, 0)' // Kembalikan posisi roda ke posisi awal
        //     });

        //     // Membutuhkan sedikit waktu untuk merender ulang
        //     setTimeout(function() {
        //         // Mengaktifkan animasi kembali jika dibutuhkan untuk spin berikutnya
        //         $wheel.css('transition', 'transform 6s cubic-bezier(0,0,0,1)');
        //     }, 50);
        // }

>>>>>>> f5f90488971c6a3ec81fa5126d6ed4bc06446f1f
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>
