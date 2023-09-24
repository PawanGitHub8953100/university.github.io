<?php 
 include("includes/header.php");
 global $con;
 $ssql="select * from student";
 $srs=mysqli_query($con,$ssql)or die(mysqli_error($con));
$sdata=mysqli_fetch_assoc($srs);	

?>
<link rel="stylesheet" href="css/mark_view.css" />
<form action="" method="post" enctype="multipart/form-data">
<div class="mark_vew" style="width:94em; height:auto;">
<table border="1" class="view-mark">
<tr class="mr-view">
<th>ID</th>
<th>NAME</th>
<th>FATHER</th>
<th>GENDER</th>
<th>COURSE</th>
<th>ACTION</th>
</tr>
<?php

$sql="select * from student";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
while($data=mysqli_fetch_assoc($rs)){

#print_r($id);
 $fsql="select *from fees where fees_st_id='$data[st_id]'";
 $frs=mysqli_query($con,$fsql)or die(mysqli_error($con));
while($fdata=mysqli_fetch_assoc($frs)){		
if($fdata[fees_balance]=="null"){ 
#print_r($fdata); 

$esql= "Select * from exams where exam_course='$data[st_course]'";
$ers=mysqli_query($con,$esql)or die(mysqli_error($con));
$edata=mysqli_fetch_assoc($ers);		
#print_r($edata);
 if($data[st_course]==$edata[exam_course]){
#echo "$data[st_course]"."$edata[exam_course]";
 
 ?>
 <tr class="mr-view">
 <td align="center"><?=$data[st_id]?></td>
 <td><?=$data[st_name]?></td>
 <td><?=$data[st_father]?></td>
 <td><?=$data[st_gender]?></td>
 <td><?=get_single_value("course","course_id","course_name",$data[st_course])?></td>
 <td align="center"><div id="ank"><a href="mark_add.php?st_id=<?=$data[st_id]?>">Mark Add</a></div></td>
 </tr>
 <?php
 }
 }
 }
 }
 ?>
</table>
</div>
</form>

