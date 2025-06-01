<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

session_start();
if (!isset($_SESSION['curriculo_html'])) {
    echo "Nenhum currículo encontrado.";
    exit;
}
$html = $_SESSION['curriculo_html'];
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("curriculo.pdf", ["Attachment" => true]);
