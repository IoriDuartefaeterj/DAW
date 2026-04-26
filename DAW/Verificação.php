<?php
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$linhas = file("dados/Usuários.txt");

foreach ($linhas as $linha) {
    $u = json_decode($linha, true);

    if ($u['usuario'] == $usuario && $u['senha'] == $senha) {
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
        exit;
    }
}

echo "Login inválido!";
?>
