<?php
include "../koneksi.php";

$row = []; // Initialize $row variable

if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $itemName = $_POST['itemName'];
    $itemStock = $_POST['ItemStock'];
    $itemDetail = $_POST['ItemDetail']; 
    $handler = $_POST['Handler']; 

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

    // Fetch item details from the database
    $query = "SELECT * FROM daftar_barang WHERE ItemNumber = '$id'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <link rel="stylesheet" href="css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include "../elements/sidebar.php";
    ?>
    <section class="container">
        <div class="login-area">
            <h1> Edit Item </h1>
            <form action="" method="post">
                <input type='hidden' name='id' value='<?php echo isset($row['ItemNumber']) ? $row['ItemNumber'] : ''; ?>'>
                <div class="form-group">
                    <input type='text' name='itemName' value='<?php echo isset($row['ItemName']) ? $row['ItemName'] : ''; ?>'>
                </div>
                <div class="form-group">
                    <input name="ItemStock" type="text" value='<?php echo isset($row['ItemStock']) ? $row['ItemStock'] : ''; ?>' required>
                </div>
                <div class="form-group">
                    <input name="ItemDetail" type="text" value='<?php echo isset($row['ItemDetail']) ? $row['ItemDetail'] : ''; ?>' required>
                </div>
                <div class="form-group">
                    <input name="Handler" type="text" value='<?php echo isset($row['Handler']) ? $row['Handler'] : ''; ?>' required>
                </div>
                <button name="edit" type="submit">Edit</button>
            </form>
        </div>
    </section>
    <?php
        include "../elements/footer.php";
    ?>
</body>
</html>
