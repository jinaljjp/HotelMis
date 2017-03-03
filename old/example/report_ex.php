<?php
$con = mysql_connect("localhost","root","");

if (!$con)
  {

  die('Could not connect: ' . mysql_error());

  }
       mysql_select_db("example", $con);

include('fpdf.php');
$pdf=new FPDF();

//Creating new pdf page

$pdf->AddPage();
//Set the base font & size
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,5,"User Details");
//Creating new line
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',8);

$pdf->Cell(10,5,"[Id]");
$pdf->Cell(60,5,"[First Name]");
$pdf->Cell(20,5,"[Last Name]");
$pdf->Cell(60,5,"[Address]");
$pdf->Cell(30,5,"[Phone No.]");





$pdf->Ln();
// Fetch data from table

 $result=mysql_query("select * from user_info");
 $count=mysql_num_rows($result);
while($row=mysql_fetch_array($result))
 {

  
  
  
  		$pdf->Cell(10,5,"{$row['id']}");
		$pdf->Cell(60,5,"{$row['first_name']}");
		$pdf->Cell(20,5,"{$row['last_name']}");
		$pdf->Cell(60,5,"{$row['address']}");
		$pdf->Cell(30,5,"{$row['ph_no']}");
		
		

$pdf->Ln();

 }
 $pdf->Ln();
$pdf->cell(20,5,"Total Record");
 $pdf->cell(20,5,"$count");
$pdf->Output();

?>