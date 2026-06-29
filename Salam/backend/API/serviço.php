<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Serviços</title>
        <style>body{margin:0;font-family:Arial;background:#e7d2d4} 
        .topbar{background:#e11ba8;height:100px;color:white;display:flex;justify-content:space-between;align-items:center;padding:0 50px} 
        .logo{font-size:52px;font-weight:bold;text-shadow:3px 3px #555} 
        .nav a{color:white;margin:0 30px;text-decoration:none} 
        .sidebar{position:fixed;top:100px;left:0;width:250px;height:100%;background:#e11ba8;padding-top:50px} 
        .sidebar a{display:block;color:white;text-decoration:none;padding:45px;text-align:center} 
        .content{margin-left:280px;padding:60px} .card{background:#e6cfd1;border-radius:10px;padding:20px} 
        .banner{width:100%;height:250px;object-fit:cover} </style>
        </head>
        <body>
            <div class="topbar">
                <div class="logo">SALAM</div>
                <div class="nav"><a>Serviços</a>
                <a>Planos</a>
                <a>Cadastro</a>
            </div></div>
            <div class="sidebar">
                <a href="agendar.php">Agendar Serviço</a>
                <a href="serviço.php">Avaliar Profissionais</a>
                <a href="cupom.php">Cupons</a>
                <a href="cadastro.php">Agendamentos</a>
            </div>
            <div class="content">
                <div class="card">
                    <img class="banner" src="https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?w=1200">
                    <h1>Avaliar Profissionais</h1>
                    <h2>R$100</h2>
                    <p>Depilação + Unhas (Mão e Pé)</p>
                </div>
            </div>
        </body>
        </html>
