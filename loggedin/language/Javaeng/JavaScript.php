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
<title>𝗧𝗨𝗥𝗔𝗬𝗠𝗔𝗧𝗛𝗜𝗖 𝗔𝗖𝗔𝗗𝗘𝗠𝗬</title>
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
            $lien="https://www.youtube-nocookie.com/embed/zBPeGR48_vE";
            $nom_vid="1 JavaScript Introduction";
            $chapitre="1";
            break;
          case '10':
            $lien="https://www.youtube-nocookie.com/embed/sEGC-adSKXo";
            $nom_vid="02 Development Environment Setting";
            $chapitre="1";
            break;
          case '11':
            $lien="https://www.youtube-nocookie.com/embed/KXxXr0RxGDE";
            $nom_vid="Basis JavaScript Syntax";
            $chapitre="1";
            break;
          case '12':
            $lien="https://www.youtube-nocookie.com/embed/plOo5hNVQJU";
            $nom_vid="JavaScript Variables";
            $chapitre="1";
            break;
          case '2':
            $lien="https://www.youtube-nocookie.com/embed/yjE_xXL26qA";
            $nom_vid="JavaaScript Data Types";
            $chapitre="2";
            break;
          case '3':
            $lien="https://www.youtube-nocookie.com/embed/jfQyMPzPTjY";
            $nom_vid="Java\script Type Conversion";
            $chapitre="2";
            break;
          case '17':
            $lien="https://www.youtube-nocookie.com/embed/nMQlXMHMz_Y";
            $nom_vid="Expression and Operations ";
            $chapitre="2";
            break;
          case '4':
            $lien="https://www.youtube-nocookie.com/embed/S2JVtEwa-kU";
            $nom_vid="JavaScript Arrays";
            $chapitre="3";
            break;
          case '5':
            $lien="https://www.youtube-nocookie.com/embed/yPJCFWLd23o";
            $nom_vid="JavaScript Function and Declarations";
            $chapitre="3";
            break;
          case '6':
            $lien="https://www.youtube-nocookie.com/embed/Wggcy2oKV3E";
            $nom_vid="JavaScript Function and Expression";
            $chapitre="3";
            break;
          case '7':
            $lien="https://www.youtube-nocookie.com/embed/Fk3tdDAWkCI";
            $nom_vid="JavaScript Decision Statement";
            $chapitre="3";
            break;
          case '16':
            $lien="https://www.youtube-nocookie.com/embed/sQ7YA0x8eUg";
            $nom_vid="JavaScript Iteration Statement";
            $chapitre="3";
            break;
          case '18':
            $lien="https://www.youtube-nocookie.com/embed/wCijt0OjnHc";
            $nom_vid="JavaScript Basis of Scope";
            $chapitre="3";
            break;
          case '8':/* Breakpoint */
            $lien="https://www.youtube-nocookie.com/embed/onTQRpF15hI";
            $nom_vid="JavaSCript Returning Function from Function";
            $chapitre="4";
            break;
          case '9':
            $lien="https://www.youtube-nocookie.com/embed/CNGv0soYFn0";
            $nom_vid="JavaScript Object Literals";
            $chapitre="4";
            break;
          case '13':
            $lien="https://www.youtube-nocookie.com/embed/CNohrcgM_hU";
            $nom_vid="JavaScript Module Pattern and Revealing Module Pattern";
            $chapitre="4";
            break;
          case '14':
            $lien="https://www.youtube-nocookie.com/embed/3Uy5cJ-UpS0";
            $nom_vid="JavaScript Closures";
            $chapitre="4";
            break;
          case '15':
            $lien="https://www.youtube-nocookie.com/embed/RNrrcxr-_PU";
            $nom_vid="JavaScript this Keyword";
            $chapitre="4";
            break;
          case '19':
            $lien="https://www.youtube-nocookie.com/embed/G0PC7D3XZBA";
            $nom_vid="JavaScript Destructuring";
            $chapitre="4";
            break;
          case '20':
            $lien="https://www.youtube-nocookie.com/embed/DeFK4lS5LIA";
            $nom_vid="JavaScript String Template Literals";
            $chapitre="4";
            break;
          case '21':
            $lien="https://www.youtube-nocookie.com/embed/jfC2tX-NUaI";
            $nom_vid="JavaScript Regular Expression";
            $chapitre="4";
            break;
          case '22':
            $lien="https://www.youtube-nocookie.com/embed/n5mvncHb-Y0";
            $nom_vid="JavaScript Built in Native";
            $chapitre="4";
            break;
          case '23':
            $lien="https://www.youtube-nocookie.com/embed/MBLCbJvyaA0";
            $nom_vid="JavaScript Constructor Function";
            $chapitre="4";
            break;
          case '24':
            $lien="https://www.youtube-nocookie.com/embed/1HEG5bvjJIA";
            $nom_vid="JavaScript Prototype Chain";
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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language_english.php" style="color:white;"></a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="java1.php" style="color:white;"></a></li>
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
                          Chapter 1 : Reading
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
                  </div>';
                  break;
                case '2':
                  echo '<!-- Détails chapitre 2 -->
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Chapter 2 :  Listening
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                    <a href="javaScript.php?video=2">&#10170  JavaScript Data Types </a><br>
                    <a href="javaScript.php?video=3">&#10170  JavaScript Type Conversion</a><br>
                    <a href="javaScript.php?video=17">&#10170  Expression and Operations </a><br>
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
                          Chapter 3 : Speaking
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                    <a href="javaScript.php?video=4">&#10170  JavaScript Array</a><br>
                    <a href="javaScript.php?video=5">&#10170  Function and Declarations</a><br>
                    <a href="javaScript.php?video=6">&#10170  JavaScript Function and Expression</a><br>
                    <a href="javaScript.php?video=7">&#10170  JavaScript Decision Statements</a><br>
                    <a href="javaScript.php?video=16">&#10170  JavaScript Iteration Statement</a><br>
                    <a href="javaScript.php?video=18">&#10170  JavaScript Basis of Scope</a><br>
                    </div>
                    </div>
                  </div>';
                  break;
                case '4':
                  echo '<!-- Détails  chapitre 4 -->
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           Chapter 4 : Other tips
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
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
                  </div>';
                  break;
              }
            }
          ?>
        </div>
    </div>
</div>

<?php require "../../../footer.php" ?>
