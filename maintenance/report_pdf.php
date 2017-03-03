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
$pdf->Cell(100,5,"Maintenance Report");
//Creating new line
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',8);

$pdf->Cell(10,5,"[Id]");
$pdf->Cell(20,5,"[Room No.]");
$pdf->Cell(20,5,"[Out of order]");
$pdf->Cell(30,5,"[Reason]");
$pdf->Cell(40,5,"[comments]");
$pdf->Cell(20,5,"[Date]");
$pdf->Cell(30,5,"[Time]");
$pdf->Ln();






$pdf->Ln();
// Fetch data from table

$result=mysql_query("select * from out_of_order");
$count=mysql_num_rows($result);
while($row=mysql_fetch_array($result))
{




    $pdf->Cell(10,5,"{$row['Id']}");
    $pdf->Cell(20,5,"{$row['room_no']}");
    $pdf->Cell(20,5,"{$row['out_of_order']}");
    $pdf->Cell(30,5,"{$row['reason_order']}");
    $pdf->Cell(40,5,"{$row['comment_order']}");
    $pdf->Cell(20,5,"{$row['date']}");
    $pdf->Cell(30,5,"{$row['time']}");


    $pdf->Ln();

}

$pdf->Ln();
$pdf->Ln();

$pdf->cell(20,5,"Total Record");
$pdf->cell(20,5,"$count");
$pdf->Ln();
$pdf->Ln();


//Set the base font & size
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,5,"Solved rooms");
//Creating new line
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',8);

$pdf->Cell(10,5,"[Id]");
$pdf->Cell(20,5,"[Room No.]");
$pdf->Cell(20,5,"[Out of order]");
$pdf->Cell(30,5,"[Date]");
$pdf->Cell(30,5,"[Time]");
$pdf->Ln();

$result1=mysql_query("select * from maintenance");
$count1=mysql_num_rows($result1);
while($row1=mysql_fetch_array($result1))
{




    $pdf->Cell(10,5,"{$row1['id']}");
    $pdf->Cell(20,5,"{$row1['room_no']}");
    $pdf->Cell(20,5,"{$row1['out_of_order']}");
    $pdf->Cell(30,5,"{$row1['date']}");
    $pdf->Cell(30,5,"{$row1['time']}");


    $pdf->Ln();

}
$pdf->Ln(); $pdf->Ln(); $pdf->Ln();

$pdf->cell(20,5,"Total Record");
$pdf->cell(20,5,"$count1");
$pdf->Output();

?>