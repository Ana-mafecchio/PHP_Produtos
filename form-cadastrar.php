<?php
include "inc-cabecalho.php";
?>
    <main>
        <form method="post" action="salvar.php">
            Nome: <input name="nome"><br>
            Quantidade: <input type="number" name="qtd"><br>
            Preço: <input name="preco" required><br>
            <button type="submit">Salvar</button>
            <button type="reset">Limpar</button>
        </form>
    </main>
   <?php
   include "inc-rodape.php"
   ?>