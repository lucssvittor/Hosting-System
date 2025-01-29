
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documen</title>
</head>
<body>
<header>
    <h3>Cadastrar Quartos</h3>
</header>

<form action="cadastrar-quarto.php" method="POST">

    <label for="tipo">TIPO:</label>
    <select id="tipo" name="tipo" required>
        <option value="normal">Normal</option>
        <option value="executivo">Executivo</option>
        <option value="suite">Suíte</option>
        <option value="vip">VIP</option>
    </select><br><br>

    <label for="capacidade">CAPACIDADE:</label>
    <select id="capacidade" name="capacidade" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="5">5</option>
    </select><br><br>

    <label for="preco">PREÇO:</label>
    <input type="text" id="preco" name="preco" required placeholder="Digite o preço por diária" pattern="^\d+(\.\d{1,2})?$"><br><br>

    <label for="status">STATUS:</label>
    <select id="status" name="status" required>
        <option value="disponivel">Disponível</option>
        <option value="ocupado">Ocupado</option>
        <option value="manutencao">Em Manutenção</option>
    </select><br><br>

    <label for="ocupante">OCUPANTE:</label>
    <select id="ocupante" name="ocupante">
        <option value="">Selecione o ocupante</option>
        <?php
        // Conexão com o banco de dados
        $conexao = mysqli_connect("localhost", "root", "", "");

        if (!$conexao) {
            die("Conexão falhou: " . mysqli_connect_error());
        }

        // Buscar todos os clientes para preencher o select
        $sql = "SELECT codigo, nome FROM tbclientes";
        $result = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<option value='".$row['codigo']."'>".$row['nome']."</option>";
            }
        }

        mysqli_close($conexao);
        ?>
    </select><br><br>

    <label for="cpf_cnpj">CPF/CNPJ:</label>
    <input type="text" id="cpf_cnpj" name="cpf_cnpj" required placeholder="Digite o CPF ou CNPJ" pattern="\d{11}|\d{14}"><br><br>

    <input type="submit" value="Cadastrar">
</form>


</body>
</html>