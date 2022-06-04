<?php
require('fpdf/fpdf.php');



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    $this->Cell(70,10,'Reporte de alumnos',1,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(40, 10, 'NoControl', 1, 0, 'C', 0);
    $this->Cell(50, 10, 'Nombre', 1, 0, 'C', 0);
    $this->Cell(50, 10, 'Paterno', 1, 0, 'C', 0);
    $this->Cell(50, 10, 'Materno', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'conexion.php';
$consulta = "SELECT * FROM alumno";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(40,10,$row['alu_cve_nocontrol'],1,0,'C',0);
    $pdf->Cell(50,10,$row['alu_nombre'],1,0,'C',0);
    $pdf->Cell(50,10,$row['alu_paterno'],1,0,'C',0);
    $pdf->Cell(50,10,$row['alu_materno'],1,1,'C',0);
    
}

$pdf->Output();
?>
