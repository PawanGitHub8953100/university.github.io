<?php
include("includes/db_connect.php");
include("includes/functions.php");

global $con;
$st=$_REQUEST['state'];
$selec=$_REQUEST['select'];
$sql="INSERT INTO `university`.`state`(`state_name`,`state_country`)VALUES('$st','$selec')";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));

?>
<html>
<head>
<style>
.course_div{
width:500px;
height:400px;
background-color:rgba(170,8,8,0.999);
margin:auto;
}
table th{
 text-align:center;
 font-size:xx-large;
 padding-bottom:20px;
 color:white;
}
table{
position:relative;
top:40px;
color:white;

}
#state{
border:1px dashed white;
outline:none;
background-color:rgba(170,8,8,0.999);
color:white;
font-size:large;
}
#ans{
font-size:xx-large;
}
#btn{
cursor:pointer;
outline:none;
border:1px solid white;
width:100px;
height:40px;
font-size:large;
color:rgba(170,8,8,0.999);
margin:20px;
}
#a{
color:white;
font-size:2.1em;
text-decoration:none;
font-weight:bolder;
font-family:"Gill Sans Ultra Bold";

}
#select_s{
	background-color:rgba(170,8,8,0.999);
	margin:05px;
	font-size:1.2em;
	color:white;
	outline:none;
	border:1px dashed white;
}
</style>
<script>
function valid(frm){	
	var name = frm.state_s.value;
    if (name.trim()=="") {
alert("PLEASE ENTER CONTRY");
      frm.country.focus();
        return false;
    }
return true;
}
</script>
</head>
<body>
<form action="#" method="post" enctype="multipart/form-data" id="from" onSubmit="return valid(this);">
<div class="course_div">
	<table align="center">
	 <tr><th>STATE DATABSE ENTRY</th></tr>
	 <tr><td align="center"><input type="text" name="state" id="state"/><br />
	 <select name="select_s" id="select_s">
	  <?=get_option_list("country","country_id","country_name")?>
	 </select>
	 </td></tr>
	 <tr><td align="center"><input id="btn" type="submit" value="Insert" /><br/><a id="a" href="student_view.php">Back</a></td></tr>
 	 

	 <tr><td align="center" id="ans"><?php 
if($rs){
	$s="select state_name from state where state_name=$st";
$r=mysqli_query($con,$s)or die(mysqli_error($con));
$d=mysqli_fetch_assoc($r);
print_r($d[state_name]);
break;
 }
?></td></tr>
	</table>
</div>
</form>
</body>
</html>