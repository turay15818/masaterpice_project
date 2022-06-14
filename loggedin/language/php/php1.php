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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../php1.php" style="color:white;"></a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">PHP for Beginners</li>

  </ol>
</nav>

  <div class="accordion" id="accordionExample">
	<!-- Chapter  1 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Chapter 1 :
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="video_display_for_php.php?video=1">&#10170  Full PHP 8 Tutorial - Learn PHP The Right Way In 2022</a><br>
        <a href="video_display_for_php.php?video=2">&#10170  How To Install PHP & What Are Web Servers</a><br>
        <a href="video_display_for_php.php?video=3">&#10170  Basic PHP Syntax - PHP </a><br>
        <a href="video_display_for_php.php?video=5">&#10170  What Are Constants & Variable Variables In PHP</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapter 2 : 
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="video_display_for_php.php?video=4">&#10170  PHP Data Types - Typecasting Overview & How It Works</a><br>
        <a href="video_display_for_php.php?video=6">&#10170  PHP Boolean Data Type</a><br>
        <a href="video_display_for_php.php?video=7">&#10170  PHP Integer Data type</a><br>
        <a href="video_display_for_php.php?video=8">&#10170  PHP Float Data Type </a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 3 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapter 3 : 
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="video_display_for_php.php?video=9">&#10170  STEP 10 - PHP String Data Type - Heredoc & Nowdoc Syntax</a><br>
        <a href="video_display_for_php.php?video=10">&#10170  PHP Null Data Type </a><br>
        <a href="video_display_for_php.php?video=11">&#10170  PHP Array Data Type - Indexed, Associative & Multi-Dimensional Arrays</a><br>
        <a href="video_display_for_php.php?video=12">&#10170  What Are Expressions In PHP & How They Are Evaluated</a><br>
        <a href="video_display_for_php.php?video=13">&#10170  PHP Operators Part 1</a><br>
        <a href="video_display_for_php.php?video=14">&#10170  PHP Operators Part 2</a><br>
        </div>
    </div>
  </div>
  <!-- Détails chapitre 4 -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapter 4 : 
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <a href="video_display_for_php.php?video=15">&#10170  PHP Operator Precedence & Associativity</a><br>
        <a href="video_display_for_php.php?video=16">&#10170  Control Structures in PHP - Conditional Statements - if/else</a><br>
        <a href="video_display_for_php.php?video=17">&#10170  PHP Loops Tutorial - Break & Continue Statements</a><br>
        <a href="video_display_for_php.php?video=18">&#10170  PHP Switch Statement - Switch vs if/else statement</a><br>
        <a href="video_display_for_php.php?video=19">&#10170  PHP Match Expression - Match vs Switch</a><br>
        <a href="video_display_for_php.php?video=20">&#10170  PHP Return, Declare & Tickable Statements </a><br>
      </div>
    </div>
  </div>
</div>

<?php require "../../../footer.php" ?>
