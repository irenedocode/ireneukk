<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $masukkan = mysqli_query($koneksi, "INSERT INTO user (username, password, email, role) VALUES ('$username','$password','$email','$role')");
    if (!$masukkan) {
        echo "
        <script>
        alert ('Unfortunately data failed to be registered..');
        </script>
        ";
    } else {
        echo "
        <script>
        alert ('Great, data registered');
        </script>
        ";
    }
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
</head>
<body>
    <section class="container">
        <div class="login-area">
            <h1> REGISTER </h1>
            <form action="" method="post">
            <input name="username" type="text" placeholder="Username"> <br>
            <input name="password" type="password" placeholder="Password"> <br>
            <input name="email" type="email" placeholder="Email"> <br>
            <label for="role">Role:</label>
            <select name="role" id="role"><br>
                <option value="Admin">Admin</option>
                <option value="Petugas">Petugas</option>
                <option value="User">User</option>
            </select>  <br>
            
            <button name="submit" type="submit">Register</button>
            </form>
            <h5>Already have an account? <a href="index.php">Login</a></h5>
        </div>
    </section>
</body>
<footer>
    <div class="footer">
        <h7>Copyright Irene. Made with &hearts;</h7>
    </div>
</footer>
</html>