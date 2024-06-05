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
      <label for="username">email:</label>
      <input type="text" name="email" id="emailLogin" placeholder="Nama email" required>
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