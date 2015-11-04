<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

require __DIR__.'/_header.php';

if (empty($_SESSION['connected'])) {
    header('Location: login.php');
}


/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */



// Include the main TCPDF library (search for installation path).
require __DIR__.'/vendor/autoload.php';


// create new PDF document
$pdf = new TCPDF("P", PDF_UNIT, "A4", true, 'UTF-8', false);

// set document information
$pdf->SetCreator("LOOOOL");
$pdf->SetAuthor('Bonobo');
$pdf->SetTitle('banania');
$pdf->SetSubject('prout');
$pdf->SetKeywords('wag');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'My supper header', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
//$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
//$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
//$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);


//Remove header and footer
$pdf->SetPrintFooter(false);
$pdf->SetPrintHeader(false);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();
//

//


$username = $_SESSION['username'];

 use ABC\eticket\Event;
$eventRepository = $em->getRepository('ABC\eticket\Event');
new Event();
$events = $eventRepository->findOneBy(array('id' => $_GET['id']));

$title = $events->getName();

$image = $events->getPicture();

$desc = $events->getDescription();
$datetime = new DateTime();






// set text shadow effect
//$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));


// Set some content to print
$html = <<<EOD
<img src="$image"></img>
<h1 style="text-decoration:none;color:black; margin-top: 200px;">&nbsp;<span style="color:black;">Invitation $title</span><span style="color:white;">PDF</span>&nbsp;</a>!</h1>
<h2>Bonjour Monsieur,Madame $username</h2>
<p>Ce ticket est nécessaire à l'entrée sur le site de l'évènement, veuillez ne pas vous en séparer. Une vérification sera effectuée avant l'entrée.</p>
<p>Description : $desc</p>
<br>


<br>


EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);



// ---------------------------------------------------------


$uniqueId = uniqid();

$pdf->write2DBarcode($uniqueId, 'QRCODE,L', 0, 200, 100, 50, null, 'N');



// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output(__DIR__ .'/pdf/example_'.$uniqueId.'.pdf', 'F');

//============================================================+
// END OF FILE
//============================================================+

$homeConnected = $_SESSION['connected'];

$homeSession = $_SESSION;

echo $twig->render('pdf_generator.html.twig', [
    'homeConnected' => $homeConnected,
    'homeSession' => $homeSession,
]);
