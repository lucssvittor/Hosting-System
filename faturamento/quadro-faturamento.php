<section class="quadro-faturamento">
  <h4>Faturamento</h4>
  <p>Gráficos e relatórios de faturamento</p>
  <canvas id="graficoFaturamento" width="400" height="200"></canvas>
</section>
<section class="quadro-faturamento">
  <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Código Quarto</th>
        <th>Tipo Quarto</th>
        <th>Preço</th>
        <th>Data Início</th>
        <th>Data Fim</th>
        <th>Valor Total</th>
        <th>Status de Pagamento</th>
        <th>Data de Pagamento</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM tbfaturamento";
      $rs = mysqli_query($conexao, $sql) or die("Erro ao consultar faturamento" . mysqli_error($conexao));
      while ($faturamento = mysqli_fetch_assoc($rs)) {
      ?>
        <tr>
          <td><?= $faturamento["id"] ?></td>
          <td><?= $faturamento["codigo_quarto"] ?></td>
          <td><?= $faturamento["tipo_quarto"] ?></td>
          <td><?= $faturamento["preco"] ?></td>
          <td><?= $faturamento["data_inicio"] ?></td>
          <td><?= $faturamento["data_fim"] ?></td>
          <td><?= $faturamento["valor_total"] ?></td>
          <td><?= $faturamento["status_pagamento"] ?></td>
          <td><?= $faturamento["data_pagamento"] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</section>
