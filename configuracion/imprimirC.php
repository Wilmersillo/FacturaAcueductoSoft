<?php require("../fpdf/fpdf.php"); 
    include("conexion.php");
  
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
//$pdf->Image('../Imagenes/FAC.PNG' , 15 ,13, 15 , 18,'PNG');
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(150, 10, 'Game Over "Ltda."', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'LISTADO DE CLIENTES', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(25, 8, 'Numero', 0);
$pdf->Cell(40, 8, 'Codigo', 0);
$pdf->Cell(25, 8, 'Nombre', 0);
$pdf->Cell(25, 8, 'Cantidad', 0);
$pdf->Cell(25, 8, 'Precio', 0);
$pdf->Cell(40, 8, 'Total', 0);

$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
/*
$consulta = "SELECT codp,nombre,cantidad,precio,(cantidad*precio) AS total FROM producto";
    $contador = 0;
    $resultado = mysqli_query($conexion,$consulta);
    $usuarios=array();
 while ($fila = $resultado->fetch_assoc()) {
  $contador = $contador+1;
    $pdf->Cell(25, 8, $contador, 0);
  $pdf->Cell(40, 8, $fila['codp'], 0);
  $pdf->Cell(25, 8, $fila['nombre'], 0);
  $pdf->Cell(25, 8,$fila['cantidad'], 0);
  $pdf->Cell(25, 8, $fila['precio'], 0);
  $pdf->Cell(40, 8, $fila['total'], 0);
  $pdf->Ln(8);
}
*/
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(114,8,'',0);
$pdf->Output();
?>

  