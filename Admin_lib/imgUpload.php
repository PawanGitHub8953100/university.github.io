<?php
 include("../Admin_Includes/Admin_db_connect.php");
 global $acon; 
########################################################
 if($_REQUEST['submitAct']=="upload"){
 imageGal();
 }
########################################################
if($_REQUEST['act']=="gallery_multi_delete"){
gallery_multi_delete();
 }
 
########################################################
 function imageGal(){
 /*echo"<pre>";
 print_r($_FILES);*/
	if(count($_FILES['upload_img']['name'])<=10){
 foreach($_FILES['upload_img']['name'] as $key => $value){
 #echo"$value<br>";

    move_uploaded_file($_FILES['upload_img']['tmp_name'][$key],"../uploadsGall/".$value);
 	#move_uploaded_file($_FILES['st_image']['tmp_name'],"../uploads/".$st_image);
 	global $acon; 
	$sql="INSERT  INTO `university`.`gallery`(`gal_image`)VALUES('$value')";
 	$rs=mysqli_query($acon,$sql)or die(mysqli_error($con));	
 }
  if($rs){
 	header("location:../galary.php?msg=Sucess Full Uploaded!!");
  }
 #  header("location:../galary.php?msg=Sucess Full Uploaded!!");
 }else{
 	header("location:../galary.php?msg=Plz select Only 10 Image!!");

 }
 }
 
################--Add Delete------#########################
function gallery_multi_delete(){

global $acon;
$R=$_REQUEST['gal_id'];
if($_REQUEST['gal_multi_id']==0){
header("location:../galary.php?msg=Plz select first to continue.!!");
die();
}
foreach($_REQUEST['gal_multi_id'] as $R){
$sql="select gal_id from gallery where gal_id=$R";
$rs=mysqli_query($acon,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
if($data[gal_image]){
unlink("../uploadsGall/".$data[gal_image]);
}
$sql="delete from gallery where gal_id=$R";
$rs=mysqli_query($acon,$sql) or die(mysqli_error($con));
}
if($rs)
header("location:../galary.php?msg=Record Delete SuccessFull!!");
}
?>