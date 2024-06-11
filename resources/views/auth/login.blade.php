<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <style>
    /* Mengatur gaya dasar */
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background: linear-gradient(120deg, #79ace6, #91bded);
    }

    /* Mengatur kontainer form login */
    .login-container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 350px;
    }

    /* Mengatur elemen form */
    .login-form h1 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .login-button {
      width: 100%;
      padding: 10px;
      background-color: #007aff;
      border: none;
      border-radius: 5px;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login-button:hover {
      background-color: #005bb5;
    }

    .login-container {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <form method="post" class="login-form">
      <h1>Admin Login</h1>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" id="emailLogin" placeholder="Nama Email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="adminPassword" placeholder="Password" required>
      </div>
      <button type="submit" name="login" class="login-button">Login</button>
    </form>
  </div>
</body>

</html>
