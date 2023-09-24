<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory Game with JavaScript</title>
    <link rel="stylesheet" href="css/game.css">
    <script src="js/game.js" defer></script>
</head>
<body>
    
    <div class="game">
        <div class="controls">
            <button>Start</button>
            <a href="game.php"><button id="restart-button">Replay</button></a>
            <div class="stats">
                <div class="moves">0 moves</div>
                <div class="timer">Time: 0 sec</div>
            </div>
        </div>
        <div class="board-container">
            <div class="board" data-dimension="4"></div>
            <div class="win">You won!</div>
        </div>
    </div>
</body>
</html>
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>