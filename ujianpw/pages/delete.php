<?php
include 'dbconnect.php';

$id = $_GET['id'];

$sql = "DELETE FROM mahasiswa WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data mahasiswa telah terhapus.";
} else {
    echo "Error: ";
}

$conn->close();
?>
