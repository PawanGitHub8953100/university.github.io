<?php
session_start();
 include("Admin_Includes/Header.php");
 global $con;
 $sql="select * from student where st_id='$_REQUEST[st_id]'";
 $rs=mysqli_query($acon,$sql)or die(mysqli_error($acon));
 $data=mysqli_fetch_assoc($rs);
// print_r($data);
?>
<link rel="stylesheet" href="Admin_css/mark_result.css"/>

<form action="" method="post" enctype="multipart/form-data">
<div class="wview" style="position:relative;top:120px;">
<div class="data-print"><input type="button" value="Back" onclick="javascript:history.back();" /><input type="button" value="Print" onclick="javascript:printOut();" /></div>
<div class="res-main-div">
<img id="img-res" src="_admin/uploads/<?=$data[st_image]?>" width="100px" height="100px"/>
  <table width="685" class="result_table" height="250" border="1px" >
  	    <div id="logo-img-dex"><img id="img-res-dex" src="images/Admin_university-logo.png"/></div>
		<tr>
     	 <th colspan="2"  style="text-align:center"><P id="head-para-res">PRAYAGRAJ UNIVERSITY</P></th>
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
  <table width="685px" border="1" class="result-data-table">
    <tr>
      <th >SrNo.</th>
      <th scope="col" width="250px">Subject</th>
	  <th scope="col"width="70px">Total</th>
      <th scope="col"width="70px">Theury</th>
      <th scope="col" width="150px">Total Practical</th>
	  <th scope="col" width="70px">Practical</th>
	  <th scope="col" width="150px">Obtain</th>
    </tr>
		<?php 
	 $msql="select * from mark_add where mark_st_id='$data[st_id]'";
	 $mrs=mysqli_query($acon,$msql)or die(mysqli_error($acon));
	while($mdata=mysqli_fetch_assoc($mrs)){
	
	 ?>

    <tr>
      <td width="10px"><?=$mdata[mark_id]?></td>
      <td><?=get_single_value("subject","subject_id","subject_name",$mdata[mark_sub])?></td> 
      <td align="center"><?=$mdata[mark_sub_total]?></td>
	  <td align="center"><?=$mdata[mark_sub_obt]?></td>
	  <td align="center"><?=$mdata[mark_sub_prac]?></td>
	  <td align="center"><?=$mdata[obt_prac]?></td>
      <td align="center"><?=$mdata[mark_sum_total]."/100"?></td>
    </tr>

	<?php }
	$tsql="select mark_sum_total from mark_add where mark_st_id='$data[st_id]'";
	 $trs=mysqli_query($acon,$tsql)or die(mysqli_error($acon));
	$sum;
	$c;
	while($tdata=mysqli_fetch_assoc($trs)){
	
	 foreach($tdata as $v){
	 	$sum=$sum+$v;
		
	 }
     $c+=count($sum);
		
	}
	$count=$c."00";
	//print_r($count);
	$val=$count;
	$per=round(($sum*100)/$val,1);
	//print_r($per);	
	if($per>90&&$per<100){
		$grade="A++";
	//	print_r($grade);
	}else if($per<=90&&$per>75){
		$grade="A";
		//print_r($grade);
	}else if($per<=75&&$per>60){
		$grade="B";
		//print_r($grade);
	}else if($per<=60&&$per>45){
		$grade="C";
		//print_r($grade);
	}else if($per<=45&&$per<0){
		$grade="Fail!";
		//print_r($grade);
	}
?>

	<tr>
	<td style="border:none;" colspan="6" scope="col">Total</td>
	<td style="border:none;" align="center"><?=$sum."/$count"?></td>
	</tr>
	<tr>
	<td style="border:none;" colspan="6" scope="col">Percent</td>
	<td style="border:none;" align="center"><?=$per." %"?></td>
	</tr>
	<tr>
	<td style="border:none;" colspan="6" scope="col">Grade</td>
	<td style="border:none;" align="center"><?=$grade?></td>
	</tr>


  </table>
  <div class="instruction-res">
	<table class="inst-eles">
  	
	<div class="insta-div">
	
  			<h3><b>Note</b></h3>
	<ol>
	<li>Percentage(90-above)A++ Grade</li>
	<li>Percentage(90-75)A Grade</li>
	<li>Percentage(75-60)B Grade</li>
	<li>Percentage(60-45)C Grade</li>
	<li>Percentage(45-less than)Fail</li>
	<div class="chart-div"> <img src="_admin/images/perc.jpg" width="200px" height="auto"/>
	</div>
	</ol>
	</div>							
  </table>
  <div></div>
  </div>
  <input type="hidden" id="st_id" name="st_id" value="<?=$data[st_id]?>" />
</div>
</div>
</form>
