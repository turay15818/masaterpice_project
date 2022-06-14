<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="accordionstyle.css">
<link rel="stylesheet" href="../../../style.css">
<title>TurayMathic Academy</title>
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
            $lien="https://www.youtube-nocookie.com/embed/4jmsHaJ7xEA";
            $nom_vid="What is AI | Introduction to Artificial Intelligence | Edureka";
            $chapitre="0";
            break;
          case '2':
            $lien="https://www.youtube-nocookie.com/embed/JMUxmLyrhSk";
            $nom_vid="Everything you need to know about Artifical Intelligence";
            $chapitre="0";
            break;
          case '3':
            $lien="https://www.youtube-nocookie.com/embed/5hNK7-N23eU";
            $nom_vid="What is Deep Learning in Artifical Intelligence";
            $chapitre="0";
            break;
          case '4':
            $lien="https://www.youtube-nocookie.com/embed/0vfZFL-ftz0";
            $nom_vid="Is Artifical Intelligence a Treat to Human?";
            $chapitre="1";
            break;
          case '8':
            $lien="https://www.youtube-nocookie.com/embed/DhdUlDIAG7Y";
            $nom_vid="Q Learning Explained | Reinforcement Learning Using Python | Q Learning in AI";
            $chapitre="1";
            break;
          case '9':
            $lien="https://www.youtube-nocookie.com/embed/Pj0neYUp9Tc";
            $nom_vid="What is Machine Learning? | Machine Learning Basics | Machine Learning Tutorial ";
            $chapitre="1";
            break;
          case '10':
            $lien="https://www.youtube-nocookie.com/embed/PbCl67GY1ck";
            $nom_vid="Breadth First Search Algorithm In 10 Minutes | BFS in Artificial Intelligence ";
            $chapitre="1";
            break;
          case '13':
            $lien="https://www.youtube-nocookie.com/embed/dafuAz_CV7Q";
            $nom_vid="What is Deep Learning | Deep Learning Simplified | Deep Learning Tutorial ";
            $chapitre="1";
            break;
          case '14':
            $lien="https://www.youtube-nocookie.com/embed/WSbgixdC9g8";
            $nom_vid="AI vs Machine Learning vs Deep Learning | Machine Learning Training with Python";
            $chapitre="1";
            break;
          case '5':
            $lien="https://www.youtube-nocookie.com/embed/Y46zXHvUB1s";
            $nom_vid="Application of Artificial Intelligence";
            $chapitre="2";
            break;
          case '6':
            $lien="https://www.youtube-nocookie.com/embed/WZVAfLreIwM";
            $nom_vid="Importance of Artificial Intelligence";
            $chapitre="2";
            break;
          case '16':
            $lien="https://www.youtube-nocookie.com/embed/nl_4WFHQ4LU";
            $nom_vid="Deep Learning Tutorial | Deep Learning Tutorial for Beginners | Neural Networks";
            $chapitre="2";
            break;
          case '18':
            $lien="https://www.youtube-nocookie.com/embed/yX8KuPZCAMo";
            $nom_vid="TensorFlow Tutorial | Deep Learning Using TensorFlow | TensorFlow Tutorial Python";
            $chapitre="3";
            break;
          case '19':
            $lien="https://www.youtube-nocookie.com/embed/fv6Qll3laUU";
            $nom_vid="Artificial Neural Network Tutorial | Deep Learning With Neural Networks";
            $chapitre="3";
            break;
          case '20':
            $lien="https://www.youtube-nocookie.com/embed/y7qrilE-Zlc";
            $nom_vid="Recurrent Neural Networks (RNN) | RNN LSTM | Deep Learning Tutorial | Tensorflow Tutorial";
            $chapitre="4";
            break;
          case '21':
            $lien="https://www.youtube-nocookie.com/embed/umGJ30-15_A";
            $nom_vid="Convolutional Neural Network (CNN) | Convolutional Neural Networks With TensorFlow";
            $chapitre="4";
            break;
          case '22':
            $lien="https://www.youtube-nocookie.com/embed/VpUKOLtqBSA";
            $nom_vid="Deep Learning Using TensorFlow | Deep Learning with Tensorflow Certification Training";
            $chapitre="4";
            break;
          case '32':
            $lien="https://www.youtube-nocookie.com/embed/uh2Fh6df7Lg";
            $nom_vid="TensorFlow Explained | Deep Learning Using TensorFlow | TensorFlow Tutorial";
            $chapitre="5";
            break;
          case '33':
            $lien="https://www.youtube-nocookie.com/embed/wh7_etX91ls";
            $nom_vid="TensorFlow Object Detection | Realtime Object Detection with TensorFlow | TensorFlow Python ";
            $chapitre="5";
            break;
          case '34':
            $lien="https://www.youtube-nocookie.com/embed/XNKeayZW4dY";
            $nom_vid="Keras Tutorial For Beginners | Creating Deep Learning Models Using Keras In Python";
            $chapitre="5";
            break;
          case '35':
            $lien="https://www.youtube-nocookie.com/embed/y5swZ2Q_lBw";
            $nom_vid="Types Of Artificial Intelligence | Artificial Intelligence Explained | What is AI?";
            $chapitre="5";
            break;
          case '38':
            $lien="https://www.youtube-nocookie.com/embed/V-O-RFSRe-E";
            $nom_vid="Knowledge Representation in AI | Semantic Networks | Artificial Intelligence Tutorial ";
            $chapitre="6";
            break;
          case '39':
            $lien="https://www.youtube-nocookie.com/embed/7V_AebZFlpo";
            $nom_vid="Artificial Intelligence Project Ideas | Artificial Intelligence Training";
            $chapitre="6";
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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_java.php" style="color:white;">Java</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_java_dominique.php" style="color:white;"></a></li>
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
                case '0':
                  echo '<div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Chapitre 0 : Introduction
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=1">&#10170  What is AI | Introduction to Artificial Intelligence | Edureka</a><br>
                        <a href="actualvideocontent_dominique.php?video=2">&#10170  Everything you need to know about Artificial Intelligence</a><br>
                        <a href="actualvideocontent_dominique.php?video=3">&#10170  What is Deep Learning in Artifical Intelligence</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '1':
                  echo '<!-- Détails chapitre 1 -->
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Chapitre 1 : Manipulation des types de données
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=4">&#10170  Is Artifical Intelligence a Treat to Human?</a><br>
                        <a href="actualvideocontent_dominique.php?video=8">&#10170  Q Learning Explained | Reinforcement Learning Using Python | Q Learning in AIa><br>
                        <a href="actualvideocontent_dominique.php?video=9">&#10170  What is Machine Learning? | Machine Learning Basics | Machine Learning Tutorial </a><br>
                        <a href="actualvideocontent_dominique.php?video=10">&#10170  Breadth First Search Algorithm In 10 Minutes | BFS in Artificial Intelligence </a><br>
                        <a href="actualvideocontent_dominique.php?video=13">&#10170  What is Deep Learning | Deep Learning Simplified | Deep Learning Tutorial </a><br>
                        <a href="actualvideocontent_dominique.php?video=14">&#10170  AI vs Machine Learning vs Deep Learning | Machine Learning Training with Python</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '2':
                  echo '<!-- Détails chapitre 2 -->
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          Chapitre 2 : Operateur
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=5">&#10170  Application of Artificial Intelligence</a><br>
                        <a href="actualvideocontent_dominique.php?video=6">&#10170  Importance of Artificial Intelligence</a><br>
                        <a href="actualvideocontent_dominique.php?video=16">&#10170  Deep Learning Tutorial | Deep Learning Tutorial for Beginners | Neural Networks</a><br>

                      </div>
                    </div>
                  </div>';
                  break ;
                case '3':
                  echo '<!-- Détails chapitre 3 -->
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           Chapitre 3 : Les instructions conditionnelles
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=18">&#10170  TensorFlow Tutorial | Deep Learning Using TensorFlow | TensorFlow Tutorial Python</a><br>
                        <a href="actualvideocontent_dominique.php?video=19">&#10170  Artificial Neural Network Tutorial | Deep Learning With Neural Networks</a><br>
                      </div>
                    </div>
                  </div>';
                  break ;
                case '4':
                  echo '<!-- Détails chapitre 4 -->
                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                           Chapitre 4 : Les boucles
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=20">&#10170  Recurrent Neural Networks (RNN) | RNN LSTM | Deep Learning Tutorial | Tensorflow Tutorial</a><br>
                        <a href="actualvideocontent_dominique.php?video=21">&#10170  Convolutional Neural Network (CNN) | Convolutional Neural Networks With TensorFlow</a><br>
                        <a href="actualvideocontent_dominique.php?video=22">&#10170  Deep Learning Using TensorFlow | Deep Learning with Tensorflow Certification Training </a><br>
                      </div>
                    </div>
                  </div>';
                  break ;
                case '5':
                  echo ' <!-- Détails chapitre 5 -->
                  <div class="card">
                    <div class="card-header" id="headingSix">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            Chapitre 5 : Programmation orienté objet
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=32">&#10170  TensorFlow Explained | Deep Learning Using TensorFlow | TensorFlow Tutorial</a><br>
                        <a href="actualvideocontent_dominique.php?video=33">&#10170  TensorFlow Object Detection | Realtime Object Detection with TensorFlow | TensorFlow Python </a><br>
                        <a href="actualvideocontent_dominique.php?video=34">&#10170  Keras Tutorial For Beginners | Creating Deep Learning Models Using Keras In Python</a><br>
                        <a href="actualvideocontent_dominique.php?video=35">&#10170  Types Of Artificial Intelligence | Artificial Intelligence Explained | What is AI?</a><br>
                      </div>
                    </div>
                  </div>';
                  break ;
                case '6':
                  echo '<!-- Détails chapitre 6 -->
                  <div class="card">
                    <div class="card-header" id="headingSeven">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                            Chapitre 6 : Les exceptions
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSeven" class="collapse show"  aria-labelledby="headingSeven" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=38">&#10170  Knowledge Representation in AI | Semantic Networks | Artificial Intelligence Tutorial </a><br>
                        <a href="actualvideocontent_dominique.php?video=39">&#10170  Mise en oeuvre d\'une classe d\'exception</a><br>
                      </div>
                    </div>
                  </div>';
                  break ;
              }
            }
          ?>
        </div>
    </div>
</div>


<?php require "../../../footer.php" ?>
