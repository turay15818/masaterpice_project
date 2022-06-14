
<?php
if(isset($SESSION['Admin_Name'])){
header("Location: ../dashboard/index.php");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <title>TURAYMATHIC ACADEMY</title>
</head>

<style>
body{
align-items: center;
margin: auto;
margin-top: 70px;
box-shadow: 0px 0px 20px 0px #000000;
}
form{
    box-shadow: 0px 0px 20px 0px #000000;
}
.card{
    box-shadow: 0px 0px 20px 0px #000000;
    margin-bottom:40px;
}
.card-title{
    box-shadow: 0px 0px 20px 0px #000000;
}
.btn{
    box-shadow: 0px 0px 20px 0px #000000;
    margin: auto;
   margin: 10px;
   margin-bottom: 20px;
   margin-left: 20px;
}
</style>

                      


<body style="background-image: url('../jswallpaper.png');">

<div class="container">
<div class="row">
<div class="col-lg-6 m-auto">
<div class="card bg-dark mt-5">
<div class="card-title bg-primary text-white mt-5">
<marquee behavior="" direction=""><h1 class="text-center py-3">Welcome To Admin Login Page</h1></marquee>
</div>

<?php 
if(@$_GET['Empty']==true)
{
?>
<div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
<?php
}
?>


<?php 
if(@$_GET['Invalid']==true)
{
?>
<div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
<?php
}
?>

<div class="card-body">
<form action="process.php" method="post">
<input type="text" name="Admin_Name" placeholder=" User Name" class="form-control mb-3">
<input type="password" name="Admin_Password" placeholder=" Password" class="form-control mb-3">
<button class="btn btn-success mt-3" name="Login">Login</button>
</form>
</div>
</div>
</div>
</div>
</div>

</body>
</html>
