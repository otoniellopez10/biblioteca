<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: views/login.php');
    die();
} else {
    header('Location: views/dashboard.php');
    die();
}
?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css del sitio -->
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>Index</title>
</head>

<body>

</body>

</html>