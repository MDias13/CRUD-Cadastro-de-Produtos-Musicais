<?php
    session_start();
    if(isset($_SESSION['mensagem'])){
        echo  $_SESSION['mensagem'];
    }
    session_unset();
    include_once 'nav.php';
    include_once 'db_conect.php';
?>

<h4 class="lista">Lista de Teclados</h4>
<hr>
<div class="tabela">
    <table>
    <thead> 
        <tr>
            <th class="tamanho">Nome:</th>
            <th class="tamanho">Fabricante:</th>
            <th class="tamanho">Peso Kg:</th>
            <th class="tamanho">Valor R$:</th>
        </tr>
    </thead> 
    <tbody class="itens">
        <?php 
        $sql = "SELECT * FROM teclados";
        $resultado = mysqli_query($connect, $sql);
        while ($dados = mysqli_fetch_array($resultado)):
        ?>
        <tr>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['fabricante']; ?></td>
            <td><?php echo $dados['peso']; ?></td>
            <td><?php echo $dados['valor']; ?></td>
            <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="botaoedit">Editar</a></td>
            <td><a href="delete.php?id=<?php echo $dados['id']; ?>" class="botaoremove">Remover</a></td>
            
        </tr>
        <?php endwhile; ?>
    </tbody>  
    </table>
    <br>
</div>
<a href="adicionar.php" class="botaoadd">Adicionar teclado</a>





<?php
    include_once 'footer.php';
?>    