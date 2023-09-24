
<style>
 *{
            margin: 0;
            padding: 0;
        }
         h1{
                font-size: 50px;
                font-weight: bold;
               text-align: center;
                color: blueviolet;
            }
            #head{
                background-color: aquamarine;
                height: 100px;
                margin-bottom: 0px;
            }
            #logo1{
            top:0px;
            left:0px;
           height: 100px;
           width: 100px;
            position:absolute;
        }
        #logo2{
            top:0px;
            right:0px;
           height: 100px;
           width: 100px;
            position:absolute;
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
body{
background-color:silver;
</style>
<div id="head">
        <img src="images/uni.png" id="logo1"/>
        <h1>  University Courses</h1>
    <img src="images/uni.png" id="logo2"/></div>

<?php
include("includes/db_connect.php");
global $con;
$sql="select * from courses";
$rs=mysqli_query($con,$sql) or die(mysqli_error($con));
while($data=mysqli_fetch_assoc($rs)){
#echo "$data[course_name]. <br/>";

?>
<div class="course">
<h2><?=$data[course_name]?></h2>
<p>Course Fees:<?=$data[course_total_fees]?></p>
<p>Course About:<?=$data[course_name]?></p>
<p>Course Duration:<?=$data[course_duration]?></p>
<p>Course Eligibility:<?=$data[course_eli]?></p>
</div>

<?php }?>