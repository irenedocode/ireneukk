<?php
include "../koneksi.php";
    if (isset($_POST['add'])){

        $itemName = $_POST['ItemName'];
        $itemStock = $_POST['ItemStock'];
        $itemDetail = $_POST['ItemDetail'];
        $handler = $_POST['Handler'];
        
            $sql = mysqli_query($koneksi, "INSERT INTO daftar_barang (ItemName, ItemStock, ItemDetail, Handler) VALUES ('$itemName', '$itemStock', '$itemDetail', '$handler')");

            if ($sql === TRUE) {
                echo "
            <script>
            alert('New Record Created Succesfully!');
            window.location.href = 'index.php';
            </script>";
            } else {
                echo "
            <script>
            alert('Error: ' . $sql . '<br>' . $koneksi->error . ');
            window.location.href = 'index.php';
            </script>";
            }

            $koneksi->close();
        } else {
            echo "
            <script>
            alert('Please fill out all the fields.');
            window.location.href = '.php';
            </script>";
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
    <?php
        include "../elements/sidebar.php";
    ?>
<body>
    <section class="container">
        <div class="login-area">
            <h1> Add Item </h1>
            <form action="" method="post">
                <div class="form-group">
                    <input name="ItemName" type="text" placeholder="Item Name" required>
                </div>
            <input name="ItemStock" type="text" placeholder="Item Stock" required> <br>
            <input name="ItemDetail" type="textbox" placeholder="Item Detail" required> <br>
            <input name="Handler" type="text" placeholder="Handler" required> <br>
            
            <button name="add" type="submit">Add</button>
            </form>
        </div>
    </section>
</body>
<footer>
<?php
include "../elements/footer.php";
?>
</footer>
</html>