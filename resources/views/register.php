<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Daftar Admin</title>
</head>

<body>
  <div class="halaman_login">
  <form method="post" action="register_proses.php">
    <h1>Tempat Daftar Admin</h1>
    <label for="nama">Nama admin:</label>
    <input type="text" name="admin" id="adminRegister" placeholder="Nama admin baru" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" placeholder="Password" required>
    <br>
    <br>
    <button type="submit">Daftar</button>
    <div>
        <h4>Udah punya akun?<a href="login.php" style="text-decoration: underline; margin-left: 10px;">Klik untuk masuk</a></h4>
      </div>
  </form>

  </div>
  
</body>

</html>