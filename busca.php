<?php
$c = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($c, "empresa");

$query = "SELECT * FROM cliente WHERE codigo = $_POST[codigo]";
$result = mysqli_query($c, $query);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar Cliente</title>
    <style>
        body {
            background-color: #e8f5e9;
            font-family: Arial, sans-serif;
            padding-top: 50px;
        }

        .form-container {
            max-width: 500px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,128,0,0.2);
        }

        h2 {
            text-align: center;
            color: #2e7d32;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            margin-top: 25px;
            width: 100%;
            padding: 12px;
            background-color: #4caf50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Alterar Dados do Cliente</h2>
        <form name="form1" method="post" action="altera.php">
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <label for="codigo">Código</label>
                <input type="text" name="codigo" value="<?php echo $row['codigo']; ?>" readonly />

                <label for="nome">Nome</label>
                <input type="text" name="nome" value="<?php echo $row['nome']; ?>" />

                <label for="ender">Endereço</label>
                <input type="text" name="ender" value="<?php echo $row['ender']; ?>" />

                <label for="fone">Telefone</label>
                <input type="text" name="fone" value="<?php echo $row['fone']; ?>" />
            <?php
            }
            ?>
            <input type="submit" value="ALTERAR" />
        </form>
    </div>
</body>
</html>
