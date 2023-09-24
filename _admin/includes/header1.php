<?php
session_start();
include("includes/db_connect.php");
if(!isset($_SESSION['fac_id'])){
header("location:../index.php?msg=Please Login First to Continuee...");
}
?>
<?php
global $con;
$fac_id=$_SESSION['fac_id'];
$sql="select fac_image from faculity where fac_id='$fac_id'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../Admin_css/AdminStyle.css">
<script type="text/javascript" src="Admin_js/adminJs.js"></script>
</head>
<body>
  <div class="admin_container">
 	<img id="img" src="../images/Admin_university-logo.png">
   	<div class="container">PRAYAGRAJ UNIVERSITY</div>
  	</div>	
	<div style="width:100px;height:100px;border-radius:50%;position:absolute;top:10px;right:50px; z-index:100;"><a><img src="fac_Uploads/<?=$data[fac_image]?>" width="100px" height="100px" style="border-radius:50%" /></a></div>


    <table  class="admin_table" border="1px">
    <tr>
      <th scope="col"><a href="faculityPassUpdate.php?fac_id=<?=$_SESSION['fac_id']?>">Password Update</a></th>
      <th scope="col"><a href="lib/login.php?act=logout_fac">Logout</a></th>
     </tr>
</table> 
