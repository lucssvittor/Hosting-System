<section class="quadro-permissoes">
  <h4>Permissões</h4>
  <p>Gerencie os níveis de acesso:</p>
  <form action="index.php?menuop=gerenciar-permissoes" method="post">
    <label for="usuario">Usuário:</label>
    <input type="text" id="usuario" name="usuario">
    <label for="nivel">Nível:</label>
    <select id="nivel" name="nivel">
      <option value="1">Administrador</option>
      <option value="2">Operador</option>
      <option value="3">Visualizador</option>
    </select>
    <button type="submit">Salvar</button>
  </form>
</section>