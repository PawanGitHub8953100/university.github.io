<?php
session_start();
 include("Admin_Includes/Header.php");
 global $acon;
 $sql="select * from student where st_id='$_REQUEST[st_id]'";
 $rs=mysqli_query($acon,$sql)or die(mysqli_error($acon));
 $data=mysqli_fetch_assoc($rs);
// print_r($data);
?>
<form action="" method="post" enctype="multipart/form-data">
<div style="position:relative;top:120px;">


<div class="data-print"><input type="button" value="Back" onclick="javascript:history.back();" /><input type="button" value="Print" onclick="javascript:printOut();" /></div>
<div class="main-div">
<img id="img-div" src="_admin/uploads/<?=$data[st_image]?>" width="100px" height="100px"/>
  <table width="685" class="admit_table" height="250" border="1px" >
  	    <tr>
     	 <th colspan="2" id="stu-heading" style="text-align:center">ADDMIT CARD</th>
    </tr>
   
    <tr>
      <td width="75">ID:</td>
	  
      <td width="337"><?=$data[st_id]?></td>
    </tr>
    <tr>
      <td>NAME:</td>
      <td><?=$data[st_name]?></td
    ></tr>
	
    <tr>
      <td>FATHER'S NAME:</td>
      <td><?=$data[st_father]?></td>
	   
    </tr>
    <tr>
      <td>GENDER:</td>      
	  <td><?=$data[st_gender]?></td>
    </tr>
    <tr>
      <td>COURSE:</td>
	  <td><?=get_single_value("course","course_id","course_name",$data[st_course])?></td>

    </tr>
  </table>
  <table width="685px" border="1" class="admit-data-table">
    <tr>
      <th scope="col">SR NO.</th>
      <th scope="col">SUBJECT</th>
      <th scope="col">DATE</th>
      <th scope="col">SHEDUL-TIME</th>
	   <th scope="col">DESCRIPTION</th>
    </tr>
	<?php
	 
	 $esql="select * from exams where exam_course='$data[st_course]'";
	 $ers=mysqli_query($acon,$esql)or die(mysqli_error($acon));
	while($edata=mysqli_fetch_assoc($ers)){ ?>

    <tr>
      <td width="10px"><?=$edata[exam_id]?></td>
      <td><?=get_single_value("subject","subject_id","subject_name",$edata[exam_subject])?></td> 
      <td><?=$edata[exam_date]?></td>
      <td width="250px"><?=$edata[exam_shift]?></td>
      <td><?=$edata[exam_desc]?></td>
    </tr>
	<?php }?>
  </table>
  <div class="instruction-admit">
  <table class="inst-ele">
  	
  			<h3><b>Important(Note And Instruction)</b></h3>
	
	<ol>
		<li>This Admit Card is provisional subject to the eligbility and varification of his/her Examination Form.</li>
	
		<li>In case of boycott and walkout, the candidate may be treated as absent in the concerned question paper and he/she shall be liable to be punished according to the univesity rules. </li>
	
		<li>Examinees having mobile and other electronic gadgets in their possession will not be allowed by the examination center.</li>
	
		<li>No candidate will be allowed to paper in the examination after 30 minutes of start of the examination.</li>
	
		<li>Only those examinees will be allowed to paper in the examination who will have admit card only signed /stamped by the Princeipal of the their concerned college.</li>
	
		<li>At least one Identify proof (Adhar Card/Pan Card/Voter Id/Passport/Driving Licence) in original must be with the examinees during the examinations and if demanded will be shown to the invigilator.</li>
	
		<li>Smoking and carrying eatables and polythense bag will not allowed.</li>
	
		<li>Examination Scheme is available on the link http:/asuprayagraj.in/</li>
	</ol>							
  </table>	
  </div>
  <input type="hidden" id="st_id" name="st_id" value="<?=$data[st_id]?>" />
</div>
</div>

</form>
