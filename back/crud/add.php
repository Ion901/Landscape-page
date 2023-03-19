<?php

include '../conexion.php';
$image_tmp_name = $_FILES['image']['tmp_name'];
$file_name_parts = explode('.', $_FILES['image']['name']);
$file_ext = strtolower(end($file_name_parts));
$new_name = time();
move_uploaded_file($image_tmp_name, "../../db-image/$new_name.$file_ext");
$image = $new_name.".".$file_ext;

$title = $_POST['titlu'];
$descriere = $_POST['descriere'];

mysqli_query($conexiune, "INSERT INTO articole (titlu, descriere, image) VALUES  ('{$title}', '{$descriere}', '{$image}')");

header('Location: crud.php');

?>