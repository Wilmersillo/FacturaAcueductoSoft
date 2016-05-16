<?php require("../fpdf/fpdf.php"); 
    include("conexion.php");
  
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
$pdf->Cell(100, 8, 'LISTADO DE CLIENTES', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 8, 'CODIGO', 1);
$pdf->Cell(25, 8, 'NOMBRE', 1);
$pdf->Cell(25, 8, 'APELLIDO', 1);
$pdf->Cell(25, 8, 'DIRECCION', 1);
$pdf->Cell(25, 8, 'TELEFONO', 1);
$pdf->Cell(40, 8, 'CORREO', 1);

$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);

$consulta = "SELECT *  FROM cliente";
 
    $resultado_consulta=mysql_query($consulta,$con);
    while($row=mysql_fetch_array($resultado_consulta)){//se guardan los datos en un arreglo
 


  $pdf->Cell(20, 8, $row['cod_cliente'], 1);
  $pdf->Cell(25, 8, $row['nom_cliente'], 1);                  
  $pdf->Cell(25, 8, $row['ape_cliente'], 1);
  $pdf->Cell(25, 8, $row['direccion'], 1);
  $pdf->Cell(25, 8, $row['telefono'], 1);
  $pdf->Cell(40, 8, $row['correo'], 1);
  

  $pdf->Ln(8);

                        }

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(114,8,'',0);
$pdf->Output();
?>

  