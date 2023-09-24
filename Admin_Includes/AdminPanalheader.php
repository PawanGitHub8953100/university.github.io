<?php include("Admin_Includes/Admin_db_connect.php");?>
<?php
global $acon;
	$sql="select *from course where course_id";
	$rs=mysqli_query($acon,$sql)or die(mysqli_error($acon));
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="Admin_css/AdminStyle.css">
<script type="text/javascript" src="Admin_js/adminJs.js"></script>

</head>

<body>
  <div class="admin_container">
 	<img id="img" src="images/Admin_university-logo.png">
   	<div class="container">PRAYAGRAJ UNIVERSITY</div>
  </div>
    <table  class="admin_table" border="1px">
    <tr>
      <th scope="col"><a href="AdminPanalHome.php">Home</a></th>
      <th scope="col"><a href="AdminPanalCourse.php">Course</a></th>
	  			<!--<div class="course-dropdown">COURSE
	  			<div class="Dropdown-data" >BCA</div>
				<div class="Dropdown-data" >MCA</div>
				<div class="Dropdown-data" >PGDCA</div>-->
	  
      <th scope="col"><a href="AdminPanalContact.php">Contact</a></th>
      <th scope="col"><a href="AdminPanalFaculties.php">Faculties</a></th>
      <th scope="col"><a href="faculityAcc1.php">Faculity</a></th>
      <th scope="col"><a href="galary.php">Gallery</a></th>
      <th scope="col"><a href="AdminPanalNewsNote.php">New&amp;Noties</a></th>
      <th scope="col"><a href="AdminPanalStudentZone.php">Student-Zone </a></th>
    </tr>
  </table> 
<!--<div id="top-border-down"></div>-->