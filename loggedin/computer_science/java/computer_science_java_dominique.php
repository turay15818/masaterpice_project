<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../../../style.css">
<link rel="stylesheet" href="accordionstyle.css">

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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science.php" style="color:white;">Computer Science</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_java.php" style="color:white;">Java</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">All About Artifical Intelligence</li>

  </ol>
</nav>
<!-- the actual content of this course ( apprendre a programmer avec java dominique liard )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 0 -->
  <div class="card">
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
  </div>
  <!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapitre 1 : Manipulation des types de données
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_dominique.php?video=4">&#10170  Is Artificial Intelligence a Treat to Human?</a><br>
        <a href="actualvideocontent_dominique.php?video=8">&#10170  Q Learning Explained | Reinforcement Learning Using Python | Q Learning in AI</a><br>
        <a href="actualvideocontent_dominique.php?video=9">&#10170  What is Machine Learning? | Machine Learning Basics | Machine Learning Tutorial </a><br>
        <a href="actualvideocontent_dominique.php?video=10">&#10170  Breadth First Search Algorithm In 10 Minutes | BFS in Artificial Intelligence </a><br>
        <a href="actualvideocontent_dominique.php?video=13">&#10170  What is Deep Learning | Deep Learning Simplified | Deep Learning Tutorial </a><br>
        <a href="actualvideocontent_dominique.php?video=14">&#10170  AI vs Machine Learning vs Deep Learning | Machine Learning Training with Python</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapitre 2 : Operateur
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_dominique.php?video=5">&#10170  Application of Artificial Intelligence</a><br>
        <a href="actualvideocontent_dominique.php?video=6">&#10170  Importance of Artificial Intelligence</a><br>
        <a href="actualvideocontent_dominique.php?video=16">&#10170  Deep Learning Tutorial | Deep Learning Tutorial for Beginners | Neural Networks</a><br>

      </div>
    </div>
  </div>
  <!-- Détails chapitre 3 -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapitre 3 : Les instructions conditionnelles
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_dominique.php?video=18">&#10170  TensorFlow Tutorial | Deep Learning Using TensorFlow | TensorFlow Tutorial Python</a><br>
        <a href="actualvideocontent_dominique.php?video=19">&#10170  Artificial Neural Network Tutorial | Deep Learning With Neural Networks</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 4 -->
  <div class="card">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
           Chapitre 4 : Les boucles
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_dominique.php?video=20">&#10170  Recurrent Neural Networks (RNN) | RNN LSTM | Deep Learning Tutorial | Tensorflow Tutorial</a><br>
        <a href="actualvideocontent_dominique.php?video=21">&#10170  Convolutional Neural Network (CNN) | Convolutional Neural Networks With TensorFlow</a><br>
        <a href="actualvideocontent_dominique.php?video=22">&#10170  Deep Learning Using TensorFlow | Deep Learning with Tensorflow Certification Training </a><br>
      </div>
    </div>
  </div>
   <!-- Détails chapitre 5 -->
  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            Chapitre 5 : Programmation orienté objet
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_dominique.php?video=32">&#10170  TensorFlow Explained | Deep Learning Using TensorFlow | TensorFlow Tutorial</a><br>
        <a href="actualvideocontent_dominique.php?video=33">&#10170  TensorFlow Object Detection | Realtime Object Detection with TensorFlow | TensorFlow Python </a><br>
        <a href="actualvideocontent_dominique.php?video=34">&#10170  Keras Tutorial For Beginners | Creating Deep Learning Models Using Keras In Python</a><br>
        <a href="actualvideocontent_dominique.php?video=35">&#10170  Types Of Artificial Intelligence | Artificial Intelligence Explained | What is AI?</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 6 -->
  <div class="card">
    <div class="card-header" id="headingSeven">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            Chapitre 6 : Les exceptions
        </button>
      </h2>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_dominique.php?video=38">&#10170  Knowledge Representation in AI | Semantic Networks | Artificial Intelligence Tutorial</a><br>
        <a href="actualvideocontent_dominique.php?video=39">&#10170  Artificial Intelligence Project Ideas | Artificial Intelligence Training </a><br>
      </div>
    </div>
  </div>
</div>

<?php require "../../../footer.php" ?>
