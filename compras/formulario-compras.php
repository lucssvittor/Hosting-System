<form action="index.php?menuop=add-compras" method="POST">
    <label for="Descricao">Descrição:</label>
    <input type="text" id="Descricao" name="Descricao" required><br><br>

    <label for="Quantidade">Quantidade:</label>
    <input type="number" id="Quantidade" name="Quantidade" required><br><br>

    <label for="PrecoTotal">Preço Total:</label>
    <input type="text" id="PrecoTotal" name="PrecoTotal" required><br><br>

    <label for="Fornecedor">Fornecedor:</label>
    <input type="text" id="Fornecedor" name="Fornecedor" required><br><br>

    <label for="DataCompra">Data da Compra:</label>
    <input type="date" id="DataCompra" name="DataCompra" required><br><br>

    <label for="Categoria">Categoria:</label>
    <select id="Categoria" name="Categoria" required>
        <option value="Higiene">Higiene</option>
        <option value="Alimentos">Alimentos</option>
        <option value="Limpeza">Limpeza</option>
        <option value="Roupa de Cama e Banho">Roupa de Cama e Banho</option>
    </select><br><br>

    <button type="submit">Cadastrar Compra</button>
</form>
