<?php

$db_host = "localhost";
$db_name = "bloggin";
$db_user = "root";
$db_password = "";
$db_table = "posts";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (mysqli_connect_errno()) {
    echo "error base de datos <br>";
    exit();
}
// $query = "INSERT INTO $db_table () ";

// $result = mysqli_query($conn, $query);

// $dato = mysqli_fetch_row($result);

// mysqli_close($conn);
?>
