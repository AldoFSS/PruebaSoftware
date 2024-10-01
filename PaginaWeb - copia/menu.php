<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/estilos.css">
   
    <title>Document</title>
</head>
<body>
<?php include("includes/navbar.php");?>
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<br><br><br><h2>Especial de Caféliz</h2>
						<p>Crepas</p>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <?php 
                        include("BD/conexion.php");
                        //indicamos el nombre de la base datos
                        $datab = "cafeteria";
                        //indicamos selecionar a la base datos
                        $db = mysqli_select_db($connection,$datab);
                        $consulta = "SELECT * FROM menucategoria";
                        $resultado = mysqli_query($connection,$consulta);
                        while($fila = mysqli_fetch_array($resultado)){
                            ?>
						    <a class="nav-link" id="v-pills-profile-tab"  href='menu.php?categoriaid=<?php echo $fila['id']?>' role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <?php 
                            echo $fila['Categoria'];
                            ?>
                            </a>
                        <?php }?>
					</div>
				</div>
                <div class="col-9" id="lista-productos">
                    <div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
                                <!-----------------------------------------INICIO DE DESAYUNOS------------------------------------------>
                                <?php
if(isset($_GET['categoriaid'])) 
{
    $categoria_id = $_GET['categoriaid'];
    include("./BD/conexion.php");
    //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
    //indicamos el nombre de la base datos
    $datab = "cafeteria";
    //indicamos selecionar a la base datos
    $db = mysqli_select_db($connection,$datab);
    $consulta = "SELECT * FROM menuproductos as MP
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
                        <a class="agregar-carrito" href="#" data-id="<?php echo $fila['id']?>">Comprar</a>
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
    $consulta = "SELECT * FROM menuproductos as MP 
    WHERE MP.id_categoria = $categoria_id";
    $resultado = mysqli_query($connection,$consulta);    
    if(mysqli_num_rows($resultado)>0)
    {
        while($fila = mysqli_fetch_array ($resultado)){
            ?>
            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                    <img src="<?php echo substr ($fila['Imagen'], 1)?>" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4 class="my-0 font-weight-bold"><?php echo $fila['Product_Nombre']?></h4>
                        <p><?php echo $fila['Descripcion']?> </p>
                        <h5 class="card-title pricing-card-title precio">$<span class=""><?php echo $fila['Costo']?></span></h5>
                        <a class="agregar-carrito" href="#" data-id="<?php echo $fila['id']?>">Comprar</a>
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

                            </div>
                        </div>
                        <!-----------------------------------------FIN DE DESAYUNOS------------------------------------------>
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------------------------FIN DE POSTRES------------------------------------------>      
    </div>
    <?php include("includes/footer.html");?>
</body>
</html>