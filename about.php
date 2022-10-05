<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about page</title>


    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/76746a0aa0.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <style>
        @media (max-width:786px){ .review-slider {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
            }
            .review-slider .slide{
                flex-basis: 40%;
            }
            .review-slider .slide img {
                margin-left: 50px;
            }
        }
    </style>
</head>
<body>
  <section class="header"
  >
<a href="home.php" class="logo">travel.</a>

<nav class="navbar">
    <a href=home.php>home</a>
    <a href=about.php>about</a>
    <a href=package.php>package</a>
    <a href=book.php>book</a>
</nav>
<div id="menu-btn" class="fas fa-bars"></div>
  </section> 

<!--about -->
<div class="heading" style="background: url(images/header-bg-1.png) no-repeat;">
    <h1>about us</h1>

</div>

<section class="aboutus">
    <div class="image">
    <img src="images/about-img.jpg" alt=""></div>
    <div class="content">
        <h3>why choose us?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium minus corrupti et ipsa tenetur eum non quisquam ullam necessitatibus quibusdam.</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam consequatur fuga corrupti repudiandae tempora totam nihil culpa praesentium ullam, blanditiis quasi saepe voluptate iusto repellendus. Optio vel expedita eum aliquid!</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                    <span>top destination</span>
                
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                    <span>24/7 guid service</span>
                
            </div>
        </div>

    </div>
</section>


<!-- reviews -->
<section class="review">
    <h1 class="heading-title">Our Client Opinion</h1>
    <div class="review-slider">
        
            <div class="slide">
    <img src="images/pic-1.png" alt="">
    <h1>Arayan</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, quisquam.</p>
        <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
            </div>
        
            <div class="slide">
    <img src="images/pic-2.png" alt="">
    <h1>karna</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, quisquam.</p>
            </div>
        
            <div class="slide">
    <img src="images/pic-3.png" alt="">
    <h1>alison</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, quisquam.</p>
            </div>
            <div class="slide">
    <img src="images/pic-4.png" alt="">
    <h1>alison</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, quisquam.</p>
            </div>
            <div class="slide">
    <img src="images/pic-5.png" alt="">
    <h1>alison</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, quisquam.</p>
            </div>
        
    </div>
</section>
















<!--footer -->
  <section class="footer">
<div class="box-container">
        <div class="box">
            <h3>quick links</h3>
    <a href=home.php> <i class="fas fa-angle-right"></i>
        home</a>
    <a href=about.php> <i class="fas fa-angle-right"></i>
        about</a>
    <a href=package.php> <i class="fas fa-angle-right"></i>
        package</a>
    <a href=book.php> <i class="fas fa-angle-right"></i>
        book</a>  
        </div>


        <div class="box">
            <h3>extra links</h3>
    <a href="#"> <i class="fas fa-angle-right"></i>
        ask questions</a>
    <a href="#"> <i class="fas fa-angle-right"></i>
        about us</a>
    <a href="#"> <i class="fas fa-angle-right"></i>
        privacy policy</a>
    <a href="#"> <i class="fas fa-angle-right"></i>terms of use
</a>
    
        </div>
        <div class="box">
            <h3>contact info</h3>
    <a href="#"> <i class="fas fa-phone"></i>
        +91 6754678998</a>
    <a href="#"> <i class="fas fa-phone"></i>
       080-76897865 </a>
    <a href="#"> <i class="fas fa-envelope"></i>
        karvy@gmail.com</a>
    <a href="#"> <i class="fas fa-map"></i>
       Bangalore, Karnataka,India</a>
    
    
        </div>
        <div class="box">
            <h3>follow us</h3>
    <a href="#"> <i class="fab fa-facebook-f"></i>
       facebook</a>
    <a href="#"> <i class="fab fa-twitter"></i>
       twitter</a>
    <a href="#"> <i class="fab fa-instagram"></i>
       instagram</a>
    
    
    
        </div>

</div>

<div class="credit">
    created by web developer manu
</div>

  </section>
<script src="script.js">

</script>
</body>
</html>