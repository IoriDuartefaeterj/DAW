<?php
$host="localhost";$dbname="salam";$user="root";$pass="";
try{
$pdo=new PDO("mysql:host=$host;charset=utf8",$user,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$pdo->exec("CREATE DATABASE IF NOT EXISTS $dbname");
$pdo->exec("USE $dbname");
$pdo->exec("CREATE TABLE IF NOT EXISTS usuarios(id INT AUTO_INCREMENT PRIMARY KEY,nome VARCHAR(100),email VARCHAR(100) UNIQUE,senha VARCHAR(255),tipo ENUM('cliente','profissional','admin') DEFAULT 'cliente')");
$pdo->exec("CREATE TABLE IF NOT EXISTS servicos(id INT AUTO_INCREMENT PRIMARY KEY,nome VARCHAR(100),descricao TEXT,preco DECIMAL(10,2),imagem VARCHAR(255))");
$pdo->exec("CREATE TABLE IF NOT EXISTS profissionais(id INT AUTO_INCREMENT PRIMARY KEY,nome VARCHAR(100),especialidade VARCHAR(100),avaliacao FLOAT DEFAULT 0)");
$pdo->exec("CREATE TABLE IF NOT EXISTS cupons(id INT AUTO_INCREMENT PRIMARY KEY,codigo VARCHAR(50),desconto INT)");
$pdo->exec("CREATE TABLE IF NOT EXISTS agendamentos(id INT AUTO_INCREMENT PRIMARY KEY,usuario_id INT,servico_id INT,profissional_id INT,data_agendamento DATETIME,status ENUM('pendente','confirmado','cancelado') DEFAULT 'pendente',FOREIGN KEY(usuario_id) REFERENCES usuarios(id),FOREIGN KEY(servico_id) REFERENCES servicos(id),FOREIGN KEY(profissional_id) REFERENCES profissionais(id))");
$pdo->exec("CREATE TABLE IF NOT EXISTS planos(id INT AUTO_INCREMENT PRIMARY KEY,nome VARCHAR(100),valor DECIMAL(10,2),beneficios TEXT)");
$pdo->exec("INSERT IGNORE INTO servicos(id,nome,descricao,preco,imagem) VALUES (1,'Promoção de Junho','Depilação + Unhas (Mão e Pé)',100.00,'promocao-junho.jpg')");
echo 'Banco SALAM configurado com sucesso!';
}catch(PDOException $e){die('Erro: '.$e->getMessage());}
?>
