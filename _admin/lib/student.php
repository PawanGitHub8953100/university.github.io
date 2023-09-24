<?php
include("../includes/db_connect.php");

#######Student Form Submit Calling ##########
if($_REQUEST['act']=="SAVE_STUDENT")
{
save_student();
}
#######Delete Function Caling#############
if($_REQUEST['act']== "delete_student")
{
delete_student();
}
#########Multiple Delete Function Calling#####
if($_REQUEST['act']=="student_multi_delete"){
student_multi_delete();
}
############ FEES ADD ################
if($_REQUEST['fees_act']=="SUBMIT"){
	fees_add();
}
####### FEES Delete Function Caling#############
if($_REQUEST['fees_act']== "delete_fees")
{
delete_fees();
}


############ Exam ADD ################
if($_REQUEST['exam_add']=="SUBMIT"){
	exam_add();
}

####### FEES Delete Function Caling#############
if($_REQUEST['exam_act']== "delete_exam")
{
delete_exam();
}


########student data entry code--------
 function save_student(){
 global $con;
$R=$_REQUEST;
$st_qual=implode(",",$R[st_qual]);
$st_image=$_FILES['st_image']['name'];
if($st_image){
   $st_image_arr=explode(".",$st_image);
    $st_image=$st_image_arr[0].time().".".$st_image_arr[1];
	move_uploaded_file($_FILES['st_image']['tmp_name'],"../uploads/".$st_image);
}
else
{
$st_image=$_REQUEST[st_image];
}
if($_REQUEST[st_id]){
$sql="UPDATE `student` SET `st_name`= '$_REQUEST[st_name]',`st_father` = '$_REQUEST[st_father]',`st_phone` = '$_REQUEST[st_phone]',`st_email` = '$_REQUEST[st_email]',`st_gender` = '$_REQUEST[st_gen]',`st_qualification` = '$st_qual',`st_dob` = '$_REQUEST[st_dob]',`st_course` = '$_REQUEST[st_course]',`st_category` = '$_REQUEST[st_cat]',`st_country` = '$_REQUEST[st_country]',`st_state` = '$_REQUEST[st_state]',`st_pincode` = '$_REQUEST[st_pin]',`st_image` = '$st_image',`st_address1` = '$_REQUEST[st_address1]',`st_address2` = '$_REQUEST[st_address2]' WHERE `st_id` ='$_REQUEST[st_id]'";
$msg="Record Is Updated!!";
}
else{
$sql="INSERT INTO `university`.`student`(`st_name` ,`st_father` ,`st_phone` ,`st_email` ,`st_gender` ,`st_qualification` ,`st_dob` ,`st_doa` ,`st_course` ,`st_category` ,`st_country` ,`st_state` ,`st_pincode` ,`st_image` ,`st_address1` ,
`st_address2`)VALUES('$R[st_name]','$R[st_father]','$R[st_phone]','$R[st_email]','$R[st_gen]','$st_qual','$R[st_dob]','$R[st_doa]','$R[st_course]','$R[st_cat]','$R[st_country]','$R[st_state]','$R[st_pin]','$st_image','$R[st_address1]','$R[st_address2]')";
$msg="Record Is Saved!!";
}
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
if($rs){
header("location:../student_view.php?msg=$msg");
 }
}


########Delete Function ###############
function delete_student(){
global $con;
$R=$_REQUEST['st_id'];
$sql="Select st_image from student where st_id=$R";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
if($data[st_image]){
unlink("../uploads/".$data[st_image]);
}
$sql="delete from student where st_id=$R";
  $rs= mysqli_query($con,$sql) or die(mysqli_error($con));
if($rs){
header("location:../student_view.php?$msg=Student Record Is Delete!");
 }
}
############# Multi Delete Function ############
function student_multi_delete(){
global $con;
$R=$_REQUEST['st_id'];
if($_REQUEST['st_multi_id']==0){
header("location:../student_view.php?msg=Please Select First to continue...!");
die();
}
foreach($_REQUEST['st_multi_id'] as $R){
$sql="select st_image from student where st_id=$R";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
  if($data[st_image]){
  unlink("../uploads/".$data[st_image]);
  }
  $sql="delete from student where st_id=$R";
  $rs=mysqli_query($con,$sql) or die(mysqli_error($con));
}
if($rs)
header("location:../student_view.php?msg=Student All Record Is Delete!");

}

#################Fees Add Details##############

function fees_add(){
global $con;
$date=date("d/m/y");
$st_balance=$_REQUEST['st_fees_total']-$_REQUEST['st_fees_amount'];
if($_REQUEST['act2']==0){
$sql= "select * from student where st_id='$_REQUEST[st_id]'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);

if($st_balance==0)
 	$st_balance="null";
$sql="INSERT  INTO `university`.`fees`(`fees_st_id`,`fees_st_course`,`fees_total`,`fees_amount`,`fees_balance`,`fees_date`,`fees_desc`)VALUES('$_REQUEST[st_fees_id]','$_REQUEST[st_fees_course]','$_REQUEST[st_fees_total]','$_REQUEST[st_fees_amount]','$st_balance','$_REQUEST[st_fees_date]','$_REQUEST[st_fees_desc]')";
}else{
 $sql="select * from fees where fees_st_id='$_REQUEST[st_id]'";
 $rs=mysqli_query($con,$sql)or die(mysqli_error($con));
 $data=mysqli_fetch_assoc($rs)or die(mysqli_error($con));
 $amt=$data[fees_amount].",".$_REQUEST['st_fees_amount'];
 $Date=$data[fees_date].",".$date;
 $desc=$data[fees_desc].",".$_REQUEST['st_fees_desc'];
 if($st_balance==0)
 	$st_balance="null";
 $sql="UPDATE `fees` SET `fees_amount`='$amt',`fees_balance`='$st_balance',`fees_date`='$Date',`fees_desc`='$desc' WHERE `fees_st_id`='$_REQUEST[st_id]'";
}
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
if($rs){
header("location:../Paid_fees_view.php?msg");
	}
}




#########Exam Add #################
	function exam_add(){
	global $con;
	if($_REQUEST[exam_id])
	{
$sql="UPDATE `exams` SET `exam_title`= '$_REQUEST[exam_title]',`exam_course`= '$_REQUEST[exam_course]',`exam_subject`= '$_REQUEST[exam_sub]',`exam_date`= '$_REQUEST[exam_date]',`exam_shift`= '$_REQUEST[exam_shift]',`exam_desc`= '$_REQUEST[exam_desc]' WHERE `exam_id`='$_REQUEST[exam_id]'";
	
	}else{
$sql="INSERT  INTO `university`.`exams`(`exam_title`,`exam_course`,`exam_subject`,`exam_date`,`exam_shift`,`exam_desc`)VALUES('$_REQUEST[exam_title]','$_REQUEST[exam_course]','$_REQUEST[exam_sub]','$_REQUEST[exam_date]','$_REQUEST[exam_shift]','$_REQUEST[exam_desc]')";
}
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
if($rs){
header("location:../exam_view.php?msg");
}
}
###########FEES DELETE###############
function delete_fees(){
global $con;
$sql="delete from fees where fees_id='$_REQUEST[fees_id]'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$fmsg="fees Record is Delete!";
if($rs){
header("location:../Paid_fees_view.php?msg=$fmsg");
	}
	
}

############Exam Delete Function##################
 function delete_exam(){
 global $con;
 $sql="delete from exams where exam_id='$_REQUEST[exam_id]'";
  $rs=mysqli_query($con,$sql)or die(mysqli_error($con));
  if($rs){
 $emsg="Exam Record is Delete!";
  header("location:../exam_view.php?msg=$emsg");
  	}
  }
  
  ##################------Exam-----Card-------##############
	

?>