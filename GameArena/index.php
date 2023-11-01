<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/GameArena/style.css">
  <title>GameArena</title>
</head>

<body>
  <div class="top">
    <a class="title">GameArena</a>
    <nav class="Navbar">
      <ul>
        <li><a href="#selection1">Home</a></li>
        <li><a href="#selection2">Games</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="AboutMe.php">About Us</a></li>
        <li><a href="http://localhost/GameArena/googleloginapi/index.php">Login/Register</a></li>
        <!-- Add this to your navbar where you want to display user information -->
      </ul>
      <div id="userProfile">
        <!-- Display user information here (name, picture, etc.) -->
      </div>

    </nav>
  </div>
  <div class="midlayer" id="selection1">
    <div class="image-container">
      <img class="midimg" src="/GameArena/img/midlayer.jpg">
      <a class="button" href="#selection2">Find Games</a>
    </div>
    <div class="selection" id="selection2">
      <h1 class="choosegame">Choose a Game</h1>
      <div class="game-container">
        <div class="game" onclick="openGamePage('/games/guess my number/Guess.php')">
          <img src="/GameArena/img/guess the number.jpg" alt="Game 1">
          <h2>Game 1</h2>
          <p>Details of Game 1</p>
          <p class="price">Free to Play</p>
        </div>
        <div class="game" onclick="openCartPage('/GameArena/cart.php')">
          <img src="/GameArena/img/pig dice game.jpg" alt="Game 2">
          <h2>Game 2</h2>
          <p>Details of Game 2</p>
          <p class="price">Buy Game to Play</p>
          <button class="buy" onclick="openCartPage('/GameArena/cart.php')">Buy</button>
        </div>
      </div>
    </div>
    <div class="game-details">
      <h1 id="gameTitle"></h1>
      <p id="gameDescription"></p>
    </div>

    <footer class="footer" id="Selection3">
      <div class="footer-content">
        <p>&copy; 2023 GameArena. All rights reserved.</p>
        <ul class="social-links">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
        </ul>
      </div>
    </footer>

    <script src="/GameArena/script.js">

    </script>
</body>

</html>