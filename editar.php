<?php
    include_once 'nav.php';
    include_once 'db_conect.php';
    if(isset($_GET['id'])){
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM teclados WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
}
?>

<h4 class="lista">Editar Teclado</h4>
<hr>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
    <div class="es">
    <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
    <label for="nome">Nome</label>
    </div>
    
    <div class="es">
    <input type="text" name="fabricante" id="fabricante" value="<?php echo $dados['fabricante'] ?>">
    <label for="fabricante">Fabricante</label>
    </div>
    
    <div class="es">
    <input type="text" name="peso" id="peso" value=" <?php echo $dados['peso'] ?>" >
    <label for="peso">Peso</label>
    </div>
    
    <div class="es">
    <input type="text" name="valor" id="valor" value=" <?php echo $dados['valor'] ?>" >
    <label for="valor">Valor</label>
    </div>
    <button type="submit" name="btn-update"  class="botaoedit1"> Atualizar</button>
</form>
<button class="botaoedit2"><a href="cadastro.php" class="botaoedit2">Lista de Teclados</a></button>





<?php
    include_once 'footer.php';
?>    