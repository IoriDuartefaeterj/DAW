<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Criar</title>
</head>
<body>

<h2>Criar</h2>

<form action="Perguntas Salvas.php" method="POST">
    
    <label>Pergunta:</label><br>
    <input type="text" name="pergunta" required><br><br>

    <label>Tipo:</label>
    <select name="tipo" id="tipo" onchange="mostrarCampos()">
        <option value="multipla">Múltipla escolha</option>
        <option value="texto">Texto</option>
    </select>

    <div id="multipla">
        <h3>Opções</h3>
        <input type="text" name="opcoes[]" placeholder="Opção 1"><br>
        <input type="text" name="opcoes[]" placeholder="Opção 2"><br>
        <input type="text" name="opcoes[]" placeholder="Opção 3"><br>
        <input type="text" name="opcoes[]" placeholder="Opção 4"><br><br>

        <label>Resposta correta (0,1,2):</label>
        <input type="number" name="correta">
    </div>

    <div id="texto" style="display:none;">
        <h3>Resposta</h3>
        <input type="text" name="resposta">
    </div>

    <br>
    <button type="submit">Salvar</button>
</form>

<br>
<a href="DAW AV1.php">⬅ Voltar</a>

<script>
function mostrarCampos() {
    let tipo = document.getElementById("tipo").value;
    document.getElementById("multipla").style.display = tipo === "multipla" ? "block" : "none";
    document.getElementById("texto").style.display = tipo === "texto" ? "block" : "none";
}
</script>

</body>
</html>
