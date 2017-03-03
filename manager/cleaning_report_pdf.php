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
$pdf->Cell(100,5,"HouseKeeping Report");
//Creating new line
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',8);

$pdf->Cell(10,5,"[Id]");
$pdf->Cell(30,5,"[Housekeeper]");

$pdf->Cell(30,5,"[Room No.]");
$pdf->Cell(40,5,"[Condition]");
$pdf->Cell(20,5,"[Date]");
$pdf->Cell(20,5,"[Time]");
$pdf->Ln();






$pdf->Ln();
// Fetch data from table

$result=mysql_query("select * from cleaning_report");
$count=mysql_num_rows($result);
while($row=mysql_fetch_array($result))
{




    $pdf->Cell(10,5,"{$row['id']}");
    $pdf->Cell(30,5,"{$row['user_name']}");

    $pdf->Cell(30,5,"{$row['room_no']}");
    $pdf->Cell(40,5,"{$row['room_condition']}");
    $pdf->Cell(20,5,"{$row['date']}");
    $pdf->Cell(20,5,"{$row['time']}");


    $pdf->Ln();

}
$pdf->Ln();
$pdf->cell(20,5,"Total Record");
$pdf->cell(20,5,"$count");
$pdf->Output();

?>