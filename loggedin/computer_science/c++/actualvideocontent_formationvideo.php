<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../java/accordionstyle.css">
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
            $lien="https://www.youtube.com/embed/-t5WNFPoCCE";
            $nom_vid="What is WordPress and Why it is so Popular?";
            
            $nom_vid="Introduction";
            $chapitre="1";
            
            break;
          case '2':
            $lien="https://www.youtube.com/embed/kyCj2J7tgk4";
            $nom_vid="XAMPP Server Setup and WordPress Installation!";
            
            $nom_vid="";
            $chapitre="1";
            break;
            
          case '3':
            $lien="https://www.youtube.com/embed/RzFJvzNugt8";
            $nom_vid=" WordPress Dashboard or Backend Tour with Info";
            $chapitre="1";
            break;
            
          case '4':
            $lien="https://www.youtube.com/embed/dBInOCocjuQ";
            $nom_vid=" Complete WordPress BLOG Post Clearance";
            $chapitre="1";
            break;
            
          case '5':
            $lien="https://www.youtube.com/embed/K0JA9OZGKog";
            $nom_vid=" Media Library, Pages and Comments on Website";
            $chapitre="2";
            break;   
            
          case '6':
            $lien="https://www.youtube-nocookie.com/embed/ppggNyQoleQ";
            $nom_vid="WordPress Theme Customization";
            $chapitre="2";
            break;
            
          case '7':
            $lien="  https://www.youtube.com/embed/apRk7pNm1Ms";
            $nom_vid="Create Header & Footer Menu Manually on WordPress Website";
            $chapitre="2";
            break;
            
          case '8':
            $lien="https://www.youtube.com/embed/2-B9ZQ4SEH4";
            $nom_vid="  How Widget Works on a WordPress Website?";
            $chapitre="2";
            break;
            
          case '9':
            $lien="https://www.youtube.com/embed/apRk7pNm1Ms";
            $nom_vid="How to Install and Use on a WordPress Website?";
            $chapitre="3";
            break;
            
          case '10':
            $lien="https://www.youtube.com/embed/IDkxE9w4ZoE";
            $nom_vid="WordPress Users Role Explained";
            $chapitre="4";
            break;
            
          case '11':
            $lien="https://www.youtube-nocookie.com/embed/OGRzheVwke4";
            $nom_vid="TOOLS - IMPORT - EXPORT Shown ";
            $chapitre="4";
            break;
            
          case '12':
            $lien="https://www.youtube.com/embed/fahm_1q9-WQ";
            $nom_vid="How To Make A WordPress Website With Elementor | Beginners Tutorial 2022";
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
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science.php" style="color:white;">Computer Science</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_c++.php" style="color:white;">C++</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_c++_formationvideo.php" style="color:white;">WordPress</a></li>
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
                  echo '<div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Chapitre 1 : Introduction
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_formationvideo.php?video=1">&#10170  What is WordPress and Why it is so Popular?</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=2">&#10170  XAMPP Server Setup and WordPress Installation!</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=3">&#10170  WordPress Dashboard or Backend Tour with Info</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=5">&#10170  Complete WordPress BLOG Post Clearance</a><br>
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
                          Chapitre 2 : Manipulation des types de données
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_formationvideo.php?video=4">&#10170   Media Library, Pages and Comments on Website</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=7">&#10170  WordPress Theme Customization</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=8">&#10170  Create Header & Footer Menu Manually on WordPress Website</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=9">&#10170  Structures et Enumérations</a><br>
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
                          Chapitre 3 : Programmation procédurale
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_formationvideo.php?video=6">&#10170  How to Install and Use on a WordPress Website?</a><br>
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
                           Chapitre 4 : Programmation Orienté Objet
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_formationvideo.php?video=10">&#10170  WordPress Users Role Explained</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=11">&#10170  TOOLS - IMPORT - EXPORT Shown</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=12">&#10170  How To Make A WordPress Website With Elementor | Beginners Tutorial 2022</a><br>
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
