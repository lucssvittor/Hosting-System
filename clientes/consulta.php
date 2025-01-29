<header>
    <h3>CONSULTA</h3>
</header>
<div class="bnt-contender">
    <a href="index.php?menuop=cadastro-clientes" class="bnt">Cadastrar Cliente</a>
</div>
<table border="1">
    <thead>
        <tr>
            <th>CODIGO</th>
            <th>CPF</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>DATA DE NASCIMENTO</th>
            <th>TELEFONE</th>
            <th>ENDEREÇO</th>
            <th>N°</th>
            <th>BAIRRO</th>
            <th>CIDADE</th>
            <th>ESTADO</th>
            <th>EDITAR</th>

        </tr>
    </thead>
    <tbody>
        <?php

        $sql = "SELECT
                codigo, cpf, numero,
                UPPER(nome) AS nome,
                UPPER(endereco) AS endereco,
                UPPER(bairro) AS bairro,
                UPPER(cidade) AS cidade,
                UPPER(estado) AS estado,
                LOWER(email) AS email,
                DATE_FORMAT(datanascimento, '%d/%m/%Y') AS datanascimento,
                CONCAT('(', SUBSTRING(telefone, 1, 2), ') ', SUBSTRING(telefone, 3, 5), '-', SUBSTRING(telefone, 8, 4)) AS telefone
                FROM tbclientes;";
        $rs = mysqli_query($conexao, $sql) or die("ERRO DE CONSULTA" . mysqli_error($conexao));
        while ($clientes = mysqli_fetch_assoc($rs)){

         ?>   

        <tr>
            <td><?= $clientes ["codigo"] ?></td>
            <td><?= $clientes ["cpf"] ?></td>
            <td><?= $clientes ["nome"] ?></td>
            <td><?= $clientes ["email"] ?></td>
            <td><?= $clientes ["datanascimento"] ?></td>
            <td><?= $clientes ["telefone"] ?></td>
            <td><?= $clientes ["endereco"] ?></td>
            <td><?= $clientes ["numero"] ?></td>
            <td><?= $clientes ["bairro"] ?></td>
            <td><?= $clientes ["cidade"] ?></td>
            <td><?= $clientes ["estado"] ?></td>
            <td><a href="index.php?menuop=editar-clientes&codigo=<?=$clientes["codigo"] ?>">EDITAR </a>
                <a href="index.php?menuop=apagar-cliente&codigo">APAGAR</a>
            </td>
        </tr>
            <?php
            }
            ?>

    </tbody>
</table>
