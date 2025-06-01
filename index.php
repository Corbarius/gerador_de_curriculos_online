<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Currículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Gerador de Currículo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Preencher Currículo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gerar_curriculo.php">Visualizar Currículo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="window.print()">Imprimir</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
<h1 class="text-center">Gerador de Currículo</h1>
<form action="gerar_curriculo.php" method="POST" id="form-curriculo">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Idade:</label>
        <input type="text" id="idade" class="form-control" disabled>
    </div>
    <div id="experiencias" class="mb-3">
        <label class="form-label">Experiências Profissionais:</label>
        <div class="input-group mb-2">
            <input type="text" name="experiencias[]" class="form-control" placeholder="Descrição da experiência">
        </div>
    </div>
    <button type="button" class="btn btn-secondary mb-3" onclick="adicionarExperiencia()">+ Adicionar Experiência</button>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Gerar Currículo</button>
    </div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>