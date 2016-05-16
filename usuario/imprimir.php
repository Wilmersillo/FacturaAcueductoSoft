<?php require("../fpdf/fpdf.php"); 
    include("../configuracion/conexion.php");
  
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('../Imagenes/mision.PNG' , 15 ,13, 15 , 18,'PNG');
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(150, 10, 'Empresa De Acueducto "Ltda."', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'LISTADO DE USUARIOS EMPRESA', 0);
$pdf->Ln(23);
$pdf->Cell(60, 8, '',0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 8, 'CODIGO', 1);
$pdf->Cell(25, 8, 'NOMBRE', 1);
$pdf->Cell(25, 8, 'APELLIDO', 1);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);

$consulta = "SELECT *  FROM empleado";
 
    $resultado_consulta=mysql_query($consulta,$con);
    while($row=mysql_fetch_array($resultado_consulta)){//se guardan los datos en un arreglo
 

  
  $pdf->Cell(60, 8, '',0);
  $pdf->Cell(20, 8, $row['cod'], 1);
  $pdf->Cell(25, 8, $row['nom'], 1);                  
  $pdf->Cell(25, 8, $row['ape'], 1);
  
  
  

  $pdf->Ln(8);

                        }

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(114,8,'',0);
$pdf->Output();
?>

  