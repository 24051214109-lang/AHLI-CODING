
<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM dblogin 
    WHERE username='$username' AND password='$password'");

if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_assoc($query);

    $_SESSION['login'] = true;
    $_SESSION['username'] = $data['username'];
    $_SESSION['nama'] = $data['nama'];

    header("Location: homepage.php");
    exit;
} else {
    echo "<script>
                alert('Username atau Password salah!');
                window.location.href = 'login.html';
              </script>";
}
?>













?>