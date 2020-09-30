<?php
  include_once 'db.php';

  $id = mysqli_real_escape_string($db, $_POST['bup_id']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $mail = mysqli_real_escape_string($db, $_POST['email']);
  $pass = "123";
  $dept = mysqli_real_escape_string($db, $_POST['dept']);
  $room = mysqli_real_escape_string($db, $_POST['room']);

  //encrypt password
  $de_pass = password_hash($pass, PASSWORD_DEFAULT);

  $sql = "INSERT INTO member(bup_id,name,email,dept,room,pass) VALUES ('$id', '$name', '$mail','$dept','$room','$de_pass');";
  mysqli_query($db, $sql);

  header("location: reg.php?user_added_successfully.");
?>
