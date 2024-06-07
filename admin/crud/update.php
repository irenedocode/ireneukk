<?php

$koneksi = mysqli_connect("localhost","root","","user");

if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $itemName = $_POST['itemName'];
    $itemStock = $_POST['itemStock'];
    $itemDetail = $_POST['itemDetail'];
    $handler = $_POST['handler'];

    $query = "UPDATE daftar_barang 
              SET ItemName = '$itemName', ItemStock = '$itemStock', ItemDetail = '$itemDetail', Handler = '$handler' 
              WHERE ItemNumber = '$id'";
    
    if(mysqli_query($koneksi, $query)) {
        echo "
        <script>
        alert('Item updated successfully');
        window.location.href = 'admin_item_list.php';
        </script>";
    } else {
        echo "
        <script>
        alert('Error updating item');
        window.location.href = 'admin_item_list.php';
        </script>";
    }
}
?>
