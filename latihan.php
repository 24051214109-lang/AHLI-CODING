<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "dbhabib";

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    die("Koneksi gagal: ". mysqli_connect_error());
}
else
?>

<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM dbhabib
 where username = '$username' AND password = '$password'");

 if(mysqli_num_rows($query) > 0){
    $data = mysqli_fetch_assoc($query);

   $_SESSION['login'] = true;
   $_SESSION['username'] = $data['username'];
   $_SESSION['password'] = $data['password'];
 
  header("location:homepage.php");
  exit;

 }else

 echo "<script>
 alert('Password atau username salah');
 window.location.href = 'login.html';
 </script>"
?>


<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['login'])){
    header("location:login.html");
    exit;
}
?>

<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $sql = "INSERT INTO dbhabib (username,password) VALUES ('$user','$pass')";

     if(mysqli_query($conn, $sql)){
     header("location:login.html");
    }

else { echo "eror: ". mysqli_error($conn);
    
     }
}

?>

<?php
session_start();
session_destroy();
?>

<script >
    alert('anda berhasil logout!');
    location.href = "login.html";
</script>
