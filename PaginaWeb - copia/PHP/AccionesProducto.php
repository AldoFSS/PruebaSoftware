<?php 

function InsertarProducto()
{
    include('../BD/conexion.php');
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Recoger datos del formulario y evitar inyecciones SQL
        $nombre = $_POST['Product_nombre'];
        $descripcion = $_POST['Descripcion'];
        $costo = $_POST['Costo'];
        $categoria = $_POST['Categoria']; // ID de la categoría
        $foto='';
    
        if(isset($_FILES['ImgProduct'])&& $_FILES['ImgProduct']['error']== UPLOAD_ERR_OK)
        {
            $ImgNombre = $_FILES['ImgProduct']['name'];
            $ImgRuta = $_FILES['ImgProduct']['tmp_name'];
            $ImgExt = strtolower(pathinfo($ImgNombre,PATHINFO_EXTENSION));
            $extensionesPermitidas = ['jpg', 'jpeg', 'png'];
            if (in_array($ImgExt, $extensionesPermitidas))
            {
                $ImgDestino = '../PRODUCTOS/'.$nombre.'.'.$ImgExt;
                if(move_uploaded_file($ImgRuta,$ImgDestino))
                {
                    $ImgRuta = 'PRODUCTOS/'.$nombre.'.'.$ImgExt;
                }
            }
        }
        // Preparar la declaración SQL
        $query = "INSERT INTO menuproductos (Product_nombre, Descripcion, Costo,Imagen, id_categoria) VALUES ('$nombre', '$descripcion', '$costo','$ImgRuta', '$categoria')";
        $resultado= $connection->prepare($query);
        // Ejecutar la declaración
        if ($resultado->execute()) {
            echo "Producto Insertado";
        } else {
            echo "Error al Insertar: " . $resultado->error;
        }
        // Cerrar la declaración
        $resultado->close();
        } else {
            echo "Error en la preparación de la consulta: " . $connection->error;
        }
        // Cerrar la conexión
        $connection->close();
        header('location: ../listProductos.php');
}



?>
