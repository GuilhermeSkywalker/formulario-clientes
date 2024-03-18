<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h2>Formulário de Contato</h2>
        <form action="registra_cadastro_clientes.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="celular">Celular:</label>
            <input type="text" id="celular" name="celular" required>

            <button type="submit">Enviar</button>
        </form>
    </div>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    // Aqui você pode fazer o que quiser com os dados,
    // como salvar em um banco de dados ou enviar por email.
    // Neste exemplo, apenas exibimos os dados na página.
    echo "<h2>Dados Recebidos:</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Celular:</strong> $celular</p>";
}
?>
</body>
</html>