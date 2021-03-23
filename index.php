<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <a href="https://icons8.com/icon/61864/artificial-intelligence"></a>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
      integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
      integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="styling.css" />
  </head>
  <body onload="myfunction()">
    <div id="loading"></div>
    <!-- START OF HOME SECTION  -->
  
    <?php include("header_nav.php"); ?>
    <section class="primary" id="Home">
      <section class="main">
        <h1 class="heading">We are <span class="typing"></span></h1>
        <p>
          <a href="#about"
            ><button id="btnn" type="button">Get Started</button></a
          >
        </p>
      </section>
    </section>
    <!-- END OF HOME SECTION  -->

    <!-- START OF ABOUT SECTION -->
    <section>
    <div id="about" class="about-section reveal">
      <div class="inner-section">
        <h1>About Us</h1>
        <div class="content reveal"></div>
        <p class="text">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure velit
          voluptatem natus corrupti? Maxime, quibusdam. Quas magni quasi ea sit?
          voluptatem natus corrupti? Maxime, quibusdam. Quas magni quasi ea sit?
        </p>
        <div class="skills">
          <span>Think</span>
          <span>Create</span>
          <span>Build</span>
        </div>
      </div>
    </div>
  </section>

    <!-- END OF ABOUT SECTION -->

    <!-- START OF SERVICES SECTION -->
    <section>
    <div id="services"></div>
    <div class="service" >
      <div id="head">
        <h1 class="services-heading">Our Services</h1>
      </div>
      <div class="row reveal">
        <div class="col-md-3 text-center">
          <div class="icon">
            <i class="fa fa-desktop" aria-hidden="true"></i>
          </div>
          <h3>Web Development</h3>
          <p>
            We provide Static and Dynamic Website Design and Development in
            PHP4, PHP5 using MySql. We also provide Content Management
            System(CMS) as Joomla, Wordpress and E-commerce.
          </p>
        </div>
        <div class="col-md-3 text-center">
          <div class="icon">
            <i class="fas fa-database"></i>
          </div>
          <h3>Big Data</h3>
          <p>
            Our team provide a solution to handle Big data using Hadoop. It has various components such as hdfs, Hive, HBase, Spark, kafka etc. We can handle both batch aw well as streaming data. This help various business organization to gain insight.
          </p>
        </div>
        <div class="col-md-3 text-center">
          <div class="icon">
            <i class="fas fa-robot"></i>
          </div>
          <h3>Machine Learning</h3>
          <p>
            Our team designed various projects through the simulation of human intelligence in machines to solve some real-time problems using various platforms and languages.
          </p>
        </div>
        <div class="col-md-3 text-center">
          <div class="icon">
            <i class="fas fa-laptop-code"></i>
          </div>
          <h3>IOT</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Necessitatibus libero quasi quae modi quisquam beatae numquam enim
            quam recusandae.
          </p>
        </div>
      </div>
    </div>
  </section>
    <!-- START OF PROJECT SECTION -->
    <section>
    <div id="project" class="projects">
      <div id="head">
        <h1 class="project-heading">Projects</h1>
      </div>
      <div class="project-section reveal">
        <div class="card">
          <div class="image">
            <img src="project1.jpg" alt="project" />
          </div>
          <div class="title">
            <h1>Helmet Detection</h1>
          </div>
          <div class="des">
            <p>Lorem ipsum dolor sit amet consectetu rconsecte turconsectur</p>
            <button>Read More</button>
          </div>
        </div>

        <div class="card">
          <div class="image">
            <img src="project1.jpg" alt="project" />
          </div>
          <div class="title">
            <h1>Helmet Detection</h1>
          </div>
          <div class="des">
            <p>Lorem ipsum dolor sit amet ipsum dolor consectetur</p>
            <button>Read More</button>
          </div>
        </div>

        <div class="card">
          <div class="image">
            <img src="project1.jpg" alt="project" />
          </div>
          <div class="title">
            <h1>Helmet Detection</h1>
          </div>
          <div class="des">
            <p>Lorem ipsum dolor ipsum dolor sit amet consectetur</p>
            <button>Read More</button>
          </div>
        </div>

        <div class="card">
          <div class="image">
            <img src="project1.jpg" alt="project" />
          </div>
          <div class="title">
            <h1>Helmet Detection</h1>
          </div>
          <div class="des">
            <p>Lorem ipsum dolor ipsum dolor sit amet consectetur</p>
            <button>Read More</button>
          </div>
        </div>
      </div>
      <div class="show-more">
        <button>Show More</button>
      </div>
    </div>
  </section>
    <!-- END OF PROJECT SECTION -->

    <!-- START OF TEAM SECTION  -->
    <section id="team" class="testimonials">
      <div id="head">
        <h1 class="team-heading">Team</h1>
      </div>
      <div class="container reveal">
        <div class="row">
          <div class="col-sm-12">
            <div id="customers-testimonials" class="owl-carousel">
  
              <!-- testimonial 1 -->
              <div class="item reveal">
                <div class="shadow-effect">
                  <img class="img-circle" src="Farhan.jpg" alt="">
                  <p>It is a long established  page when looking at its layout.</p>
                  <div class="links">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></i></a>
                  </div>
                </div>
                <div class="testimonial-name">Farhan Khan</div>
              </div>
  
              <!-- testimonial 2 -->
              <div class="item reveal">
                <div class="shadow-effect">
                  <img class="img-circle" src="Farhan.jpg" alt="">
                  <p>It is a long established fact  looking at its layout.</p>
                  <div class="links">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></i></a>
                  </div>
                </div>
                <div class="testimonial-name">Sarthak Shankhdhar</div>
              </div>
  
              <!-- testimonial 3 -->
              <div class="item reveal">
                <div class="shadow-effect">
                  <img class="img-circle" src="Farhan.jpg" alt="">
                  <p>It is a long established fact page when looking at its layout.</p>
                  <div class="links">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></i></a>
                  </div>
                </div>
                <div class="testimonial-name">Saksham Garg</div>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END OF TEAM SECTION  -->


 
<section>   
    <div id="contact" class="contacts">
      
      <div class="contact-links">
        <h1 id="contact-heading">Contact Us</h1>
          <div class="follow-heading">
              <h1><i class="fa fa-users" aria-hidden="true"></i> Follow Us</h1>
          </div>
          <div class="follow">
              <div class="contact-tabs" ><a href=""><img
                          src="https://img.icons8.com/color/48/000000/linkedin.png" /><span>LinkedIn</span></a></div>
              <div class="contact-tabs" ><a href=""><img
                          src="https://img.icons8.com/color/48/000000/facebook-circled.png" /><span>Facebook</span></a>
              </div>
          </div>
          <div class="email">
              <div class="follow-heading">
                  <h1><i class="fas fa-envelope"></i> E-mail Us</h1>
              </div>
              <div class="contact-tabs" id="mail" >
                  <a href="mailto:techgalaxies03@gmail.com?subject=My project details"><img
                          src="https://img.icons8.com/color/48/000000/gmail.png" /><span>Gmail</span></a></div>
          </div>
      </div>

      <div id="contact-map">
          <a href="https://goo.gl/maps/mFz44bN4yFy4VvT1A" target="_blank">
              <div id="map-tile">
                  <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3440.710862751278!2d77.96464421507844!3d30.415944281748644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3908d4890d7c1735%3A0x22d3ae324c238e3c!2sUPES!5e0!3m2!1sen!2sin!4v1595315106890!5m2!1sen!2sin"
                      width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                      aria-hidden="false" tabindex="0"></iframe>
                  <span>Location</span>
          </a>
      </div>

  </div>
  </div> 
</section>

    
    <!-- START OF FOOTER SECTION  -->
    <?php include("footer.php"); ?>
  <!-- END OF FOOTER SECTION  -->

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
      integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
      crossorigin="anonymous"
    ></script>
    <script src="/path/to/cdn/jquery.min.js"></script>
<script src="/path/to/dist/jquery.scroll-spy.min.js"></script>
    <script>



        $('.navb-list a').click(function(){
    $(".navb-list").collapse('hide');
});


      var preloader= document.getElementById('loading');
      function myfunction(){
        preloader.style.display= 'none';
      }
      jQuery(document).ready(function($) {
  "use strict";
  //  TESTIMONIALS CAROUSEL HOOK
  $('#customers-testimonials').owlCarousel({
      loop: true,
      center: true,
      items: 3,
      margin: 0,
      autoplay: true,
      dots:true,
      autoplayTimeout: 8500,
      smartSpeed: 450,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1170: {
          items: 3
        }
      }
  });
});

 

      var typed = new Typed(".typing", {
        strings: ["Developer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true,
      });
      window.addEventListener("scroll", reveal);

      function reveal() {
        var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
          var windowheight = window.innerHeight;
          var revealtop = reveals[i].getBoundingClientRect().top;
          var revealpoint = 150;

          if (revealtop < windowheight - revealpoint) {
            reveals[i].classList.add("activate");
          } else {
            reveals[i].classList.remove("activate");
          }
        }
      }
    </script>
  </body>
</html>
