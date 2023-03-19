<?php
include ("../conexion.php");
$id = $_GET['id'];
$sql = mysqli_query($conexiune, "SELECT * from `articole` WHERE id=$id");
while ($row=mysqli_fetch_row($sql)) {
    echo "<form enctype=\"multipart/form-data\" action=\"update.php\" method=\"post\">\n";
    echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\">\n<br>";
    echo "<label>Titlu:</label>\n";
    echo "<input type=\"text\" name=\"titlu\" value=\"$row[1]\">\n<br>";
    echo "<label>Descriere:</label>\n";
    echo "<textarea name=\"descriere\"  rows=\"4\" cols = \"50\" >$row[2]\n</textarea><br>";
    echo "<label>Imagine:</label>\n";
    echo "<input type=\"file\" name=\"image\">\n<br>";
    
    echo  "<button type=\"sumbit\">Modifica</button>\n\n";
    echo "</form>\n";
}




?>