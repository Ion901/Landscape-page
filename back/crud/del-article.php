<?php
include ("../conexion.php");
$id = $_GET['id'];
$qr = mysqli_query($conexiune,"DELETE FROM `articole` WHERE id=$id");

if($qr){
    echo "<script>alert(\"Row Deleted\");</script>";
    header("Location:crud.php");
}else{
    echo "<script>alert(\"Row is not Deleted\");</script>";
}

?>