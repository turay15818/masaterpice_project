<?php include('connection.php'); ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <!-- New Link for Dashbord Header and Side Bar start here-->
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!----css3---->
<link rel="stylesheet" href="../css/custom.css">
<!--google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<!--google material icon-->
<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  
  
  <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />
  <title>TURAYMATHIC ACADEMY</title>
  <link rel="stylesheet" href="./css/style.css">
  <style type="text/css">
    .btnAdd {
      text-align: right;
      width: 83%;
      margin-bottom: 20px;
    }
    *{
margin: 0;
padding: 0;
}

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
<a href="./add_user.php">Premium Student</a>
</li>
<li>
<a href="./view_user.php">VIEW Student</a>
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
<div class="container-fluid">
    <h2 class="text-center">WELCOME TURAYMATHIC ACADEMY</h2>
    <!-- <p class="datatable design text-center">Welcome to TURAYMATHIC ACADEMY</p> -->
    <div class="row">
      <div class="container">
        <div class="btnAdd">
          <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal" class="btn btn-success btn-sm">Add User</a>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <table id="example" class="table">
              <thead>
                <th>Id</th>
                <th>Student/Lecturer Name</th>
                <th>Email</th>
                <th>Enroll As</th>
                <th>Phone Number</th>
                <th>Options</th>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/dt-1.10.25datatables.min.js"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
          $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
          'url': 'fetch_data.php',
          'type': 'post',
        },
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [5]
          },

        ]
      });
    });
    $(document).on('submit', '#addUser', function(e) {
      e.preventDefault();
      var city = $('#addCityField').val();
      var username = $('#addUserField').val();
      var mobile = $('#addMobileField').val();
      var email = $('#addEmailField').val();
      if (city != '' && username != '' && mobile != '' && email != '') {
        $.ajax({
          url: "add_user.php",
          type: "post",
          data: {
            city: city,
            username: username,
            mobile: mobile,
            email: email
          },
          success: function(data) {
            var json = JSON.parse(data);
            var status = json.status;
            if (status == 'true') {
              mytable = $('#example').DataTable();
              mytable.draw();
              $('#addUserModal').modal('hide');
            } else {
              alert('failed');
            }
          }
        });
      } else {
        alert('Fill all the required fields');
      }
    });
    $(document).on('submit', '#updateUser', function(e) {
      e.preventDefault();
      //var tr = $(this).closest('tr');
      var city = $('#cityField').val();
      var username = $('#nameField').val();
      var mobile = $('#mobileField').val();
      var email = $('#emailField').val();
      var trid = $('#trid').val();
      var id = $('#id').val();
      if (city != '' && username != '' && mobile != '' && email != '') {
        $.ajax({
          url: "update_user.php",
          type: "post",
          data: {
            city: city,
            username: username,
            mobile: mobile,
            email: email,
            id: id
          },
          success: function(data) {
            var json = JSON.parse(data);
            var status = json.status;
            if (status == 'true') {
              table = $('#example').DataTable();
              // table.cell(parseInt(trid) - 1,0).data(id);
              // table.cell(parseInt(trid) - 1,1).data(username);
              // table.cell(parseInt(trid) - 1,2).data(email);
              // table.cell(parseInt(trid) - 1,3).data(mobile);
              // table.cell(parseInt(trid) - 1,4).data(city);
              var button = '<td><a href="javascript:void();" data-id="' + id + '" class="btn btn-info btn-sm editbtn">Edit</a>  <a href="#!"  data-id="' + id + '"  class="btn btn-danger btn-sm deleteBtn">Delete</a></td>';
              var row = table.row("[id='" + trid + "']");
              row.row("[id='" + trid + "']").data([id, username, email, mobile, city, button]);
              $('#exampleModal').modal('hide');
            } else {
              alert('failed');
            }
          }
        });
      } else {
        alert('Fill all the required fields');
      }
    });
    $('#example').on('click', '.editbtn ', function(event) {
      var table = $('#example').DataTable();
      var trid = $(this).closest('tr').attr('id');
      // console.log(selectedRow);
      var id = $(this).data('id');
      $('#exampleModal').modal('show');

      $.ajax({
        url: "get_single_data.php",
        data: {
          id: id
        },
        type: 'post',
        success: function(data) {
          var json = JSON.parse(data);
          $('#nameField').val(json.username);
          $('#emailField').val(json.email);
          $('#mobileField').val(json.mobile);
          $('#cityField').val(json.city);
          $('#id').val(id);
          $('#trid').val(trid);
        }
      })
    });

    $(document).on('click', '.deleteBtn', function(event) {
      var table = $('#example').DataTable();
      event.preventDefault();
      var id = $(this).data('id');
      if (confirm("Are you sure want to delete this User ? ")) {
        $.ajax({
          url: "delete_user.php",
          data: {
            id: id
          },
          type: "post",
          success: function(data) {
            var json = JSON.parse(data);
            status = json.status;
            if (status == 'success') {
              //table.fnDeleteRow( table.$('#' + id)[0] );
              //$("#example tbody").find(id).remove();
              //table.row($(this).closest("tr")) .remove();
              $("#" + id).closest('tr').remove();
            } else {
              alert('Failed');
              return;
            }
          }
        });
      } else {
        return null;
      }



    })
  </script>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="updateUser">
            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" name="trid" id="trid" value="">
            <div class="mb-3 row">
              <label for="nameField" class="col-md-3 form-label">Student/Lecture Name</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="nameField" name="name">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="emailField" class="col-md-3 form-label">Email</label>
              <div class="col-md-9">
                <input type="email" class="form-control" id="emailField" name="email">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="mobileField" class="col-md-3 form-label">Enroll As</label>
              <div class="col-md-9">
                <!-- <input type="text" class="form-control" id="mobileField" name="mobile"> -->
                <select name="mobile" id="mobileField">
                <option value="">Select</option><br>
                <option value="Lecutre" id="mobileField" name="mobile">Lecturer</option>
                <option value="Premium Student" id="mobileField" name="mobile">Premium Student</option>
                </select>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="cityField" class="col-md-3 form-label">Phone Number</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="cityField" name="City">
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Add user Modal -->
  <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="addUser" action="">
            <div class="mb-3 row">
              <label for="addUserField" class="col-md-3 form-label">Student/Lecturer Name</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="addUserField" name="name">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="addEmailField" class="col-md-3 form-label">Email</label>
              <div class="col-md-9">
                <input type="email" class="form-control" id="addEmailField" name="email">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="addMobileField" class="col-md-3 form-label">Enroll As</label>
              <div class="col-md-9">
                <!-- <input type="text" class="form-control" id="addMobileField" name="mobile"> -->
                <select name="mobile" id="addMobile">
                <option value="">Select</option><br>
                <option value="Lecturer"id="addMobileField" name="mobile">Lecturer</option>
                <option value="Premium Student"id="addMobileField" name="mobile">Premium Student</option>
                </select>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="addCityField" class="col-md-3 form-label">Phone Number</label>
              <div class="col-md-9">
                <input type="text" class="form-control" id="addCityField" name="City">
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<!-- main content end here  -->


<footer class="footer">
<div class="container-fluid">
<div class="footer-in">
<p class="mb-0">Turaymathic Academy 2022  - All Rights Reserved.</p>
</div>
</div>
</footer>
</div>
</div>





<!-- New Script Start here -->
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
  //var table = $('#example').DataTable();
 
</script>
</body>
</html>


<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7_dtp.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;  width:600px;}
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://gmail.us20.list-manage.com/subscribe/post?u=f920188bb3f12fb0aba844e37&amp;id=a08e449ab4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribe</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear foot">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f920188bb3f12fb0aba844e37_a08e449ab4" tabindex="-1" value=""></div>
        <div class="optionalParent">
            <div class="clear foot">
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                <p class="brandingLogo"><a href="http://eepurl.com/h0OhFz" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p>
            </div>
        </div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->