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
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Introduction to Networking</li>

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
          Chapter : Lesson
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_lingoni.php?video=2">&#10170  Introduction to Networking | Network Fundamentals Part 1</a><br>
        <a href="actualvideocontent_lingoni.php?video=3">&#10170  Cabling Devices | Network Fundamentals Part 2</a><br>
        <a href="actualvideocontent_lingoni.php?video=4">&#10170  How the OSI Model Works | Network Fundamentals Part 3</a><br>
        <a href="actualvideocontent_lingoni.php?video=5">&#10170  How IP Addresses Work | Network Fundamentals Part 4</a><br>
        <a href="actualvideocontent_lingoni.php?video=6">&#10170  IP Addressing in Depth | Network Fundamentals Part 5</a><br>
        <a href="actualvideocontent_lingoni.php?video=7">&#10170  TCP/IP Model (Internet Protocol Suite) | Network Fundamentals Part 6</a><br>
        <a href="actualvideocontent_lingoni.php?video=8">&#10170  How TCP and UDP Work | Network Fundamentals Part 7</a><br>
        <a href="actualvideocontent_lingoni.php?video=9">&#10170  Establishing Connections With TCP's Three Way Handshake | Network Fundamentals Part 8</a><br>
        <a href="actualvideocontent_lingoni.php?video=10">&#10170  How TCP Handles Errors And Uses Windows | Network Fundamentals Part 9</a><br>
        <a href="actualvideocontent_lingoni.php?video=11">&#10170  Cisco CLI for Beginners | Network Fundamentals Part 10</a><br>
        <a href="actualvideocontent_lingoni.php?video=12">&#10170  Computer Networking Complete Course - Beginner to Advanced</a><br>
      </div>
    </div>
  </div>

</div>

<?php require "../../../footer.php" ?>
