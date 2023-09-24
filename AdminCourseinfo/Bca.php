<?php  include("../Admin_includes/Admin_db_connect.php")?>
<html>
<head><em></em>
<style>
	h1{
                font-size: 50px;
                font-weight: bold;
               text-align: center;
                color: blueviolet;
            }
            .img-head{
                background-color: aquamarine;
                height: 100px;
                margin-bottom: 0px;
            }
           
        #logo2{
            top:200px;
            right:0px;
          	 height:500px;
          	 width:400px;
            position:relative;
        }
.course{
height:450px;
width:400px;
box-shadow:2px 2px 3px 4px #003333;
display:inline-block;
margin-top:50px;
margin-left:200px;
margin-bottom:50px;
background-color:white;
text-align:center;
}
p{
	font-size:25px;
	padding:10px;
	color:black;
	}
h2{
font-size:50px;
color:#006699;
}
</style>
</head>	<div class="img-head">
        <img src="../images/book2.webp" id="img-logo1"/>
	</div>

<?php
global $con;
$sql="select * from course where course_name='BCA'";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
while($data=mysqli_fetch_assoc($rs)){
	
?>
<div class="course">
<h2><?=$data[course_name]?></h2>
<p>Course Fees:<?=$data[course_fees]?></p>
<p>Course About:<?=$data[course_name]?></p>
<p>Course Duration:<?=$data[course_Dur]?></p>
<p>Course Eligibility:<?=$data[course_eligble]?></p>
</div>

<?php }?>
    <div>
	    <h1>  University Courses</h1>
    <img src="../images/book3.jpg" id="logo2"/></div>
	</div>

</html>