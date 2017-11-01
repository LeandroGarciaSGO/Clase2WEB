<?php
    require_once "controladores/autorController.php";
    $autor = new AutorController();
    $resultado = $autor->ListarAutores();
    //var_dump($resultado->fetch_assoc());
?>
<link href = "css/bootstrap.css" rel ="stylesheet">
<div>
    <div class="col-sm-6">
    <div class="container">
    <h2>Listado de Autores</h2> 
    <table class = "table table-striped">
        <thead>
            <tr>
                <th>Apellido</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($array = $resultado ->fetch_assoc()){?>
                    <tr>
                        <th><?php echo $array["apellido"]; ?></th>
                        <th><?php echo $array["nombre"];?></th>
                        <form method = "POST">
                            <td>
                                <input type ="hidden" name ="id_a" id = "id_a" value = "<?php echo $array["id_autor"] ?>">
                                <input type ="button" value = "Modificar" class="btn btn-warning" onclick="this.form.action='autor_update.php'; this.form.submit() ">
                                <input type ="button" value ="Eliminar" class="btn btn-darger" onclick="this.form.submit()">
                            </td>
                            </form>
                    </tr>

                    <?php echo "</br>";?>
                    <?php  }
            ?>
            <!-- <tr>
                <th>Gomez</th>
                <th>Ana</th>
            </tr>
            <tr>
                <th>Gomez</th>
                <th>Ana</th>
            </tr>-->
        </tbody>
        </table>
</div>

</div>

<?php
    
    $resultado = $autor->eliminar();
?>