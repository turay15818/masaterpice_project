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


<!--google material icon-->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">


<style>


/***********************************************************sign**********************************************************************/
@import url("https://fonts.googleapis.com/css?family=Montserrat:400,800");

.sign * {
  box-sizing: border-box;
}

.sign {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  font-family: "Montserrat", sans-serif;
  height: 100vh;
  margin: -20px 0 50px;
}

.sign h1 {
  font-weight: bold;
  margin: 0;
}

.sign h2 {
  text-align: center;
}

.sign p {
  font-size: 14px;
  font-weight: 100;
  line-height: 20px;
  letter-spacing: 0.5px;
  margin: 20px 0 30px;
}

.sign a {
  color: #333;
  font-size: 14px;
  text-decoration: none;
  margin: 15px 0;
}

.sign button {
  border-radius: 20px;
  border: 1px solid #e23917;
  background-color: #eada71;
  color: #ffffff;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

.sign button:active {
  transform: scale(0.95);
}

.sign button:focus {
  outline: none;
}

.sign button.ghost {
  background-color: transparent;
  border-color: #ffffff;
}

.sign form {
  background-color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 50px;
  height: 100%;
  text-align: center;
}

.sign input {
  background-color: #eee;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}

.sign .container {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  position: relative;
  overflow: hidden;
  width: 768px;
  max-width: 100%;
  min-height: 480px;
}

.sign .form-container {
  position: absolute;
  top: 0;
  height: 100%;
  transition: all 0.6s ease-in-out;
}

.sign .sign-in-container {
  left: 0;
  width: 50%;
  z-index: 2;
}

.sign .container.right-panel-active .sign-in-container {
  transform: translateX(100%);
}

.sign .sign-up-container {
  left: 0;
  width: 50%;
  opacity: 0;
  z-index: 1;
}

.sign .container.right-panel-active .sign-up-container {
  transform: translateX(100%);
  opacity: 1;
  z-index: 5;
  animation: show 0.6s;
}

@keyframes show {
  0%,
  49.99% {
    opacity: 0;
    z-index: 1;
  }

  50%,
  100% {
    opacity: 1;
    z-index: 5;
  }
}

.sign .overlay-container {
  position: absolute;
  top: 0;
  left: 50%;
  width: 50%;
  height: 100%;
  overflow: hidden;
  transition: transform 0.6s ease-in-out;
}

.sign .container.right-panel-active .overlay-container {
  transform: translateX(-100%);
}

.sign .overlay {
  background: #f05a09;
  background: -webkit-linear-gradient(to right, #d6540e, #b94d09);
  background: linear-gradient(to right, #53310f, #ffa041);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 0 0;
  color: #ffffff;
  position: relative;
  left: -100%;
  height: 100%;
  width: 200%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.sign .container.right-panel-active .overlay {
  transform: translateX(50%);
}

.sign .overlay-panel {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 40px;
  text-align: center;
  top: 0;
  height: 100%;
  width: 50%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.sign .overlay-left {
  transform: translateX(-20%);
}

.sign .container.right-panel-active .overlay-left {
  transform: translateX(0);
}

.sign .overlay-right {
  right: 0;
  transform: translateX(0);
}

.sign .container.right-panel-active .overlay-right {
  transform: translateX(20%);
}

/***********************************************************sign**********************************************************************/

</style>



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
<a href="./cruddatabase/index.php">ADD USERS</a>
</li>
<li>
<a href="./cruddatabase/index.php">VIEW USERS</a>
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



<!--------main-content------------->


                <!--sign-->
              
            </div>





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