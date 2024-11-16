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
        .box-container {
            text-align: center;
            max-width: 300px;
        }
        .box {
            width: 300px;
            height: 100px;
            border: 3px solid #444;
            background: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
            margin-bottom: 20px;
        }
        .items {
            display: flex;
            transform: translateX(0);
            transition: transform 1s cubic-bezier(0.550, 0.085, 0.680, 0.530);
        }
        .item {
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: #222;
            background-color: #f5c518;
            margin: 0 5px;
            border-radius: 10px;
            text-align: center;
        }
        .result {
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #f5c518;
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

        <div class="box-container mx-auto">
            <div class="box">
                <div class="items" id="items">
                    <!-- Item images or names -->
                    <div class="item">Knife</div>
                    <div class="item">AK-47</div>
                    <div class="item">M4A1</div>
                    <div class="item">Pistol</div>
                    <div class="item">AWP</div>
                    <div class="item">Sniper</div>
                    <div class="item">Armor</div>
                    <div class="item">Grenade</div>
                </div>
            </div>
            <button class="open-button" onclick="openBox()">Open Box</button>
            <div class="result" id="result">Press "Open Box" to try your luck!</div>
        </div>
    </div>

    @include('footer')

    <script>
        function openBox() {
            const itemsContainer = document.getElementById("items");
            const resultDisplay = document.getElementById("result");
    
            // Total number of items
            const totalItems = document.querySelectorAll(".item").length;
    
            // Pick a random item index
            const randomIndex = Math.floor(Math.random() * totalItems);
    
            // Calculate the offset for the random item
            const offset = randomIndex * -100; // Each item is 100px wide
    
            // Set the transformation to simulate spinning
            itemsContainer.style.transition = "transform 1s ease-in-out";
            itemsContainer.style.transform = `translateX(${offset}px)`;
    
            // Show result after the animation ends
            setTimeout(() => {
                const selectedItem = document.querySelectorAll(".item")[randomIndex].textContent;
                resultDisplay.textContent = `You got: ${selectedItem}`;
            }, 1000);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>