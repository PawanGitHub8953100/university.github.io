<?php include("includes/header1.php");?>
<form>

<div class="data-msg-div" >
<div class="msg-result">
<div class="welcome">WELCOME</div>
<?php
global $con;
$fac_id=$_SESSION['fac_id'];
$sql="select * from faculity where fac_id='$fac_id'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));

?>
<table border="1px" width="1510px" class="fac_zone_table">
<tr class="fac_zon_table_tr1">
 <td>NAME</td>
 <td>DOB</td>
 <td>PHONE</td>
 <td>GENDER</td>
 <td>QUALIFICATION</td>
 <td>EXPERIENCE</td>
 <td>AREA OF INTREST</td>
 <td>DESIGNATION</td>
 <td>EMAIL</td>
 <td>NET QUALIFIDE</td>
 <td>PHD QUALIFIDE</td>
 <td>ACTION</td>
</tr>
<?php while($data=mysqli_fetch_assoc($rs)){?>
<tr class="fac_zon_table_tr2">
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
<td><a href="faculityLogin.php?fac_id=<?=$data[fac_id]?>"><img src="../images/edit.jpg"style="margin-top:2px;margin-left:02px;" width="40px" height="40px" /></a><a href="faculityZoneDetails.php?fac_id=<?=$data[fac_id]?>"><img src="../images/details.jpg"style="margin-top:2px;margin-left:02px;" width="40px" height="40px" /></a></td>
</tr>
<?php }?>
</table>

</div>
</form>
<link rel="stylesheet" href="css/faculityZone.css">