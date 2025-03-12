<?php

include "db.php";

// Fetch all menu items
$query = "SELECT * FROM product";
$result = $conn->query($query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Food project</title>
    <style>
        .container-shubham {
            text-align: center;
            padding: 20px;
            background-color: hsla(352, 12.50%, 87.50%, 0.33);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .card-wrapper {
            flex-basis: 25%; /* 4 items per row */
            margin: 5px;
            box-sizing: border-box;
        }

        .menu-item11 {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
        }

        .menu-item11 img {
            width: 100%;
            height: auto;
            max-width: 600px;
            margin-bottom: 10px;
        }

        .title {
            font-size: 1.5em;
            font-weight: bold;
        }

        .description {
            font-size: 1em;
            color: #555;
        }

        .location {
            font-size: 0.9em;
            color: #777;
        }

        .order {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .price {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
        }

        .btn-menu {
            background-color: #ff5722;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-menu:hover {
            background-color: #e64a19;
        }
    </style>
</head>

<body>
    <div class="menu">
        <nav>
            <input type="checkbox" id="ckeck">
            <label for="check" class="checkbtn">
                <ion-icon name="grid-outline"></ion-icon>
            </label>

            <label class="logo" for="">Food Lover</label>

            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="service.php">Resturant Service</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </div>
<br><br><br><br>

<div class="container" id="fun">
    <h1>Indian And Chaniess Rssturant</h1>
    <div class="search">
    <i class="fa-solid fa-magnifying-glass"></i>
    <input type="text" placeholder="Search.." name="">
    </div>
</div>

    <div class="container11">
        <h1>Explore Menu</h1>
    </div>

    <div class="container-shubham" id="card">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="card-wrapper">
                    <div class="menu-item11">
                        <img src="admin/uploads/<?php echo $row['Image']; ?>" alt="Product Image">
                        <div class="title"><?php echo $row['Menu_Name']; ?></div>
                        <div class="description"><?php echo $row['Description']; ?> </div>
                        <div class="location"><?php echo $row['Location']; ?> </div>
                        <div class="order flex">
                            <div class="price">$<?php echo $row['Price']; ?></div>
                            <a href="" class="btn btn-menu">Order Now</a>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
    <br>
    


    <div class="footer">
        <div class="container flex">
            <div class="footer-about">
                <h1>About</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta <br>quo nihil animi, sapiente sint
                    accusamus aliquam iusto quam sit rerum iure quas hic pariatur facilis<br> quia fugit velit
                    consequuntur
                    cumque!</p>
            </div>

            <div class="footer-categery">
                <h2>Our Menu</h2>
                <ul>
                    <li>Biryani</li>
                    <li>chicken</li>
                    <li>pizza</li>
                    <li>Burger</li>
                    <li>pasta</li>
                </ul>
            </div>

            <div class="Quick Link">
                <h2>Quick Link</h2>
                <ul>
                    <li>About us</li>
                    <li>contact Us</li>
                    <li>Menu</li>
                    <li>Order</li>
                    <li>Service</li>
                </ul>
            </div>
            <div class="Get-in-touch">
                <h2>Get In Touch</h2>
                <ul>
                    <li>Account</li>
                    <li>Support center</li>
                    <li>Feedback</li>
                    <li>Suggestion</li>
                </ul>
            </div>

        </div>
        <div class="copy">
            <p>CopyRight @2022 All Rights Reserved</p>
        </div>
    </div>
</body>

</html>
