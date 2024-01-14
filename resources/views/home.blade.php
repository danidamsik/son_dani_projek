<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #333;
            overflow: hidden;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        nav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            margin: 10px auto;

        }
        .a {
            margin-left: 90px;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .search-container {
            float: right;
            padding: 14px;
            margin-bottom: 10px;
        }

        .search-container input {
            padding: 10px;
            margin-top: 8px;
            margin-right: 16px;
            border: none;
            font-size: 17px;
        }
    </style>
</head>
<body>

<nav id="mainNav">
    <a class = "a" href="#home">Home</a>
    <a href="#product">Product</a>
    <a href="#stock">Stock</a>
    <a href="#transaction">Transaction</a>
    <a href="#customer">Customer</a>
    <div class="search-container">
        <input type="text" placeholder="Search...">
    </div>
</nav>

<script>
    // Add animation when the page loads
    document.addEventListener("DOMContentLoaded", function() {
        var nav = document.getElementById('mainNav');
        nav.style.opacity = '1';
    });
</script>

</body>
</html>
