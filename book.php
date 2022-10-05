


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book page</title>


    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/76746a0aa0.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <style>
        @media(max-width:786px){
            .heading h1{
                font-size: 7rem;
            }
        }
    </style>
</head>
<body>
  <section class="header">
<a href="home.php" class="logo">travel.</a>

<nav class="navbar">
    <a href=home.php>home</a>
    <a href=about.php>about</a>
    <a href=package.php>package</a>
    <a href=book.php>book</a>
</nav>
<div id="menu-btn" class="fas fa-bars"></div>
  </section> 

<!--booking -->
<div class="heading" style="background: url(images/header-bg-3.png) no-repeat;">
    <h1>book now</h1>

</div>
<div class="booking">
    <h1 class="heading-title">book your trip</h1>
    <form action="book_form.php" method="post" class="book-form">
<div class="flex">
    <div class="inputbox">
        <span>name :</span>
        <input type="text" placeholder="enter yur name" name="name" id="name">
        
    </div>
    <div class="inputbox">
        <span>email :</span>
        <input type="email" placeholder="enter your email" name="email">

    </div>
    <div class="inputbox">
        <span>phone :</span>
        <input type="number" placeholder="enter your number" name="phone">

    </div>
    <div class="inputbox">
        <span>address :</span>
        <input type="text" placeholder="enter your address" name="address">

    </div>
    <div class="inputbox">
        <span>where to :</span>
        <input type="text" placeholder="place you want to visit" name="location">

    </div>
    <div class="inputbox">
        <span>how many :</span>
        <input type="number" placeholder="how many guest" name="guests">

    </div>
    <div class="inputbox">
        <span>arrivals :</span>
        <input type="date"  name="arrivals">

    </div>
    <div class="inputbox">
        <span>leaving :</span>
        <input type="date"  name="leaving">

    </div>
</div>

<input type="submit" value="submit" class="load-more btn" name="send">
    </form>
</div>





















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