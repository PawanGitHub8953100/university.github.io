<?php
include("Admin_Includes/AdminPanalheader.php");
	global $acon;
	$sql="select *from course";
	$rs=mysqli_query($acon,$sql)or die(mysqli_error($acon));
	
?>
<form id="form1" name="form1" method="post" action="">
<!--<div class="course-navigation">-->
	<div class="course-nav-div">
	<?php while($data=mysqli_fetch_assoc($rs)){?>
			<div class="course">
				<h4><?=$data[course_name]?></h4>
				<p id="p">Fees:<?=$data[course_fees]?></p>
				<p id="p">Duration:<?=$data[course_Dur]?></p>
				<p id="p">Eligibility:<?=$data[course_eligble]?></p>
			</div>
			<? }?>
	</div>

<div class="contact-header-img"><img class="contact-img" src="images/IICS.webp"/>
<div class="contact-header-div">
	<div class="contact-top-heading"><p id="text-heading">Course</p></div>
</div>
</div>
<div class="top-header-div">
	<div class="headr-span" ><a href="AdminPanal.php">AdminPage</a></div>
<!--	<div class="headr-span"><a href="#">Batch code</a></div>
	<div class="headr-span" ><a href="#">Subject Code</a></div>
	<div class="headr-span"><a href="#">Branch Code</a></div>-->
	<div class="headr-span"><a href="Univers-Dress-Rule.php">Uniform Rule</a></div>
<!--	<div class="headr-span" ><a href="#">Examination Center</a></div>
	<div class="headr-span"><a href="#">Grace Rule in CBSC System</a></div>
	<div class="headr-span"><a href="#">Revaluation Rule</a></div>-->
</div>

	
<!--	<div class="side-view-div2">
	<p id="view-p">Students pursuing the courses in information technology course will learn various topics related to programming languages, database management, cyber security, and web designing. Information technology is helpful for the students to get jobs in the IT industry.</p>	
	</div>
-->
<div class="course-table">
	<table class="table">
		<tr class="course-tr">
		<td bgcolor="#880000" style="color:white;" width="150px" align="center">Code</td>
		<td bgcolor="#880000" style="color:white;" width="900px">Course</td>
		</tr>
		
		<?php
			global $acon;
			$csql="select *from course";
			$crs=mysqli_query($acon,$csql)or die(mysqli_error($acon));
 
		while($cdata=mysqli_fetch_assoc($crs))
		{
		?>
		<tr class="course-tr">
		<td align="center"><?=$cdata[course_id]?></td>
		<td><?=$cdata[course_name]?></td>
		<tr>
		<?php }?>
	</table>
</div>
<div class="bottom-course-div">

</div>
<!--

	<div class="middel-view-div">
		<div class="container-course">
        <a href="images/book3.jpg"><img src="images/book3.jpg" class="slide"/></a>
        <a href="images/ai3.jpg"><img src="images/ai3.jpg" class="slide"/></a>
        <a href="images/ai2.jpeg"><img src="images/ai2.jpeg" class="slide"/></a>
		<a href="images/book2.webp"><img src="images/book2.webp" class="slide"/></a>
    </div>
	</div>
	<script>
	  
    window.onload=function() {
      let imgNo = 0;
	    const sliderImg = document.querySelectorAll(".slide");
        const indicator = document.querySelectorAll(".indicator");
       setInterval(() => {
	    for (let i = 0; i < sliderImg.length; i++) {
            // console.log(sliderImg[i]);
            sliderImg[i].style.display = "none";
           
        }
		
        sliderImg[imgNo].style.display = "block";
       	sliderImg[imgNo].style.boxShadow= "0px 0px 20px 0px black";
        imgNo++;
        if (imgNo ===4) {

            imgNo = 0;
        }
		  }, 8000);
    }
  
	</script>
-->	
</form>
