<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/d258707c8d.js" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>
<?php
include ("../conexion.php");
$sql=mysqli_query($conexiune, "SELECT * FROM `articole`");
?>
<form action="add-article.html" method="post">
    <button type="submit">Add Articol</button>
</form>
<?php
echo "<table class=\"tabel\" border=1 cellspacing=\"0\" cellpadding=\"3\">";
echo "<tr><td>Id</td><td>titlu</td><td>descriere</td><td>imagine</td><td>Action</td></tr>";

while ($row=mysqli_fetch_row($sql)) {
   $id = $row[0]; 
echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td> 
        &nbsp<a href=\"edit-article.php?id={$id}\"<i class=\"fas fa-edit\"></i></a>
            <a href=\"del-article.php?id={$id}\"<i class=\"fa-solid fa-trash\"></i></a>&nbsp
        </td>
        </tr>";
}
echo "</table>";