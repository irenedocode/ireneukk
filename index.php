<?php
session_start();
include "koneksi.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ambilrole = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
    $hitung = mysqli_num_rows($ambilrole);

    if ($hitung == 1) {
        $role = mysqli_fetch_assoc($ambilrole);
        
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role['role'];

            switch ($role['role']) {
                case 'Admin':
                    header("Location: admin/index.php");
                    exit();
                case 'Petugas':
                    header("Location: petugas/index.php");
                    exit();
                case 'User':
                    header("Location: user/index.php");
                    exit();
                default:
                    echo "<script>
                          alert('Role not recognized.');
                          window.location.href = 'index.php';
                          </script>";
            
        }
    } else {
        echo "<script>
              alert('Username not found.');
              window.location.href = 'index.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="container">
        <div class="text-area">
            <h2>Welcome aboard to the website!</h2>
        </div>
        <div class="login-area">
            <h1>LOGIN</h1>
            <form method="post">
                <input name="username" type="text" placeholder="Username" required> <br>
                <input name="password" type="password" placeholder="Password" required>
                <button name="submit" type="submit">Login</button>
            </form>
            <h5>Don't have an account? <a href="register.php">Register</a></h5>
        </div>
    </section>
</body>
<?php include "elements/footer.php"; ?>
</html>
