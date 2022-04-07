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
    <link href="./assets/libraries/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/libraries/icons-1.8.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- css del sitio -->
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>Login</title>
</head>

<body>

    <main class="d-flex justify-content-center align-items-center">
        <form class="p-5 pt-3 d-flex flex-column">
            <p class="text-center text-danger" style="font-size: 6rem;">
                <i class="bi bi-shield-lock"></i>
            </p>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputEmail"><i class="bi bi-envelope-fill"></i></span>
                <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="inputEmail">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputPassword"><i class="bi bi-key-fill"></i></span>
                <input type="password" class="form-control" placeholder="Contraseña" aria-label="Password" aria-describedby="inputPassword">
            </div>
            <button type="submit" class="btn btn-danger d-block mt-3">Ingresar</button>
        </form>
    </main>

    <!-- importar Jquery -->
    <script src="./assets/libraries/jquery-3.6.0.min.js"></script>

    <!-- importar SweetAlert -->
    <script src="./assets/libraries/sweetalert2.all.min.js"></script>

    <!-- importar Bootstrap Bundle with Popper -->
    <script src="./assets/libraries/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>