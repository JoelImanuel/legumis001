<?php
include "../config/connection.php";

if (isset($_POST["login"])) {
  $admin = $_POST["admin"];
  $password = $_POST["password"];

  $query = mysqli_query($con, "SELECT * FROM tbadmin WHERE admin='$admin' AND password='$password'");

  $cek = mysqli_num_rows($query);

  if ($cek > 0) {
    $_SESSION["admin"] = $admin;
    $_SESSION["login"] = true;
    header("Location: index.php");
  } else {
    echo "<script>alert('Login gagal! Username atau password salah.');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login Admin</title>
</head>

<body>
  <div class="halaman_login">
    <form method="post">
      <h1>Tempat Login Admin</h1>
      <label for="username">namafff admin:</label>
      <input type="text" name="admin" id="adminLogin" placeholder="Nama admin" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" name="password" id="adminPassword" placeholder="Password" required>
      <br>
      <button type="submit" name="login">Login</button>
      <div>
        <h4>Belum punya akun?<a href="register.php" style="text-decoration: underline; margin-left: 10px;">Klik untuk daftar</a></h4>
      </div>
    </form>

  </div>

</body>

</html>