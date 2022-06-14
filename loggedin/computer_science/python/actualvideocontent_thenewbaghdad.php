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
            $lien="https://www.youtube-nocookie.com/embed/bzZyCB5QT9I";
            $nom_vid="What is Bootstrap and Why Bootstrap";
            $chapitre="1";
            break;
          case '2':
            $lien="https://www.youtube-nocookie.com/embed/MYla235sBNY";
            $nom_vid="What new in Bootstrap 5";
            $chapitre="1";
            break;
          case '3':
            $lien="https://www.youtube-nocookie.com/embed/fsGBCliEKqM";
            $nom_vid="Layout and grid in Bootstrap";
            $chapitre="1";
            break;
          case '4':
            $lien="https://www.youtube-nocookie.com/embed/UyePy_DJBLU";
            $nom_vid="Designing and Gridlayout";
            $chapitre="1";
            break;
          case '5':
            $lien="https://www.youtube-nocookie.com/embed/hWcFqtQI3qE";
            $nom_vid="Responsive Layout in Bootstrap";
            $chapitre="1";
            break;
          case '7':
            $lien="https://www.youtube-nocookie.com/embed/uwL5ZA4Rfac";
            $nom_vid="Life Project Design Example 1";
            $chapitre="1";
            break;
          case '6':/* Breakpoint  */
            $lien="https://www.youtube.com/embed/CXtfzHcqI94";
            $nom_vid="Life Project Example 2";
            $chapitre="2";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/7kHkeONEHGs";
            $nom_vid="Life Project Example 3";
            $chapitre="2";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/nZZ06J1EUqM";
            $nom_vid="Bootstrap Navbar Tutorial";
            $chapitre="2";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/5ImiW-MdRxo";
            $nom_vid="Bootstrap Card Tutorial";
            $chapitre="2";
            break;
          case '29':
            $lien="https://www.youtube.com/embed/_ls9d8XRIM8";
            $nom_vid="Bootstrap List Tutorial";
            $chapitre="2";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/dzPkd7ieyDc";
            $nom_vid="Bootstrap Table Tutorial";
            $chapitre="3";
            break;
          case '13':
            $lien="https://www.youtube.com/embed/7KVVoEDQB2o";
            $nom_vid="Bootstrap Buttons Tutorial";
            $chapitre="3";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/O2e2AiR0GZg";
            $nom_vid="Bootstrap Buttons Grid Tutorial";
            $chapitre="3";
            break;
          case '26':
            $lien="https://www.youtube.com/embed/Ien1ZEpOBEM";
            $nom_vid="Design Your own Website using Bootstrap";
            $chapitre="3";
            break;
          case '22':
            $lien="https://www.youtube.com/embed/i7YS7o1Tgic";
            $nom_vid="Design Your own Website using Bootstrap 2";
            $chapitre="4";
            break;
          case '23':
            $lien="https://www.youtube.com/embed/StFObj54aHI";
            $nom_vid="Bootstrap Alerts";
            $chapitre="4";
            break;
          case '24':
            $lien="https://www.youtube.com/embed/e3b1RKwmSFw";
            $nom_vid="Bootstrap Modal Window Tutorial";
            $chapitre="4";
            break;
          case '25':
            $lien="https://www.youtube.com/embed/dZ7Pxh-0h-Q";
            $nom_vid="Bootstrap Collapse";
            $chapitre="4";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/0OChmuojjnM";
            $nom_vid="Bootstrap Form Tutorial";
            $chapitre="5";
            break;
          case '14':
            $lien="https://www.youtube.com/embed/knNbh9LdFKQ";
            $nom_vid="Bootstrap Dropdown Tutorial";
            $chapitre="5";
            break;
          case '15':
            $lien="https://www.youtube.com/embed/Bf0B_hAlyBY";
            $nom_vid="Bootstrap Dropdown Menu 2";
            $chapitre="5";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/fkhEOQuONQE";
            $nom_vid="Bootstrap Tooltips";
            $chapitre="5";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/cE5omTnn-Ys";
            $nom_vid="Bootstrap Popover";
            $chapitre="5";
            break;
          case '21':
            $lien="https://www.youtube.com/embed/oGMgYCAarbc";
            $nom_vid="Bootstrap progress-bar";
            $chapitre="5";
            break;
          case '30':
            $lien="https://www.youtube.com/embed/nNQ_kKOO32A";
            $nom_vid="Bootstrap Snippet";
            $chapitre="6";
            break;
          case '31':
            $lien="https://www.youtube.com/embed/cWtwt_ZCk0I";
            $nom_vid="Bootstrap Toast";
            $chapitre="6";
            break;
          case '32':
            $lien="https://www.youtube.com/embed/WF1awwkxZM4";
            $nom_vid="Bootstrap Typography";
            $chapitre="6";
            break;
          case '33':
            $lien="https://www.youtube.com/embed/eow125xV5-c";
            $nom_vid="Bootstrap Responsive Web Design";
            $chapitre="6";
            break;
          case '34':
            $lien="https://www.youtube.com/embed/1nxSE0R27Gg";
            $nom_vid="Getting Started With Bootstrap Every thing you need to know";
            $chapitre="6";
            break;
          case '28':/* Breakpoint  */
            $lien="https://www.youtube.com/embed/iJKCj8uAHz8";
            $nom_vid="Learn Bootstrap 5 and SASS by Building a Portfolio Website";
            $chapitre="7";
            break;
          case '37':
            $lien="https://www.youtube.com/embed/iEasMXu72No";
            $nom_vid="Bootstrap Admin Dashboard Design";
            $chapitre="8";
            break;
          case '38':
            $lien="https://www.youtube.com/embed/4sosXZsdy-s";
            $nom_vid="Bootstrap 5 Crash Course | Website Build & Deploy";
            $chapitre="8";
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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_python.php" style="color:white;"></a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_python_thenewbaghdad.php" style="color:white;"></a></li>
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
                          Chapter 1 : Introduction
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=1">&#10170  What is Bootstrap and why Bootstrap</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=2">&#10170  What new in Bootstrap 5</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=3">&#10170  Layout and Grids in Bootstrap</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=4">&#10170  Designing and Gridlayout</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=5">&#10170  Responsive Layout in Bootstrap</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=7">&#10170  Life Project Example 1</a><br>
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
                          Chapter 2 : Data Types
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=6">&#10170  Life Project Example 2</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=8">&#10170  Life Project Example 3</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=9">&#10170  Bootstrap Navbar Tutorial</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=10">&#10170  Bootstrap Card Tutorial</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=29">&#10170  Bootstrap List Tutorial</a><br>
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
                          Chapter 3 : Procedural Programming
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=12">&#10170 Bootstrap Table Tutorial</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=13">&#10170  Bootstrap Buttons Tutorial</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=18">&#10170  Bootstrap Buttons Grid Tutorial</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=26">&#10170  Design Your own Website using Bootstrap</a><br>
                        </div>
                    </div>
                  </div>';
                  break;
                case '4':
                  echo '<!-- Chapter 4 -->
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           Chapter 4 :
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=22">&#10170  Design Your own Website using Bootstrap 2</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=23">&#10170  Bootstrap Alerts</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=24">&#10170  Bootstrap Modal Window Tutorial</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=25">&#10170  Bootstrap Collapse</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '5':
                  echo '<!-- Chapter  5 -->
                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                           Chapter 5 : Conditional statements
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=11">&#10170  Bootstrap Form Tutorial</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=14">&#10170  Bootstrap Dropdown Tutorial</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=15">&#10170  Bootstrap Dropdown Menu 2</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=19">&#10170  Bootstrap Tooltips</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=20">&#10170  Bootstrap Popover</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=21">&#10170  Bootstrap Progress Bar</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '6':
                  echo '<!-- Détails chapitre 6 -->
                  <div class="card">
                    <div class="card-header" id="headingSix">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                           Chapter 6 : Object Oriented Programming
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=30">&#10170  Bootstrap Snipper</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=31">&#10170  Bootstrap Toast</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=32">&#10170  Bootstrap Typography</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=33">&#10170  Bootstrap Responsive Web Design</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=34">&#10170  Getting Started With Bootstrap Every thing you need to know</a><br>

                      </div>
                    </div>
                  </div>';
                  break;
                case '7':
                  echo '<!-- Détails chapitre 7 -->
                  <div class="card">
                    <div class="card-header" id="headingSeven">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                           Chapter 7 : Exceptions
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=28">&#10170  Learn Bootstrap 5 and SASS by Building a Portfolio Website</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '8':
                  echo '<!-- Détails chapitre 8 -->
                  <div class="card">
                    <div class="card-header" id="headingEight">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                           Chapter 8 : Databases
                        </button>
                      </h2>
                    </div>
                    <div id="collapseEight" class="collapse show" aria-labelledby="headingEight" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=37">&#10170  Bootstrap Admin Dashboard Design</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=38">&#10170  Bootstrap 5 Crash Course | Website Build & Deploy</a><br>
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
