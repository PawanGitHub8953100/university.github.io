<?php
include("includes/header.php");
global $con;
 $sql="select * from faculity";
 $rs=mysqli_query($con,$sql)or die(mysqli_error($con));
?>
<link rel="stylesheet" href="../_admin/css/faculityReq.css"/>
<style type="text/css">
<!--
.style1 {
	font-size: xx-large;
	font-weight: bold;
}
-->
</style>
  <form action="lib/login.php" method="post" enctype="multipart/form-data" name="faculityReq_frm" >
 <div class="fac-header-img"><img class="fac-img" src="images/IICS.webp"/>
	<div class="fac-header-div">
	<div class="fac-div-heading"><p id="fac-text-heading">Faculity  Request</p></div>
	</div>
	</div>
	<div class="faculityReq-main-div">
	<table border="1px" class="faculityReq-table">
	<tr class="fac-req-tr">
	<td>Name</td>
	<td>DOB</td>
	<td>Phone No.</td>
	<td>Gender</td>
	<td>Qualification</td>
	<td>Experience</td>
	<td>Area of Intrest</td>
	<td>Designation</td>
	<td>email</td>
	<td>NET Qualifide</td>
	<td>PHD Qualifide</td>
	<td>Action</td>
	</tr>
	<?php while($data=mysqli_fetch_assoc($rs)){
		if($data[fac_status]=="false"){
	?>	
		<tr class="fac-req-tr" id="<?=$data[fac_id]?>">
		 <td><?=$data[fac_name]?></td>
		 <td><?=$data[fac_dob]?></td>
		 <td><?=$data[fac_phone]?></td>
		 <td><?=$data[fac_gender]?></td>
		 <td><?=$data[fac_qual]?></td>
		 <td><?=$data[fac_exp]?></td>
		 <td><?=$data[fac_area]?></td>
		 <td><?=$data[fac_desig]?></td>
		 <td><?=$data[fac_email]?></td>
		 <td><?=$data[fac_net]?></td>
		 <td><?=$data[fac_phd]?></td>
		 <td><input type="button" id="btn" value="ACCEPT" onclick="fac_value(<?=$data[fac_id]?>)"/><a href="javascript:fac_delete(<?=$data[fac_id]?>)"><img src="images/del.ico"/></a></td>
		</tr>
		<?php  }}?>
	</table>
	<input type="hidden" name="fac_act" id="fac_act" />
	<input type="hidden" name="fac_id" id="fac_id"/>
	<div id="msgs" style="position:relative;top:-80px;z-index:100;color:white;padding-left:10px;font-size:x-large;"><?=$_REQUEST['msg']?></div>
	</div>
  </form>
	 