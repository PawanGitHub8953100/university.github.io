<?php
 include("Admin_Includes/AdminPanalheader.php");
	global $acon;
	$sql="select * from faculity";
	$rs=mysqli_query($acon,$sql)or die(mysqli_error($acon));
	$data=mysqli_fetch_assoc($rs);
	
?>
<link rel="stylesheet" href="Admin_css/faculityAcc.css"/>
  <form action="lib/login.php" method="post" enctype="multipart/form-data" name="faculityReq_frm">
    <div class="fac-header-img" style="position:relative;top:120px;"><img class="fac-img" src="images/IICS.webp"/>
	<div class="fac-header-div">
	<div class="fac-div-heading"><p id="fac-text-heading">Faculity Accept</p></div>
	</div>
	</div>
	
<div style="position:absolute;top:350px;">
	
	<div class="faculityAcc-main-div">
	<table border="1px" class="faculityAcc-table">
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
	</tr>
	<?php while($data=mysqli_fetch_assoc($rs)){
		if($data[fac_status]=="true"){
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
</tr>
		<?php }}?>
	</table>
		<div style="position:relative;top:50px;color:black;">
		<?=$_REQUEST['msg']?>
		</div>
	</div>
</div>	
  </form>
