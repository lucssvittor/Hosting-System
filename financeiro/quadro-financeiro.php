<section class="quadro-financeiro">
  <h4>Financeiro</h4>
  <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>DESCRIÇÃO</th>
        <th>TIPO</th>
        <th>VALOR</th>
        <th>DATA</th>
        <th>CATEGORIA</th>
        <th>OBS</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM tbfinanceiro";
      $rs = mysqli_query($conexao, $sql) or die("Erro ao consultar financeiro" . mysqli_error($conexao));
      while ($financeiro = mysqli_fetch_assoc($rs)) {
      ?>
        <tr>
          <td><?= $financeiro["id"] ?></td>
          <td><?= $financeiro["descricao"] ?></td>
          <td><?= $financeiro["tipo"] ?></td>
          <td><?= $financeiro["valor"] ?></td>
          <td><?= $financeiro["data"] ?></td>
          <td><?= $financeiro["categoria"] ?></td>
          <td><?= $financeiro["observacao"] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</section>
