<?php
session_start();

if(isset($_POST['yes'])){
    session_destroy();
    header("location:login.html");

    echo "<script>
    alert('Anda berhasil logout');
    </script>";
    exit;

}
if(isset($_POST['no'])){
    header("location:dashboard.html");
    exit;
}
   


?>
 


