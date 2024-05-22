<?php
include "../config/connection.php";

$admin = $_POST["admin"];
$password = $_POST["password"];  /*isset($_POST["admin"]) ? $_POST["admin"] : null; */

$query = mysqli_query($con, "INSERT INTO tbadmin (admin, password) VALUES ('$admin', '$password')");

if ($query) {
  echo "<script>alert('Pendaftaran berhasil! Silahkan login.');</script>";
  header("Location: login.php");
} else {
  echo "<script>alert('Pendaftaran gagal!');</script>";
}
