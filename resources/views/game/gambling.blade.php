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
    <style>

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }

        .wheel {
            width: 500px;
            height: 500px;
            background-color: #ccc;
            border-radius: 50%;
            border: 15px solid #dde;
            position: relative;
            overflow: hidden;
            transition: transform 5s ease-out;
        }

        .wheel div {
            height: 50%;
            width: 200px;
            position: absolute;
            clip-path: polygon(100% 0, 50% 100%, 0 0);
            transform: translateX(-50%);
            transform-origin: bottom;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            font-family: sans-serif;
            color: #fff;
            left: 135px;
        }

        .wheel .one {
            background-color: black;
            left: 50%;
        }

        .wheel .two {
            background-color: green;
            transform: rotate(45deg);
        }

        .wheel .three {
            background-color: black;
            transform: rotate(90deg);
        }

        .wheel .four {
            background-color: green;
            transform: rotate(135deg);
        }

        .wheel .five {
            background-color: black;
            transform: rotate(180deg);
        }

        .wheel .six {
            background-color: green;
            transform: rotate(225deg);
        }

        .wheel .seven {
            background-color: black;
            transform: rotate(270deg);
        }

        .wheel .eight {
            background-color: green;
            transform: rotate(315deg);
        }

        .arrow {
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translateX(-50%);
            color: #fff;
            z-index: 999;
        }

        .arrow::before {
            content: "\1F817";
            font-size: 50px;
        }

        #spin {
            position: absolute;
            z-index: 10;
            background-color: #e2e2e2;
            text-transform: uppercase;
            border: 8px solid #fff;
            font-weight: bold;
            font-size: 20px;
            color: #a2a2a2;
            width: 80px;
            height: 80px;
            font-family: sans-serif;
            border-radius: 50%;
            cursor: pointer;
            outline: none;
            letter-spacing: 1px;
        }
    </style>

</head>

<body class="bg-pan-left">
    @include('navbar')

    <div class="container">
        <h1 class="mt-5 mb-5 text-flicker-in-glow text-center">Gambling Games</h1>
        <img class="mx-auto d-flex" src="https://images.linkcdn.cloud/global/banner/nex.jpg" alt="">

        

        <div class="wrapper">
            <button id="spin">Spin</button>
            <span class="arrow"></span>
            <div class="wheel">
                <div class="one">?</div>
                <div class="two">?</div>
                <div class="three">?</div>
                <div class="four">?</div>
                <div class="five">?</div>
                <div class="six">?</div>
                <div class="seven">?</div>
                <div class="eight">?</div>
            </div>
        </div>
        
    </div>

    @include('footer')

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

<script>
    let wheel = document.querySelector(".wheel");
    let btn = document.getElementById("spin");
    let number = Math.ceil(Math.random() * 1000);
    let saldo = 50000;
    let hadiah = ["A", "B", "C", "D", "E", "F", "G", "H"];

    btn.onclick = function () {
        let selectedSegment = Math.floor((number % 360) / 45);
        let hadiahTerpilih = hadiah[selectedSegment];
        wheel.style.transform = "rotate(" + number + "deg)";
        number += Math.ceil(Math.random() * 1000);

        setTimeout(() => {
            let tebak = prompt(`Tebak hadiah yang kamu dapatkan (pilihan: ${hadiah.join(", ")})`);
            if (tebak === hadiahTerpilih) {
                saldo += 5000;
                alert(`Selamat! Tebakan kamu benar. Hadiah: ${hadiahTerpilih}. Saldo kamu sekarang: Rp${saldo}`);
            } else {
                saldo -= 5000;
                alert(`Tebakan salah. Hadiah sebenarnya: ${hadiahTerpilih}. Saldo kamu sekarang: Rp${saldo}`);
            }
        }, 5000); // Waktu menunggu putaran selesai
    };
</script>

</body>

</html>