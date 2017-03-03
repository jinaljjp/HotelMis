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
$pdf->Cell(100,5,"Shift Report");
//Creating new line
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',8);

$pdf->Cell(10,5,"[Id]");
$pdf->Cell(20,5,"[Room No.]");
$pdf->Cell(20,5,"[Amount]");
$pdf->Cell(30,5,"[Type]");
$pdf->Cell(40,5,"[comments]");
$pdf->Cell(20,5,"[Date]");
$pdf->Cell(20,5,"[Time]");
$pdf->Ln();






$pdf->Ln();
// Fetch data from table

$result=mysql_query("select * from shift_report");
$count=mysql_num_rows($result);
while($row=mysql_fetch_array($result))
{




    $pdf->Cell(10,5,"{$row['id']}");
    $pdf->Cell(20,5,"{$row['room_no']}");
    $pdf->Cell(20,5,"{$row['amount']}");
    $pdf->Cell(30,5,"{$row['type']}");
    $pdf->Cell(40,5,"{$row['comments']}");
    $pdf->Cell(20,5,"{$row['date']}");
    $pdf->Cell(20,5,"{$row['time']}");


    $pdf->Ln();

}
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$result1=mysql_query("select * from payment");
//$count=mysql_num_rows($result1);
$row1=mysql_fetch_array($result1);

    $pdf->cell(40,5,"Total Cash");
    $pdf->cell(40,5,"{$row1['cash']}");
    $pdf->Ln();
    $pdf->cell(40,5,"Total visa");
    $pdf->cell(40,5,"{$row1['visa']}");
    $pdf->Ln();
    $pdf->cell(40,5,"Total American express");
    $pdf->cell(40,5,"{$row1['ame_ex']}");
    $pdf->Ln();
    $pdf->cell(40,5,"Total Discovery");
    $pdf->cell(40,5,"{$row1['discovery']}");
    $pdf->Ln();
    $pdf->cell(40,5,"Total MasterCard");
    $pdf->cell(40,5,"{$row1['master']}");
    $pdf->Ln();
    $pdf->cell(40,5,"Total Cheque");
    $pdf->cell(40,5,"{$row1['cheque']}");
    $pdf->Ln();
    $pdf->cell(40,5,"Total Expedia");
    $pdf->cell(40,5,"{$row1['expedia']}");
    $pdf->Ln();
    $pdf->cell(40,5,"Total Other");
    $pdf->cell(40,5,"{$row1['other']}");

$pdf->Ln(); $pdf->Ln(); $pdf->Ln();

$pdf->cell(20,5,"Total Record");
$pdf->cell(20,5,"$count");
$pdf->Output();

?>