<?php 
include("../includes/db_connect.php");
global $con;

$R=$_REQUEST;
$st_id=$R['st_id'];
$sub_total=$R['mark_total'];
$sub_prac=$R['mark_prac'];
$find_total=$R['mark_obtain'];
$find_prac=$R['obt_prac'];

if($sub_total>$find_total&&$find_total>0){
  if($sub_prac>$find_prac&&$find_prac>-1){
	$total_find=$find_total+$find_prac;


$sql="INSERT INTO`university`.`mark_add`(`mark_st_id` ,`mark_st_name`,`mark_st_father`,`mark_st_gen`,`mark_st_course`,`mark_sub`,`mark_sub_total`,`mark_sub_obt`,`mark_sub_prac`,`obt_prac`,`mark_date`,`mark_desc`,`mark_sum_total`)
VALUES('$R[st_id]','$R[mark_name]','$R[mark_father]','$R[mark_gender]','$R[mark_course]','$R[mark_sub]','$R[mark_total]','$R[mark_obtain]','$R[mark_prac]','$R[obt_prac]','$R[mark_date]','$R[mark_desc]','$total_find')";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
if($rs){
header("location:../mark_add.php?msg=RECORD SUCCESSFULL SAVE!!");
}
}else{
header("location:../mark_add.php?msg=PLEASE ENTER CORRECT PRACTICAL MARK");
  }
}else{
header("location:../mark_add.php?msg=PLEASE ENTER CORRECT OBTAIN MARK");
}
?>