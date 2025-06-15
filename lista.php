<?php
// Conexão com o banco de dados
$conn = mysqli_connect("localhost", "root", "", "empresa");

// Verifica se a conexão foi bem-sucedida
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Verifica se recebeu o parâmetro para exclusão
if (isset($_GET['excluir'])) {
    $codigo = intval($_GET['excluir']);
    
    // Usando prepared statement para evitar injeção de SQL
    $stmt = $conn->prepare("DELETE FROM cliente WHERE codigo = ?");
    $stmt->bind_param("i", $codigo);
    
    if ($stmt->execute()) {
        echo "<script>alert('Cliente excluído com sucesso!'); window.location='lista.php';</script>";
    } else {
        echo "<script>alert('Erro ao excluir cliente: " . $stmt->error . "'); window.location='lista.php';</script>";
    }
    
    $stmt->close();
}

// Buscar todos os clientes
$resultado = mysqli_query($conn, "SELECT * FROM cliente");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f5e9;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 128, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #2e7d32;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a.excluir {
            background-color: #f44336;
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
        }

        a.excluir:hover {
            background-color: #c62828;
        }

        .voltar {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .voltar:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Lista de Clientes</h2>
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Fone</th>
                <th>Ações</th>
            </tr>
            <?php while ($linha = mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($linha['codigo']); ?></td>
                    <td><?php echo htmlspecialchars($linha['nome']); ?></td>
                    <td><?php echo htmlspecialchars($linha['ender']); ?></td>
                    <td><?php echo htmlspecialchars($linha['fone']); ?></td>
                    <td>
                        <a class="excluir" href="lista.php?excluir=<?php echo $linha['codigo']; ?>" onclick="return confirm('Deseja realmente excluir este cliente?')">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <a class="voltar" href="principal.php">← Voltar ao menu</a>
    </div>
</body>
</html>
