<?php
$arquivo = "Formato de Questões.txt";

$id = time(); // ID simples
$tipo = $_POST['tipo'];
$pergunta = $_POST['pergunta'];

if ($tipo == "multipla") {
    $dados = [
        "id" => $id,
        "tipo" => $tipo,
        "pergunta" => $pergunta,
        "opcoes" => $_POST['opcoes'],
        "correta" => $_POST['correta']
    ];
} else {
    $dados = [
        "id" => $id,
        "tipo" => $tipo,
        "pergunta" => $pergunta,
        "resposta" => $_POST['resposta']
    ];
}

file_put_contents($arquivo, json_encode($dados) . PHP_EOL, FILE_APPEND);

echo "Pergunta salva! <a href='listar.php'>Ver lista</a>";
?>
