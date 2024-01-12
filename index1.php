<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mghari</title>
    <!--css-link-->
    
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;500;600;700&family=Playfair+Display:ital,wght@0,400;1,400;1,700&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
     session_start();
     if(!isset($_SESSION['mesclients']))
     {
        
     }
      
     

    ?>
    <header >
        <a href="#" class="logo"><img src="images/logo 2.png" alt=""></a>
        <ul class="navmenu">
            <li><a href="#">home</a></li>
            <li class="nave-link" ><a >E-SHOP</a>
                <ul class="drop-down" style="display: none">
                    <li><a href="vetements.php">vetements</a></li>
                    <li><a href="#"> chaussures</a> </li>
                    <li><a href="#"> sacs</a></li>
                </ul>
            </li>
            <li><a href="#about">about us</a></li>
            
        </ul>
        <div class="nav-icon">
            <a href="#"><i class='bx bx-search'></i></a>
            <a href="connexion.php"><i class='bx bx-user' ></i></a>
            <a href="#"><i class='bx bx-cart'></i></a>
        
          <div class="bx bx-menu" id="menu-icon">
                <ul class="drop-down" style="display: none">
                    <li><a href="vetements.php">vetements</a></li>
                    <li><a href="#"> chaussures</a> </li>
                    <li><a href="#"> sacs</a></li>
                </ul>
          </div>
  
        </div>
    </header>

    <section class="main-home">
        <img src="images/photo.jpeg" class="main-img ">
        <div class="main-text">
            <div>
                <h1>MGHARI</h1>
                <p>' where fashion meets fearlessness'</p>
                <a href ="contactus.php" class="main-btn">contact-us<i class='bx bx-right-arrow-circle' ></i></a>
            </div>
        </div>
        
    </section>
    <!--trending-product-section-->
    <section class="trending-product" id="products">
        <div class="center-text">
            <h2>our trending products</h2>
        </div>
        <div class="products">
            <div class="row">
                <img src="images/hoddie marron.jpeg" alt="">
                
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>zip hoodie</h4>
                    <p> 200DH</p>
                </div>
             </div>
             


            <div class="row">
                <img src="images/jean 1.jpeg" alt="">
                
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>blue jean</h4>
                    <p> 200DH</p>
                </div>
            </div>



            <div class="row">
                <img src="images/hoddie noir.jpeg" alt="">
               
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>crop hoodie</h4>
                    <p> 200DH</p>
                </div>
            </div>


            <div class="row">
                <img src="images/parachute vert.jpeg" alt="">
               
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4 > pant parachut</h4>
                    <p> 300DH</p>
                </div>
            </div>


            <div class="row">
                <img src="images/parachute noir.jpeg" alt="">
                
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>black parachut</h4>
                    <p> 300DH</p>
                </div>
            </div>

            <div class="row">
                <img src="images/jean2.jpeg" alt="">
               
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>blue jean</h4>
                    <p> 250DH</p>
                </div>
            </div>

            <div class="row">
                <img src="images/pant marron.jpeg" alt="">
               
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>plazzo pant</h4>
                    <p> 250DH</p>
                </div>

            </div>

            <div class="row">
                <img src="images/tricot avec  cole.jpeg" alt="">
                
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4> sweat-shirt rayures</h4>
                    <p> 250DH</p>
                </div>

            </div>

            <div class="row">
                <img src="images/jacket vert.jpeg" alt="">
              
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>short jacket</h4>
                    <p> 300DH</p>
                </div>

            </div>

            <div class="row">
                <img src="images/jean noir.jpeg" alt="">
               
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>black jean</h4>
                    <p> 250DH</p>
                </div>

            </div>

            <div class="row">
                <img src="images/tricot ciel.jpeg" alt="">
               
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>crochet cardigan</h4>
                    <p> 250DH</p>
                </div>

            </div>

            <div class="row">
                <img src="images/jean bleu avec poche.jpeg" alt="">
                
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>flap pocket cargo jean</h4>
                    <p> 250DH</p>
                </div>

            </div>

            <div class="row">
                <img src="images/jean vert.jpeg" alt="">
               
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>jean cargo</h4>
                    <p> 250DH</p>
                </div>

            </div>

            <div class="row">
                <img src="images/jacket beige.jpeg" alt="">
                
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>short jacket with pocket</h4>
                    <p> 250DH</p>
                </div>

            </div>
            <div class="row">
                <img src="images/tricot vert.jpeg" alt="">
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>crochet cardigan</h4>
                    <p> 250DH</p>
                </div>

            </div>
            <div class="row">
                <img src="images/pull.jpeg" alt="">
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>sac main </h4>
                    <p> 230DH</p>
                </div>

            </div>


            <div class="row">
                <img src="images/sac2.jpg" alt="">
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>sac main noir </h4>
                    <p> 230DH</p>
                </div>

            </div>


            <div class="row">
                <img src="images/sac3.jpg" alt="">
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>sac main </h4>
                    <p> 200DH</p>
                </div>

            </div>


            <div class="row">
                <img src="images/sac4.jpg" alt="">
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>sac main </h4>
                    <p> 230DH</p>
                </div>

            </div>


            <div class="row">
                <img src="images/sac5.jpg" alt="">
                <div class="heart-icon">
                    <i class='bx bx-heart' ></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>sac main</h4>
                    <p> 230DH</p>
                </div>

            </div>

            
        </div>
    </section>
     <!--video-->
    <section  class="about" id="about">
        <video  src="images/ma video.mp4" autoplay loop muted type="video/mp4" class=""></video>
        <div class="aboutus">
           <h1>about us</h1>
           <p>
            Bienvenue sur notre boutique en ligne, MGHARI. Nous sommes heureux de vous présenter une large sélection de vêtements de qualité pour les femmes, allant du style décontracté au style habillé. <br>
            Nous offrons une variété de vêtements, y compris des robes, des jupes, des pantalons, des shorts, des tops, des chemises, des chemisiers, des manteaux, des vestes et des pulls, ainsi que des accessoires tels que des sacs, des bijoux et des chaussures.<br>
            Nous sommes fièrement conscients de proposer des vêtements à la fois à la mode et abordables. Nous offrons régulièrement des remises et des offres spéciales et livrons gratuitement pour les commandes supérieures à 500 MAD.           <br>
            Nos vêtements sont conçus pour répondre aux besoins et aux préférences de nos clients. Nous mettons l'accent sur la qualité et la confortabilité de nos produits, tout en proposant un large éventail de styles et de couleurs.<br>
            Nous sommes également engagés dans l'amélioration continue de notre service clientèle, avec une équipe d'experts disponible pour répondre à toutes vos questions et à tous vos besoins.           <br>
            
            Nous vous invitons donc à découvrir notre large sélection de vêtements en ligne et à profiter de notre service clientèle exemplaire. Merci d'avoir choisi MGHARI comme votre destination préférée pour les vêtements en ligne!
            </p>
        </div>


    </section>

    <footer>
        <div class="container">
            <div class="footer">
                <div class="list-container">
                    <h3>Contact</h3>
                    <p>Service Client:</p>
                    <ul>
                        <li>Mail:<a href="#">mghariahlam@gmail.com</a></li>
                        <li>Tel:=(000)12345678</li>
                        <li>Du lundi au vendredi de 9h00 à 17h00</li>
                       
                    </ul>
                </div>
                <div class="list-container">
                    <h3>E-shop</h3>
                    <ul>
                        <li><a href="#">blouses & chemise</a></li>
                        <li><a href="#">pantalon</a></li>
                        <li><a href="#">robe & jupe</a></li>
                        <li><a href="#">jackets</a></li>
                        <li><a href="#">sac  main</a></li>
                    </ul>
                </div>
                <div class="list-container">
                    <h3>service client</h3>
                    <ul>
                        <li><a href="#">livraisons</a></li>
                        <li><a href="#">retours</a></li>
                        <li><a href="#">guide des tailles</a></li>
                        <li><a href="#">guide des tailles</a></li>
                    </ul>
                </div>
                <div class="list-container">
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=61553314263952&mibextid=ZbWKwL"><i class="fa fa-facebook-official"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-linkedin-square"></i></a>
                        <a href=""><i class="fa fa-google"></i></a>

                    </li>
                    <p class="copyright">MGHARI © 2023</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="index.js"></script>

</body>
</html>