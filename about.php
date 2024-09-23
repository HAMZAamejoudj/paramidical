<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/23.png" alt="">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>
        <p> Hey there! I'm Hamza Amejoudj, a full-stack web developer. I love designing websites and exploring new things. Learning new things is my hobby.

         <p>I would like to thank <a href="#" target="_blank">Mr. HAMZA_AMEJOUDJ</a> Sir for guiding me through the session and making me able to develop projects like this. </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews.</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/myimag.jpg" alt="">
         <p>En général, je suis très satisfait de la variété de produits disponibles sur leur plateforme en ligne. Leur gamme est toujours à jour et répond à mes besoins. De plus, j'apprécie particulièrement la facilité de navigation sur leur site web, ce qui rend l'expérience d'achat agréable et sans tracas.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> <a href="#" target="_blank">HAMZA_AMEJOUDJ</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/myimag.jpg" alt="">
         <p>En général, je suis très satisfait de la variété de produits disponibles sur leur plateforme en ligne. Leur gamme est toujours à jour et répond à mes besoins. De plus, j'apprécie particulièrement la facilité de navigation sur leur site web, ce qui rend l'expérience d'achat agréable et sans tracas.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> <a href="#" target="_blank">HAMZA_AMEJOUDJ</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/myimag.jpg" alt="">
         <p>En général, je suis très satisfait de la variété de produits disponibles sur leur plateforme en ligne. Leur gamme est toujours à jour et répond à mes besoins. De plus, j'apprécie particulièrement la facilité de navigation sur leur site web, ce qui rend l'expérience d'achat agréable et sans tracas.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> <a href="#" target="_blank">HAMZA_AMEJOUDJ</a></h3>
      </div>

     

      

     

   </div>

   <div class="swiper-pagination"></div>
   </div>
   <div class="maps">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.814385185462!2d-6.8523706252039895!3d33.971610021985164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76d114a287163%3A0xaa5d0fef9f70a325!2sRabat%20sal%C3%A9!5e0!3m2!1sfr!2sma!4v1712011699232!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>