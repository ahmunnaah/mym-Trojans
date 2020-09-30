<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>ADD USER</title>
<link rel="stylesheet" href="reg_form.css" type="text/css">
  </head>
  <body>

    <form action="reg_handler.php" method="post">
      <div class="container">
      <h1 align="center">Register</h1>
      <label><b>BUP ID No: </b></label>
      <input type="text" name="bup_id" required>

      <label><b>Name: </b></label>
      <input type="text" name="name" required>

      <label><b>E-mail: </b></label>
      <input type="text" name="email" required>

      <label><b>Department: </b></label>
      <input type="text" name="dept" required>

      <label><b>Room No: </b></label>
      <input type="text" name="room" required>
      <div style="margin-left:40%;width:90%">
        <button class="registerbtn" type="submit" name="submit"><b>Add user</b></button>
      </div>
      <div style="margin-left:48%;margin-top:2%;width:90%">
            <a href="admin.php" class="registerbtn" style="align:right"><b>Home</b></a>
      </div>
    </form>
  </div>
  </body>
</html>
