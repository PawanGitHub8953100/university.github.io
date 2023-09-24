<?php
include("includes/db_connect.php");
global $con;
$c=$_REQUEST['country'];
if(isset($c)){
$sql="INSERT INTO `university`.`country`(`country_name`)VALUES('$c')";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
}
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
 padding-bottom:50px;
 color:white;
}
table{
position:relative;
top:40px;
color:white;

}
#country{
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
</style>
<script>
function valid(frm){	
	var name = frm.country.value;
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
<form action="#" method="post" enctype="multipart/form-data" id="from" onsubmit="return valid(this);">
<div class="course_div">
	<table align="center">
	 <tr><th>COUNTRY DATABSE ENTRY</th></tr>
	 <tr><td align="center"><input type="text" name="country" id="country"/></td></tr>
	 <tr><td align="center"><input id="btn" type="submit" value="Insert" /><br/><a id="a" href="student_view.php">Back</a></td></tr>
 	 

	 <tr><td align="center" id="ans"><?php 
if($rs){
echo $_REQUEST['country']." Successfull Insert";
 }
?></td></tr>
	</table>
</div>
</form>
</body>
</html>