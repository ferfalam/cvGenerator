<?php
require "vendor/autoload.php";
use mikehaertl\wkhtmlto\Pdf;

ob_start();
require "cv.php";
$content = ob_get_clean();

$pdf = new Pdf();
$pdf->setOptions([
    'user-style-sheet' => realpath('cv.css'),
    'binary' => realpath('wkhtmltopdf/wkhtmltopdf.exe'),
    'ignoreWarnings' => true,
    'commandOptions' => array(
        'useExec' => true,      
    ),
]);
// echo $content;
$pdf->addPage($content);
if (!$pdf->send('cv.pdf')){
    $error = $pdf->getError();
    echo $error;
} else {
    echo "Success";
}
