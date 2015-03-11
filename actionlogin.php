<?php

include('config.php');

session_start();

$user=$_POST['Username'];
$pass=$_POST['Password'];

if (empty($user) && empty($pass)) {
    //kalau username dan password kosong
    header('location:login.php?error=1');
    break;
} else if (empty($user)) {
    //kalau username saja yang kosong
    header('location:login.php?error=2');
    break;
} else if (empty($pass)) {
    //kalau password saja yang kosong
    //redirect ke halaman index
    header('location:login.php?error=3');
    break;
}

$sql="Select * from login where Username='" . $user . "' and Password='". $pass ."'";
$result = mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);

if ($num == 1) {
    //kalau username dan password sudah terdaftar di database
    header('location:table.php');
} else {
    //kalau username ataupun password tidak terdaftar di database
    header('location:login.php?error=4');
}

?>
