<header>
    <h3>Quartos</h3>
</header>
<div class="bnt-contender">
    <a href="index.php?menuop=cadastro-quartos" class="bnt">Cadastrar Quarto</a>
</div>
<table border="1">
    <thead>
        <tr>
            <th>N° QUARTO</th>
            <th>TIPO</th>
            <th>CAPACIDADE</th>
            <th>PREÇO</th>
            <th>STATUS</th>
            <th>OCUPANTE</th>
            <th>CPF/CNPJ</th>
            <th>DATA DO CADASTRO</th>

        </tr>
    </thead>
    <tbody>
    <?php

$sql = "SELECT * FROM tbquartos";
$rs = mysqli_query($conexao, $sql) or die("ERRO DE CONSULTA" . mysqli_error($conexao));
while ($quartos = mysqli_fetch_assoc($rs)){

 ?>   

<tr>
    <td><?= $quartos ["codigo"] ?></td>
    <td><?= $quartos ["tipo"] ?></td>
    <td><?= $quartos ["capacidade"] ?></td>
    <td><?= $quartos ["preco"] ?></td>
    <td><?= $quartos ["status"] ?></td>
    <td><?= $quartos ["ocupante"] ?></td>
    <td><?= $quartos ["dados"] ?></td>
    <td><?= $quartos ["datacadastro"] ?></td>
</tr>
    <?php
    }
    ?>
    </tbody>
</table>
