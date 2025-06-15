<?php
session_start();

if (isset($_SESSION['usuario']) && isset($_SESSION['senha'])) {
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Menu Principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #e8f5e9, #c8e6c9);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 60px auto;
            padding: 30px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 128, 0, 0.2);
            border-radius: 12px;
            text-align: center;
        }

        img.logo {
            width: 150px;
            margin-bottom: 20px;
        }

        h1 {
            color: #2e7d32;
            margin-bottom: 30px;
        }

        .menu-title {
            background-color: #ffeb3b;
            font-weight: bold;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .menu-button {
            display: block;
            width: 80%;
            margin: 10px auto;
            padding: 12px;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .menu-button:hover {
            background-color: #388e3c;
        }

        .footer {
            margin-top: 40px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="logo_icaro.png" alt="Logo Ícaro" class="logo">

        <h1>Icaro's Tecnologia</h1>

        <div class="menu-title">MENU</div>

        <a class="menu-button" href="formcliente.html">Cadastrar Cliente</a>
        <a class="menu-button" href="lista.php">Listar Clientes</a>
        <a class="menu-button" href="consulta.html">Consultar Cliente</a>
        <a class="menu-button" href="logout.php">Sair</a>

        <div class="footer">
            Sistema de Clientes © <?php echo date("Y"); ?>
        </div>
    </div>
</body>
</html>

<?php
} else {
    echo "<script>alert('Você precisa estar logado!');</script>";
    header('Location: index.html');
    exit();
}
?>