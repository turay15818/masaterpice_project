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

  <?php
      $lien="";
      $nom_vid="";
      $chapitre="";
      if (isset($_GET['video'])){
        switch ($_GET['video']) {
          case '1':
            $lien="https://www.youtube-nocookie.com/embed/sVbEyFZKgqk";
            $nom_vid="Full PHP 8 Tutorial - Learn PHP The Right Way In 2022";
            $chapitre="1";
            break;
          case '2':
            $lien="https://www.youtube-nocookie.com/embed/KgUp3FomMoc";
            $nom_vid="How To Install PHP & What Are Web Servers - PHP 8 Tutorial";
            $chapitre="1";
            break;
          case '3':
            $lien="https://www.youtube-nocookie.com/embed/HrtS-FkPBqk";
            $nom_vid="Basic PHP Syntax - PHP 8 ";
            $chapitre="1";
            break;
          case '5':
            $lien="https://www.youtube-nocookie.com/embed/6JtP8xk1U_k";
            $nom_vid="What Are Constants & Variable Variables In PHP";
            $chapitre="1";
            break;
          case '4':/* Breakpoint */
            $lien="https://www.youtube-nocookie.com/embed/KH4MmQsCDuw";
            $nom_vid="PHP Data Types - Typecasting Overview & How It Works";
            $chapitre="2";
            break;
          case '6':
            $lien="https://www.youtube-nocookie.com/embed/1kO_g_ucYCQ";
            $nom_vid="PHP Boolean Data Type";
            $chapitre="2";
            break;
          case '7':
            $lien="https://www.youtube-nocookie.com/embed/rjEP_GUdg6o";
            $nom_vid="PHP Integer Data type";
            $chapitre="2";
            break;
          case '8':
            $lien="https://www.youtube-nocookie.com/embed/d3c_OOD4Jzs";
            $nom_vid="PHP Float Data Type ";
            $chapitre="2";
            break;
          case '9':/* Breakpoint */
            $lien="https://www.youtube-nocookie.com/embed/97LnEncGx2c";
            $nom_vid="PHP String Data Type - Heredoc & Nowdoc Syntax";
            $chapitre="3";
            break;
          case '10':
            $lien="https://www.youtube-nocookie.com/embed/XspbsepnhQ4";
            $nom_vid="PHP Null Data Type ";
            $chapitre="3";
            break;
          case '11':
            $lien="https://www.youtube-nocookie.com/embed/C8ZFLq24g_A";
            $nom_vid="PHP Array Data Type - Indexed, Associative & Multi-Dimensional Arrays";
            $chapitre="3";
            break;
          case '12':
            $lien="https://www.youtube-nocookie.com/embed/bPntels5hw8";
            $nom_vid="What Are Expressions In PHP & How They Are Evaluated";
            $chapitre="3";
            break;
          case '13':
            $lien="https://www.youtube-nocookie.com/embed/t8U2FGjjqM8";
            $nom_vid="PHP Operators Part 1";
            $chapitre="3";
            break;
          case '14':
            $lien="https://www.youtube-nocookie.com/embed/gCVlQdbddXY";
            $nom_vid="PHP Operators Part 2";
            $chapitre="3";
            break;
          case '15':/* Breakpoint */
            $lien="https://www.youtube-nocookie.com/embed/pmX_-x3LX-k";
            $nom_vid="PHP Operator Precedence & Associativity";
            $chapitre="4";
            break;
          case '16':
            $lien="https://www.youtube-nocookie.com/embed/PUWrc6vzRMw";
            $nom_vid="Control Structures in PHP - Conditional Statements - if/else";
            $chapitre="4";
            break;
          case '17':
            $lien="https://www.youtube-nocookie.com/embed/NhXvpHB_PMQ";
            $nom_vid="PHP Loops Tutorial - Break & Continue Statements";
            $chapitre="4";
            break;
          case '18':
            $lien="https://www.youtube-nocookie.com/embed/egDgLO8kvtI";
            $nom_vid="PHP Switch Statement - Switch vs if/else statement";
            $chapitre="4";
            break;
          case '19':
            $lien="https://www.youtube-nocookie.com/embed/jCUyvHUKSmE";
            $nom_vid="PHP Match Expression - Match vs Switch";
            $chapitre="4";
            break;
          case '20':
            $lien="https://www.youtube-nocookie.com/embed/6cPc_SEfgSw";
            $nom_vid="PHP Return, Declare & Tickable Statements ";
            $chapitre="4";
            break;
          default:
            # code...
            break;
        }
      }
   ?>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language.php" style="color:white;"></a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../php1.php" style="color:white;"></a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="video_display_for_php.php" style="color:white;">PHP for Beginners</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;"><?php echo $nom_vid ?></li>
  </ol>
</nav>


<div class="video_accordian_container">

    <div class="row">
        <div class="col-md-8">
          <!-- The actual video content -->
          <div class="iframe-container">
            <iframe width="950" height="550" src="<?php echo isset($lien)?$lien:''; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-4">
          <!-- The lessons within the same chapter  -->
          <?php
            if (isset($chapitre)){
              switch ($chapitre) {
                case '1':
                  echo '<!-- Détails chapitre 1 -->
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Chapter 1 : How to write in Arabic
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
                  </div>';
                  break;
                case '2':
                  echo '<!-- Détails chapitre 2 -->
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Chapter 2 : How to read in Arabic
                        </button>
                      </h2>
                    </div>
                    <div class="card-body">
                    <a href="video_display_for_php.php?video=4">&#10170  PHP Data Types - Typecasting Overview & How It Works</a><br>
                    <a href="video_display_for_php.php?video=6">&#10170  PHP Boolean Data Type</a><br>
                    <a href="video_display_for_php.php?video=7">&#10170  PHP Integer Data type</a><br>
                    <a href="video_display_for_php.php?video=8">&#10170  PHP Float Data Type </a><br>
                  </div>
                    </div>
                  </div>';
                  break;
                case '3':
                  echo '<!-- Détails chapitre 3 -->
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          Chapter 3 : Pronouns and Adjectives
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
        <a href="video_display_for_php.php?video=9">&#10170  STEP 10 - PHP String Data Type - Heredoc & Nowdoc Syntax</a><br>
        <a href="video_display_for_php.php?video=10">&#10170  PHP Null Data Type </a><br>
        <a href="video_display_for_php.php?video=11">&#10170  PHP Array Data Type - Indexed, Associative & Multi-Dimensional Arrays</a><br>
        <a href="video_display_for_php.php?video=12">&#10170  What Are Expressions In PHP & How They Are Evaluated</a><br>
        <a href="video_display_for_php.php?video=13">&#10170  PHP Operators Part 1</a><br>
        <a href="video_display_for_php.php?video=14">&#10170  PHP Operators Part 2</a><br>
        </div>
                    </div>
                  </div>';
                  break;
                case '4':
                  echo '<!-- Détails chapitre 4 -->
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           Chapter 4 : Practicing examples
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                    <a href="video_display_for_php.php?video=15">&#10170  PHP Operator Precedence & Associativity</a><br>
                    <a href="video_display_for_php.php?video=16">&#10170  Control Structures in PHP - Conditional Statements - if/else</a><br>
                    <a href="video_display_for_php.php?video=17">&#10170  PHP Loops Tutorial - Break & Continue Statements</a><br>
                    <a href="video_display_for_php.php?video=18">&#10170  PHP Switch Statement - Switch vs if/else statement</a><br>
                    <a href="video_display_for_php.php?video=19">&#10170  PHP Match Expression - Match vs Switch</a><br>
                    <a href="video_display_for_php.php?video=20">&#10170  PHP Return, Declare & Tickable Statements </a><br>
                  </div>
                    </div>
                  </div>';
                  break;

                default:
                  // code...
                  break;
              }
            }
           ?>
        </div>
    </div>
</div>

<?php require "../../../footer.php" ?>
