
<h3>INSERIR CLIENTE</h3>

<?php

$conexao = mysqli_connect("localhost", "root", "", "dbsistema");

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$cpf = mysqli_real_escape_string($conexao, $_POST["Cpf"]);
$nome = mysqli_real_escape_string($conexao, $_POST["Nome"]);
$email = mysqli_real_escape_string($conexao, $_POST["Email"]);
$telefone = mysqli_real_escape_string($conexao, $_POST["Telefone"]);
$endereco = mysqli_real_escape_string($conexao, $_POST["Endereco"]);
$dataNascimento = mysqli_real_escape_string($conexao, $_POST["DataNascimento"]);
$numero = mysqli_real_escape_string($conexao, $_POST["Numero"]);
$bairro = mysqli_real_escape_string($conexao, $_POST["Bairro"]);
$cidade = mysqli_real_escape_string($conexao, $_POST["Cidade"]);
$estado = mysqli_real_escape_string($conexao, $_POST["Estado"]);

// SQL para inserção de dados
$sql = "INSERT INTO tbclientes (
    cpf, 
    nome, 
    email, 
    telefone, 
    endereco, 
    dataNascimento,
    numero,
    bairro,
    cidade,
    estado
) VALUES (
    '{$cpf}',
    '{$nome}',
    '{$email}',
    '{$telefone}',
    '{$endereco}',
    '{$dataNascimento}',
    '{$numero}',
    '{$bairro}',
    '{$cidade}',
    '{$estado}'
)";


if (mysqli_query($conexao, $sql)) {
    echo "CLIENTE CADASTRADO COM SUCESSO!";
} else {
    echo "ERRO AO EXECUTAR A CONSULTA: " . mysqli_error($conexao);
}


mysqli_close($conexao);

?>
