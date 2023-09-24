<?php include_once("Admin_Includes/AdminPanalheader.php");?>

<html>
<head>
<title>Contact Us</title>
</head>
<body>
<div class="contact-header-img"><img class="contact-img" src="images/IICS.webp"/>
<div class="contact-header-div">
	<div class="contact-top-heading"><p id="text-heading">Contact Us</p></div>
</div>
</div>
<div class="back-div" style="background-color:#EEEEEE; width:94.91em;height:67em;">
	<div class="contact-middel-div">
	<div id="elem-paragraph"> A.S.U. Allahabad State University, Sec-11, Katra chowk, Prayagraj, Uttar Pradesh India
Pin Code-226031, Phone No.-0502-0030005. Working Hours- 10am-5pm</div>
	
<div class="contact-table-data">
	<table  class="contact-table" border="1"> 
<tr id="tr-head" bgcolor="#AA0000">
<th>Name</th>
<th>Designation</th>
<th>AKTU Email</th>
</tr>
  <tr class="cont-tr-color">
    <td  data-th="Name">Prof. J.P. Pandey</td>
    <td  data-th="Designation"> Vice Chancellor </td>
    <td  data-th="AKTU Email">vc[at]aktu[dot]ac[dot]in</td>
  </tr>
  <tr class="cont-tr-color">
    <td data-th="Name">Shri Shusheel Kumar Gupta</td>
    <td  data-th="Designation">Finance Officer</td>
    <td data-th="AKTU Email">fo[at]aktu[dot]ac[dot]in</td>
  </tr>
  <tr class="cont-tr-color">
    <td data-th="Name">Ms. Reena Singh (IAS)</td>
    <td  data-th="Designation">Registrar</td>
    <td data-th="AKTU Email">registrar[at]aktu[dot]ac[dot]in</td>
  </tr>
  <tr class="cont-tr-color">
    <td data-th="Name">Dr. Rajeev Kumar</td>
    <td  data-th="Designation"> Controller of Examination</td>
    <td data-th="AKTU Email">coe[at]aktu[dot]ac[dot]in</td>
  </tr>
  <tr class="cont-tr-color">
    <td data-th="Name">Prof Girish Chandra</td>
    <td  data-th="Designation">Additional Controller of Examination</td>
    <td data-th="AKTU Email">coe[at]aktu[dot]ac[dot]in</td>
  </tr>
  <tr class="cont-tr-color">
    <td data-th="Name">Dr. Sudhir Singh Soam</td>
    <td  data-th="Designation">Deputy Controller of Examination  </td>
    <td data-th="AKTU Email">dcoe-a[at]aktu[dot]ac[dot]in</td>
  </tr> 
  
  <tr class="cont-tr-color">
    <td data-th="Name">Shri Manoj Singh</td>
    <td  data-th="Designation">Deputy Controller of  Examination</td>
    <td data-th="AKTU Email"><!--jcoe[at]aktu[dot]ac[dot]in--></td>
  </tr>
  
  <tr class="cont-tr-color">
    <td data-th="Name">Dr. Rajiv K. Singh</td>
    <td  data-th="Designation">Deputy Registrar</td>
    <td data-th="AKTU Email">dr[at]aktu[dot]ac[dot]in</td>
  </tr>
  <tr class="cont-tr-color">
    <td data-th="Name">Shri Sushil Kumar Verma</td>
    <td  data-th="Designation">Finance & Account Officer</td>
    <td data-th="AKTU Email">ao[at]aktu[dot]ac[dot]in</td>
  </tr>
 
<tr class="cont-tr-color">
<td>Dr. Dhananjay Singh</td>
<td>Joint Examination Controller </td>
<td>
<a href="mailto:jcontroller@aktu.gmail.com">jcontroller.aktu@gmail.com</a>
</td>
</tr>


<tr class="cont-tr-color">
<td>Dr. A.K. Singh </td>
<td>Deputy Registrar </td>
<td>
<a href="mailto:dr.aktu@gmail.com">dr.aktu@gmail.com</a>
</td>
</tr>

<tr class="cont-tr-color">
<td>Dr. Sudhir Singh Soam </td>
<td>Deputy Controller of Examination </td>
<td>
<a href="mailto:dcontroller[at]aktu[dot]ac[dot]in">dcontroller[at]aktu[dot]ac[dot]in</a>
</td>
</tr>

<tr class="cont-tr-color">
<td>Dr. Arunima Verma</td>
<td>Deputy Controller of Examination </td>
<td>
<a href="mailto:dycoeaktu@gmail.com">dycoeaktu@gmail.com</a>
</td>
</tr>

<tr class="cont-tr-color">
<td>Mr. Rakesh Paijwar</td>
<td>Deputy Controller of Examination </td>
<td>
<a href="mailto:dcontrolleraktu@gmail.com">dcontrolleraktu@gmail.com</a>
</td>
</tr>
</table>
</div>
<div class="side-contact-div">
 <div class="box-row"><a href="AdminPanal.php">AdminPage</a></div>
<!-- <div class="box-row"><a href="#">Tranding</a></div>
 <div class="box-row"><a href="#">circulars</a></div>--> 
 <div class="box-row"><a href="kulgeet.php">University Kulgeet</a></div>
<!-- <div class="box-row"><a href="#">Downloads</a></div>
 <div class="box-row"><a href="#">Press Release</a></div> -->
 <div class="box-row"><a href="galary_cont.php">Photo Galary</a></div>
 <div class="box-row"><a href="video.php">Video Gallery</a></div>
<!-- <div class="box-row"><a href="#">Free Structure</a></div> -->
</div>
</div>

<div class="contact-bottom-div">
<!------------Image-Slider----------------------------->
		<div class="contact-container">
        <a href="images/book3.jpg"><img src="images/book3.jpg" class="cont-slide"/></a>
        <a href="images/ai3.jpg"><img src="images/ai3.jpg" class="cont-slide"/></a>
        <a href="images/ai2.jpeg"><img src="images/ai2.jpeg" class="cont-slide"/></a>
		<a href="images/book2.webp"><img src="images/book2.webp" class="cont-slide"/></a>
	    </div>
</div>
<!--Image Animation-->
	<script>  
	    window.onload=function() {
      let imgNo = 0;
	    const sliderImg = document.querySelectorAll(".cont-slide");
        
       setInterval(() => {
	    for (let i = 0; i < sliderImg.length; i++) {
            // console.log(sliderImg[i]);
            sliderImg[i].style.display = "none";
           
        }
		
        sliderImg[imgNo].style.display = "block";
       	sliderImg[imgNo].style.boxShadow= "0px 0px 20px 0px black";
        imgNo++;
        if (imgNo===4) {

            imgNo=0;
        }
	}, 2000);
   }
  </script>
</body>
</html>
