
<?php
if(isset($_GET['categoriaid'])) 
{
    $categoria_id = $_GET['categoriaid'];
    include("../BD/conexion.php");
    //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
    //indicamos el nombre de la base datos
    $datab = "cafeteria";
    //indicamos selecionar a la base datos
    $db = mysqli_select_db($connection,$datab);
    $consulta = "SELECT * FROM menuproductos as MP-----
    WHERE id_categoria = $categoria_id";

    $resultado = mysqli_query($connection,$consulta);    
    if(mysqli_num_rows($resultado)>0)
    {
        while($fila = mysqli_fetch_array ($resultado)){
            ?>
            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                    
                    <img src="<?php echo substr ($fila['imagen'], 1)?>" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4 class="my-0 font-weight-bold"><?php echo $fila['Product_Nombre']?></h4>
                        <p><?php echo $fila['Descripcion']?> </p>
                        <h5 class="card-title pricing-card-title precio">$<span class=""><?php echo $fila['Costo']?></span></h5>
                        <a href='JS/addCart.php?id=<?php echo $fila['id']?>' class="add-to-cart"
                        data-id="<?php echo $fila['id']?>">Comprar</a>
                    </div>
                </div>
            </div>
            <?php
        }
    }else
    {
        echo "<p>No se encontarron Productos para esta categoria</p>";
    }
    mysqli_free_result($resultado);
    mysqli_close($connection);
}else
{
    $categoria_id = 2;
    include("BD/conexion.php");
    //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
    //indicamos el nombre de la base datos
    $datab = "cafeteria";
    //indicamos selecionar a la base datos
    $db = mysqli_select_db($connection,$datab);
    $consulta = "SELECT * FROM menuproductos as MP INNER JOIN menucategoria as MC
    on MP.id_categoria = MC.id
    WHERE MP.id_categoria = $categoria_id";
    $resultado = mysqli_query($connection,$consulta);    
    if(mysqli_num_rows($resultado)>0)
    {
        while($fila = mysqli_fetch_array ($resultado)){
            ?>
            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                    <img src="./PRODUCTOS/guajolote.jpg" class="img-fluid" alt="Image">
                    <!--<img src="<?php echo substr ($fila['imagen'], 1)?>" class="img-fluid" alt="Image">-->
                    <div class="why-text">
                        <h4 class="my-0 font-weight-bold"><?php echo $fila['Product_Nombre']?></h4>
                        <p><?php echo $fila['Descripcion']?> </p>
                        <h5 class="card-title pricing-card-title precio">$<span class=""><?php echo $fila['Costo']?></span></h5>
                        <button type="submit" class="btn btn-primary" value="addtoCart"><a href='PHP/addCart.php?id=<?php echo $fila['id']?>'>Comprar</a></button>
                    </div>
                </div>
            </div>
            <?php
        }
    }else
    {
        echo "<p>No se encontarron Productos para esta categoria</p>";
    }
    mysqli_free_result($resultado);
    mysqli_close($connection);
}


?>
