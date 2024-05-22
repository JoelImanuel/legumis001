<?php

include "config/connection.php";
$_SESSION['loggedin'] = true;

$admin = $_POST['admin'];
$password = $_POST['password'];
$sql = "select * from tbadmin where admin ='$admin' and password='$password'";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);
$result = mysqli_fetch_array($query);

if($num==0){
    echo "Login Failed";
}else{
    ?>
        <script>
            location.href = 'index.php';
        </script>
    <?php
}
?>