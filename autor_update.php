<?php
    require_once "controladores/autorController.php";
    $autor = new AutorController();
    $resultado = $autor->buscarAutor();
    //var_dump($resultado);
    //var_dump($resultado->fetch_assoc());
?>
<link href = "css/bootstrap.css" rel ="stylesheet">
<div class="col-sm-6">
    <h2 >Datos de autor </h2>
    <form id="myForm" method="POST">
    <input type="hidden" name="id_modificar" value="<?php echo $resultado["id_autor"]; ?>"
    <table class="input-group">
    <!-- <div class="input-group"> -->
        <label>Apellido del autor:</label>
        <input type="text" class="form-control" name="apelAutor" placeholder="Apellido" value="<?php echo $resultado["apellido"];?>">
    <!-- </div> -->
    <br>
    <!-- <div class="input-group"> -->
        <label>Nombre del autor:</label>
        <input type="text" class="form-control" name="nomAutor" placeholder="Nombre"  value="<?php echo $resultado["nombre"];?>">
    <!-- </div> -->
    </table>
    <br>
    <div class="btn-group">
        <!-- Enviar El Formulario -->
        <button class="btn btn-success" type="submit" >Guardar</button>
    </div>
</form>
</div>

<?php
    
    $autor = $autor->actualizarAutor();
    
?>