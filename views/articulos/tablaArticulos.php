<?php
    require_once "../../clases/conexion.php";
    $c= new conectar();
    $conexion=$c->conexion();
    $sql="SELECT prod.nombre,
                prod.descripcion,
                prod.cantidad,
                prod.precio,
                img.ruta,
                cat.nombreCategoria,
                prod.id_producto
          from producto as prod 
          inner join imagenes as img
          on prod.id_imagen=img.id_imagen
          inner join categorias as cat
          on prod.id_categoria=cat.id_categoria";
    $result=mysqli_query($conexion,$sql);
?>
<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
<caption><label>Articulos</label></caption>
    <tr>
        <td>Nombre</td>
        <td>Descripcion</td>
        <td>Cantidad</td>
        <td>Precio</td>
        <td>Imagen</td>
        <td>Categoria</td>
        <td>Editar</td>
        <td>Eliminar</td>
    </tr>

    <?php while($ver=mysqli_fetch_row($result)): ?>

    <tr>
        <td><?php echo $ver[0]; ?></td>
        <td><?php echo $ver[1]; ?></td>
        <td><?php echo $ver[2]; ?></td>
        <td><?php echo $ver[3]; ?></td>
        <td>
            <?php
            $imgVer=explode("/",$ver[4]);
            $imgruta=$imgVer[1]."/".$imgVer[2]."/".$imgVer[3]; 
            ?>
            <img width="90" height="90" src="<?php echo $imgruta ?>">
        </td>
        <td><?php echo $ver[5]; ?></td>
        <td>
            <span data-toggle="modal" data-target="#abremodalUpdateArticulo" class="btn btn-warning btn-xs" 
                  onclick="agregaDatosArticulo('<?php echo $ver[6] ?>')">
                <span class="glyphicon glyphicon-pencil"></span>
            </span>
        </td>
        <td>
            <span class="btn btn-danger btn-xs" onclick="eliminaArticulo('<?php echo $ver[6] ?>')">
                <span class="glyphicon glyphicon-remove"></span>
            </span>
        </td>
    </tr>
<?php endwhile; ?>
</table>