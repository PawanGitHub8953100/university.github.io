<?php
include("includes/db_connect.php");
global $con;
$sql="select *from student";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));

require('fpdf/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage('L','A4');
$pdf->SetFont('times',B,10);
$sql="select *from student";
$rs=mysqli_query($con,$sql)or die(mysqli_error($con));
$pdf->Cell(35,10,'Name',1,0,'C');
$pdf->Cell(38,10,'Father',1,0,'C');
$pdf->Cell(20,10,'Phone',1,0,'C');
$pdf->Cell(40,10,'Email',1,0,'C');
$pdf->Cell(14,10,'Gender',1,0,'C');
$pdf->Cell(20,10,'Dob',1,0,'C');
$pdf->Cell(20,10,'Doa',1,0,'C');
$pdf->Cell(14,10,'Pin code',1,0,'C');
$pdf->Cell(36,10,'LocalAddress',1,0,'C');
$pdf->Cell(36,10,'Real Address',1,0,'C');
#$pdf->Cell(15,10,'Images',1,0,'C');
$pdf->Ln();
while($data=mysqli_fetch_assoc($rs)){
$pdf->SetFont('times',I,10);

$pdf->Cell(35,10,$data[st_name],1,0,'L');
$pdf->Cell(38,10,$data[st_father],1,0,'L');
$pdf->Cell(20,10,$data[st_phone],1,0,'L');
$pdf->Cell(40,10,$data[st_email],1,0,'L');
$pdf->Cell(14,10,$data[st_gender],1,0,'L');
$pdf->Cell(20,10,$data[st_dob],1,0,'L');
$pdf->Cell(20,10,$data[st_doa],1,0,'L');
$pdf->Cell(14,10,$data[st_pincode],1,0,'L');
$pdf->Cell(36,10,$data[st_address1],1,0,'L');
$pdf->Cell(36,10,$data[st_address2],1,0,'L');
/*for($y=20;$y<=80;$y++){
$pdf->Image('./uploads/'.$data[st_image],285,$y,10,10);
$y=$y+9.5;
}
$y++;*/
$pdf->Ln();
}
$pdf->Output('I','Student_record.pdf');
?>
