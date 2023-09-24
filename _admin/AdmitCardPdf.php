<?php
include("includes/db_connect.php");
function get_single_value($table,$col_id,$col_name,$sel){
global $con;
$sql="select $col_name from $table where $col_id='$sel'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
return $data[$col_name];
}
require('fpdf/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage('L','A4');
$pdf->SetFont('times',B,10);
global $con;
$sql="select * from student where st_id='$_REQUEST[st_id]'";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$data=mysqli_fetch_assoc($rs);
$pdf->Cell(05,10,'ID',0,0,'C');
$pdf->Cell(05,10,':',0,0,'C');
$pdf->Cell(05,10,$data[st_id],0,0,'L');
$pdf->Ln();
$pdf->Cell(10,10,'Name',0,0,'C');
$pdf->Cell(05,10,':',0,0,'C');
$pdf->Cell(05,10,$data[st_name],0,0,'L');
$pdf->Ln();
$pdf->Cell(10,10,'Father',0,0,'C');
$pdf->Cell(05,10,':',0,0,'C');
$pdf->Cell(05,10,$data[st_father],0,0,'L');
$pdf->Ln();

$pdf->Cell(10,10,'Gender',0,0,'C');
$pdf->Cell(05,10,':',0,0,'C');
$pdf->Cell(05,10,$data[st_gender],0,0,'L');
$pdf->Ln();

$pdf->Cell(10,10,'Course',0,0,'C');
$pdf->Cell(05,10,':',0,0,'C');
$pdf->Cell(05,10,get_single_value('course','course_id','course_name',$data[st_course]),0,0,'L');
$pdf->Ln();
$pdf->Image('./uploads/'.$data[st_image],200,20,30,30);

$pdf->Cell(20,10,'Sr.No.',1,0,'C');
$pdf->Cell(50,10,'Subject',1,0,'C');
$pdf->Cell(40,10,'Date',1,0,'C');
$pdf->Cell(60,10,'Shedul-Time',1,0,'C');
$pdf->Cell(50,10,'Description',1,0,'C');
$pdf->Ln();
global $con;
$esql="select *from exams where exam_course='$data[st_course]'";
$ers=mysqli_query($con,$esql)or die(mysqli_error($con));
while($edata=mysqli_fetch_assoc($ers)){

$pdf->SetFont('times','I',10);
$pdf->Cell(20,10,$edata[exam_id],1,0,'C');
$pdf->Cell(50,10,get_single_value('subject','subject_id','subject_name',$edata[exam_subject]),1,0,'L');
$pdf->Cell(40,10,$edata[exam_date],1,0,'L');
$pdf->Cell(60,10,$edata[exam_shift],1,0,'L');
$pdf->Cell(50,10,$edata[exam_desc],1,0,'L');
$pdf->Ln();
}
$pdf->SetFont('times','B',10);
$pdf->Cell(20,10,'Important(Note And Instruction)',0,1,'L');
$pdf->SetFont('times','I',10);
$pdf->Cell(20,10,'This Admit Card is provisional subject to the eligbility and varification of his/her Examination Form.',0,1,'L');
$pdf->Cell(20,10,'In case of boycott and walkout, the candidate may be treated as absent in the concerned question paper and he/she shall be liable to be punished according to the univesity rules.',0,1,'L');
$pdf->Cell(20,10,'Examinees having mobile and other electronic gadgets in their possession will not be allowed by the examination center.',0,1,'L');
$pdf->Cell(20,10,'No candidate will be allowed to paper in the examination after 30 minutes of start of the examination.',0,1,'L');
$pdf->Cell(20,10,'Only those examinees will be allowed to paper in the examination who will have admit card only signed /stamped by the Princeipal of the their concerned college.',0,1,'L');
$pdf->Cell(20,10,'At least one Identify proof (Adhar Card/Pan Card/Voter Id/Passport/Driving Licence) in original must be with the examinees during the examinations and if demanded will be shown to the invigilator.',0,1,'L');
$pdf->Cell(20,10,'Smoking and carrying eatables and polythense bag will not allowed.',0,1,'L');
$pdf->Cell(20,10,'Examination Scheme is available on the link http:/asuprayagraj.in/',0,1,'L');

$pdf->Output('I','AdmitCard.pdf');
?>
