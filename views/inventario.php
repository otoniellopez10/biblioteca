<?php
session_start();
if (!isset($_SESSION['email'])) {
    // header('Location: login.php');
    // die();
}
?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="../assets/libraries/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../assets/scss/custom.css" rel="stylesheet">
    <link href="../assets/libraries/icons-1.8.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="../assets/libraries/DataTables/datatables.min.css" rel="stylesheet">

    <!-- css del sitio -->
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <!-- <link rel="stylesheet" href="../assets/css/inventario.css"> -->
    <title></title>

    <style>
        .titulo {
            border-bottom: 3px solid #990000;
        }
    </style>
</head>

<body>

    <div class="d-flex align-items-stretch" id="contenedor__general">

        <?php include_once "menuAdministrador.php"; ?>

        <main>
            <div class="container-xxl px-5">
                <div class="py-4 px-0">
                    <div class="titulo">
                        <h4><i class="bi bi-inboxes-fill me-2 text-iujo float-end"></i> Inventario</h4>
                    </div>
                </div>

                <div class="mb-5">
                    <button type="button" id="btnAgregarLibro" class="btn btn-primary w-100">Agregar un nuevo libro</button>
                </div>

                <div class="table-responsive">
                    <table id="tableLibros" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Cota</th>
                                <th>Nombre</th>
                                <th>Autor</th>
                                <th>Editorial</th>
                                <th>Año</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyLibros">
                        </tbody>
                    </table>
                </div>
            </div>




            <?php
            include_once "footer.php"
            ?>
        </main>
    </div>


    <!-- importar Jquery -->
    <script src="../assets/libraries/jquery-3.6.0.min.js"></script>

    <!-- importar SweetAlert -->
    <script src="../assets/libraries/sweetalert2.all.min.js"></script>

    <!-- importar Bootstrap Bundle with Popper -->
    <!-- <script src="../assets/libraries/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables -->
    <script src="../assets/libraries/DataTables/datatables.min.js"></script>

    <!-- Importar js de la pagina -->
    <script src="../assets/js/inventario.js"></script>
</body>

</html>