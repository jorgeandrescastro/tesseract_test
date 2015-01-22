<?php
//Requires the Tesseract library
require_once 'vendor/tesseract-ocr-for-php/TesseractOCR/TesseractOCR.php';

$tesseract = new TesseractOCR('images/ja3b.jpeg');
// $tesseract->setWhitelist(range('A','Z'), range(0,9));
$tesseract->setWhitelist(range('A','Z'));
// $tesseract->setWhitelist(range(0,9));
// $tesseract->setTempDir('./my-temp-dir');
echo $tesseract->recognize();


?>