<?php
require '../../app/config.php';

if (isset($_GET["id"])) {
    $id_transaksi = $_GET["id"];
    
    // Delete data from the database
    $sql = "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'";
    
    if ($conn->query($sql) === true) {
        header("Location: transaksi.php"); // Redirect to the page after deletion
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

?>