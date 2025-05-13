<?php
if (!isset($_SESSION["id"]) || !isset($_SESSION["rol"])) {
    header("Location: index.php");
    exit();
}
$pagina = basename($_SERVER['PHP_SELF']);

if ($pagina == 'sesionAdmin.php' && $_SESSION["rol"] != 'admin') {
    echo "<div class='alert alert-danger mt-3'>No tiene permisos para acceder a esta sección.</div>";
    exit();
}

if ($pagina == 'sesionMedico.php' && $_SESSION["rol"] != 'medico') {
    echo "<div class='alert alert-danger mt-3'>No tiene permisos para acceder a esta sección.</div>";
    exit();
}
?>

