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
<title>𝗧𝗨𝗥𝗔𝗬𝗠𝗔𝗧𝗛𝗶𝗖 𝗔𝗖𝗔𝗗𝗘𝗠𝗬</title>
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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../english_javascript.php" style="color:white;"></a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;"></li>

  </ol>
</nav>
<!-- the actual content of this course ( IELTS lessons )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
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
        <a href="javaScript.php?video=1">&#10170   JavaScript Introduction</a><br>
        <a href="javaScript.php?video=10">&#10170   Development Environment Setting</a><br>
        <a href="javaScript.php?video=11">&#10170   Basis JavaScript Syntax</a><br>
        <a href="javaScript.php?video=12">&#10170  JavaScript Variables</a><br>
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
        <a href="javaScript.php?video=2">&#10170  JavaScript Data Types </a><br>
        <a href="javaScript.php?video=3">&#10170  JavaScript Type Conversion</a><br>
        <a href="javaScript.php?video=17">&#10170  Expression and Operations </a><br>
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
        <a href="javaScript.php?video=4">&#10170  JavaScript Array</a><br>
        <a href="javaScript.php?video=5">&#10170  Function and Declarations</a><br>
        <a href="javaScript.php?video=6">&#10170  JavaScript Function and Expression</a><br>
        <a href="javaScript.php?video=7">&#10170  JavaScript Decision Statements</a><br>
        <a href="javaScript.php?video=16">&#10170  JavaScript Iteration Statement</a><br>
        <a href="javaScript.php?video=18">&#10170  JavaScript Basis of Scope</a><br>
        </div>
    </div>
  </div>
  <!-- Détails  chapitre 4 -->
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
        <a href="javaScript.php?video=8">&#10170  JavaScript Returning Function from Function</a><br>
        <a href="javaScript.php?video=9">&#10170  JavaScript Object Literals</a><br>
        <a href="javaScript.php?video=13">&#10170  JavaScript Module Pattern and Revealing Module Pattern</a><br>
        <a href="javaScript.php?video=14">&#10170  JavaSCript Closures</a><br>
        <a href="javaScript.php?video=15">&#10170  JavaScript this Keyword</a><br>
        <a href="javaScript.php?video=19">&#10170  JavaScript Destructuring</a><br>
        <a href="javaScript.php?video=20">&#10170  JavaScript String Template Literals</a><br>
        <a href="javaScript.php?video=21">&#10170  JavaScript Regular Expression</a><br>
        <a href="javaScript.php?video=22">&#10170  JavaScript Built in Native</a><br>
        <a href="javaScript.php?video=23">&#10170  JavaScript Constructor Function</a><br>
        <a href="javaScript.php?video=24">&#10170  JavaScript Prototype Chain</a><br>
      </div>
    </div>
  </div>
</div>

<?php require "../../../footer.php" ?>
