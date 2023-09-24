<?php
session_start();
if(!isset($_SESSION['user_id'])){
header("location:../AdminPanalStudentZone.php?msg=Please Login First to Continuee...");
}
include("Admin_Includes/Admin_db_connect.php");
include("Admin_Includes/Admin_functions.php");

?>
<div class="header11">
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
      <th scope="col"><a href="student_details.php?st_id=<?=$_SESSION['user_id']?>">Details</a></th>
      <th scope="col"><a href="fees_view.php?st_id=<?=$_SESSION['user_id']?>">Fees Details</a></th>
      <th width="220px" scope="col"><a href="Admit_card.php?st_id=<?=$_SESSION['user_id']?>">Admit Card</a></th>
      <th scope="col"><a href="_admin/AdmitCardPdf.php?st_id=<?=$_SESSION['user_id']?>">Admit Card Pdf</a></th>
   <th scope="col"><a href="mark_result.php?st_id=<?=$_SESSION['user_id']?>">Result</a></th>
     <th scope="col">
	  <form action="Admin_lib/Admin_login.php?act=logout" id="frm-h" method="post">
	  <button class="log-btn" onClick="return confirm('ARE YOU SURE?')">Logout</button>
	  </form>

	  </th>
     </tr>
</table> 
</div>