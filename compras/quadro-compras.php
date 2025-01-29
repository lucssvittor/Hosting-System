<section class="quadro-compras">
  <h4>Gerenciamento de Compras</h4>
  <a href="index.php?menuop=formulario-compras" class="bnt">NOVA COMPRA</a>
  <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th>Preço Total</th>
        <th>Fornecedor</th>
        <th>Data de Compra</th>
        <th>Categoria</th>
        <th>Última Atualização</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM tbcompras";
      $rs = mysqli_query($conexao, $sql) or die("Erro ao consultar compras: " . mysqli_error($conexao));
      while ($compra = mysqli_fetch_assoc($rs)) {
      ?>
        <tr>
          <td><?= $compra["id"] ?></td>
          <td><?= $compra["descricao"] ?></td>
          <td><?= $compra["quantidade"] ?></td>
          <td><?= number_format($compra["preco_total"], 2, ',', '.') ?></td>
          <td><?= $compra["fornecedor"] ?></td>
          <td><?= $compra["data_compra"] ?></td>
          <td><?= $compra["categoria"] ?></td>
          <td><?= $compra["data_atualizacao"] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</section>
