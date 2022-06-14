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
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language.php" style="color:white;"></a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language_french.php" style="color:white;"></a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Introduction to Figma</li>

  </ol>
</nav>
<!-- the actual content of this course ( French Lessons B1 )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Chapter : 
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_vincent.php?video=3">&#10170  Introduction to Figma - 2022 Beginners Tutorial (Everything You Need to Know in 20 minutes) </a><br>
        <a href="actualvideocontent_vincent.php?video=4">&#10170  Figma Tutorial: Setup a Responsive Grid Layout for UI & Web Design (IN 11 MINUTES) </a><br>
        <a href="actualvideocontent_vincent.php?video=5">&#10170  Figma Tutorial: Create the Perfect Typography Scale for UI & Web Projects (IN 10 MINUTES) - Part 1 </a><br>
        <a href="actualvideocontent_vincent.php?video=6">&#10170  Figma Tutorial: New Figma Auto Layout & Constraints (W/ UI DESIGN EXERCISE) </a><br>
        <a href="actualvideocontent_vincent.php?video=7">&#10170  Figma Tutorial: Variants in 11 minutes (With Demo File & Real Examples) </a><br>
        <a href="actualvideocontent_vincent.php?video=8">&#10170  5 Best Figma Plugins for 2021 | UI & UX Design Tools </a><br>
        <a href="actualvideocontent_vincent.php?video=9">&#10170  Figma Tutorial: Create Interactive Components with a Real Project (In 7 Minutes) </a><br>
        <a href="actualvideocontent_vincent.php?video=10">&#10170  Figma Tutorial: Smart Animate - Create UI & Web Animations (in 17 Minutes) </a><br>
        <a href="actualvideocontent_vincent.php?video=11">&#10170  Figma Tutorial: Create a RESPONSIVE Typography Scale for Mobile & Tablet - Part 2</a><br>
        <a href="actualvideocontent_vincent.php?video=12">&#10170  Figma Tutorial: Glassmorphism UI Design Tutorial for Beginners</a><br>
        <a href="actualvideocontent_vincent.php?video=13">&#10170  Top 6 TIME-SAVING Figma Plugins for Busy Designers</a><br>
        <a href="actualvideocontent_vincent.php?video=14">&#10170  Advanced Tips to Design FASTER in Figma</a><br>
        <a href="actualvideocontent_vincent.php?video=15">&#10170  Create a Figma Design System - Fundamentals (Part 1)</a><br>
        <a href="actualvideocontent_vincent.php?video=16">&#10170  Create a Figma Design System - Color Systems Tutorial (Part 2)</a><br>
        <a href="actualvideocontent_vincent.php?video=17">&#10170  Create a Figma Design System - Type Styles Tutorial (Part 3)</a><br>
        <a href="actualvideocontent_vincent.php?video=18">&#10170  Create a Figma Design System - Button Systems W/ Variants Tutorial (Part 4)</a><br>
      </div>
    </div>
  </div>

</div>

<?php require "../../../footer.php" ?>
