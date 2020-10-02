<?php
include_once '../db.php';
session_start();
$uname = mysqli_real_escape_string($db, $_POST['uname']);
$pass = mysqli_real_escape_string($db, $_POST['pass']);

$sql = "SELECT uname,pass FROM user WHERE uname = '$uname';";
$data = mysqli_query($db, $sql);
$check = mysqli_num_rows($data);

if ($check > 0) {
  $get = mysqli_fetch_assoc($data);

  if($uname === $get['uname'] && password_verify($pass, $get['pass']))
  {
<<<<<<< HEAD
    $_SESSION['uname'] = $get['uname'];
      header("location: test.php");
=======
    $_SESSION['name'] = $get['uname'];
      header("location: ../index.php");
>>>>>>> 0fd8f0d1a6df4c79f4503539a0fc23eaf24245b8
  }
  else {
    header("location: login.php");
  }
}
else {
    header("location: login.php");
}
?>
