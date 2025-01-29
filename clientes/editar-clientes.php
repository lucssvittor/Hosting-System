
<?php 

$codigo = $_GET ["codigo"];

$sql = "SELECT * FROM tbclientes WHERE codigo ={$codigo}";

$rs = mysqli_query($conexao, $sql) or die("ERRO DE RECUPERAÇÃO" . mysqli_error($conexao));

$dados = mysqli_fetch_assoc($rs);

?>


<header>
<h3>Editar Clientes</h3>
</header>

<form action="clientes/atualizar-clientes.php" method="POST">

    <label for="codigo">CODIGO:</label>
    <input type="text" id="codigo" name="codigo" value="<?=$dados["codigo"]?>" readonly><br><br>

    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="Cpf" value="<?=$dados["cpf"]?>"><br><br>

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="Nome" value="<?=$dados["nome"]?>"><br><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="Email" value="<?=$dados["email"]?>"><br><br>

    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="Telefone" value="<?=$dados["telefone"]?>"><br><br>

    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="Endereco" value="<?=$dados["endereco"]?>"><br><br>

    <label for="datanascimento">Data de Nascimento:</label>
    <input type="date" id="datanascimento" name="DataNascimento" value="<?=$dados["datanascimento"]?>"><br><br>

    <label for="numero">Número:</label>
    <input type="text" id="numero" name="Numero" value="<?=$dados["numero"]?>"><br><br>

    <label for="bairro">Bairro:</label>
    <input type="text" id="bairro" name="Bairro" value="<?=$dados["bairro"]?>"><br><br>

    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="Cidade" value="<?=$dados["cidade"]?>"><br><br>

    <label for="estado">Estado:</label>
    <input type="text" id="estado" name="Estado" value="<?=$dados["estado"]?>"><br><br>

    <input type="submit" value="Atualizar">
</form>


</body>
</html>