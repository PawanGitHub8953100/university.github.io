<?php
include("Admin_Includes/Admin_db_connect.php");

 function get_option_list($table,$col_id,$col_name,$sel){
	global $acon;
	$sql="select *from $table order by $col_id";
	$option_list="<option value='0'>PLEASE SELECT</option>";
	$rs=mysqli_query($acon,$sql)or die(mysqli_error($acon));
	while($data=mysqli_fetch_assoc($rs)){
	if($data[$col_id]==$sel){
	$option_list.="<option value='$data['$col_id']'  selected>$data['$col_name']</option>";
	}else{
	$option_list.="<option value='$data['$col_id']'>$data[$col_name]</option>";
	 }
	}
	return $option_list;
   }

#####################FOr get single value######
function get_single_value($table,$col_id,$col_name,$sel){
global $acon;
$sql="select $col_name from $table where $col_id='$sel'";
$rs=mysqli_query($acon,$sql)or die(mysqli_error($acon));
$data=mysqli_fetch_assoc($rs);
return $data[$col_name];
}
####################For get multi value ############
function get_multi_values($table,$col_id,$col_name,$sel){
global $acon;
$sql="select $col_name from $table where $col_id in($sel)";
$rs=mysqli_query($acon,$sql)or die(mysqli_error($acon));
$multi_value="";	
while($data=mysqli_fetch_assoc($rs)){
$multi_value.=$data[$col_name].",";
}
return $multi_value;
}

#################################

?> 
