<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.png') }}">
    <title>Slot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Css_khusus.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <style>

.slot-machine {
    margin: 50px auto;
    padding: 20px;
    background: #ffecd1;
    border-radius: 10px;
    width: 300px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
}

h1 {
    font-size: 2rem;
    color: #ff6f61;
    margin-bottom: 20px;
}

.reels {
    display: flex;
    justify-content: center;
    margin: 20px 0;
}

.reel {
    font-size: 2rem;
    background: #fff;
    border: 2px solid #ddd;
    border-radius: 5px;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

button {
    font-size: 1rem;
    padding: 10px 20px;
    background: #ff6f61;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background: #ff4f41;
} 

#result {
    font-size: 1.2rem;
    margin-top: 20px;
    color: #333;
}

.reel {
    font-size: 2rem;
    background: #fff;
    border: 2px solid #ddd;
    border-radius: 5px;
    width: 60px;
    height: 60px;
    overflow: hidden; 
    position: relative;
    margin: 0 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.reel-content {
    position: absolute;
    top: 0;
}

/* Animasi roll */
.roll {
    animation: roll 1s linear infinite;
}

/* Keyframes untuk animasi rolling */
@keyframes roll {
    0% {
        transform: translateY(0%);
    }
    100% {
        transform: translateY(-300%);
    }
}

    </style>
</head>
<body class="bg-pan-left">
    @include('navbar')

    <div class="slot-machine">
        <h1>Slot Machine 🎰</h1>
        <div class="reels">
            <div class="reel" id="reel1">
                <div class="reel-content">🍒</div>
            </div>
            <div class="reel" id="reel2">
                <div class="reel-content">🍋</div>
            </div>
            <div class="reel" id="reel3">
                <div class="reel-content">🍇</div>
            </div>
        </div>
        <button id="spinButton">Spin</button>
        <p id="result"></p>
        
    </div>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


<script>
    // Slot icons
    const icons = ["🍒", "🍋", "🍇", "🍉", "🔔", "⭐", "7️⃣"];
    
    // Selectors
    const reel1 = document.getElementById('reel1');
    const reel2 = document.getElementById('reel2');
    const reel3 = document.getElementById('reel3');
    const spinButton = document.getElementById('spinButton');
    const resultText = document.getElementById('result');
    
    // Function to determine if jackpot occurs (all reels show 7️⃣)
    function isJackpot(reel1Value, reel2Value, reel3Value) {
        return reel1Value === "7️⃣" && reel2Value === "7️⃣" && reel3Value === "7️⃣";
    }
    
    // Function to start rolling reels
    function startRolling(reel) {
        const content = reel.querySelector('.reel-content');
        content.classList.add('roll');
    }
    
    // Function to stop rolling and set final value
    function stopRolling(reel, finalValue) {
        const content = reel.querySelector('.reel-content');
        content.classList.remove('roll');
        setTimeout(() => {
            content.innerHTML = finalValue;
        }, 100);
    }
    
    // Spin function
    function spin() {
        // Randomize values for each reel
        const reel1Value = icons[Math.floor(Math.random() * icons.length)];
        const reel2Value = icons[Math.floor(Math.random() * icons.length)];
        const reel3Value = icons[Math.floor(Math.random() * icons.length)];
    
        // Start rolling the reels
        startRolling(reel1);
        startRolling(reel2);
        startRolling(reel3);
    
        // Stop reels at different times with random values
        setTimeout(() => stopRolling(reel1, reel1Value), 1000);
        setTimeout(() => stopRolling(reel2, reel2Value), 1200);
        setTimeout(() => stopRolling(reel3, reel3Value), 1400);
    
        // Check results after all reels stop
        setTimeout(() => {
            if (isJackpot(reel1Value, reel2Value, reel3Value)) {
                resultText.textContent = "🎉 Jackpot! Anda menang! 🎉";
            } else if (reel1Value === reel2Value || reel2Value === reel3Value || reel1Value === reel3Value) {
                resultText.textContent = "😊 Bagus! Anda menang sedikit!";
            } else {
                resultText.textContent = "😢 Semoga beruntung lain kali!";
            }
        }, 1500);
    }
    
    spinButton.addEventListener('click', spin);
        </script>
</body>
</html>