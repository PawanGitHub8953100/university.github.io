<?php include("includes/header1.php");
$sql="select * from faculity where fac_id='$_REQUEST[fac_id]'";
global $con;
$rs= mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);

?>
<link rel="stylesheet" href="../_admin/css/faculityLogin.css"/>

<div style="position:absolute;top:200px;left:100px; width:1318px;">
<form action="lib/faculity.php" method="post" enctype="multipart/form-data" name="faculity_frm">
    <div class="main-div" style="position:relative;top:0px;left:-05px;">
	<table border="1" class="faculity-table">
      <tr>
         <th colspan="4"><div class="heading">FACULITY DETAILS</div></th>
      </tr>
      <tr>
        <td width="205">NAME</td>
        <td width="286"><?=$data[fac_name]?></td>
        <td width="284">QUALIFICATION</td>
        <td width="712"><?=$data[fac_area]?></td>
      </tr>
      <tr>
        <td>DOB</td>
        <td><?=$data[fac_dob]?></td>
        <td>EXPERIENCE</td>
        <td><?=$data[fac_exp]?></td>
      </tr>
      <tr>
        <td>PHONE</td>
        <td><?=$data[fac_phone]?></td>
        <td>AREA OF INTREST </td>
        <td><?=$data[fac_area]?></td>
      </tr>
      <tr>
        <td>CATEGORY</td>
        <td><?=$data[fac_cat]?></td>
        <td>DESIGNATION</td><td><?=$data[fac_desig]?></td>
      </tr>
      <tr>
        <td>GENDER</td>
        <td><?=$data[fac_gender]?></td>
        <td>EMAIL </td>
        <td><?=$data[fac_email]?></td>
      </tr>
      <tr>
        <td>ADDRESS</td>
        <td><?=$data[fac_address]?></td>
        <td>PHD QUALIFIDE </td>
        <td><?=$data[fac_phd]?></td>
      </tr>
	  	  <tr>
	  	 <td>NET QUALIFIDE</td>
	     <td><?= $data[fac_net]?></td>
	  </tr>
      <tr>
        <td id="td-act" colspan="4" align="center"><input type="button" class="btn" name="Submit" value="print" onclick="javascript:print();" /><input type="button" class="btn" name="Back" value="Back" onclick="javascript:history.back();"/></td>
      </tr>
	     </table>
</form>
</div>	