<!-- cek apakah tombol sabmit sudah di tekan -->
<?php
if (isset($_POST["submit"])) {
    // cek username & password

    if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
        // Jika benar , redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah maka tampilkan error
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Login, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Halaman Login</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font:caption;">Username atau password salah !</p>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button type="submit" name="submit">login</button>
    </form>
</body>

</html>