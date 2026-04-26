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
    <title>Editar</title>
</head>
<body>

<h2>Editar Pergunta</h2>

<form action="salvar_edicao.php" method="POST">

<input type="hidden" name="id" value="<?= $p['id'] ?>">

<input type="text" name="pergunta" value="<?= $p['pergunta'] ?>"><br><br>

<?php if ($p['tipo'] == "multipla"): ?>
    <?php foreach ($p['opcoes'] as $op): ?>
        <input type="text" name="opcoes[]" value="<?= $op ?>"><br>
    <?php endforeach; ?>
    <br>
    <input type="number" name="correta" value="<?= $p['correta'] ?>">
<?php else: ?>
    <input type="text" name="resposta" value="<?= $p['resposta'] ?>">
<?php endif; ?>

<br><br>
<button type="submit">Salvar</button>

</form>

<a href="Lista de Perguntas.php">⬅ Voltar</a>

</body>
</html>
