<?php
    include_once 'nav.php';
?>

<h4 class="lista">Adicionar um Teclado</h4>
<hr>

<form action="create.php" method="POST">
    <div class="es">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    
    </div>
    
    <div class="es">
    <label for="fabricante">Fabricante</label>
    <input type="text" name="fabricante" id="fabricante">
    
    </div>
    
    <div class="es">
    <label for="peso">Peso</label>
    <input type="text" name="peso" id="peso">
    
    </div>
    
    <div class="es">
    <label for="valor">Valor</label>
    <input type="text" name="valor" id="valor">
    
    </div>
    <button type="submit" name="btn-cadastrar"  class="botaoedit1"> Cadastrar</button>
   <button class="botaoedit2"><a href="cadastro.php" class="botaoedit2">Lista de Teclados</a></button> 
</form>






<?php
    include_once 'footer.php';
?>    