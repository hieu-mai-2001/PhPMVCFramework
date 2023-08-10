<?php
require 'vendor/autoload.php'; // Path to your autoload.php

use thiagoalessio\TesseractOCR\TesseractOCR;
use TCPDF;

// Check if a file was uploaded
if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $uploadedFile = $_FILES['image']['tmp_name'];

    // Perform OCR on the uploaded image
    $ocrText = (new TesseractOCR($uploadedFile))->run();

    // Create a new PDF instance
    $pdf = new TCPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 12);

    // Add the OCR text to the PDF
    $pdf->MultiCell(0, 10, $ocrText);

    // Output the PDF
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="ocr_output.pdf"');
    echo $pdf->Output('ocr_output.pdf', 'S');
}
