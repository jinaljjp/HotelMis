<?php
$con = mysql_connect("localhost","root","");

if (!$con)
{

    die('Could not connect: ' . mysql_error());

}
mysql_select_db("workspace", $con);

include('fpdf.php');
$pdf=new FPDF();

//Creating new pdf page

$pdf->AddPage();
//Set the base font & size
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,5,"User Report");
//Creating new line
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',8);

$pdf->Cell(10,5,"[Id]");
$pdf->Cell(30,5,"[Firstname]");

$pdf->Cell(30,5,"[Lastname.]");
$pdf->Cell(40,5,"[Email ID]");
$pdf->Cell(30,5,"[Phone No.]");
$pdf->Cell(20,5,"[Designation]");
$pdf->Ln();






$pdf->Ln();
// Fetch data from table

$result=mysql_query("select * from login");
$count=mysql_num_rows($result);
while($row=mysql_fetch_array($result))
{




    $pdf->Cell(10,5,"{$row['ID']}");
    $pdf->Cell(30,5,"{$row['first_name']}");

    $pdf->Cell(30,5,"{$row['last_name']}");
    $pdf->Cell(40,5,"{$row['email_id']}");
    $pdf->Cell(30,5,"{$row['ph_no']}");
    $pdf->Cell(20,5,"{$row['designation']}");


    $pdf->Ln();

}
$pdf->Ln();
$pdf->cell(20,5,"Total Record");
$pdf->cell(20,5,"$count");
$pdf->Output();

?>