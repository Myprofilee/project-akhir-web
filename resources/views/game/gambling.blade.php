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
/* 
        .selector{
            width:3px;
            background:grey;
            left:50%;
            height:155px;
            transform:translate(-50%);
            position:absolute;
            z-index:2;
        } */

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
        </div>
    </div>

    @include('footer')

    <script>
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
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>
