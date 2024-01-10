<?php
    session_start();
    ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StepInStyle</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Nunito:wght@200;300;400;500;600;700;800;900&family=Open+Sans&family=Playfair+Display&family=Roboto&family=Roboto+Slab:wght@200;300;400;500;600;700;800;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="script.js" defer></script>
    <script src="script-popup.js" defer></script>
</head>
<body>
    <nav>
        <img id="nav_logo" src="images/logo.png" alt="Logo"  title="Logo"/>
        <div class="nav_link">
            <a href="#">Home</a>
            <a href="#featured">Featured</a>
            <a href="#women">Women</a>
            <a href="#new">New</a>
            <a href="shop.php">Shop</a>
            <a href="#"><img src="images/acheter.png" alt="buyIcon" title="Cart" /></a>
            <a href="#" id="User"><img src="images/user.png" alt="User" title="User" /></a>
        </div>
    </nav>
    <div id="popUpBackground">
        <div id="UserPopUp">
        <?php
     
        echo "<p > welcome " .  $_SESSION['email'] . "</p>";
        ?>
            <button><a href="login.php">Log out</a></button>
            <style>
                #UserPopUp button a {
                    color: #ffffff !important;
                    text-decoration: none !important;
                }
            </style>
        </div>
    </div>
    <main>
        <section class="home">
            <div class="home_data">
                <p>New in</p>
                <h1>Air Jordan 1<br>Mid True Blue</h1>
                <p>Explore the new collections of sneakers</p>
                <a href="">Explore now</a>
            </div>
            <div class="home_container">
                <div class="home_shape"></div> 
                <img src="images/sneakers/Air Jordan 1.png" alt="Air Jordan" />
            </div>
        </section>
        <h2 id="featured">Featured</h2>
        <section class="featured">
            <div class="featured_element">
                <p class="sale_button">Sale</p>
                <img id="image_Nike" src="images/sneakers/Nike Dunk High Retro.png" />
                <div class="shape_data">
                    <h2>Nike Dunk High Retro</h2><br>
                    <h3>$179.99</h3><br>
                    <a id="AddToCart" href="">Add to Cart <span><img class="fleche_droite" src="images/fleche-droite.png" alt="fleche"/></span></a>
                </div>
            </div>
            
            <div class="featured_element">
                <div class="shape_image">
                    <p class="sale_button">Sale</p>
                    <img id="image_Adidas" src="images/Adidas Ozelia.png" />
                </div>
                <div class="shape_data">
                    <h2>Adidas Ozelia</h2><br>
                    <h3>$179.99</h3><br>
                    <a id="AddToCart" href="">Add to Cart <span><img class="fleche_droite" src="images/fleche-droite.png" alt="fleche"/></span></a>
                </div>
            </div>
            <div class="featured_element">
                <div class="shape_image">
                    <p class="sale_button">Sale</p>
                    <img id="image_Puma" src="images/Puma Softride Enzo NXT.png" />
                </div>
                <div class="shape_data">
                    <h2>Puma Softride Enzo NXT</h2><br>
                    <h3>$179.99</h3><br>
                    <a id="AddToCart" href="">Add to Cart <span><img class="fleche_droite" src="images/fleche-droite.png" alt="fleche"/></span></a>
                </div>
            </div>
        </section>
        <section class="featured_part">
            <div class="featured_part_adidas">
                <img id="Adidas" src="images/sneakers/Adidas.png" />
                <div class="adidas_data">
                    <h1>Adidas</h1>
                    <p>New collection</p>
                    <a id="buyNow" href="">Buy now<span><img class="fleche_droite" src="images/fleche-droite.png" alt="fleche-droite"/></span></a>
                </div>
            </div>
            <div class="featured_part_Nike">
                <img id="Nike" src="images/sneakers/Nike.png" />
                <div class="nike_data">
                    <h1>Nike</h1>
                    <p>New collection</p>
                    <a id="buyNow" href="">Buy now<span><img class="fleche_droite" src="images/fleche-droite.png" alt="fleche-droite"/></span></a>
                </div>
            </div>
        </section>
        <h2 id="women">Women Sneakers</h2>
        <section class="women">
            <div class="women_element">
                <img class="women_sneaker" src="images/sneakers/Women Nike Finish Line.png" alt="Nike" /> 
                <div class="element_data">
                    <h2>Nike Finish Line</h2><br>
                    <h3>$129.99</h3><br>
                    <a id="AddToCart" href="">Add to Cart <span><img class="fleche_droite" src="images/fleche-droite.png" alt="fleche"/></span></a>
                </div>
            </div>
            <div class="women_element">
                <img class="women_sneaker" src="images/sneakers/Women Adidas.png" alt="Adidas" /> 
                <div class="element_data">
                    <h2>Adidas Grant Court</h2><br>
                    <h3>$129.99</h3><br>
                    <a id="AddToCart" href="">Add to Cart <span><img class="fleche_droite" src="images/fleche-droite.png" alt="fleche"/></span></a>
                </div>
            </div>
            <div class="women_element">
                <img class="women_sneaker" src="images/sneakers/Women Nike Court Vision Alta.png" alt="Nike" /> 
                <div class="element_data">
                    <h2>Nike Court Vision Alta</h2><br>
                    <h3>$129.99</h3><br>
                    <a id="AddToCart" href="">Add to Cart <span><img class="fleche_droite" src="images/fleche-droite.png" alt="fleche"/></span></a>
                </div>
            </div>
            <div class="women_element">
                <img class="women_sneaker" src="images/sneakers/Women Adidas nmd r1 rosa.png" alt="Adidas" /> 
                <div class="element_data">
                    <h2>Adidas NMD R1</h2><br>
                    <h3>$129.99</h3><br>
                    <a id="AddToCart" href="">Add to Cart <span><img class="fleche_droite" src="images/fleche-droite.png" alt="fleche"/></span></a>
                </div>
            </div>
        </section>
        <section class="women_part">
            <img class="women_image" src="images/sneakers/women.png" alt="women" />
            <div class="women_data">
                <h2>50% OFF</h2>
                <h3>In Adidas Superstar sneakers</h3>
                <a href="">Shop now</a>
            </div>
        </section>
        <h2 id="new">New Collection</h2>
        <section class="new_collection">
            <div class="new_collection_element">
                <img src="images/sneakers/sneaker's new collection.png" alt="new collection" />
                <div class="collection_data">
                    <h1>Mens Shoes</h1>
                    <h3>From $79.99</h3>
                    <a id="viewCollection" href="">View Collection<span><img class="fleche_droite" src="images/fleche-droite.png" alt="fleche" /></span></a>
                </div>
            </div>
            <div class="new_collection_element">
                <img src="images/sneakers/sneaker1.png" alt="" />
                <div class="overlay"><a href="">Add to Cart</a></div>
            </div>
            <div class="new_collection_element">
                <img src="images/sneakers/sneaker2.png" alt="" />
                <div class="overlay"><a href="">Add to Cart</a></div>
            </div>
            <div class="new_collection_element">
                <img src="images/sneakers/sneaker3.png" alt="" />
                <div class="overlay"><a href="">Add to Cart</a></div>
            </div>
            <div class="new_collection_element">
                <img src="images/sneakers/sneaker4.png" alt="" />
                <div class="overlay"><a href="">Add to Cart</a></div>
            </div>
        </section>
        <section class="new_collection_subscribe">
            <div class="subscribe_description">
                 <h1>Subscribe And Get <br> 10% OFF </h1>
                 <p>Get 10% discount for all products</p>
            </div> 
            <div class="subscribe_shape">
                 <input type="email" id="email" placeholder="@email.com"> 
                 <button id="subscribeBtn">Subscribe</button>
            </div>
        </section>
    </main>
    <footer>
        <section>
            <div>
                <h2>StepInStyle</h2>
                <a href="">New collection of shoes 2023.</a>
            </div>
            <div>
                <h2>Explore</h2>
                <a href="">Home</a>
                <a href="">Featured</a>
                <a href="">Women</a>
                <a href="">New</a>
            </div>
            <div>
                <h2>Support</h2>
                <a href="">Product Help</a>
                <a href="">Customer Care</a>
                <a href="">Authorized Service</a>
            </div>
            <div>
                <a href="https://www.facebook.com/" target="_blank"><img src="images/icone social media/facebook.png" alt="facebook" /></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="images/icone social media/instagram.png" alt="instagram" /></a>
                <a href="https://twitter.com/" target="_blank"><img src="images/icone social media/twitter.png" alt="twitter" /></a>
                <a href="https://www.google.com/"target="_blank"><img src="images/icone social media/social.png" alt="google" /></a>
            </div>
        </section>
        <p>© 2023 StepInStyle. All rights reserved</p>
    </footer>
</body>
</html>