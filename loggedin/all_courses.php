<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../styleloggedin.css">
<title>TURAYMATHIC ACADEMY</title>
</head>

 <body>
   <div class="topnav" id="myTopnav">
   <a href="../loggedin.php" class="active">Home</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="profile.php" name="profile">Profile</a>
               <a href="../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
       }
        ?>
      </div>
 </header>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">All Courses</li>

  </ol>
</nav>

<div class="java-container">

  <!-- Introduction to IT Culture start here -->
  <div class="card" >
      <img src="./wordpress.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Introduction to WordPress</p>

        <p class="card-text details" >Duration: <span style="color: #F55353">2 Months</span></p>
        <p class="card-text details" >Tutor : Musa Turay</p>

      </div>
      <a href="computer_science/c++/description_wordpress.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/c++/wordpress1.php" class="btn btn-primary">View Course !</a>
  </div>
<!-- Introduction to IT Culture end here -->

  <!-- C++ for beginners start here -->
  <div class="card" >
      <img src="img5.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >C++ Programming for Beginners</p>

        <p class="card-text details" >Duration: <span style="color: #F55353">3 Months</span></p>
        <p class="card-text details" >Tutor : Morie Turay </p>
      </div>
      <a href="computer_science/c++/description_learninglad.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/c++/computer_science_c++_learninglad.php" class="btn btn-primary">View Course !</a>
  </div>
<!-- C++ beginners end here -->

  <!-- Intermediate C++ Programming start here -->
  <div class="card" >
      <img src="img6.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">Intermediate C++ Programming</p>
        <p class="card-text details">Duration: <span style="color: #F55353">7 Months</span></p>
        <p class="card-text details ">Tutor :Ibrahim Turay </p>
      </div>
      <a href="computer_science/c++/description_thenewboston.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/c++/computer_science_c++_thenewboston.php" class="btn btn-primary">View Course !</a>
  </div>
  <!-- Intermediate C++ Programming end here -->
  
  <!-- Graphic Design Start here -->
  <div class="card" >
      <img src="../images/Photoshop.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Master Graphic Design Using Photoshop</p>

        <p class="card-text details">Duration: <span style="color: #F55353">3 Months</span></p>
        <p class="card-text details">Tutor : Free Courses</p>

      </div>
      <a href="engineering/chemical/description_stanford.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="engineering/chemical/engineering_chemical_stanford.php" class="btn btn-primary">View Course !</a>
  </div>
<!-- Graphic Design End Here -->


<!-- HTML and CSS start here -->
  <div class="card" >
      <img src="html_css.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Master Html and CSS</p>

        <p class="card-text details" >Duration: <span style="color: #F55353">11 Months</span></p>
        <p class="card-text details" >Tutor : Bayoh Turay </p>
      </div>
      <a href="engineering/chemical/description_lund.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="engineering/chemical/engineering_chemical_lund.php" class="btn btn-primary">View Course !</a>
  </div>
  <!-- HTML and CSS end here -->
  
  <!-- Networking Start Here -->
  <div class="card" >
      <img src="Networking.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">Introduction to Networking</p>
        <p class="card-text details" >Duration: <span style="color: #F55353">8 Months</span></p>
        <p class="card-text details" >Tutor : Mariaum Turay</p>

      </div>
      <a href="language/french/description_lingoni.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="language/french/language_french_lingoni.php" class="btn btn-primary">View Course !</a>
  </div>
<!-- Networking End here -->

  <!-- Master Python Start Here -->
  <div class="card" >
      <img src="../images/figma.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">Introduction to Figma</p>
        <p class="card-text details" >Duration: <span style="color: #F55353">3 Months</span></p>
        <p class="card-text details" >Tutor : Bayoh Mizko</p>
      </div>
      <a href="language/french/description_vincent.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="language/french/language_french_vincent.php" class="btn btn-primary">View Course !</a>
  </div>
  <!-- Master Python End Here -->
  
  <!-- Master JavaScript start here -->
  <div class="card" >
      <img src="./ai.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Introduction to Artificial Intelligence and Machine Learning</p>

        <p class="card-text details" >Duration: <span style="color: #F55353">1 Year Two Months</span></p>
        <p class="card-text details" >Tutor : Edureka</p>

      </div>
      <a href="computer_science/java/description_dominique.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/java/computer_science_java_dominique.php" class="btn btn-primary">View Course !</a>
  </div>
<!-- Master Javascript end here -->

  <!-- Introduction to Java Programming start here -->
  <div class="card" >
      <img src="img3.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">Introduction Java Program</p>
        <p class="card-text details">Duration: <span style="color: #F55353">7 Months</span></p>
        <p class="card-text details ">Tutor : Michael Amara </p>
      </div>
      <a href="computer_science/java/description_alexlee.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/java/computer_science_java_alexlee.php" class="btn btn-primary">View Course !</a>
  </div>
  <!-- Introduction to Java Programming end here -->
  
  <!-- Intermediate Java Programming start Here -->
  <div class="card" >
      <img src="img2.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Intermediate Java Programming</p>

        <p class="card-text details" >Duration: <span style="color: #F55353">9 Months</span></p>
        <p class="card-text details" >Tutor : Ramadan Barrie </p>
      </div>
      <a href="computer_science/java/description_learninglad.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/java/computer_science_java_learninglad.php" class="btn btn-primary">View Course !</a>
  </div>
<!-- Intermediate to Java Programming end here -->
  
  <!-- Introduction to PHP start here -->
  <!-- <div class="card" >
      <img src="php.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Introduction to PHP</p>

        <p class="card-text details">Duration: <span style="color: #F55353">5 Months</span></p>
        <p class="card-text details">Tutor : Ibrahim Kabba</p>

      </div>
      <a href="engineering/aerospace/description_mit.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="engineering/aerospace/engineering_aerospace_mit.php" class="btn btn-primary">View Course !</a>
  </div> -->
  <!-- Introduction to PHP end here -->
  
<!-- Introduction to Database Start Here -->
  <!-- <div class="card" >
      <img src="mysql.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Introduction to Database using MYSQL</p>

        <p class="card-text details" >Duration: <span style="color: #F55353">9 Months</span></p>
        <p class="card-text details" >Tutor : Mahmoud Turay </p>
      </div>
      <a href="engineering/aerospace/description_nptelhrd.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="engineering/aerospace/engineering_aerospace_nptelhrd.php" class="btn btn-primary">View Course !</a>
  </div> -->
  <!--Introduction to database end here -->  -->
  
  <!-- Asp.Net Start here -->
  <div class="card" >
      <img src="./php.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >PHP For Absolute Beginners</p>

        <p class="card-text details" >Duration: <span style="color: #F55353">6 Months</span></p>
        <p class="card-text details" >Tutor : Program with Gio</p>

      </div>
      <a href="language/php/description_php.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="language/php/php1.php" class="btn btn-primary">View Course !</a>
  </div>
  <!-- Asp.Net End here -->
  
  <!-- Introduction to Computer Science Start Here -->
  <div class="card" >
      <img src="computer_science.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Introduction to Computer Science</p>
        <!-- <p class="card-text" >Computer Science and Software Engineering Theory with Briana</p> -->

        <p class="card-text details" >Duration: <span style="color: #F55353">1 Year</span></p>
        <p class="card-text details" >Tutor : Musa Turay</p>
      </div>
      <a href="engineering/software/description_freecodecamp.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="engineering/software/engineering_software_freecodecamp.php" class="btn btn-primary">View Course !</a>
  </div>
  <!-- Introduction to Computer Science End Here -->
  
  <!-- Intermediate Computer Science Start Here -->
  <div class="card" >
      <img src="img16.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Computer Science Crash Course</p>

        <p class="card-text details">Duration: <span style="color: #F55353">1 Year Six Month</span></p>
        <p class="card-text details">Tutor : Mariaum Turay</p>

      </div>
      <a href="engineering/software/description_crashcourse.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="engineering/software/engineering_software_crashcourse.php" class="btn btn-primary">View Course !</a>
  </div>
<!-- Intermediate Course End here -->

  
  <!-- English Lesson Start Here -->
  <div class="card" >
      <img src="img12.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">Learn English: Lessons for Beginners</p>

        <p class="card-text details" >Duration: <span style="color: #F55353">4 Month</span></p>
        <p class="card-text details" >Tutor : JenniferESL</p>

      </div>
      <a href="language/javaeng/description_jenniferesl.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="language/javaeng/language_english_jenniferesl.php" class="btn btn-primary">View Course !</a>
  </div>
<!-- English Lesson End here -->

<!-- Cyber Security Start here -->
  <div class="card" >
      <img src="../images/javascript.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">JavaSCript</p>
        <p class="card-text details" >Duration: <span style="color: #F55353">7 Months</span></p>
        <p class="card-text details" >Tutor : CoderLipi</p>
      </div>
      <a href="language/javaeng/description_JavaScript.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="language/javaeng/java1.php" class="btn btn-primary">View Course !</a>
  </div>
  <!-- Cyber Security End here -->
  
  
  <!-- Python Start here -->
  <div class="card" >
      <img src="img7.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Python for Beginners</p>

        <p class="card-text details">Duration: <span style="color: #F55353">1 Year Seven Month</span></p>
        <p class="card-text details">Tutor : Telusko</p>

      </div>
      <a href="computer_science/python/description_telusko.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/python/computer_science_python_telusko.php" class="btn btn-primary">View Course !</a>
  </div>
  <!-- Python End here -->


<!-- C# Start here -->

  <div class="card" >
      <img src="./bootstrap.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Bootstrap 5</p>

        <p class="card-text details" >Duration: <span style="color: #F55353">3 Months</span></p>
        <p class="card-text details" >Tutor : Ibrahim Daboh </p>
      </div>
      <a href="computer_science/python/description_thenewbaghdad.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/python/computer_science_python_thenewbaghdad.php" class="btn btn-primary">View Course !</a>
  </div>




<!-- Visual Basis Start here -->
<!-- <div class="card" >
      <img src="vbnet.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >VbNet</p>

        <p class="card-text details" >Duration: <span style="color: #F55353">1 Year</span></p>
        <p class="card-text details" >Tutor : Mohamed Kamara </p>
      </div>
      <a href="computer_science/python/description_thenewbaghdad.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/python/computer_science_python_thenewbaghdad.php" class="btn btn-primary">View Course !</a>
  </div>
  <!-- C# End here -->
</div> -->




