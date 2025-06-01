<?php
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$experiencias = $_POST['experiencias'];

$idade = date_diff(date_create($data_nascimento), date_create('today'))->y;

$css = file_get_contents('assets/css/style.css');

ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Currículo</title>
    <style>
        <?= $css ?>
    </style>
</head>
<body>
<?php include 'templates/layout_curriculo.php'; ?>
</body>
</html>
<?php
$html = ob_get_clean();
session_start();
$_SESSION['curriculo_html'] = $html;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Currículo Gerado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <?= $html ?>
    <div class="text-center mt-4">
        <button class="btn btn-success" onclick="window.print()">Imprimir / Salvar PDF</button>
        <a href="gerar_pdf.php" class="btn btn-danger">Baixar como PDF</a>
    </div>
</body>
</html>
