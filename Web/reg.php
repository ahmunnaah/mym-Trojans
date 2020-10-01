<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>ADD USER</title>
<link rel="stylesheet" href="reg.css" type="text/css">
  </head>
  <body>

    <form action="reg_handler.php" method="post">
      <div class="container">
      <h1 align="center">Register</h1>
      <label><b>User Name: </b></label>
      <input type="text" name="uname" required>

      <label><b>E-mail: </b></label>
      <input type="text" name="email" required>

      <label><b>Password: </b></label>
      <input type="text" name="pass" required>

      <div style="margin-left:40%;width:90%">
        <button class="registerbtn" type="submit" name="submit"><b>Add user</b></button>
      </div>

    </form>
  </div>
  </body>
</html>
