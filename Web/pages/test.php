<?php
include_once 'db.php';
$sql = "SELECT planet_name FROM planet;";

$res = mysqli_query($db,$sql);
$check = mysqli_num_rows($res);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>test</title>
        <style>
        div {
          background-color: lightblue;
        }
        </style>
    </head>
    <body>
        <center><h2> Planets </h2></center>

              <?php
                if ($check > 0) {
                  while($row = mysqli_fetch_assoc($res)) {?>
                    <div style="margin-top: 1%; margin-left:35%; margin-right:35%">
                      <font size=5cn>
                    <?php
                    echo "Planet's names: " . $row["planet_name"];
                    ?>
                      </font>
                  </div>
                    <?php
                  }
                } ?>


                <form action="planets.php" method="post">
                  <input type="text" name="planet_name">
                  <button type="submit">submit</button>

                </form>
              <br>

    </body>
</html>
