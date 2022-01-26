<?php

require "db.php";

$sql="SELECT products.product_id, products.name, products.image, products.price, categories.cat_name FROM products INNER JOIN categories ON products.category_id=categories.category_id;";

require('tfpdf.php');

$pdf = new tFPDF();
$pdf->AddPage();

$width_cell=array(20,50,40,40,40);
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->SetFont('DejaVu','',14);

$pdf->SetFillColor(193,229,252);

$pdf->Cell($width_cell[0],10,'Id',1,0,'C',true);
$pdf->Cell($width_cell[1],10,'Категория',1,0,'C',true);
$pdf->Cell($width_cell[2],10,'Продукт',1,0,'C',true); 
$pdf->Cell($width_cell[4],10,'Цена',1,1,'C',true); 

$pdf->SetFont('DejaVu','',14);

 
$fill=false;


foreach ($dbh->query($sql) as $row) {
$pdf->Cell($width_cell[0],10,$row['product_id'],1,0,'C',$fill);
$pdf->Cell($width_cell[1],10,$row['cat_name'],1,0,'L',$fill);
$pdf->Cell($width_cell[2],10,$row['name'],1,0,'C',$fill);
$pdf->Cell($width_cell[4],10,$row['price'],1,1,'C',$fill);
}


$pdf->Output();

?>