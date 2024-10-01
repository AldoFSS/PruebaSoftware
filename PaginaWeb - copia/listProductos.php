<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD de Empleados en PHP, MySQL utilizando MODALES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="CSS/home.css">


</head>

<body>

    <h1 class="text-center mt-5 mb-5 fw-bold">CRUD completo con PHP, MySQL y Bootstrap 5 usando Modales</h1>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <h1 class="text-center">
                    <span class="float-start">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#agregar">

                        </button>
                    <span class="float-end">
                        <a href="acciones/exportar.php" class="btn btn-success" title="Exportar a CSV" download="empleados.csv"><i class="bi bi-filetype-csv"></i></a>
                    </span>
                    <hr>
                </h1>
                <?php
                include("PHP/MostrarProductos.php"); ?>
            </div>
        </div>
    </div>

    <?php include('modales/modalAdd.php'); ?>


  
</body>

</html>
