<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameArena</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
        }

        .top {
            background-color: black;
            height: 70px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
        }

        .title {
            padding-top: 0;
            height: fit-content;
            font-size: 50px;
            color: red;
            float: left;
            padding-left: 20px;
        }

        .Navbar {
            background-color: black;
            font-family: "Times New Roman";
            margin-left: 400px;
            padding-top: 20px;
            font-size: 25px;
            list-style: none;
        }

        .Navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .Navbar li {
            display: inline;
            padding-left: 70px;
            color: red;
        }

        .Navbar a {
            text-decoration: none;
            color: red;
            font-weight: bold;
        }

        .Navbar a:hover {
            color: white;
        }

        .cart-container {
            background-color: #fff;
            max-width: 400px;
            margin-top: 100px;
            margin-left: 500px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        .game-details {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            margin: 5px 0;
        }

        .coupon-input {
            margin: 20px 0;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"] {
            padding: 5px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        #message {
            color: green;
            font-weight: bold;
            margin-top: 10px;
        }

        .purchase-button {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="top">
        <a class="title">GameArena</a>
        <nav class="Navbar">
            <ul>
                <li><a href="/GameArena/#selection1">Home</a></li>
                <li><a href="/GameArena/#selection2">Games</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="#">About Me</a></li>
            </ul>
        </nav>
    </div>
    <div class="cart-container">
        <h1>Shopping Cart</h1>
        <div class="game-details">
            <h2>Game 2: Pig Game</h2>
            <p>Details of Game 2</p>
            <p>Price: $10</p>
        </div>
        <div class="coupon-input">
            <label for="coupon">Coupon Code:</label>
            <input type="text" id="coupon">
            <button onclick="applyCoupon()">Apply Coupon</button>
        </div>
        <p id="message"></p>
        <div class="purchase-button">
            <button id="purchaseButton" onclick="purchaseGame('/games/pig game/Pig.php')">Purchase</button>
        </div>
    </div>

    <script>
        let hasCoupon = false;

        function applyCoupon() {
            const couponInput = document.getElementById('coupon');
            const message = document.getElementById('message');
            const purchaseButton = document.getElementById('purchaseButton');
            const couponCode = couponInput.value.trim();

            if (couponCode === 'Game5') {
                hasCoupon = true;
                message.textContent = 'Coupon applied. The game is now free!';
                purchaseButton.textContent = 'Get It for Free';
            } else {
                message.textContent = 'Invalid coupon code. You will be charged $10.';
                hasCoupon = false;
                purchaseButton.textContent = 'Purchase';
            }
        }

        function purchaseGame(url) {
            if (hasCoupon) {
                window.location.href = url;
            } else {
                alert('You have been charged $10 for the game.');
            }
        }
    </script>
</body>

</html>