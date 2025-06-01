<div class="card p-4">
    <h2><?= htmlspecialchars($nome) ?></h2>
    <p><strong>Data de Nascimento:</strong> <?= date("d/m/Y", strtotime($data_nascimento)) ?></p>
    <p><strong>Idade:</strong> <?= $idade ?> anos</p>
    <h4>Experiências Profissionais</h4>
    <ul>
        <?php foreach ($experiencias as $exp): ?>
            <li><?= htmlspecialchars($exp) ?></li>
        <?php endforeach; ?>
    </ul>
</div>
