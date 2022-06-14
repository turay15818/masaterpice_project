

<?php
if(isset($SESSION['Admin_Name'])){
header("Location: ../turaymathic_academy/index.php");
}
?>

<?php
       if (isset($_SESSION['Admin_Name'])){
         echo '<a href="profile.php" name="profile">Profile</a>
               <a href="../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
       }
        ?>
        
        


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
<a href="./cruddatabase/index.php">Premium Student</a>
</li>
<li>
<a href="./cruddatabase/index.php">VIEW Student</a>
</li>

</ul>
</li>

<li class="dropdown">
<a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
<i class="material-icons">apps</i><span>STUDENT</span></a>
<ul class="collapse list-unstyled menu" id="pageSubmenu2">
<li>
<a href="./view_student.php">Free Student</a>
</li>
<li>
<a href="./add_student.php">ADD FREE STUDENT</a>
</li>

</ul>
</li>

<li class="dropdown">
<a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
<i class="material-icons">equalizer</i>


<span>LECTURERS</span></a>
<ul class="collapse list-unstyled menu" id="pageSubmenu3">
<li>
<a href="./cruddatabase/index.php">ADD LECTURER</a>
</li>
<li>
<a href="./cruddatabase/index.php">VIEW LECTURER</a>
</li>

</ul>
</li>
<li class="dropdown">
<a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
<i class="material-icons">COURSES</i></a>
<ul class="collapse list-unstyled menu" id="pageSubmenu4">
<li>
<a href="./course/index.php">VIEW COURSES</a>
</li>
<li>
<a href="./course/index.php">ADD COURSES</a>
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
<a href="https://facebook.com/turay.musa.73">You have 5 new messages</a>
</li>
<li>
<a href="#">You're now Admin of this Site</a>
</li>
<li>
<a href="#">Update Users Profile</a>
</li>
<li>
<a href="#">Visit the Premium course Site</a>
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
<h4 class="page-title">TURAYMATHIC ACADEMY</h4>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Booster</a></li>
<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
</ol>
</div>

</div>



<!--------main-content------------->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./Final Dashboard/das2.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bankdashboard.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img style="width: 40px;" src="./Final Dashboard/logo.png" alt="">
                <span class="logoname">TURAYMATHIC</span>
            </div>

            <div class="searchbox">
                <form action="">
                    <input type="text" placeholder="Search">
                    <i class="fa fa-search"></i>
                </form>
            </div>

            <div class="navitem">
                <div class="lang">
                    <select name="language" id="">
                        <option value="">English</option>
                        <option value="">French</option>
                        <option value="">Madingo</option>
                        <option value="">Kiro</option>
                    </select>
                </div>

                <div class="icons">
                    <ul>
                        <li><i class="fa fa-envelope"></i></li>
                        <li><i class="fa fa-bell"></i></li>
                    </ul>
                </div>

                <div class="account">
                    <img width="25px" height="25px" src="./Final Dashboard/Images/AdminProfile.png" alt="">
                    <span class="name">MUSA TURAY</span>
                    <span class="username">@turaymusaa</span>
                </div>
            </div>
        </div>

        <div class="container-body">
            <div class="sidebar">
                <ul>
                    <li class="dashboard">
					<i class="fa fa-facebook"></i>
                        <a href="https://facebook.com/turay.musa.73">Facebook</a>
                    </li>
                    <li>
                        <i class="fa fa-twitter"></i>
                        <a href="https://twitter.com/InfaMusa?t=EZ7UnHy63LjiB6JnsBwtgg&s=09">Twitter</a>
                    </li>
                    <li>
                        <i class="fa fa-whatsapp"></i>
                        <a href="https://wa.link/bfekzc">Whatsapp</a>
                    </li>
                    <li>
                        <i class="fa fa-credit-card-alt"></i>
                        <a href="#">Instgram</a>
                    </li>
                    <li>
                        <i class="fa fa-instagram"></i>
                        <a href="https://www.instagram.com/invites/contact/?i=vc6wj21nknfl&utm_content=2lsdum9">history</a>
                    </li>
                    <li>
                        <i class="fa fa-linkedin"></i>
                        <a href="https://www.linkedin.com/in/turay-musaa-45a039218">Linkedin</a>
                    </li>
                </ul>
            </div>

            <div class="main-body">
                <div class="headtittle">
                    <span class="greeeting">Hii TURAY,</span>
                    <h2>Overview</h2>
                </div>

                <div class="cards">
                    <div class="row row-1">
                        <div class="col">
                            <div class="balance-card">
                                <h3 class="cardtittle">Total Number of Student</h3>
                                <h2 class="balance">169</h2>
                                <span class="balancestatus">+12%</span>
                                <img width="60px" height="60px" src="./Final Dashboard/Images/Student.svg" alt="">
                            </div>
                        </div>

                        <div class="col">
                            <div class="latest-activity">
                                <h3 class="cardtittle">Our Logo</h3>
                                <img width="100%" height="100px" src="./Final Dashboard/logo.png" alt="">
                            </div>
                        </div>

                        <div class="col">
                            <div class="debit-card">
                                <h3 class="cardtittle">Account Number</h3>
                                <h3 class="cardnumber">1234 5678 9101 1123</h3>
                                <h3 class="cardholder">Musa Turay</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row row-2">
                        <div class="col">
                            <div class="total-invoice">
                                <h3 class="cardtittle">Total Income</h3>
                                <span class="t-i">Le. 8,947,897.00</span>
                                <span class="status">+7%</san>
                            </div>
                        </div>
                        <div class="col">
                            <div class="paid-invoice">
                                <h3 class="cardtittle">Paid invoice</h3>
                                <span class="p-i">210</span>
                                <span class="status">
                                    85%
                                    <i class="fa fa-line-chart"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="unpaid-invoice">
                                <h3 class="cardtittle">Unpaid invoice</h3>
                                <span class="u-i">65</span>
                                <span class="status">
                                    15%
                                    <i class="fa fa-line-chart"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="invoice-sent">
                                <h3 class="cardtittle">Invoice sent</h3>
                                <span class="i-s">120</span>
                                <span class="status">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<!--------main-content------------->



<footer class="footer">
<div class="container-fluid">
<div class="footer-in">
<p class="mb-0">Turaymathic Academy 2022  - All Rights Reserved.</p>
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