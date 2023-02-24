<?php
include("config.php");
$id = $_GET['id'];


$result = mysqli_query($mysqli, "DELETE FROM tbl_creditos WHERE id_cre=$id");

header("Location:indexCredito.php");
?>
