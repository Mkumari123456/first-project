<?php
include "db.php";

// Fetch all menu items
$query = "SELECT * FROM logo";
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
</head>

<body>
    <div class="menu">
        <nav>

            <input type="checkbox" id="ckeck">
            <label for="check" class="checkbtn">
                <ion-icon name="grid-outline"></ion-icon>
            </label>
<?php
   if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>

            <label class="logo" for=""><img src="admin/uploads/<?php echo $row['logo']?>" alt="" style="width: 22rem;"></label>

        <?php
            }
        }
        ?> 


        
            


            <ul>
                <li><a href="" class="active">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="service.php"> Resturant Service</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <!-- <li><a href="">test</a></li> -->
            </ul>

        </nav>
    </div>

    <div class="section flex" id="hero-section">
        <div class="text">
            <h1 class="primary1" style="margin-bottom: 10px;">It's Not Just <span
                    style="color: red;">Food</span>,<br>It's an Experience</h1>
            <p class="text-pr" style="color: gray;">Lorem ipsum,dolor sit amet consectetur adipising elit,Lpsa,<br>
                provident dolorum.
                Voluptatum ducimus quasi unde, <br>voluptatibus soluta eligendi. Enim,architecto autem</p>

            <a href="" class="button">Explore Menu</a>
        </div>

        <div class="visual">
            <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/home-banner.png" alt="">
        </div>

    </div>


    <div class="section" id="how-it-work">
        <h2 class="secondary">Welcome<br>
            <span style="color: red;">CHICKEN LOVERS</span>
        </h2>
    </div>
    <div class="container flex">
        <div class="box">
            <h3 class="easy">Easy Order</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet error et caerat incidunt eius omnis
                reprehenderit inventore assumenda veniam quos sed, soluta nobis magni!</p>
        </div>
        <div class="box active">
            <h3 class="easy">Fast Dilivery</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit neque mollitia numquam hic quod fuga
                officia repudiandae, consequatur, iure accusantium eligendi consectetur maiores ipsum eius. Dolor quo
                voluptatum expedita. Veniam.</p>
        </div>
        <div class="box">
            <h3 class="easy">Best Quality</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aspernatur iusto reiciendis quisquam
                illo.
                eligendi!</p>
        </div>
    </div>

    <!-- about start -->
    <div class="section" id="about">
        <div class="container flex">
            <div class="visual-img">

                <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/about.png" alt="">
            </div>
            <div class="text">
                <div class="secondary">
                    About Our <span style="color: rgb(240, 72, 11);">Resturant</span>
                </div>
                <h2 class="primary">150+</h2>
                <h3 class="food">Our Delicious Food</h3>
                <p style="color: gray;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea accusantium corrupti
                    iste minus adipisci expedita
                    voluptatibus sunt quis similique consequuntur ratione laudantium exercitationem nobis, magni
                    pciatis magnam architecto quidem temporibus totam harum.</p>
                <a href="" class="btn">Explore menu</a>
            </div>


        </div>
    </div>

    <!-- about end -->

    <div class="section" id="pro">
        <div class="container flex">
            <div class="text">
                <h1 class="sh">What People Say About <span style="color: rgb(161, 47, 5);">FoodLover </span></h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus odit minus adipisci expedita
                    deserunt!
                    Explicabo libero ducimus vero reprehenderit fuga, voluptatem maxime ab laudantium impedit delectus
                    voluptates,
                    non laboriosam praesentium!</p>
            </div>
            <div class="visual-img1">
                <img src="img/jpg4.jpg" alt="">
            </div>
        </div>
    </div>
    </div>

    <!-- about section end -->



    <!-- rest section start -->
    <div class="section" id="menu">
        <div class="containers">
            <ul class="category">
                <li class="active">All</li>
                <li>Pizza</li>
                <li>Burger</li>
                <li>Pasta</li>
                <li>Biryani</li>
            </ul>
            <div class="container">
                <div class="Resturant-menu">

                    <div class="menu-item">
                        <img src="img/img3.jpg" alt="">
                        <div class="title">Food Resturant Indian And Chanies</div>
                        <div class="location">Jamshedpur</div>
                        <div class="Order Flex">
                            <div class="price">100rs</div>
                            <a href="menu.php" class="btn btn-menu">Order Now</a>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="img/img2.jpg" alt="">
                        <div class="title">Food Resturant Indian And Chanies</div>
                        <div class="location">Jamshedpur</div>
                        <div class="Order Flex">
                            <div class="price">100rs</div>
                            <a href="menu.php" class="btn btn-menu">Order Now</a>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="img/jpg5.jpg" alt="">
                        <div class="title">Food Resturant Indian And Chanies</div>
                        <div class="location">Jamshedpur</div>
                        <div class="Order Flex">
                            <div class="price">100rs</div>
                            <a href="menu.php" class="btn btn-menu">Order Now</a>
                        </div>
                    </div>
                    <div class="menu-item">
                        <img src="img/jpg4.jpg" alt="">
                        <div class="title">Food Resturant Indian And Chanies</div>
                        <div class="location">Jamshedpur</div>
                        <div class="Order Flex">
                            <div class="price">100rs</div>
                            <a href="menu.php" class="btn btn-menu">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="img">
    <img src="img/taj.jpg" alt="" style="height: 31rem; width: 100%; ">
    </div>


    <!-- rest section end  -->
    <div class="section" id="fa-q">
        <h2 class="secondary">Frequently Asked Questions</h2>
    </div>
    <div class="fa-q">
        <details>
            <summary>I got wrong food. What should I do?</summary>
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nemo tempore veritatis!
                    Saepe aut amet recusandae minima consequuntur quaerat? Cumque a quo voluptatum nulla
                    debitis animi dolorem delectus minima magni?</p>
            </div>
        </details>
    </div>



    <div class="fa-q">
        <details>
            <summary>I got wrong food. What should I do?</summary>
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nemo tempore veritatis!
                    Saepe aut amet recusandae minima consequuntur quaerat? Cumque a quo voluptatum nulla
                    debitis animi dolorem delectus minima magni?</p>
            </div>
        </details>
    </div>
    <div class="fa-q">
        <details>
            <summary>I got wrong food. What should I do?</summary>
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nemo tempore veritatis!
                    Saepe aut amet recusandae minima consequuntur quaerat? Cumque a quo voluptatum nulla
                    debitis animi dolorem delectus minima magni?</p>
            </div>
        </details>
    </div>

    <div class="section" id="app">
        <div class="container flex">
            <div class="visual">
                <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/app.png" alt="">
            </div>
            <div class="text">
                <h1 class="secondary">Downloard The Food Lover App</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quisquam explicabo odio vitae eveniet
                    dolorem eos placeat atque? Mollitia autem aut repellat deleniti corporis excepturi quis iste iure
                    fugit reiciendis.</p>
                <div class="download flex">
                    <div class="app-stor">
                        <i class="fa-brands fa-app-store"></i>
                        <p>Get it on</p>
                        <span>Google Play</span>
                    </div>
                    <div class="app-stor">
                        <i class="fa-brands fa-google-play"></i>
                        <p>Download On The App Stor</p>
                        <span>App stor</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
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

</html>