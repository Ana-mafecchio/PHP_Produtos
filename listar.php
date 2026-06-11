<?php
include "inc-cabecalho.php";
include "inc-conexao.php";
?>
<main>
    <h1>Listagem de Produtos</h1>
    <a href="form-cadastrar.php">Novo Produto</a>
    <table border="2">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        <?php
        $sql = "select * from tb_produtos";
        $resultado = mysqli_query($conexao, $sql);
        while($linha = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
        echo "<td>{$linha['id']}";
        echo "<td>{$linha['nome']}";
        echo "<td>{$linha['qtd']}";
        echo "<td>{$linha['preco']}";
        echo "<td>
        <a href='deletar.php?id={$linha['id']}'>Deletar</a>
        <a href='visualizar.php?id={$linha['id']}'>Visualizar</a>
        </td>";
        echo "</tr>";
        }
        mysqli_close($conexao);
        ?>
    </table>
</main>