<?php
include "inc-cabecalho.php";
?>
    <main>
        <section class=" d-flex flex-column align-items-center">
        <div class="card p-4">
        <div class=" card-body">
        <form method="post" action="salvar.php">
            Nome: <input name="nome" class=" form-control"><br>
            Quantidade: <input type="number" name="qtd" class=" form-control"><br>
            Preço: <input name="preco" class=" form-control" required><br>
            <button type="submit" class=" btn btn-primary">Salvar</button>
            <button type="reset" class=" btn btn-dark">Limpar</button>
        </form>
        </div>
        </div>
        </section>
    </main>
   <?php
   include "inc-rodape.php"
   ?>