<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TURAYMATHIC ACADEMY </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- links for the navbar that i've made  -->
    <link rel="stylesheet" href="../../../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styleloggedin.css">
    <!-- End of the links for the navbar that i've made  -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="../../../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/jquery-ui.css">
    <link rel="stylesheet" href="../../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../../css/aos.css">
    <link rel="stylesheet" href="../../../css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar  js-sticky-header site-navbar-target" role="banner">
      <div class="topnav" id="myTopnav">
      <a href="../../../loggedin.php" class="active">Home</a>
          <?php
          if (isset($_SESSION['userId'])){
            echo '<a href="../../../loggedin/profile.php" name="profile">Profile</a>
                  <a href="../../../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
          }
           ?>
         </div>
      </div>

    </header>

    <div class="intro-section single-cover" id="home-section">

      <div class="slide-1 text-white" style="background-image: url('../../../images/About US (2).png');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6">
                  <h1 data-aos="fade-up" data-aos-delay="0" class="text-white">Introduction to WordPress</h1>
                  <p data-aos="fade-up" data-aos-delay="100" class="text-white"> <a href="#" class="text-white"></a></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5">

            <div class="mb-5">
              <h3 class="text-black">Course Description</h3>
              <p>Beginners guide to Understand Everthg they need to know about WordPress.</p>
            </div>

            <div class="pt-5">
              <h3 class="mb-5">#</h3>
              <ul class="comment-list">

                <!-- <li class="comment">

                  <div class="vcard bio">
                    <img src="../../../images/comment3.jpg" alt="Image placeholder">
                  </div>

                  <div class="comment-body">
                    <h3>Amani Abidi</h3>
                    <div class="meta">August 2, 2020 at 7:00pm</div>
                    <p>Thank you !</p>
                  </div>
                </li>

                <li class="comment"> -->

                  <div class="vcard bio">
                    <img src="../../../images/Musa-Turay.jpg" alt="Image placeholder">
                  </div>

                  <!-- <div class="comment-body">
                    <h3>Khairane Ghliss</h3>
                    <div class="meta">August 19, 2020 at 5:40am</div>
                    <p>Good content , but I need more details!</p>
                  </div> -->

                </li>
              </ul>
              <!-- END comment-list -->
            </div>

          </div>

          <div class="col-lg-4 pl-lg-5">
            <div class="mb-5 text-center border rounded course-instructor">
              <h3 class="mb-5 text-black text-uppercase h6 border-bottom pb-3">Course Instructor</h3>
              <div class="mb-4 text-center">
                <img src="../../../images/Musa-Turay.jpg" alt="Image" class="w-25 rounded-circle mb-4">
                <h3 class="h5 text-black mb-4">Musa Turay</h3>
                <p> SITE PERSONNEL : https://turaymusa.com
                    
                With WordPress powering more than 40% of all websites on the internet, 
                there's never been a better time to build an income and a business around it.
                Learn the most current and modern best practices with WordPress design, hosting,
                management and business processes outlined in detail.

You're here because you want to master WordPress, right? Good idea. You're in the right place.  <br>
And, you can do it without learning any programming or coding.<br>

While WordPress is open source, and because of that has thousands of developers building resources for it, <br>
it still takes quite a bit of learning to become a master at building and managing websites with it.<br>
It's not just learning the WordPress software, there's a small amount of graphic design knowledge needed,<br>
hosting and server management, troubleshooting broken sites or problems by hacking into the back <br>
end and server setup, and properly staging development environments around new sites or <br>
when performing updates and changes on existing sites.<br>
                    
                    I like to learn
                    and want to fulfill my promise by teaching students.
                    Through several videos, I try to give you my knowledge and share my
                    skills to learn all together on various topics:
                    WordPress is an open source Content Management System (CMS), <br>
                    which allows the users to build dynamic websites and blogs. <br>
                    WordPress is the most popular blogging system on the web and allows updating, <br>
                    customizing and managing the website from its back-end CMS and components.
                     🙂</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <footer class="footer-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About TURAYMATHIC ACADEMY</h3>
            <p>An E-Learning platform rich of resources, We make learning easy and simple for Everyone.</p>
          </div>

          <div class="col-md-4">
            <h3>Subscribe</h3>
            <p>Keep yourself up to date and receive all kind of news about TURAYMATHIC.</p>
 </form><form action="https://gmail.us20.list-manage.com/subscribe/post?u=f920188bb3f12fb0aba844e37&amp;id=a08e449ab4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<!-- <h2>Subscribe to Turaymathic Academy NewsLetter</h2> -->
<div class="indicates-required"></div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear foot">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f920188bb3f12fb0aba844e37_a08e449ab4" tabindex="-1" value=""></div>
        <div class="optionalParent">
            <div class="clear foot">
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                <p class="brandingLogo"><a href="http://eepurl.com/h0OhFz" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p>
            </div>
        </div>
    </div>
</form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
       
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<i class="icon-heart" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank" ></a>
        
      </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div> <!-- .site-wrap -->

  <script src="../../../js/jquery-3.3.1.min.js"></script>
  <script src="../../../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../../js/jquery-ui.js"></script>
  <script src="../../../js/popper.min.js"></script>
  <script src="../../../js/bootstrap.min.js"></script>
  <script src="../../../js/owl.carousel.min.js"></script>
  <script src="../../../js/jquery.stellar.min.js"></script>
  <script src="../../../js/jquery.countdown.min.js"></script>
  <script src="../../../js/bootstrap-datepicker.min.js"></script>
  <script src="../../../js/jquery.easing.1.3.js"></script>
  <script src="../../../js/aos.js"></script>
  <script src="../../../js/jquery.fancybox.min.js"></script>
  <script src="../../../js/jquery.sticky.js"></script>


  <script src="../../../js/main.js"></script>

  </body>
</html>




<form action="https://gmail.us20.list-manage.com/subscribe/post?u=f920188bb3f12fb0aba844e37&amp;id=a08e449ab4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<!-- <h2>Subscribe to Turaymathic Academy NewsLetter</h2> -->
<div class="indicates-required"></div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear foot">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f920188bb3f12fb0aba844e37_a08e449ab4" tabindex="-1" value=""></div>
        <div class="optionalParent">
            <div class="clear foot">
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                <p class="brandingLogo"><a href="http://eepurl.com/h0OhFz" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p>
            </div>
        </div>
    </div>
</form>