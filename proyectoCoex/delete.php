<?php
include("config.php");
$id = $_GET['id'];


$result = mysqli_query($mysqli, "DELETE FROM tbl_usuarios WHERE id_usu=$id");

header("Location:index.php");
?>

