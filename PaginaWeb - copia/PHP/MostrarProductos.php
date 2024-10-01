<div class="table-responsive">
    <table class="table table-hover" id="table_empleados">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Producto</th>
                <th scope="col">Costo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Categoria</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('./BD/conexion.php');
            
            $consulta = "SELECT * FROM menuproductos inner join menucategoria
            on id = ID_Cat";
            $resultado = mysqli_query($connection,$consulta);

            while($fila = mysqli_fetch_array($resultado)){
            ?>

           
                <th scope='row'><?php echo $fila['id'] ?></th>
                <td><?php echo $fila['Product_Nombre'] ?></td>
                <td><?php echo $fila['Costo'] ?></td>
                <td><?php echo $fila['Descripcion'] ?></td>
                <td><?php echo $fila['Categoria'] ?></td>
                <td> <img class="rounded-circle" src="<?php echo substr ($fila['Imagen'], 1)?>" class="img-fluid" width="50" height="50" ></td>
                <td>
                    <a title="Ver detalles del empleado" href="#" onclick="verDetallesEmpleado(<?php echo $fila['id']; ?>)" class="btn btn-success">
                        <i class="bi bi-binoculars"></i>
                    </a>
                    <a title="Editar datos del empleado" href="#" onclick="editarEmpleado(<?php echo $fila['id']; ?>)" class="btn btn-warning">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a title="Eliminar datos del empleado" href="#" onclick="eliminarEmpleado(<?php echo $fila['id']; ?>, '<?php echo $fila['Imagen']; ?>')" class="btn btn-danger">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>

            </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
    <?php include('modales/modalEditar.php') ?>
</div>