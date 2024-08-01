<?php
    session_start();

    include("connect.php");
    if(!isset($_SESSION['valid'])){
        header("Location: index.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="author" content="Diana Rose Certeza">
		<title> Jake's Coffee Shop</title>
        <link rel="icon" href="images/logo2.png" type="image">
        <!-- CSS FILE -->
        <link rel="stylesheet" href="style/home.css">
        <!--FOR FONT-FAMILY POPPINS-->
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <!-- FOR ICONS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <!-- HEADER -->
        <header class="header">
            <a href="#home" class="logo">JCO<span>ffee.</span></a>

            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#product">products</a>
                <a href="#about">about us</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact us</a>
                <a href="profile.php">profile</a>
            </nav>

            <a href="logout.php" class="logout">LOG OUT</a>
            <div class="icons">
                <div class="material-icons" id="menu-btn">menu</div>
            </div>
        </header>


        <!-- HOME SECTION -->
        <section class="home" id="home">
            
            <div class="home2">
                <div class="content">
                    <?php
                        $id = $_SESSION['valid'];
                        $firstname = $_SESSION['firstname'];
                        $sql = mysqli_query($conn, "SELECT * FROM users_info WHERE ID = '$id'");
                    ?>
                    <p class="php"> Hello, <span><?php echo $firstname; ?></span>! Welcome to</p>
                    <h1>Jake's <span>Coffee.</span></h1>
                    <p>Treat yourself to the perfect start or a midday pick-me-up with Jake's Coffee—because <strong>great days begin with great coffee.</strong></p>
                    <p> Our carefully crafted brew is a sensory experience like no other, starting with the tantalizing aroma that fills the air as soon as you lift the cup to your lips. 
                        Each sip delivers a rich, smooth flavor that dances on your palate, revealing intricate notes of caramel, chocolate, and a hint of citrus.</p>
                    <a href="#products" class="btn">Order Now</a>
                </div>
                <div class="image-box">
                    <img src="images/coffee.png" alt="coffee">
                </div>
            </div>
        </section>

        <!-- PRODUCT SECTION -->
        <section class="product" id="product">
            <h1 class="heading">Our <span>menu</span></h1>
            <h2>- Coffee -</h2>
            <div class="box-container">
                <div class="box">
                    <img src="images/menu/1.png" alt="icedcoffee">
                    <h3>Iced Coffee</h3>
                    <div class="price">100.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
                <div class="box">
                    <img src="images/menu/4.png" alt="caramelmacchiato">
                    <h3>Caramel Macchiato</h3>
                    <div class="price">160.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
                <div class="box">
                    <img src="images/menu/6.png" alt="latte">
                    <h3>Latte</h3>
                    <div class="price">140.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
                <div class="box">
                    <img src="images/menu/5.png" alt="coffeewhitecream">
                    <h3>White Cream</h3>
                    <div class="price">180.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
                <div class="box">
                    <img src="images/menu/20.png" alt="cappucino">
                    <h3>Cappucino</h3>
                    <div class="price">120.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
                <div class="box">
                    <img src="images/menu/9.png" alt="buttermilk">
                    <h3>Butter Milk</h3>
                    <div class="price">120.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
                <div class="box">
                    <img src="images/menu/19.png" alt="caramellatte">
                    <h3>Caramel Latte</h3>
                    <div class="price">130.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
                <div class="box">
                    <img src="images/menu/21.png" alt="mocha">
                    <h3>Mocha</h3>
                    <div class="price">125.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
            </div>
            
            <h2>- Pastries -</h2>
            <div class="box-container">
                <div class="box">
                    <img src="images/menu/11.png" alt="cheesecake">
                    <h3>Cheese Cake</h3>
                    <div class="price">120.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
                <div class="box">
                    <img src="images/menu/12.png" alt="donut">
                    <h3>Donut</h3>
                    <div class="price">100.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
                <div class="box">
                    <img src="images/menu/13.png" alt="cinnamonroll">
                    <h3>CInnamon Roll</h3>
                    <div class="price">120.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
                <div class="box">
                    <img src="images/menu/14.png" alt="macaroon">
                    <h3>Macaroon</h3>
                    <div class="price">100.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
                <div class="box">
                    <img src="images/menu/15.png" alt="classiccookie">
                    <h3>Classic Cookie</h3>
                    <div class="price">90.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
                <div class="box">
                    <img src="images/menu/16.png" alt="oatmealcookie">
                    <h3>Oatmeal Cookie</h3>
                    <div class="price">110.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
                <div class="box">
                    <img src="images/menu/17.png" alt="chococookie">
                    <h3>Chocolate Cookie</h3>
                    <div class="price">100.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
                <div class="box">
                    <img src="images/menu/18.png" alt="chocomuffin">
                    <h3>Chocolate Muffin</h3>
                    <div class="price">120.00php</div>
                    <a href="#contact" class="btn">order</a>
                </div>
            </div>
        </section>

        <!-- ABOUT SECTION -->
        <section class="about" id="about">
            <h1 class="heading"><span>About</span> Us</h1>
            <div class="row">
                <div class="image">
                    <img src="images/about-img1.png" alt="">
                </div>

                <div class="content">
                    <h3> Welcome to Jake's Coffee!</h3>
                    <p>Nestled in the vibrant heart of Muntinlupa City, our journey began with a simple yet profound passion for great coffee. With a commitment to sourcing only the finest beans from sustainable and ethical suppliers worldwide, we ensure that each sip reflects the rich diversity and unique flavors of coffee-growing regions.</p>
                    <p>But our dedication to quality doesn't stop at sourcing. It's in the art of roasting where we truly shine. Our skilled roasters carefully craft each batch, coaxing out the full potential of the beans to create a symphony of aromas and flavors that dance on your palate with every sip. Yet, for us, <strong>coffee is more than just a beverage</strong>. It's a catalyst for connection, creativity, and community. From our cozy ambiance to our friendly baristas, we strive to create an inviting space where friends gather, ideas flow, and relationships are formed.</p>
                    <p>In Jake's Coffee, we believe that <strong>every cup tells a story</strong> and <strong>visit feels like coming home</strong> . Are you ready to tell yours?<p></p>
                    <a href="#contact" class="btn">learn more</a>
                    <i class="fa fa-facebook-square"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-twitter"></i>
                </div>
            </div>
        </section>

        <!-- REVIEWS SECTION -->
        <section class="reviews" id="reviews">
            <h1 class="heading">Customer's <span>Review</span></h1>

            <div class="box-container">
                <div class="box">
                    <img src="images/review/1.jpg" alt="taylor">
                    <div class="stars">
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                    </div>
                    <p>"Found this gem while wandering around town, and boy, am I glad! The coffee here is top-notch—bold, flavorful, and just what I need to kickstart my day. Plus, the vibe is super chill, perfect for hanging out with friends or just soaking up some me-time."</p>
                    <h3>- Taylor </h3>
                </div>
                <div class="box">
                    <img src="images/review/2.jpg" alt="iu">
                    <div class="stars">
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                    </div>
                    <p>"I don't normally leave reviews, but this place deserves a shoutout. The coffee? Perfect. The vibe? Perfect. The little nook in the corner where I can people-watch for hours? Also perfect. Seriously, why go anywhere else?"</p>
                    <h3>- IU</h3>
                </div>
                <div class="box">
                    <img src="images/review/3.jpg" alt="elon">
                    <div class="stars">
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                    </div>
                    <p>"Had a work meeting here the other day, and it was such a vibe! The cozy atmosphere totally helped get the creative juices flowing. Oh, and can we talk about the pastries? Delish! Already planning my next visit."</p>
                    <h3>- Elon</h3>
                </div>
                <div class="box">
                    <img src="images/review/4.jpg" alt="chimmy">
                    <div class="stars">
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                    </div>
                    <p> "Listen up, peeps. If you're in need of a caffeine fix and a sweet treat, Jake's Coffee is where it's at. Their coffee is so smooth and rich, it's like a warm hug for your taste buds. And their pastries? Let's just say resistance is futile. You've been warned."</p>
                    <h3>- Chimmy</h3>
                </div>
                <div class="box">
                    <img src="images/review/5.jpg" alt="luffy">
                    <div class="stars">
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                    </div>
                    <p> "Sugoooooiiiiii!!!!! Caramel Macchiato dabeeeeeees!!!!! with oatmeal cookies!!!!! Would definitely share this to sanji, zoro, chopper, usopp, nami, robin, brook, franky, and jimbei!!! I am Monkey D. Luffy! And I'm going to be the King of Pirates!!! " </p>
                    <h3>- Luffy</h3>
                </div>
                <div class="box">
                    <img src="images/review/6.jpg" alt="noname">
                    <div class="stars">
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                        <i class="material-icons" id="stars">star</i>
                    </div>
                    <p> "Everything's great. Good!"</p>
                    <h3>- Marie</h3>
                </div>
            </div>
        </section>

        <!-- CONTACT SECTION -->
        <section class="contact" id="contact">
            <h1 class="heading"> <span>Contact</span> Us</h1>
            <div class="row">
                <img src="images/contact-img.png" alt="image" class="jco">

                <form action="" id="orderform">
                    <h3>Order Now</h3>
                    <div class="inputbox">
                        <span class="material-icons">person</span>
                        <input type="text" placeholder="Name">
                    </div>
                    <div class="inputbox">
                        <span class="material-icons">mail</span>
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="inputbox">
                        <span class="material-icons">phone</span>
                        <input type="tel" placeholder="09xx-xxxx-xxx">
                    </div>
                    <div class="inputbox">
                        <span class="material-icons">shopping_cart</span>
                        <input type="text" placeholder="Enter your order">
                    </div>
                    <input type="submit" value="Send" class="btn">
                    <h3>Or connect with us</h3>
                        <i class="fa fa-facebook-square"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="material-icons">mail</i>
                </form>
            </div>
        </section>

        <!-- FOOTER -->
        <section class="footer">
            <div class="social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
            </div>

            <div class="links">
                <a href="#home">home</a>
                <a href="#products">products</a>
                <a href="#about">about us</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact us</a>
            </div>

            <div class="credit">Copyright © ️2024 Jake's Coffee <br> <a href="jake@coffee.com">jake@coffee.com</a></div>

        </section>
            
        <script>
            let navbar = document.querySelector('.navbar');
            let menuBtn = document.querySelector('#menu-btn');
            
            // Toggle navbar when menu button is clicked
            menuBtn.onclick = () =>{
                navbar.classList.toggle('active');
            }
            document.addEventListener('click', (event) => {
                const target = event.target;
                if (!target.matches('.navbar') && !target.matches('#menu-btn')) {
                    navbar.classList.remove('active');
                }
            });
        </script>
    </body>
</html>