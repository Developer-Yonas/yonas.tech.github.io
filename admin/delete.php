<?php
include_once 'config.php';
$sql = "DELETE FROM contact_form WHERE id=" . $_GET["id"] . "";
if (mysqli_query($conn, $sql)) {
    echo "Recorded";
    $location = "index.php";
    header("location: $location");
} else {
    echo "Error detected:" . mysql_error($conn);
}
mysqli_close($conn);
