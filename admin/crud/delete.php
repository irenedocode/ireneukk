<?php

$koneksi = mysqli_connect("localhost","root","","user");

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM daftar_barang WHERE ItemNumber = '$id'";
    
    if(mysqli_query($koneksi, $query)) {
        echo "
        <script>
        alert('Item deleted successfully');
        window.location.href = '../admin/index.php';
        </script>";
    } else {
        echo "
        <script>
        alert('Error deleting item');
        window.location.href = '../admin/index.php';
        </script>";
    }
} else {
    echo "
    <script>
    alert('Invalid request');
    window.location.href = '../admin/index.php';
    </script>";
}
?>
