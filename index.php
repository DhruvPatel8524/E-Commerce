<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    
</head>
<body>

    <section id="header">
       
        <a href="index.php" id="headertext">Buy N Gift</a>
        

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
                <li><a href="login.php">Login</a></li>
                <a href="#" id="close"><i class="fas fa-window-close" style="color: #000000;"></i></a>
            </ul>
        </div>

        <div id="mobile">
            <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="container11" class="section-p1">
        <div class="slider-container">
            <div class="slider">
                <div class="slide"><img src="assets/img/image1.jpg" alt="Image 1"></div>
                <div class="slide"><img src="assets/img/image2.jpg" alt="Image 2"></div>
                <div class="slide"><img src="assets/img/image3.jpg" alt="Image 3"></div>
                <div class="slide"><img src="assets/img/image4.jpg" alt="Image 4"></div>
            </div>
        </div>
                <div class="slider-buttons"></div>
    </section>    

    <section id="product1" class="section-p1">
        <h2>Products</h2>
        <p>Most selling Products</p>
        <div class="pro-container">

        <?php  include('server/get_product1.php');   ?>


        <?php while($row = $product1->fetch_assoc()){ ?>

            <div class="pro">
                <a href="<?php echo "sproduct.php?product_id=". $row['product_id'];  ?>">
                    <img src="assets/img/<?php echo $row['product_image']; ?>" alt="" >
                </a>
                     
                <div class="des">
                    <h5><?php echo $row['product_name']   ?>  </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹<?php echo $row['product_price'];   ?></h4>
                </div>
                <a href="<?php echo "sproduct.php?product_id=". $row['product_id'];  ?> " > <i class="fas fa-shopping-cart cart"></i></a>
            </div>

            <?php  } ?>

        </div>
    </section>

    <section id="banner" class="section-m1">
        <h2>BUY NOW WITH AMAZING <span>OFFERS</span></h2>
        <a href="shop.php">
        <button class="normal">Shop</button>
        </a>
    </section>

    <section id="product1" class="section-p1">
        <h2>Premium Products</h2>
        <div class="pro-container">

        <?php  include('server/get_premium.php');   ?>

        <?php while($row = $premium->fetch_assoc()){ ?>

            <div class="pro">
            <a href="<?php echo "sproduct.php?product_id=". $row['product_id'];  ?>">
                <img src="assets/img/<?php echo $row['product_image']; ?>" alt="" >
            </a>    
                <div class="des">
                    <span>ABSOLUTE DEFENSE</span>
                    <h5><?php echo $row['product_name']   ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹<?php echo $row['product_price'];   ?></h4>
                </div>
                <a href="<?php echo "sproduct.php?product_id=". $row['product_id'];  ?>"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <?php  } ?>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Amazing Discount</h4>
            <h2>Shop Product</h2>
            <span>Explore more</span>
            <button class="white" onclick="window.location.href='shop.php'">Shop Now</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Amazing Discount</h4>
            <h2>Shop Product</h2>
            <span>Explore more</span>
            <button class="white" onclick="window.location.href='shop.php'">Shop Now</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <h4>Contact</h4>
            <p><strong>Address</strong> : Demo</p>
            <p><strong>Phone</strong> : Demo</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="about.php">About us</a>
            <a href="privacy.php">Privacy Policy</a>
            <a href="terms.php">Terms & condition</a>
            <a href="contact.php">Contact us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="signup.php">Sign In</a>
            <a href="cart.php">View Cart</a>
            <a href="contact.php">Help</a>
        </div>
    </footer>



    <script src="assets/js/script.js"></script>
</body>
</html>