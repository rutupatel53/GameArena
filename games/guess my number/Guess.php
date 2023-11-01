<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="style.css" />
  <title>Guess My Number!</title>
</head>

<body>
  <header>
    <button class="btn homepage" onclick="openhomepage('/GameArena/index.php')">Home</button>
    <h1>Guess My Number!</h1>
    <p class="between">(Between 1 and 20)</p>
    <button class="show-modal">Rules!</button>
    <button class="btn again">Again!</button>
    <div class="number">?</div>
  </header>
  <main>
    <section class="left">
      <input type="number" class="guess" />
      <button class="btn check">Check!</button>
    </section>
    <section class="right">
      <p class="message">Start guessing...</p>
      <p class="label-score">💯 Score: <span class="score">20</span></p>
      <p class="label-highscore">
        🥇 Highscore: <span class="highscore">0</span>
      </p>
    </section>
  </main>

  <div class="modal hidden">
    <button class="close-modal">&times;</button>
    <h2>Game Rules</h2><br><br>
    <ol>
      <li>The player starts with a score of 20.</li><br>
      <li>A random number between 1 and 20 is chosen as the secret number.</li><br>
      <li>Guess the secret number by entering your guess and clicking "Check."</li><br>
      <li>If you guess correctly, you win the game, and the background turns green.</li><br>
      <li>If your guess is too high or too low, you'll be notified, and your score decreases by 1.</li><br>
      <li>You can play as many rounds as you want by clicking "Again."</li><br>
      <li>Your high score is displayed and can be reset.</li><br>
      <li>Have fun and try to beat your high score!</li><br>
    </ol>
  </div>
  <div class="overlay hidden"></div>
  <script src="main.js"></script>
</body>

</html>