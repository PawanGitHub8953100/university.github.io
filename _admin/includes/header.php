<?php
session_start();
include("includes/db_connect.php");
include("includes/functions.php");
?>

<html>
<head><title>University</title>
<!--<link rel="stylesheet" href="../Admin_css/AdminStyle.css">-->
<link rel="stylesheet" href="css/university_css.css">
<script src="js/validate.js"></script>
<style type="text/css">
	/*demo page css*/
/*	body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
	.demoHeaders { margin-top: 2em; }
	#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
	#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
	ul#icons {margin: 0; padding: 0;}
	ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
	ul#icons span.ui-icon {float: left; margin: 0 4px;}*/
</style>
<!--Facbox Plugins-->
<script src="plugins/Facebox/facebox/facebox/jquery.js" type="text/javascript"></script>
<link href="plugins/Facebox/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
<script src="plugins/Facebox/facebox/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox()
	}) 
</script>	


<!--Image Plugins-->
<link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" media="screen"/>
<script src="Plugins/lightbox/js/prototype.js" type="text/javascript"></script>
<script src="Plugins/lightbox/js/scriptaculous.js?load=effects" type="text/javascript"></script>
<script src="Plugins/lightbox/js/lightbox.js" type="text/javascript"></script>

	<!--Number Validation -->
	<script>
	goods = "0123456789."; // onKeypress="goods='abcd'; return limitchar(event)"
function limitchar(e) {
    var key, keychar;
    if (window.event)
        key = window.event.keyCode;
    else if (e)
        key = e.which;
    else
        return true;
    keychar = String.fromCharCode(key);
    keychar = keychar.toLowerCase();
    goods = goods.toLowerCase();
    if (goods.indexOf(keychar) != -1) {
        goods = "0123456789.";
        return true;
    }
    if (key == null || key == 0 || key == 8 || key == 9 || key == 13 || key == 27) {
        goods = "0123456789.";
        return true;
    }
    return false;
}
</script>

</head>

<body>

 <div class="stu_container">
 	<img id="stu-img" src="../images/Admin_university-logo.png">
   	<div class="stu-container">PRAYAGRAJ UNIVERSITY</div>
  </div>
 
<!--<form action="lib/student.php"  method="post" id="log_form">-->
  <table  class="student_table" border="1px">
    <tr>
	<!--../AdminPanalHome.php
      <th scope="col"><a href="../AdminPanalHome.php">Home</a></th>-->
      <th scope="col"><a href="student_view.php">Student</a></th>
	  			<!---->
      <th scope="col"><a href="student_fees.php">Fees</a></th>
	  <th scope="col"><a href="faculityReq.php">Faculity Req.</a></th>
	  <th scope="col"><a href="faculityAcc.php">Faculity Acc.</a></th>
      <th scope="col"><div class="drop-div">Exam
	  			<div class="course-dropdown">
	  			<div class="Dropdown-data" ><a href="exam_add.php">Shedule</a></div>
				<div class="Dropdown-data" ><a href="exam_view.php">View</a></div>
				</div>
	  </th>
      <th scope="col"><a href="mark_view.php">Mark-View</a></th>
      <th scope="col"><a href="plugins/Lightbox/galary.php">Gallery</a></th>
	  <th scope="col"><div class="database">DataMag.
	  	  <div class="data-nav">
		  <table>
		  <tr class="tr-cl"><td><a href="country.php">Country</a></td></tr>
		  <tr class="tr-cl"><td><a href="state.php">State</a></td></tr>
		  <tr class="tr-cl"><td><a href="course.php">Course</a></td></tr>
		  <tr class="tr-cl"><td><a href="subject.php">Subject</a></td></tr>
		  <tr class="tr-cl"><td><a href="security.php">Security_Q</a></td></tr>
		  </table>
		  </div>

	  </div></th>
	
      <th scope="col">
	  	  <form action="../_admin/lib/login.php?act=logout" id="frm-h" method="post">
	  <button class="log-btn" onClick="return confirm('ARE YOU SURE?')">Logout</button>
	  </form>

	  </th>
     
    </tr>
  </table> 

<div class="student-header-img"><img class="student-img" src="images/IICS.webp"/>
<div class="student-header-div">
<div class="Student-div-heading"><p id="stu-text-heading">Student</p></div>
</div>
</div>
<script>
  /*const menu = document.querySelector(".database");
    const mobnav = document.querySelector(".data-nav");
    menu.addEventListener("click", function() {
        mobnav.style.transform = "scale(100%)";
    });
	 const clo = document.querySelector(".data-nav");
    const mobn = document.querySelector(".data-nav");
    clo.addEventListener("click", function() {
        mobnav.style.transform = "scale(0%)";
    });*/
</script>