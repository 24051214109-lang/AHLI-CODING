<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = md5($_POST['password']); // Enkripsi password

    $sql = "INSERT INTO dblogin (username, password) VALUES ('$user', '$pass')";
    
    if (mysqli_query($conn, $sql)) {
        header("location:login.html");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>