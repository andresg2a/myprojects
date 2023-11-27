<?php

require('./fpdf.php');

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {

      $this->Image('../img/logo.png', 185, 5, 20); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(45); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      $this->Cell(110, 15, utf8_decode('SoftCafe INC'), 1, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(3); // Salto de línea
      $this->SetTextColor(103); //color

      /* UBICACION */
      $this->Cell(1);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(96, 10, utf8_decode("Ubicación : Neiva - Huila"), 0, 0, '', 0);
      $this->Ln(5);

      /* TELEFONO */
      $this->Cell(1);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(59, 10, utf8_decode("Teléfono :3187318310 - 3142769220 "), 0, 0, '', 0);
      $this->Ln(5);

      /* CORREO */
      $this->Cell(1);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("Correo : valentina_bermeodu@fet.edu.co"), 0, 0, '', 0);
      $this->Ln(5);

      /* TELEFONO */
      $this->Cell(1);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("Sucursal : Norte"), 0, 0, '', 0);
      $this->Ln(10);

      /* TITULO DE LA TABLA */
      $this->SetTextColor(228, 100, 0);
      $this->Cell(50); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 7, utf8_decode("PAGO A TRABAJADORES"), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      $this->SetFillColor(228, 100, 0); //colorFondo
      $this->SetTextColor(255, 255, 255); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(30, 10, utf8_decode('Cédula'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('Fecha'), 1, 0, 'C', 1);
      $this->Cell(40, 10, utf8_decode('C. Recogida (Kg)'), 1, 0, 'C', 1);
      $this->Cell(43, 10, utf8_decode('Pago'), 1, 0, 'C', 1);
      $this->Cell(50, 10, utf8_decode('Metodo de pago'), 1, 0, 'C', 1) . "\n";
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

include '../../SoftCafe/conexion.php';
/* CONSULTA INFORMACION*/
$consulta_info = $conexion->query("select * from infot");


$pdf = new PDF();
$pdf->AddPage(""); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas


$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(163, 163, 163); //colorBorde

$consulta_reporte_trabajadores = $conexion->query("select * from infot");

while ($datos_reporte = $consulta_reporte_trabajadores->fetch_object()) 
{   
   $pdf->Cell(30, 10, utf8_decode($datos_reporte->cedula), 1, 0, 'C', 0);
   $pdf->Cell(30, 10, utf8_decode($datos_reporte->fecha), 1, 0, 'C', 0);
   $pdf->Cell(40, 10, utf8_decode($datos_reporte->kg), 1, 0, 'C', 0);
   $pdf->Cell(43, 10, utf8_decode($datos_reporte->pago), 1, 0, 'C', 0);
   $pdf->Cell(50, 10, utf8_decode($datos_reporte->mpago), 1, 1, 'C', 0);   
}

 
$pdf->Output('PagoTrabajadores.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
