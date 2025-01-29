
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
<h3>Cadastro De Clientes</h3>
</header>
<form action="clientes/inserir-clientes.php" method="POST">
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="Cpf" required><br><br>

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="Nome" required><br><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="Email" required><br><br>

    <label for="datanascimento">Data de Nascimento:</label>
    <input type="date" id="datanascimento" name="DataNascimento" required><br><br>

    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="Telefone" required><br><br>

    <label for="endereco">Endereço:</label>
    <textarea id="endereco" name="Endereco" required></textarea><br><br>

    <label for="numero">Número:</label>
    <input type="text" id="numero" name="Numero" required><br><br>

    <label for="bairro">Bairro:</label>
    <input type="text" id="bairro" name="Bairro" required><br><br>

    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="Cidade" required><br><br>

    <label for="estado">Estado:</label>
    <input type="text" id="estado" name="Estado" required><br><br>

    <input type="submit" value="Cadastrar">
</form>


</body>
</html>