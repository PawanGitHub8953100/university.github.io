<?php include_once("includes/header.php");?>
<div class="search" style="position:absolute;top:400px;">
<form action="#" method="post">
Enter to Search: <input type="text" name="st_search" id="st_search"/>
<input type="submit" id="searchbtn" value="search"/>
 </form>
 </div>

<div id="stu-view-div" align="center" style="font-size:1.7em;color:green; background-color:silver;width:55.51em;box-shadow:1px 0px 010px 2px brown inset;   text-shadow: 1.5px 1px rgb(84, 2, 70);position:relative;top:90px;"><?=$_REQUEST['msg']?></div>
<div style="position:relative;top:90px;">
 </div>

<?php
global $con;
if($_REQUEST['st_search']){
$sql= "Select * from student where st_id like '%$_REQUEST[st_search]%' or st_gender like '%$_REQUEST[st_search]%' or st_name like '%$_REQUEST[st_search]%'";

}else{
$sql= "Select * from student order by st_id";
}
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));




?>

<div style="position:relative;top:92px;">


<form action="lib/student.php" method="post" enctype="multipart/form-data" name="student_view" id="student_view" onsubmit="return valid_student(this);">
    <table width="1510px" id="stu-view-table">
  <tr height="44px" id="logo-tr">
	<th colspan="14"><div class="stu-div-logo">
	<div style="width:30px;height:35px;position:absolute;top:-20px;right:300px;"><a href="pdf.php" download="pdf.php"><img src="images/pdf-download.png" width="40px" height="35px"/></a></div><div style="width:30px;height:35px;position:absolute;top:-20px;right:250px;"><a href="pdf.php"><img src="images/pdf-img.png" width="40px" height="35px"/></a></div>
<a href="student_add.php"><img id="st-add-form-logo"  src="images/student-form.png"></a>&nbsp;<a href="javascript:student_multi_delete()" ><img id="alldelete-logo" src="images/alldelete.png" >
</a>&nbsp;<a href=" javascript:printOut();" ><img src="images/printer.jpg" id="print-logo" /></a></div></th>
	</tr>
	
	<tr class="stu-view-table-tr">
      <td width="21"><input type="checkbox" class="multi-select" onclick="selectAll(this)"/></td>
      <td width="60">NAME</td>
      <td width="80">FATHER</td>
      <td width="70">PHONE</td>
      <td width="63">EMAIL</td>
      <td width="85">GENDER</td>
      <td width="44">DOB</td>
      <td width="46">DOA</td>
      <td width="57">PIN CODE</td>
      <td width="72">LOCAL ADD</td>
      <td width="67">REAL AAD </td>
      <td width="84">IMAGE</td>
      <td width="129">ACTION</td>
      
    </tr>
	<?php
		while($data=mysqli_fetch_assoc($rs)){
	
	?>
  <tr class="stu-view-table-tr"> 
      <td width="25">
	  <input type="checkbox" name="st_multi_id[]" id="st_multi_id[]" class="multi-select" value="<?=$data[st_id]?>"/></td>
      <td><?=$data[st_name]?></td>
      <td><?=$data[st_father]?></td>
      <td><?=$data[st_phone]?></td>
      <td><?=$data[st_email]?></td>
  	  <td><?=$data[st_gender]?></td>
      <td><?=$data[st_dob]?></td>
      <td><?=$data[st_doa]?></td> 
      <td><?=$data[st_pincode]?></td>
      <td><?=$data[st_address1]?></td>
      <td><?=$data[st_address2]?></td>
      <td><div class="data-div-image"><a href="uploads/<?=$data[st_image]?>"><img id="stu-img-logo" src="uploads/<?=$data[st_image]?>" id="data-image" /></a></div></td>
      <td><a href="student_add.php?st_id=<?=$data[st_id]?>"><img src="images/edit.jpg" width="32px" height="32px" /></a><a href="javascript:student_delete(<?=$data[st_id]?>)"><img src="images/del.ico" /></a><a  href="student_details.php?st_id=<?=$data[st_id]?>"><img src="images/details.jpg" width="32px" height="32px"/>
	  <?php
	  $esql= "Select * from exams where exam_course='$data[st_course]'";
#echo $esql;
$ers=mysqli_query($con,$esql)or die(mysqli_error($con));
$edata=mysqli_fetch_assoc($ers);		

#print_r($edata);
?>
	  </a><a href='lib/admit.php?st_id=<?=$data[st_id]?>'>
	  <?php if($edata) echo"<input type='button' class='admit_blink' value='Admit Card'/>"
	 ?></a>
		  </td>
    </tr>
	<?php
	}
	?>
  </table>
  
  <input type="hidden" name="act"/>
  <input type="hidden" name="st_id" value="<?=$data[st_id]?>"/>
</form>
</div>