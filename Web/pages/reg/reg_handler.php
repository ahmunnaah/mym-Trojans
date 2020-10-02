<?php
  include_once 'db.php';


  $uname = mysqli_real_escape_string($db, $_POST['uname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);

  //encrypt password
  $en_pass = password_hash($pass, PASSWORD_DEFAULT);

  $sql = "INSERT INTO user(uname,email,pass) VALUES ('$uname', '$email','$en_pass');";
  mysqli_query($db, $sql);

  header("location: reg.php?user_added_successfully.");
?>
