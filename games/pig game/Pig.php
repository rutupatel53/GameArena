<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="style.css" />
  <title>Pig Game</title>
</head>

<body>
  <main>
    <section class="player player--0 player--active">
      <h2 class="name" id="name--0">Player 1</h2>
      <p class="score" id="score--0">43</p>
      <div class="current">
        <p class="current-label">Current</p>
        <p class="current-score" id="current--0">0</p>
      </div>
    </section>
    <section class="player player--1">
      <h2 class="name" id="name--1">Player 2</h2>
      <p class="score" id="score--1">24</p>
      <div class="current">
        <p class="current-label">Current</p>
        <p class="current-score" id="current--1">0</p>
      </div>
    </section>

    <img src="dice-5.png" alt="Playing dice" class="dice" />
    <button class="btn btn--home" onclick="openhomepage('/GameArena/index.php')">🏡Home</button>
    <button class="btn btn--new">🔄 New game</button>
    <button class="btn btn--roll">🎲 Roll dice</button>
    <button class="btn btn--hold">📥 Hold</button>
    <button class="btn show-modal">📝 Rules</button>
  </main>
  <div class="modal hidden">
    <button class="close-modal">&times;</button>
    <h1 class="Heading1">Welcome to Pig Game</h1>
    <p class="heading2">A simple two-player game where the objective is to be the first player to reach 100 points.</p>

    <h2 class="h2">Rules:</h2>
    <ol>
      <li>The game is played with a standard six-sided dice.<br></li>
      <li>The game begins with Player 1 rolling the dice.<br></li>
      <li>Each player takes turns rolling the dice and accumulating points.<br></li>
      <li>If a player rolls a 1, their turn ends, and they lose all the points accumulated during that turn. The other player then takes their turn.<br></li>
      <li>If a player rolls any other number, they can choose to roll again (and add to their turn score) or hold (and add their turn score to their total score).<br></li>
      <li>The first player to reach or exceed 100 points wins the game.<br></li>
      <li>If you select "New Game," then the score will be reset to 0.<br></li>
    </ol>
  </div>
  <div class="overlay hidden"></div>
  <script src="script.js"></script>
</body>

</html>