<?php
$id = $_GET['id'];
$linhas = file("Usuários.txt");

foreach ($linhas as $linha) {
    $p = json_decode($linha, true);
    if ($p['id'] == $id) break;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Visualização</title>
</head>
<body>

<h2>Pergunta</h2>

<p><strong><?= $p['pergunta'] ?></strong></p>

<?php if ($p['tipo'] == "multipla"): ?>
    <ul>
        <?php foreach ($p['opcoes'] as $i => $op): ?>
            <li><?= $op ?> <?= ($i == $p['correta']) ? "(Correta)" : "" ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p><strong>Resposta:</strong> <?= $p['resposta'] ?></p>
<?php endif; ?>

<a href="Lista de Perguntas.php">⬅ Voltar</a>

</body>
</html>
