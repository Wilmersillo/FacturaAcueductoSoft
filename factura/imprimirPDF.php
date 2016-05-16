
<?php 

 $cod=$_POST['codigo']; 
require("../fpdf/fpdf.php");
include('../configuracion/conexion.php');

$contador=0;
$consulta ="SELECT * FROM cliente,factura WHERE cliente.cod_cliente=factura.cod_cliente and cliente.cod_cliente='$cod'";
$resultado=mysql_query($consulta,$con);
$resultado_consulta=mysql_query($consulta,$con);//la ejecutamos
	while($row=mysql_fetch_array($resultado_consulta)){
$precio=480*$row['consumo'];

$pdf = new FPDF();
$contador++;
$pdf->AddPage();
//$pdf->Image('../Imagenes/rec.JPG' , 40,30, 60 , 5,'JPG');
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetDrawColor(0,0,255);
$pdf->Cell(80, 8, '', 0);

$pdf->SetFillColor(232,232,232);
$pdf->Cell(120, 8, 'RECIBO', 0);

$pdf->Ln(20);

$pdf->Image('../Imagenes/lip.PNG' , 1,195, 210, 2,'PNG');
$pdf->Image('../Imagenes/cod.PNG' , 140,165, 50 , 23,'PNG');
$pdf->Image('../Imagenes/cod.PNG' , 142,240, 50 , 23,'PNG');
$pdf->Image('../Imagenes/li.PNG' , 5,10, 190 , 23,'PNG');
$pdf->Image('../Imagenes/mision.PNG' , 15,210, 20 , 23,'PNG');
$pdf->Image('../Imagenes/slo.PNG' , 10,265, 180 , 28,'PNG');


$pdf->SetFont('Arial', 'B', 12);
$pdf->Image('../Imagenes/mision.PNG' , 15,33, 20 , 23,'PNG');
$pdf->Cell(30, 8, '', 0);
$pdf->Cell(60, 5, 'Datos de la empresa', 1);$pdf->Cell(30, 8, '', 0); $pdf->Cell(60, 5, 'Datos del cliente', 1);

$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 8, '', 0);
$pdf->Cell(90, 5, 'Nombre: Empresa Acueducto ',0); $pdf->Cell(10, 5, 'Nombre: '.$row['nom_cliente'].' '.$row['ape_cliente'].'', 0);
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 8, '', 0);
$pdf->Cell(90, 5, 'Fecha: '.date('d-m-Y').'',0);  $pdf->Cell(10, 5, 'Direccion:  '.$row['direccion'].'', 0);
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 8, '', 0);
$pdf->Cell(90, 5, 'NIT: 17224527  ',0); $pdf->Cell(10, 5, 'Estrato: 2', 0);
$pdf->Ln(10);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(90, 5, 'Ref paago  ',1); $pdf->Cell(30, 8, '', 0); $pdf->Cell(60, 5, 'Ultimos Consumos', 1);
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(90, 5, 'Nª Factura: '.$contador.'',0); $pdf->Cell(30, 8, '', 0); $pdf->Cell(10, 5, '1. 54', 0);
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(90, 5, '',0); $pdf->Cell(30, 8, '', 0); $pdf->Cell(10, 5, '2. 65', 0);
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(90, 5, '',0); $pdf->Cell(30, 5, '', 0); $pdf->Cell(10, 5, '3. 53', 0);
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(90, 5, '',0); $pdf->Cell(30, 5, '', 0); $pdf->Cell(10, 5, '4.  '.$row['consumo'].'', 0);
$pdf->Ln(10);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(180, 5, 'Periodo de Facturado',1); 
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(55, 5, 'Fecha inicio:  '.$row['fech_inicio'].'' ,0); $pdf->Cell(65, 5, 'Fecha fin:  '.$row['fech_fin'].'', 0); $pdf->Cell(10, 5, 'Lectura Actual:', 0);
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(55, 5, '',0); $pdf->Cell(65, 5, '', 0); $pdf->Cell(10, 5, 'Lectura Anterior:', 0);
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(55, 5, '',0); $pdf->Cell(65, 5, '', 0); $pdf->Cell(10, 5, 'Consumo Mts3:  '.$row['consumo'].'', 0);
$pdf->Ln(10);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(90, 5, 'Fecha de pago',1); $pdf->Cell(30, 5, '', 0); $pdf->Cell(60, 5, 'Estado de Lectura', 1);
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(55, 5, 'Se recomienda pagar 10 dias despues de adquirido',0); $pdf->Cell(65, 5, '', 0); $pdf->Cell(10, 5, '', 0);
$pdf->Ln(10);

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(55, 5,'Fecha: '.date('d-m-Y').'' ,0); $pdf->Cell(65, 5, '', 0); $pdf->Cell(10, 5, '', 0);
$pdf->Ln();


$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(180, 5, 'RESUMEN DE LA CUENTA:',1); 
$pdf->Ln();


$pdf->SetFont('Arial', '', 9);
$pdf->Cell(40, 5, '', 0);
$pdf->Image('../Imagenes/gra.PNG' , 15,137, 25 , 18,'PNG');
$pdf->Cell(20, 5, 'Subtotal', 0); $pdf->Cell(20, 5, 'Servicios', 0);$pdf->Cell(20, 5, 'Cantidad', 0); $pdf->Cell(20, 5, 'Valor U', 0); $pdf->Cell(20, 5, 'Subsidio', 0); $pdf->Cell(20, 5, 'Subtotal', 0);
$pdf->Ln(23);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(180, 5, 'INTERES POR PAGO EXTEMPORANEO:',1); 
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(90, 5, 'Observaciones y aclaraciones',0);  $pdf->Cell(60, 5, 'Total: '.$precio .'', 0); $pdf->Cell(30, 5, '', 0);
$pdf->Cell(90, 5, '',0);  $pdf->Cell(60, 5, '', 0); $pdf->Cell(30, 5, '', 0);
$pdf->Ln(50);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Image('../Imagenes/mision.PNG' , 15,33, 20 , 23,'PNG');
$pdf->Cell(30, 8, '', 0);
$pdf->Cell(60, 5, 'Datos de la empresa', 1);$pdf->Cell(30, 8, '', 0); $pdf->Cell(60, 5, 'Datos del cliente', 1);
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 8, '', 0);
$pdf->Cell(90, 5, 'Nombre: Empresa Acueducto ',0); $pdf->Cell(10, 5, 'Nombre: '.$row['nom_cliente'].'', 0);
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 8, '', 0);
$pdf->Cell(90, 5, 'Fecha: '.date('d-m-Y').'',0);  $pdf->Cell(10, 5, 'Direccion:', 0);
$pdf->Ln();

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(30, 8, '', 0);
$pdf->Cell(90, 5, 'NIT: 17224527  ',0); $pdf->Cell(10, 5, 'Estrato: 2', 0);
$pdf->Ln(15);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(90, 5, 'Nª Factura:'.$contador.'',0);  $pdf->Cell(60, 5, 'Efectivo: '.$precio .'', 0); $pdf->Cell(30, 5, '', 0);
$pdf->Cell(90, 5, '',0);  $pdf->Cell(60, 5, '', 0); $pdf->Cell(30, 5, '', 0);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(90, 5, 'Codigo usuario: '.$row['cod_cliente'].'',0);  $pdf->Cell(60, 5, 'Valor:'.$precio .'', 0); $pdf->Cell(30, 5, '', 0);
$pdf->Cell(90, 5, '',0);  $pdf->Cell(60, 5, '', 0); $pdf->Cell(30, 5, '', 0);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(90, 5, 'Fecha inicio: '.$row['fech_inicio'].'',0);  $pdf->Cell(60, 5, 'Fecha fin: '.$row['fech_fin'].'', 0); $pdf->Cell(30, 5, '', 0);
$pdf->Cell(90, 5, '',0);  $pdf->Cell(60, 5, '', 0); $pdf->Cell(30, 5, '', 0);
$pdf->Ln();
}
$pdf->Output();

?>