<?php
session_start();

include "../koneksi.php";

if (empty($_SESSION['username']) || !in_array($_SESSION['role'], ['Admin'])) {
    echo "
        <script>
        alert('You are not authorized to access this page.');
        window.location.href = '../index.php';
        </script>
        ";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Item List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    <?php
        include "../elements/sidebar.php";
    ?>
<body>
    <div class="containers">
        <div class="button-add">
            <a href="add.php">Add Item</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Item Stock</th>
                    <th>Item Detail</th>
                    <th>Handler</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                $query = "SELECT * FROM daftar_barang";
                $result = mysqli_query($koneksi, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <tr>
                        <td>{$row['ItemNumber']}</td>
                        <td>{$row['ItemName']}</td>
                        <td>{$row['ItemStock']}</td>
                        <td>{$row['ItemDetail']}</td>
                        <td>{$row['Handler']}</td>
                        <td>
                            <a class='editdelete-btn' href='edit.php?id={$row['ItemNumber']}'>Edit</a> |
                            <a class='editdelete-btn' href='crud/delete.php?id={$row['ItemNumber']}'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<?php
include "../elements/footer.php";
?>
</html>
