<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../../computer_science/java/accordionstyle.css">
<link rel="stylesheet" href="../../../style.css">
<title>TURAYMATHIC ACADEMY</title>
</head>

 <body>
   <div class="topnav" id="myTopnav">
   <a href="../../../loggedin.php" class="active">Home</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="../../profile.php" name="profile">Profile</a>
               <a href="../../../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
       }
        ?>
      </div>
 </header>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering.php" style="color:white;"></a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering_chemical.php" style="color:white;">HTML and CSS</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;"></li>

  </ol>
</nav>
<!-- the actual content of this course ( Mass transfer )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Chapter 1 : All the Lectures
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_lund.php?video=1">&#10170  HTML Crash Course For Absolute Beginners </a><br>
        <a href="actualvideocontent_lund.php?video=2">&#10170  CSS Crash Course For Absolute Beginners</a><br>
        <a href="actualvideocontent_lund.php?video=3">&#10170  Build An HTML5 Website With A Responsive Layout</a><br>
        <a href="actualvideocontent_lund.php?video=4">&#10170  Flexbox CSS In 20 Minutes</a><br>
        <a href="actualvideocontent_lund.php?video=5">&#10170  CSS Grid Layout Crash Course</a><br>
        <a href="actualvideocontent_lund.php?video=6">&#10170  Build a Netflix Landing Page Clone with HTML, CSS & JS</a><br>
        <a href="actualvideocontent_lund.php?video=7">&#10170  Microsoft Homepage Clone - CSS Grid, Flex & Media Queries</a><br>
        <a href="actualvideocontent_lund.php?video=8">&#10170  Responsive Landing Page Using HTML & CSS (A Little jQuery)</a><br>
        <a href="actualvideocontent_lund.php?video=9">&#10170  Pluralsight Login Page Clone - HTML & CSS</a><br>
        <a href="actualvideocontent_lund.php?video=10">&#10170  HTML & CSS Easy Elegant Landing Page With Blur Effect</a><br>
        <a href="actualvideocontent_lund.php?video=11">&#10170  Build a Responsive, Mobile First Website - HTML5 & CSS3</a><br>
        <a href="actualvideocontent_lund.php?video=12">&#10170  Easy Fullscreen Landing Page With HTML & CSS</a><br>
        <a href="actualvideocontent_lund.php?video=13">&#10170  CSS Grid Layout With Image Span</a><br>
        <a href="actualvideocontent_lund.php?video=14">&#10170  Sliding Sign In & Sign Up Form</a><br>
        <a href="actualvideocontent_lund.php?video=15">&#10170  CSS Variables Tutorial (CSS Custom Properties)</a><br>
        <a href="actualvideocontent_lund.php?video=16">&#10170  Pure CSS Hamburger Menu & Overlay</a><br>
        <a href="actualvideocontent_lund.php?video=17">&#10170  Full Screen Video Background - HTML & CSS</a><br>
        <a href="actualvideocontent_lund.php?video=18">&#10170  Basic Parallax Website With HTML & CSS</a><br>
        <a href="actualvideocontent_lund.php?video=19">&#10170  CSS Text Background Animation</a><br>
        <a href="actualvideocontent_lund.php?video=20">&#10170  Easy Responsive CSS3 Pricing Tables</a><br>
        <a href="actualvideocontent_lund.php?video=21">&#10170  Responsive HTML & CSS Side Menu From Scratch</a><br>
        <a href="actualvideocontent_lund.php?video=22">&#10170  Quick & Easy CSS Loaders</a><br>
      </div>
    </div>
  </div>

</div>

<?php require "../../../footer.php" ?>
