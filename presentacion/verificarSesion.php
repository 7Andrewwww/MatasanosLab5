<?php
session_start();  
if (!isset($_SESSION['id'])) {
    header("Location: ?pid=" . base64_encode("presentacion/autenticar.php"));
    exit();
}
?>
