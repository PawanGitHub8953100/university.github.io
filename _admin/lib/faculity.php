<?php
session_start(); 
include("../includes/db_connect.php");

#######Faculity Submit Calling ##########
if($_REQUEST['act']=="faculity_login")
{
faculityReg();
}
################### Faculity Delete########
if($_REQUEST['fac_act']=="Delete_faculity"){
Delete_faculity();	
}
#######Faculity Password Change Calling##########

if($_REQUEST['act']=="fac_Pass_Change")
{
Fac_recovery_pass();
}

if($_REQUEST['act']=="fac_ChangePass")
{
fac_change_pass();
}



############--Faculity--login--##########
/*function faculityLogin(){
global $con;
$user=$_REQUEST[user_name];
$pass=$_REQUEST[user_pass];

$sql="select * from faculity where fac_name='$user' and fac_dob='$pass'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
print_r($sql);
$data=mysqli_fetch_assoc($rs);
if(mysqli_num_rows($rs)){
$_SESSION['fac_user']=$_REQUEST['user_name'];

header("location:../faculityAcc.php?msg=$_SESSION[fac_user]");
}else{
header("location:../index.php?msg=Please Try Login!!");
 }
}*/

###############-------------Faculity--Registration---------###############################
function faculityReg(){
global $con;
$R=$_REQUEST;
$sec=md5($R['fac_sec']);
$ans=md5($R['fac_ans']);

$fac_image=$_FILES['fac_image']['name'];
if($fac_image){
   $fac_image_arr=explode(".",$fac_image);
    $fac_image=$fac_image_arr[0].time().".".$fac_image_arr[1];
	move_uploaded_file($_FILES['fac_image']['tmp_name'],"../fac_Uploads/".$fac_image);
}
else
{
$fac_image=$_REQUEST[fac_image];
}

if($_REQUEST[fac_id]){
$sql="UPDATE `faculity` SET `fac_name`= '$R[fac_name]',`fac_dob`='$R[fac_dob]',`fac_phone`='$R[fac_phone]',`fac_gender`='$R[fac_gender]',`fac_qual`='$R[fac_qual]',`fac_cat`='$R[fac_cat]',`fac_address`='$R[fac_address]',`fac_exp`='$R[fac_exp]',`fac_area`='$R[fac_area]',`fac_desig`='$R[fac_desig]',`fac_email`='$R[fac_email]',`fac_phd`='$R[fac_phd]',`fac_net`='$R[fac_net]',`fac_image`='$fac_image' WHERE `fac_id` ='$_REQUEST[fac_id]'";
header("location:../faculityZone.php?$msg=Data Update Successfull!!");
}else{
$fname=$R['fac_name'];
$fdob=$R['fac_dob'];
$name=substr($fname,0,3);
$dob=substr($fdob,3);
$facpass=$name.$dob;
$fac_pass=md5($facpass);
$fac_img="logoimg.png";
$sql="INSERT INTO `university`.`faculity`(`fac_name` ,`fac_dob` ,`fac_phone` ,`fac_gender` ,`fac_qual` ,`fac_cat` ,`fac_address` ,`fac_exp`,`fac_area`,`fac_desig`,`fac_phd`,`fac_net`,`fac_type`,`fac_status`,`fac_pass`,`fac_sec`,`fac_ans`,`fac_image`,`fac_email`)VALUES('$R[fac_name]','$R[fac_dob]','$R[fac_phone]','$R[fac_gender]','$R[fac_qual]','$R[fac_cat]','$R[fac_address]','$R[fac_exp]','$R[fac_area]','$R[fac_desig]','$R[fac_phd]','$R[fac_net]','faculity','false','$fac_pass','$sec','$ans','$fac_img','$R[fac_email]')";
}
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
if($rs){
echo"<div class='msg-div-data'><p>Sucessfull!<br>Please Wait 24 hour's<br>Your UserName:Your Name<br>Password:Your First Name of 3 Charector And Dob monthYear(01/2023)<br><div class='ank-div'><a id='ank' href='../index.php'>Back</a></p></div></div>";
	}
}


#################----------Delete Function-----------------###################
	 function Delete_faculity(){
	 global $con;
	 $sql="delete from faculity where fac_id='$_REQUEST[fac_id]'";
	 $rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	 $data=mysqli_fetch_assoc($rs);
	 if($data[fac_image]){
	 unlink("../fac_Uploads/".$data[fac_image]);
	 }
	 $sql="delete from faculity where fac_id='$_REQUEST[fac_id]'";
	 $rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	 $msg="Record is Delete Sucessfull!";
	 if($rs){
	 header("location:../faculityReq.php?msg=$msg");
	 }
 }

############## Faculity Recovery Password ##########################
 function Fac_recovery_pass(){
global $con;
$fac_id=$_SESSION['fac_id'];
 $sql="select * from faculity where fac_id='$fac_id'";
 $rs=mysqli_query($con,$sql)or die(mysqli_error($con));
 $data=mysqli_fetch_assoc($rs);
$user=$_REQUEST['user_name'];
$security=md5($_REQUEST['sec_que']);
$answer=md5($_REQUEST['sec_ans']);

 if($user==$data[fac_name]){
 	 	if($data[fac_sec]==$security){
	 			if($data[fac_ans]==$answer){
					header("location:../faculityUpdatePass.php?msg=$user"); 	
				}else{
					header("location:../faculityPassUpdate.php?msg=PLz Enter Correct Answer!");
				}
			}else{
			 header("location:../faculityPassUpdate.php?msg=Wrong selection!");
			}
	}else{
  	header("location:../faculityPassUpdate.php?msg=Plz correct Enter!");
 	} 
 }
##############------------Faculity Change Password----------################
  function fac_change_pass(){

 	global $con;
	$fac_id=$_SESSION['fac_id'];
 	$sql="select * from faculity where fac_id='$fac_id'";
 	$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
 	$data=mysqli_fetch_assoc($rs);
		$old_pass=md5($_REQUEST['old_pss']);
		$new_pass=md5($_REQUEST['change_pss']);
		$conf_pass=md5($_REQUEST['conf_pass']);
	if($data[fac_pass]==$old_pass){
		if($new_pass==$conf_pass){
	 $sql="UPDATE `faculity` SET `fac_pass`='$conf_pass' WHERE `fac_id`='$fac_id'";
	 $rs=mysqli_query($con,$sql)or die(mysqli_error($con));
	 if($rs){	
		header("location:../faculityZone.php?msg=Password Change Sucessfull!!");	
		}else{
			header("location:../faculityUpdatePass.php?msg=Password Change Unsucessfull!!");	
		}
	}else{
	header("location:../faculityUpdatePass.php?msg= Confirm Pass not Same");
	}
	}else{
	header("location:../faculityUpdatePass.php?msg= Please Correct Old Password");
	}
}
?>
<style>
.msg-div-data{
	background:rgba(0,0,0,0.2);
	width:23.95em;
	height:729.5px;
	color:#BB0000;
	font-weight:bolder;
	margin-top:-6.5px;
	margin-left:-6.5px;
	text-align:center;
	font-size:4em;
	font-family:"Times New Roman", Times, serif;
	text-shadow:2px 2px 5px rgba(0,0,0,0.5);	
}
.msg-div-data p{
	position:relative;
	top:100px;
}
#ank{
	width:100px;
	height:100px;
	font-size:0.5em;
	text-decoration:none;
	color:white;
	position:relative;
	top:05px;
		
}
.ank-div{
	width:120px;
	height:50px;
	background:teal;
	position:relative;
	top:50px;
	left:700px;
}
.ank-div:hover{
cursor:pointer;
background:rgba(0,0,0,0.3);
}
#ank:hover{
color:#550000;
}
</style>
