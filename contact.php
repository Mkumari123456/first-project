<?php
include "db.php";
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
</head>

<body>

<style>
        /* Center the form container */
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            /* Full width */
            max-width: 600px;
            /* Set a max-width to prevent it from becoming too wide */
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
            width: 100%;
            /* Take up full width */
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff6347;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #ff4500;
            /* Darker red for hover effect */
        }
    </style>

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
                <li><a href="service.html"> Hotel Service</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                </li>
            </ul>
        </nav>
    </div>
    <br><br><br><br>

    <div class="container-flex">
    <div class="form-container">
        <h1>Contact</h1>
        <form action="" method="post">
            <div class="input-group">
                <input type="text" name="firstname" placeholder="First Name">
            </div>
            <div class="input-group">
                <input type="text" name= "lastname" placeholder="Last Name">
            </div>
            <div class="input-group">
                <select class="ip" name="menu">
                    <option value="pizza">Pizza</option>
                    <option value="Biryani">Biryani</option>
                    <option value="Chicken">Chicken</option>
                    <option value="Pasta">Pasta</option>
                    <option value="Chilli Potato">Chilli Potato</option>
                </select>
            </div>
            <div class="input-group">

                <select class="ip" name="submenu">
                    <option value="Pizza">Pizza</option>
                    <option value="Biryani">Biryani</option>
                    <option value="Chicken">Chicken</option>
                    <option value="Pasta">Pasta</option>
                    <option value="Chilli Potato">Chilli Potato</option>
                </select>
            </div>
            <div class="input-group">
                <input type="number" name="phone" placeholder="Phone">
            </div>
            <div class="input-group">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="input-group">
                <input type="number" name="price" placeholder="Price">
            </div>
            <div class="input-group">
                <input type="file" name="image" placeholder="Image">
            </div>
            <!-- <div class="input-group">
                <a href="" class="btn">order now</a>
            </div> -->

            <button type="submit" name="submit" class="btn">order now</button>
        </form>
    </div>
    </div>

    <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.8896602709583!2d86.20126287513382!3d22.806552079325858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5e31ee6dab0e9%3A0x39d14e4a3f752f27!2sPaulTech%20Software%20Services%20%7C%20Best%20Software%20Company%20in%20Jamshedpur!5e0!3m2!1sen!2sin!4v1736937117266!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



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
                    <li>Suggesition</li>
                </ul>
            </div>

        </div>
        <div class="copy">
            <p>CopyRight @2022 All Rights Reserved</p>
        </div>
    </div>

</body>

<?php

if(isset($_POST["submit"])){
    // echo "done";
    $Fname = $_POST['firstname'];
    $Lname = $_POST['lastname'];
    $Menu = $_POST['menu'];
    $Submenu = $_POST['submenu'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $query = "INSERT INTO contact_form (f_name, l_name, category_name, menu_name, phone, email,price,image)
     VALUE ('$Fname','$Lname','$Menu','$Submenu','$Phone','$Email','$price','$image')";

    if($conn->query($query)===TRUE){
        echo "new item create successfully";

    }
    else{
        echo"error".$query . "<br>".$conn->error;
    }
}

?>

</html>