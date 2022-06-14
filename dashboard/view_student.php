<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<title>TURAYMATHIC ACADEMY</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!----css3---->
<link rel="stylesheet" href="css/custom.css">


<!--google fonts -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./tablestyle.css">

<!--google material icon-->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

</head>

<body>


<div class="wrapper">


<div class="body-overlay"></div>

<!-------------------------sidebar------------>
<!-- Sidebar  -->
<nav id="sidebar">
<div class="sidebar-header">
<h3><img src="img/logo.png" class="img-fluid" /><span>TURAYMATHIC ACADEMY</span></h3>
</div>
<ul class="list-unstyled components">
<li class="active">
<a href="./index.php" class="dashboard"><i class="material-icons">dashboard</i>
<span>Dashboard</span></a>
</li>


<li class="dropdown">
<a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
<i class="material-icons">aspect_ratio</i>USERS</a>
<ul class="collapse list-unstyled menu" id="homeSubmenu1">
<li>
<a href="./signup.php">ADD USERS</a>
</li>
<li>
<a href="./view_user.php">VIEW USERS</a>
</li>

</ul>
</li>

<li class="dropdown">
<a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
<i class="material-icons">apps</i><span>STUDENT</span></a>
<ul class="collapse list-unstyled menu" id="pageSubmenu2">
<li>
<a href="./view_student.php">VIEW STUDENT</a>
</li>
<li>
<a href="./add_student.php">ADD STUDENT</a>
</li>

</ul>
</li>

<li class="dropdown">
<a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
<i class="material-icons">equalizer</i>


<span>LECTURERS</span></a>
<ul class="collapse list-unstyled menu" id="pageSubmenu3">
<li>
<a href="./add_lecturer.php">ADD LECTURER</a>
</li>
<li>
<a href="./view_lecturer.php">VIEW LECTURER</a>
</li>

</ul>
</li>
<li class="dropdown">
<a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
<i class="material-icons">COURSES</i></a>
<ul class="collapse list-unstyled menu" id="pageSubmenu4">
<li>
<a href="./view_courses.php">VIEW COURSES</a>
</li>
<li>
<a href="./add_courses.php">ADD COURSES</a>
</li>

</ul>
</li>


</ul>


</nav>




<!--------page-content---------------->

<div id="content">

<!--top--navbar----design--------->

<div class="top-navbar">
<div class="xp-topbar">

<!-- Start XP Row -->
<div class="row">
<!-- Start XP Col -->
<div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
<div class="xp-menubar">
<span class="material-icons text-white">signal_cellular_alt
</span>
</div>
</div>
<!-- End XP Col -->

<!-- Start XP Col -->
<div class="col-md-5 col-lg-3 order-3 order-md-2">
<div class="xp-searchbar">
<form>
<div class="input-group">
<input type="search" class="form-control" placeholder="Search">
<div class="input-group-append">
<button class="btn" type="submit" id="button-addon2">GO</button>
</div>
</div>
</form>
</div>
</div>
<!-- End XP Col -->

<!-- Start XP Col -->
<div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
<div class="xp-profilebar text-right">
<nav class="navbar p-0">
<ul class="nav navbar-nav flex-row ml-auto">
<li class="dropdown nav-item active">
<a href="#" class="nav-link" data-toggle="dropdown">
<span class="material-icons">notifications</span>
<span class="notification">4</span>
</a>
<ul class="dropdown-menu">
<li>
<a href="#">You have 5 new messages</a>
</li>
<li>
<a href="#">You're now friend with Mike</a>
</li>
<li>
<a href="#">Wish Mary on her birthday!</a>
</li>
<li>
<a href="#">5 warnings in Server Console</a>
</li>

</ul>
</li>
<li class="nav-item">
<a class="nav-link" href="#">
<span class="material-icons">question_answer</span>

</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link" href="#" data-toggle="dropdown">
<img src="img/user.jpg" style="width:40px; border-radius:50%;" />
<span class="xp-user-live"></span>
</a>
<ul class="dropdown-menu small-menu">
<li>
<a href="#">
	<span class="material-icons">
		person_outline
	</span>Profile

</a>
</li>
<li>
<a href="#"><span class="material-icons">
		settings
	</span>Settings</a>
</li>
<li>
<a href="#"><span class="material-icons">
		logout</span>Logout</a>
</li>
</ul>
</li>
</ul>


</nav>

</div>
</div>
<!-- End XP Col -->

</div>
<!-- End XP Row -->

</div>
<div class="xp-breadcrumbbar text-center">
<h4 class="page-title">Dashboard</h4>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Booster</a></li>
<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
</ol>
</div>








</div>






<?php
include_once('../includes/dbh.inc.php');

$display = "SELECT * FROM users";
$result = mysqli_query($conn, $display);
?>

<?php
if(mysqli_num_rows($result) >0 ){
    ?>

<table class='table1  table1' style="width:80%; margin:auto; align-items:center">
<!-- <marquee behavior="alternate" direction="" class="marqueee" scrolldelay='200'><h1> WELCOME TO OUR DATABASE </h1></marquee> -->
    <tr class="baa">
<td class="bg-info">ID</td>
<td class="bg-primary">User Name</td>
<td class="bg-success">Email</td>
<td class="bg-primary">Password</td>

    </tr>

    <?php 
    $i=0;
    while($row = mysqli_fetch_array($result)){
       ?>
       
           <!-- <td><?php echo $row ['idUsers'] ?></td>
           <td><?php echo $row ['uidUsers'] ?></td>
           <td><?php echo $row ['emailUsers'] ?></td>
           <td><?php echo $row ['pwdUsers'] ?></td> --> 
           
 <tr class="baa1">
  <td class="bg-primary"><?php echo $row ['idUsers'] ?></td>
  <td class="bg-success" style="width: 30%"><?php echo $row ['uidUsers'] ?></td>
  <td class="bg-info"><?php echo $row ['emailUsers'] ?></td>
  <td class="bg-success" style="font-size: 15px;"><?php echo $row ['pwdUsers'] ?></td>
    </tr>       
    





    



    <tr class="bg-primary">...</tr>







    <?php
    $i++;
    }
    ?>

</table>
<?php
}else{
    echo 'No data found in the database';
}
?>







<!--------main-content------------->



<footer class="footer">
<div class="container-fluid">
<div class="footer-in">
<p class="mb-0">&copy 2022 Vishweb design - All Rights Reserved.</p>
</div>
</div>
</footer>
</div>
</div>


<!----------html code compleate----------->









<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>


<script type="text/javascript">

$(document).ready(function () {
$(".xp-menubar").on('click', function () {
$('#sidebar').toggleClass('active');
$('#content').toggleClass('active');
});

$(".xp-menubar,.body-overlay").on('click', function () {
$('#sidebar,.body-overlay').toggleClass('show-nav');
});

});

</script>





</body>

</html>