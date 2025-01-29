
<h3>ATUALIZAÇÃO DE CLIENTES</h3>

<?php

$conexao = mysqli_connect("localhost", "root", "", "dbsistema");

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$codigo = mysqli_real_escape_string($conexao, $_POST["codigo"]);
$cpf = mysqli_real_escape_string($conexao, $_POST["Cpf"]);

$
$nome = mysqli_real_escape_string($conexao, $_POST["Nome"]);
$email = mysqli_real_escape_string($conexao, $_POST["Email"]);
$telefone = mysqli_real_escape_string($conexao, $_POST["Telefone"]);
$endereco = mysqli_real_escape_string($conexao, $_POST["Endereço"]);

$
$dataNascimento = mysqli_real_escape_string($conexao, $_POST["DataNascimento"]);
$numero = mysqli_real_escape_string($conexao, $_POST["Numero"]);
$bairro = mysqli_real_escape_string($conexao, $_POST["Bairro"]);
$cidade = mysqli_real_escape_string($conexao, $_POST["Cidade"]);
$estado = mysqli_real_escape_string($conexao, $_POST["Estado"]);


$sql = "UPDATE tbclientes SET 
    Cpf = '{$cpf}', 
    Nome = '{$nome}',
    Email = '{$email}',
    Telefone = '{$telefone}',
    Endereco = '{$endereco}',
    DataNascimento = '{$datanascimento}',
    Numero = '{$numero}',
    Bairro = '{$bairro}',
    Cidade = '{$cidade}',
    Estado = '{$estado}'
WHERE codigo = '{$codigo}'";


if (mysqli_query($conexao, $sql)) {
    echo "<script>setTimeout(function(){ window.location.href = 'http://localhost/sistema-hospedagem/index.php?menuop=consulta'; }, 0);</script>";
} else {
    $message = "ERRO AO EXECUTAR A CONSULTA: " . mysqli_error($conexao);
}





mysqli_close($conexao);

?>
