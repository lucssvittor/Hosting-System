<h3>INSERIR COMPRA</h3>

<?php

$conexao = mysqli_connect("localhost", "root", "", "dbsistema");

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$descricao = mysqli_real_escape_string($conexao, $_POST["Descricao"]);
$quantidade = mysqli_real_escape_string($conexao, $_POST["Quantidade"]);
$preco_total = mysqli_real_escape_string($conexao, $_POST["PrecoTotal"]);
$fornecedor = mysqli_real_escape_string($conexao, $_POST["Fornecedor"]);
$data_compra = mysqli_real_escape_string($conexao, $_POST["DataCompra"]);
$categoria = mysqli_real_escape_string($conexao, $_POST["Categoria"]);

// SQL para inserção de dados
$sql = "INSERT INTO tbcompras (
    descricao, 
    quantidade, 
    preco_total, 
    fornecedor, 
    data_compra, 
    categoria
) VALUES (
    '{$descricao}', 
    '{$quantidade}', 
    '{$preco_total}', 
    '{$fornecedor}', 
    '{$data_compra}', 
    '{$categoria}'
)";

if (mysqli_query($conexao, $sql)) {
    echo "COMPRA REGISTRADA COM SUCESSO!";
} else {
    echo "ERRO AO EXECUTAR A CONSULTA: " . mysqli_error($conexao);
}

mysqli_close($conexao);

?>
