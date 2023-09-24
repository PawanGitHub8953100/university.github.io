<?php include("includes/header.php");
$sql="select * from student where st_id='$_REQUEST[st_id]'";
global $con;
$rs= mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);

?>

<!-- <div class="watermark"><h1>UNIVERSITY</h1></div> -->
<form action="lib/student.php" method="post" enctype="multipart/form-data" name="form_stu" id="form_stu" onsubmit="return valid_student(this);">

<table width="1482" border="1" id="table-middel">  
  <tr>
    <td height="40" colspan="4" valign="top" id="stu-h"><strong>
      <h2 align="center" id="stu-heading">STUDENT DETAILS </h2>
    </strong></td>
    </tr>
  <tr>
    <td width="187" height="27" valign="top"> NAME: </td>
    <td width="329"><?=$data[st_name]?></td>
    <td width="209" valign="top">FATHER'S NAME: </td>
    <td width="455"><?=$data[st_father]?></td>
    </tr>
  <tr>
    <td height="27" valign="top">PHONE: </td>
    <td><?=$data[st_phone]?></td>
    <td valign="top"> EMAIL: </td>
    <td><?=$data[st_email]?></td>
    </tr>
  <tr>
    <td height="27" valign="top"> GENDER: </td>
    <td><?=$data[st_gender]?></td>
    <td valign="top"> QUALIFICATION: </td>
    <td><?=get_multi_values("qualification","quali_id","quali_name",$data[st_qualification])?></td>
    </tr>
  <tr>
    <td height="27" valign="top"> DOB: </td>
    <td><?=$data[st_dob]?></td>
    <td valign="top"> DOA</td>
    <td><?=$data[st_doa]?></td>
    </tr>
  <tr>
    <td height="27" valign="top"> COURSE: </td>
    <td><?=get_single_value("course","course_id","course_name",$data[st_course])?></td>
    <td valign="top">CATEGORY: </td>
    <td><?=$data[st_category]?></td>
    </tr>
  <tr>
    <td height="27" valign="top"> COUNTRY: </td>
    <td><?=get_single_value("country","country_id","country_name",$data[st_country])?></td>
    <td valign="top"> STATE: </td>
    <td><?=get_single_value("state","state_id","state_name",$data[st_state])?></td>
    </tr>
  <tr>
    <td height="27" valign="top">PINCODE: </td>
    <td><?=$data[st_pincode]?></td>
    <td valign="top"> IMAGE: </td>
    <td><a href="uploads/<?=$data[st_image]?>" rel="facebox"><img src="uploads/<?=$data[st_image]?>"  width="65px" height="60px"/></a></td>
    </tr>
  <tr>
    <td height="50" valign="top"> LOCAL ADDRESS: </td>
    <td><?=$data[st_address1]?></td>
    <td valign="top">PERMANENT ADDRESS: </td>
    <td><?=$data[st_address2]?></td>
    </tr>
  <tr>
    <td height="28" colspan="4" valign="top" id="stu-btn-td"><div align="center" >
      <input type="button" class="detail-btn" value="back" onclick="javascript:history.back();"/>
      <input type="button" class="detail-btn" value="print" onclick="javascript:printOut();" />
    </div></td>
    </tr>
</table>

</form>

<?php include_once("includes/footer.php");?>
