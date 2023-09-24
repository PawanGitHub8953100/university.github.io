<?php include_once("includes/header.php");?>
<div id="stu-view-div" align="center" style="font-size:1.7em;color:green; background-color:silver;width:1490px;box-shadow:1px 0px 010px 2px green inset;   text-shadow: 1.5px 1px rgb(84, 2, 70);"><?=$_REQUEST['fmsg']?></div>
<?php
if($_REQUEST[fees_id])
global $con;
$sql="Select *from fees order by fees_id";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));

?>
<div style="position:relative;top:60px;"> 
<form action="lib/student.php" method="post" enctype="multipart/form-data" name="paid_view" id="paid_view" onsubmit="return fees_add(this);">

	<table width="1505" id="stu-view-table">
	<tr>
		<td colspan="8" ><div style="text-align:right;padding-right:100px;"><input type="button" value="back" onclick="javascript:history.back()" /></div></td>
	</tr>
	<tr class="stu-view-table-tr">
    <td>STUDENT ID:</td>
	<td>STUDENT COURSE:</td>
	<td>TOTAL FEES:</td>
	<td>PAID AMOUNT:</td>
	<td>PENDING BALANCE:</td>
	<td>FEES DATE:</td>
	<td>STUDENT DESCRIPTION:</td>
	<td><div class="fees_print" >ACTION</div></td>
	</tr>
	<?php
	while($data=mysqli_fetch_assoc($rs)){
	?>
  <tr class="stu-view-table-tr"> 
  	<td><?=$data[fees_st_id]?></td>
	<td><?=$data[fees_st_course]?></td>
	<td><?=$data[fees_total]?></td>
	<td><?=$data[fees_amount]?></td>
	<td><?=$data[fees_balance]?></td>
	<td><?=$data[fees_date]?></td>
	<td><?=$data[fees_desc]?></td>		 
    <td><div class="fees_print"><a href="fees_view.php?st_id=<?=$data[fees_st_id]?>"><img src="images/print-view.png"  width="35px" height="35px"/></a><a href="javascript:fees_delete(<?=$data[fees_id]?>)"><img src="images/del.ico"/></a></div></td>
    </tr>
	<?php }?>
  </table>
  <input type="hidden" id="fees_st_id" name="fees_st_id" value="<?=$data[fees_st_id]?>" />
  <input type="hidden" id="fees_act" name="fees_act"/>
  <input type="hidden" id="fees_id" name="fees_id" value="<?=$data[fees_id]?>"/>
   
</form>

