<?php

if (!isset($_SESSION["Iniciar"])) {
    if ($_SESSION["Iniciar"] != "ok") {
        echo '<script> window.location = "index.php?pagina=login";</script>';
        return;
    } else {
        echo '<script> windows.location = "index.php?pagina=story";</script>';
        return;
    }
}?>
<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
   <div class="container">
      <div class="breadcumd__wrapper center">
         <h1 class="left__content">
           our story
         </h1>
         <ul class="right__content">
            <li>
               <a href="index.php?pagina=home">
                  Home
               </a>
            </li>
            <li>
               <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
               story
            </li>
         </ul>
      </div>
   </div>
</section>
<!--=========== Breadcumd Section Here ========= -->

<!--=========== About Section Here ========= -->
<section class="about__section pt-120 pb-120">
   <div class="shape__right">
      <img src="html/assets/img/about/shape/right.png" alt="shape-image">
   </div>
   <div class="shape__one">
      <img src="html/assets/img/about/shape/shape1.png" alt="shape-image">
   </div>
   <div class="container">
      <div class="about__wrap">
         <div class="flower__shape wow fadeInUp" data-wow-duration="3s">
            <img src="html/assets/img/about/shape/flower1.png" alt="flower__image">
         </div>
         <div class="flower__shape__two wow fadeInDown" data-wow-duration="4s">
            <img src="html/assets/img/about/shape/flower2.png" alt="flower__image">
         </div>
         <div class="about__wrapper__one  owl-theme owl-carousel">
            <div class="about__items">
               <div class="about__thumb">
                  <img src="html/assets/img/about/about1.jpg" alt="about__image">
                  <div class="about__effect">
                     <h6 class="tittle">Photography</h6>
                  </div>
               </div>
             </div>
             <div class="about__items">
               <div class="about__thumb">
                  <img src="html/assets/img/about/about2.jpg" alt="about__image">
                  <div class="about__effect">
                     <h6 class="tittle">Fine Dining</h6>
                  </div>
               </div>
             </div>
             <div class="about__items">
               <div class="about__thumb">
                  <img src="html/assets/img/about/about3.jpg" alt="about__image">
                  <div class="about__effect">
                     <h6 class="tittle">Registry</h6>
                  </div>
               </div>
             </div>
         </div>
      </div>
   </div>
</section>
<!--=========== About Section End ========= -->

<!--=========== Story Section Here ========= -->
<section class="love__story__section pt-120 pb-120">
   <div class="left__shape wow fadeInDown" data-wow-duration="3s">
      <img src="html/assets/img/testi/shape-left.png" alt="left__shape">
   </div>
   <div class="right__shape wow fadeInUp" data-wow-duration="4s">
      <img src="html/assets/img/testi/shape-right.png" alt="left__shape">
   </div>
   <div class="container">
      <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
         <h2 class="section__title">
            our love story
         </h2>
         <img src="html/assets/img/tittle/flower.png" alt="flower__tittle">
      </div>
      <div class="row g-4 align-items-center">
         <div class="col-lg-6 col-md-12">
            <div class="love__story__content">
               <h2>
                  First Time We Meet
               </h2>
               <span>
                  Feb 01 2023
               </span>
               <p>
                  The couple takes seven full circles, walking clockwise around the agni, representing the seven principles and promises they make to each.Establishing and maintaining a healthy relationship is hard, and a therapist can help you navigate difficult times and develop essential relational skills.and a therapist can help you navigate difficult times and develop essential relational skills.
               </p>
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
           <div class="love__story__thumb">
            <img src="html/assets/img/love-story/love1.jpg" alt="love-image">
           </div>
         </div>
         <div class="col-lg-6 col-md-12 pt-70">
            <div class="love__story__thumb">
             <img src="html/assets/img/love-story/love2.jpg" alt="love-image">
            </div>
          </div>
          <div class="col-lg-6 col-md-12 pt-70">
            <div class="love__story__content">
               <h2>
                  Marige Proposal
               </h2>
               <span>
                  May 01 2023
               </span>
               <p>
                  The couple takes seven full circles, walking clockwise around the agni, representing the seven principles and promises they make to each.Establishing and maintaining a healthy relationship is hard, and a therapist can help you navigate difficult times and develop essential relational skills.and a therapist can help you navigate difficult times and develop essential relational skills.
               </p>
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
            <div class="love__story__content">
               <h2>
                  First Date
               </h2>
               <span>
                  Aug 01 2023
               </span>
               <p>
                  The couple takes seven full circles, walking clockwise around the agni, representing the seven principles and promises they make to each.Establishing and maintaining a healthy relationship is hard, and a therapist can help you navigate difficult times and develop essential relational skills.and a therapist can help you navigate difficult times and develop essential relational skills.
               </p>
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
           <div class="love__story__thumb">
            <img src="html/assets/img/love-story/love3.jpg" alt="love-image">
           </div>
         </div>
         <div class="col-lg-6 col-md-12 pt-70">
            <div class="love__story__thumb">
             <img src="html/assets/img/love-story/love4.jpg" alt="love-image">
            </div>
          </div>
          <div class="col-lg-6 col-md-12 pt-70">
            <div class="love__story__content">
               <h2>
                  Our Engagement
               </h2>
               <span>
                  Sep 01 2023
               </span>
               <p>
                  The couple takes seven full circles, walking clockwise around the agni, representing the seven principles and promises they make to each.Establishing and maintaining a healthy relationship is hard, and a therapist can help you navigate difficult times and develop essential relational skills.and a therapist can help you navigate difficult times and develop essential relational skills.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--=========== Story Section End ========= -->

<!--=========== Attending Section Here ========= -->
<section class="attending__section pt-120 pb-120">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="attending__items">
               <div class="attending__content center">
                  <h2>
                     Are You Attending?
                  </h2>
                  <h6>
                     Please reserve before June 19th, 2015. Lorem ipsum dolor sit amet, consectetur adipiscing
                  </h6>
                  <a href="#0" class="cmn--btn mt-4">
                     RSVP
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--=========== Attending Section End ========= -->