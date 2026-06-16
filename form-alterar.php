<?php
$id = $_GET['id'];

include "inc-conexao.php";
include "inc-cabecalho.php";

$nome = $qtd = $preco = "";
$sql ="select * from tb_produtos where id = $id";
$resultado = mysqli_query($conexao, $sql);

 while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $qtd = $linha['qtd'];
    $preco = $linha['preco'];
 }
?>

<main>
    <section class=" d-flex flex-column align-items-center">
        <div class="card p-4">
        <div class=" card-body">
    <h1>Produto # <?= $id ?> ?></h1>
    <form method="post" action="salvar-alteracao.php?id=<?= $id ?>">
    Nome: <input name="nome" value="<?= $nome ?>" class=" form-control"> <br>
    Quantidade: <input type="number" name="qtd" value="<?= $qtd ?>" class=" form-control"> <br>
    Preço: <input name="preco" value="<?= $preco ?>" class=" form-control"> <br>
    <button type="submit" class=" btn btn-primary">Salvar</button>
    </form>
    </div>
    </div>
    </section>
</main>

<?php
mysqli_close($conexao);
include "inc-rodape.php"
?>
