<?php
include '../conexion.php';
$id = $_POST['id'];



if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])){
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $file_name_parts = explode('.', $_FILES['image']['name']);
    $file_ext = strtolower(end($file_name_parts));
    $new_name = time();
    move_uploaded_file($image_tmp_name, "../../db-image/$new_name.$file_ext");
    $image = "$new_name.$file_ext";
}else{
    $query = mysqli_query($conexiune, "SELECT `image` FROM articole WHERE id = '{$id}'");
    $result = mysqli_fetch_assoc($query);
    $image = $result['image'];
}

$title = $_POST['titlu'];
$descriere = $_POST['descriere'];

mysqli_query($conexiune, "UPDATE articole SET titlu = '{$title}', image = '{$image}', descriere = '{$descriere}' WHERE id = '{$id}'");

header('Location: crud.php');

?>





header("Location:crud.php");
?>